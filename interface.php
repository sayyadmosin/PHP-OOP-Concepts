<?php

// interface is a class with only abstract methods
// interface is a contract between class and interface
// interface is a blueprint of class
// interface is a collection of abstract methods
// interface is a keyword


interface Banktransaction{
    public function deposit($amount):string;
    public function withdraw($amount):string;

}



class kotak implements Banktransaction{ // class implements interface

    public function deposit(float $amount):float{

        echo "Amount $amount is deposited in kotak bank";
    }


    public function withdraw(float $amount):float{

        echo "Amount $amount is withdrawn from kotak bank";
    }
}


$kotakobj = new kotak();

$kotakobj->deposit(1000);

