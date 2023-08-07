<?php

class Person {
  private $name;
  private $age;

  public function __construct(string $name, int $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function showDetails() {
    echo "<br><strong>Name: </strong>" . $this->name . "<br><strong>Age: </strong>" . $this->age;
  }

  public function getName() {
    return $this->name;
  }

  public function getAge() {
    return $this->age;
  }
}

?>