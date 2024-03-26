<?php
class Dog extends Animal
{
    public function makeSound()
    {
        echo "{$this->name} says Woof!\n";
    }
}
