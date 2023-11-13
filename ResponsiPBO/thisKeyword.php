<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$arff = new Person("Arief", "Bengkulu");

// tambahkan value nama di object
$arff->nama = "Arief";

// panggil function sayHelloNull dengan parameter
$arff->sayHelloNull("Prasetyo");

// buat object dari kelas person
$prass = new Person("Prass", "Jogja");

// tambahkan value nama di object
$prass->nama = "Sumbul";

// panggil function sayHelloNull dengan parameter null
$prass->sayHelloNull(null);
