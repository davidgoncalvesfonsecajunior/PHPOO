<?php
/**
 * A encapsulação é o fato de utilizar a logica dentro da classe e fora dela somente utilizar os 
 * metodos para executar os projetos, sendo a classe responsavel pelos metodos e regras,
 * assim protegendo sua logica interna das ações externas.
 */

class BankAccount{
    private $balance;


    public function __construct(){
        $this->balance = 30;

    }

    public function deposit($money){
        $this->balance += $money;
    }

    public function withdraw($money){
        if ($money > $this->balance) 
            return print "don't have money";
        
            $this->balance -= $money;
        
    }

    public function printBalance(){
        print "You have ".$this->balance . " real in your account.";
    }
}

$bankAccount = new BankAccount();
$bankAccount->deposit(10);
$bankAccount->deposit(20);
$bankAccount->withdraw(70);
print "\n" ;
$bankAccount->printBalance();
