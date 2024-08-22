<!-- 1.  hierarchical inheritance with code  -->

<?php
// Base class
// class Animal {
//     protected $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function speak() {
//         return "Animal makes a sound.";
//     }

//     public function getName() {
//         return $this->name;
//     }
// }

// // Derived class 1
// class Dog extends Animal {
//     public function speak() {
//         return "Woof! Woof!";
//     }
// }

// // Derived class 2
// class Cat extends Animal {
//     public function speak() {
//         return "Meow! Meow!";
//     }
// }

// 
// $dog = new Dog("Buddy");
// $cat = new Cat("Whiskers");

// echo $dog->getName() . " says: " . $dog->speak() . "<br />";
// echo $cat->getName() . " says: " . $cat->speak() . "<br />";

// **************************************************************************

// 2. const => access on variable with dataType const
//  and use it in code


// class MathConstants {
//     const PI = 3.14159;
//     const E = 2.71828;

//     public function getPi() {
//         return self::PI;
//     }

//     public function getE() {
//         return self::E;
//     }
// }

// // Usage
// echo "The value of PI is: " . MathConstants::PI . "<br />";
// echo "The value of E is: " . MathConstants::E . "<br />";

// $mathConstants = new MathConstants();
// echo "The value of PI from method: " . $mathConstants->getPi() . "<br />";
// echo "The value of E from method: " . $mathConstants->getE() . "<br />";

// **************************************************************************************

// 3. what is the composition ==>and write  code


// Define a class for Engine
// class Engine {
//     private $type;

//     public function __construct($type) {
//         $this->type = $type;
//     }

//     public function getType() {
//         return $this->type;
//     }
// }

// // Define a class for Car that uses Engine
// class Car {
//     private $engine;

//     public function __construct(Engine $engine) {
//         $this->engine = $engine;
//     }

//     public function getEngineType() {
//         return $this->engine->getType();
//     }
// }

// // Usage
// $engine = new Engine("V8");
// $car = new Car($engine);

// echo "The car has a " . $car->getEngineType() . " engine.";

// ***********************************************************************
// 4.  abstract class  and interface 
// == different between them , with code

// abstract class 

// abstract class Animal {
//     protected $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     abstract public function makeSound();

//     public function getName() {
//         return $this->name;
//     }
// }

// class Dog extends Animal {
//     public function makeSound() {
//         return "Woof!";
//     }
// }

// class Cat extends Animal {
//     public function makeSound() {
//         return "Meow!";
//     }
// }

// // Usage
// $dog = new Dog("Buddy");
// $cat = new Cat("Whiskers");

// echo $dog->getName() . " says: " . $dog->makeSound() . "<br />";
// echo $cat->getName() . " says: " . $cat->makeSound() . "<br />";

// **********************
// interface class

// interface Animal {
//     public function makeSound();
//     public function getName();
// }

// class Dog implements Animal {
//     private $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function makeSound() {
//         return "Woof!";
//     }

//     public function getName() {
//         return $this->name;
//     }
// }

// class Cat implements Animal {
//     private $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function makeSound() {
//         return "Meow!";
//     }

//     public function getName() {
//         return $this->name;
//     }
// }

// // Usage
// $dog = new Dog("Buddy");
// $cat = new Cat("Whiskers");

// echo $dog->getName() . " says: " . $dog->makeSound() . "<br />";
// echo $cat->getName() . " says: " . $cat->makeSound() . "<br />";




?>