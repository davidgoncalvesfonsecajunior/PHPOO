<?php
/** 
 * criação da classe é como a criação de um esqueleto de um objeto,
 * onde você descreve como é o objeto que vc deseja criar e algumas  
 * Ações que este objeto pode executar.
 * 
 */

class Car {

    /**
     * Na classe você tem atributos que são caracteristicas do objeto qeu sera criado ou instanciado.
     */
    public $color;
    public $year;
    public $model;

    /**
     * Metodos magicos construct e destruct
     * o construct pode conter parametros a serem repassados aos atributos internos da classe
     * facilitando ao instanciar um objeto.
     */
    public function __Construct($color, $year, $model)
    {
        $this->color = $color;
        $this->year = $year;
        $this->model = $model;
    }
    /**
    * dentro e uma classe é possivel criar metodos que são como funções que podem ser chamadas no objeto que 
    * for instanciado.
    */
    public function run() 
    {
        return $this->model. " car is running...";
    }

    public function stop() 
    {
        return $this->model. " car has stopped...";
    }

    public function __destruct()
    {
        print "Removing object" . __class__;
    }

}

    /**
    * Ao executar um "new NomeClasse()", você instancia a classe desejada
    * assim criando de fato um obejeto da classe desejada com caracteristicas especificas 
    * 
    * 
    */


$car = new Car("white", 1998, "Uno" );

/**
 * Atraves da notação " -> " é possivel acessar os atributos assim como funções existentes na classe
 */

//$car->color = "white";
//$car->year = 1998;
//$car->model = "Uno";

//print $car->run();
//print $car->stop();


$car2 = new Car("Silver", 2008, "Punto");

//$car2->color = "Silver";
//$car2->year = 2008;
//$car2->model = "Punto";

print $car2->run();
print $car2->stop();

