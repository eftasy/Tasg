<?php

use Imones\Database;
use Imones\Imone;
use Imones\Validation;

if(isset($_POST['send'])) {
    $connection = Database::connect();
    $companies = new Imone($connection);
    $validation = Validation::newCompany($_POST);
    if($validation != 'Klaidu nera') {
        foreach ($validation as $klaida) {
            echo $klaida . '<br>';
        }
    } else {
        $companies->createCompany($_POST);
    }
} else {
    require 'view/pages/newCompany.view.php';
}