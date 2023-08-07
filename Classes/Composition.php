<?php

class Address {
  private $street;
  private $city;
  private $country;

  public function __construct(string $street, string $city, string $country) {
    $this->street = $street;
    $this->city = $city;
    $this->country = $country;    
  }

  public function getAddress() {
    return $this->street . ", " . $this->city . ", " . $this->country;
  }
}

class User {
  private $name;
  private $email;
  private $address_obj;

  public function __construct(string $name, string $email, $address_obj) {
    $this->name = $name;
    $this->email = $email;
    $this->address_obj = $address_obj;    
  }

  public function userDetails() {
    echo "<br><strong>Name: </strong>" . $this->name . "<br>
        <strong>Email: </strong>" . $this->email . "<br>
        <strong>Address: </strong>" . $this->address_obj->getAddress() . "<br>";
  }

}

?>