<?php

use Imones\Database;
use Imones\Imone;
use Imones\Request;

$connection = Database::connect();
$companies = new Imone($connection);
$id = intval(basename(Request::uri()));
$company = $companies->viewCompany($id);

require 'view/pages/viewCompany.view.php';