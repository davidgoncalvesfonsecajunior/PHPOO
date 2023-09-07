<?php

//public é possivel utilizar tanto dentro como fora da instancia, assim como herança
//protected permite uma utilização local, dentro da classe e em uma possivel classe filha.
//private so pode ser manipulado pela propria classe ou sua instancia

class person{
    public $name;
    private $age = 29;


    public function showName(){
        return $this->name . " Lindão.";
    }

    public function showAge(){
        return $this->age . "Anos de idade.";
    }

}

class Man extends person{
    public function ShowManAge(){
        return $this->showAge();
    }
} 

$david = new person();
$david->name = "David";
//$david->age = 29;
print $david->showName();

$man = new Man();
print $man->ShowManAge();