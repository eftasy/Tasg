<?php

namespace Imones;

use PDO;
use PDOException;

class Imone {
    protected $pdo;
    private $name;
    private $code;
    private $pvm_code;
    private $address;
    private $phone;
    private $email;
    private $activity;
    private $owner;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createCompany($Imone) {
        $this->name = $Imone['name'];
        $this->code = $Imone['code'];
        $this->pvm_code = $Imone['pvm_code'];
        $this->address = $Imone['address'];
        $this->phone = $Imone['phone'];
        $this->email = $Imone['email'];
        $this->activity = $Imone['activity'];
        $this->owner = $Imone['owner'];

        $this->insertCompany();
    }

    public function insertCompany(){
        try {
            $query = "INSERT INTO `imones` (`pavadinimas`, `kodas`, `pvm_kodas`, `adresas`, `telefonas`, `elpastas`, `veikla`, `vadovas`) VALUES (:name, :code, :pvm_code, :address, :phone, :email, :activity, :owner)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindParam(':code', $this->code, PDO::PARAM_STR);
            $stmt->bindParam(':pvm_code', $this->pvm_code, PDO::PARAM_STR);
            $stmt->bindParam(':address', $this->address, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':activity', $this->activity, PDO::PARAM_STR);
            $stmt->bindParam(':owner', $this->owner, PDO::PARAM_STR);

            $stmt->execute();

            header('Location: /');
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }


    public function allCompanies($page){

        $stmt = $this->pdo->prepare('select * from imones limit 6 offset ' . ($page - 1) * 6);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function viewCompany($id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM imones WHERE `id` = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function deleteCompany($id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM imones WHERE `id` = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header('Location:/');
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function searchCompany($searchString) {
        try {
           $search = '%'.$searchString['search'].'%';
            $stmt = $this->pdo->prepare("SELECT * FROM imones WHERE `pavadinimas` LIKE :searchString OR `kodas` LIKE :searchString");
            $stmt->bindValue(":searchString", $search, PDO::PARAM_STR);
            $stmt->execute();
            
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result == []) {
                echo "Rezultatu nerasta";
            } else {
                header('Location:/imone/'.$result['id']);
            }

        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function editCompany($id, $fromData) {
        try {
            $query = "UPDATE `imones` SET `pavadinimas` = :name, `kodas` = :code, `pvm_kodas` = :pvm_code, `adresas` = :address, `telefonas` = :phone, `elpastas` = :email, `veikla` = :activity, `vadovas` = :owner WHERE `id` = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $fromData['name'], PDO::PARAM_STR);
            $stmt->bindParam(':code', $fromData['code'], PDO::PARAM_STR);
            $stmt->bindParam(':pvm_code', $fromData['pvm_code'], PDO::PARAM_STR);
            $stmt->bindParam(':address', $fromData['address'], PDO::PARAM_STR);
            $stmt->bindParam(':phone', $fromData['phone'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $fromData['email'], PDO::PARAM_STR);
            $stmt->bindParam(':activity', $fromData['activity'], PDO::PARAM_STR);
            $stmt->bindParam(':owner', $fromData['owner'], PDO::PARAM_STR);

            $stmt->execute();
            header('Location:/');
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}