<?php

/**
 * A utilização de herança permite que uma classe filha herde as caracteristicas da classe pai,
 * assim podendo varias classes filho herdarem de uma unica classe pai, cada uma sendo implementada com suas 
 * caracteristicas individuais e as herdadas, tambem podendo alterar essas caracteristicas herdadas.
 */
class animal
{
    public $name;

    public function sleep()
    {

        return $this->name . " is sleeping!!!";
    }
}

class Dog extends animal
{
    public function sleep()
    {
        $this->name . "teste";
    }
}

class Bird extends animal
{
}

$dog = new Dog();
$dog->name = "ted";

$bird = new Bird();
$bird->name = "Birdinho";



print $dog->sleep();

print $bird->sleep();
