<?php

require_once 'Animal.php';
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Cow.php';

$dog = new Dog("Max");
$cat = new Cat("Rocky");
$cow = new Cow("Vow");

$dog->makeSound();
$cat->makeSound();
$cow->makeSound();
