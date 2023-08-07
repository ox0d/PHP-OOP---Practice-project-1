<?php

class BankAccount {
  private $balance;
  private $ownerName;

  public function setBalance(float $balance) {
    $this->balance = $balance;
  }

  public function getBalance() {
    return number_format($this->balance, 2);
  }

  public function setOwnerName(string $ownerName) {
    $this->ownerName = $ownerName;
  }

  public function getOwnerName() {
    return $this->ownerName;
  }
}

?>