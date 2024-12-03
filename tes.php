<?php

require_once 'data/Person.php';
require_once 'data/Santri.php';

// $person = new Person();
// $person->name = "Syafiq";
// $person->age = 20;
// $person->address = "Solo";
// $person->country = "Indonesia";
$person = new Person('Syafiq', 20, 'Solo', 'Indonesia');
// $person->hafalan = 5;
// $person->hartakekayaan = 5;
var_dump($person);

$person = new Person(name: 'Syafiq', age: 20, address: 'Solo');
// var_dump($person);
$fulan = new Person('Fulan', 30, 'Jakarta', 'Indonesia');
$fulan = new Person(name: 'Fulan', age: 30, address: 'Jakarta');
$fulanah = new Person('Fulanah', 40, 'Bandung', 'Indonesia');
$fulanah = new Person(name: 'Fulanah', age: 40, address: 'Bandung');
// echo "Tahun kelahiran $person->name adalah tahun " . (2024 - $person->age) . PHP_EOL;
// echo "Tahun kelahiran $person->name adalah tahun " . $person->tahunLahir() . PHP_EOL;
// echo "Jumlah kaki $person->name ada " . Person::JUMLAH_KAKI . PHP_EOL;
// echo "$person->name membutuhkan " . $person->jumlahSandal() . " pasang sandal" . PHP_EOL;
// echo "$person->name tinggal di negara " . $person->country . "" . PHP_EOL;

// $fulan = new Person();
// var_dump($fulan);
// $fulan->age = 30;
// echo "Tahun kelahiran $fulan->name adalah tahun " . $fulan->tahunLahir() . " " . PHP_EOL;

// $fulanah = new Person();
// var_dump($fulanah);

$sholih = new Santri('Sholih', 20, 'Solo', 'Indonesia');
$sholih->hafalan = 5;
$sholih->sekolah = 'Pondok Programmer';
var_dump($sholih);