<?php

interface Shape {
  public function calculateArea();
}

class Circle implements Shape{
  private $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  public function calculateArea() {
    return 3.14 * $this->radius * $this->radius;
  }
}

class Rectangle implements Shape {
  private $length;
  private $width;

  public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
  }

  public function calculateArea() {
    return $this->length * $this->width;
  }
}

?>