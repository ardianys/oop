<?php

class Person {
  
  var string $name;
  var int $age;
  var string $address;
  var string $country;

  const JUMLAH_KAKI = 2;

  function __construct(
    string $name = '',
    int $age = 0,
    string $address = '',
    string $country = "Indonesia"
  ) {
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
    $this->country = $country;
  }

  function tahunLahir() {
    // $this adalah keyword yang merepresentasikan object yang memanggil method ini
    return 2024 - $this->age;
  }

  function jumlahSandal() {
    // return Person::JUMLAH_KAKI / 2;
    return self::JUMLAH_KAKI / 2;
  }
}