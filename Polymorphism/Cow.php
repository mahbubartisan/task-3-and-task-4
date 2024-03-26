<?php
class Cow extends Animal
{
    public function makeSound()
    {
        echo "{$this->name} says Moo!\n";
    }
}
