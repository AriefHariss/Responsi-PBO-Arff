<?php

require_once "data/programmer.php";

$company = new Company();
$company->programmer = new Programmer("Arief");
var_dump($company);

$company->programmer = new BackendProgrammer("Arief");
var_dump($company);

$company->programmer = new FrontendProgrammer("Arief");
var_dump($company);

sayHelloProgrammer(new Programmer("Arief Hariss"));
sayHelloProgrammer(new BackendProgrammer("Arief Hariss"));
sayHelloProgrammer(new FrontendProgrammer("Arief Hariss"));
