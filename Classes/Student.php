<?php

class Student extends \Person {
  private $studentId;
  private $personObj;

  public function __construct(int $studentId, $personObj) {
    $this->studentId = $studentId;
    $this->personObj = $personObj;
  }

  public function studentDetails() {
  echo "<br><strong>Id: </strong>" . $this->studentId . "<br>
      <strong>Name: </strong>" . $this->personObj->getName() . "<br>
      <strong>Age: </strong>" . $this->personObj->getAge() . "<br>";
  }
}

?>