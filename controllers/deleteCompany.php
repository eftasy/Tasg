<?php

use Imones\Request;
use Imones\Database;
use Imones\Imone;

$connection = Database::connect();
$company = new Imone($connection);
$id = intval(basename(Request::uri()));

$company->deleteCompany($id);