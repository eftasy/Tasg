<?php

use Imones\Database;
use Imones\Imone;
$connection = Database::connect();
$companies = new Imone($connection);

if(isset($_POST['send'])) {
    $companies->searchCompany($_POST);
} else {
require 'view/pages/home.view.php';
}