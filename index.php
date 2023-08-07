<?php
require("./Classes/Person.php");
require("./Classes/Student.php");
require("./Classes/BankAccount.php");
require("./Classes/Shape.php");
require("./Classes/Composition.php");


// Exercise 1: Creating a Class and Objects
echo "<div><strong>Exercise 1</strong></div>";

$person_obj_1 = new \Person("Sirwan Hemn", 27);
$person_obj_1->showDetails();

echo "<br>";

$person_obj_2 = new \Person("Prushka Sarbast", 24);
$person_obj_2->showDetails();

echo "<hr>";

// Exercise 2: Inheritance
echo "<div><strong>Exercise 2</strong></div>";

$student_obj_1 = new \Student(1212, $person_obj_1);
$student_obj_1->studentDetails();

$student_obj_2 = new \Student(4545, $person_obj_2);
$student_obj_2->studentDetails();

echo "<hr>";

// Exercise 3: Encapsulation
echo "<div><strong>Exercise 3</strong></div>";

$bankAccount_obj_1 = new \BankAccount();
$bankAccount_obj_1->setOwnerName($person_obj_1->getName());
$bankAccount_obj_1->setBalance(183.64);

echo "<br><strong>Owner Name: </strong>" . $bankAccount_obj_1->getOwnerName() . "<br><strong>Balance: $</strong>" . $bankAccount_obj_1->getBalance() . "<br>";

$bankAccount_obj_2 = new \BankAccount();
$bankAccount_obj_2->setOwnerName($person_obj_2->getName());
$bankAccount_obj_2->setBalance(24);

echo "<br><strong>Owner Name: </strong>" . $bankAccount_obj_2->getOwnerName() . "<br><strong>Balance: $</strong>" . $bankAccount_obj_2->getBalance() . "<br>";

echo "<hr>";

// Exercise 4: Polymorphism and Interfaces
echo "<div><strong>Exercise 4</strong></div>";

$circle_obj_1 = new \Circle(2.7);
echo "<br><strong>Circle Area: </strong>" . number_format($circle_obj_1->calculateArea(), 2) . "cm²<br>";

$rectangle_obj_1 = new \Rectangle(2, 8);
echo "<strong>Rectangle Area: </strong>" . number_format($rectangle_obj_1->calculateArea(), 2) . "cm²<br>";

echo "<hr>";

// Exercise 5: Composition
echo "<div><strong>Exercise 5</strong></div>";

$Address_obj_1 = new \Address("Kani", "Erbil", "Kurdistan");
$Address_obj_2 = new \Address("Shorsh", "Duhok", "Kurdistan");

$user_obj_1 = new \User($person_obj_1->getName(), "sirwan@gmail.com", $Address_obj_1 );
$user_obj_1->userDetails();

$user_obj_2 = new \User($person_obj_2->getName(), "prushka@gmail.com", $Address_obj_2 );
$user_obj_2->userDetails();

?>

<!-- Exercise 5: Composition
Create a class named Address with properties like street, city, and country. Then, create a User class with properties like name, email, and an instance of the Address class. Demonstrate composition by creating a user with an address. -->

<!-- Exercise 4: Polymorphism and Interfaces
Create an interface named Shape with a method calculateArea(). Implement this interface in classes like Circle and Rectangle. Each class should provide its own implementation of the calculateArea() method. Create instances of these shapes and demonstrate polymorphism by calling the calculateArea() method on each. -->

<!-- Exercise 3: Encapsulation
Create a class named BankAccount with properties balance and ownerName. Implement methods to deposit and withdraw money from the account. Ensure that the balance is not accessed directly but only through these methods to maintain encapsulation. -->

<!-- Exercise 2: Inheritance
Extend the Person class from the previous exercise to create a new class named Student. Add a new property studentId to the Student class and a method to display student details, including the inherited properties from the Person class. -->

<!-- Exercise 1: Creating a Class and Objects
Create a class named Person with properties name and age. 
Implement a constructor to initialize these properties. 
Create two instances of the Person class and set their properties. 
Finally, create a method within the class to display the person's details. -->
