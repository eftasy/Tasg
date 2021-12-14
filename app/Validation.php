<?php

namespace Imones;

class Validation {
    static public function newCompany($fromData){
        $klaidos = [];

        if(empty($fromData['name'])) {
            $klaidos['name'] = "Reikia uzpildyti pavadinima";
        }
        else if(strlen($fromData['name']) < 3) {
            $klaidos['name'] = "Pavadinimas turi buti ilgesnis nei 3 raides";
        }

        if(empty($fromData['code'])){
            $klaidos['code'] = "Reikia uzpildyti imones koda";
        }

        if(empty($fromData['pvm_code'])){
            $klaidos['pvm_code'] = "Reikia uzpildyti imones Pvm koda";
        }

        if(empty($fromData['address'])){
            $klaidos['address'] = "Uzpildykite imones adresa";
        }

        if(empty($fromData['phone'])){
            $klaidos['phone'] = "Iveskite telefona";
        }
        else if(strlen($fromData['phone']) < 9 || strlen($fromData['phone']) > 12){
            $klaidos['phone'] = "Telefono numeris privalo buti tinkamas";
        }

        if(empty($fromData['email'])){
            $klaidos['email'] = "Suveskite El. Pasta";
        }
        else if(!filter_var($fromData['email'], FILTER_VALIDATE_EMAIL)){
            $klaidos['email'] = "El. pastas privalo buti tinkamas";
        }

        if(empty($fromData['activity'])){
            $klaidos['activity'] = "Uzpildykite veiklos tipa";
        }
        if(empty($fromData['owner'])){
            $klaidos['owner'] = "Iveskite savininka";
        }



        if(!empty($klaidos)) {
            return $klaidos;
        }

        return 'Klaidu nera';
    }
}