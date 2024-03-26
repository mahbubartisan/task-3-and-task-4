<?php
class Cat extends Animal
{
    public function makeSound()
    {
        echo "{$this->name} says Meow!\n";
    }
}
