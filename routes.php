<?php

$router->define([
    '/' => 'controllers/home.php',
    '/all' => 'controllers/allCompanies.php',
    '/imone' => 'controllers/viewCompany.php',
    '/delete-company' => 'controllers/deleteCompany.php',
    '/new-company' => 'controllers/newCompany.php',
    '404' => 'controllers/404.php',
    '/edit-company' => 'controllers/editCompany.php'
]);