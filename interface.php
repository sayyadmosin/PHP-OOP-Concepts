<html decoctype="html">

<h1>Interface Example</h1>

<?php

// interface is a class with only abstract methods
// interface is a contract between class and interface
// interface is a blueprint of class
// interface is a collection of abstract methods
// interface is a keyword


interface Banktransaction{
    public function deposit(float $amount):bool;
    public function withdraw(float $amount):bool;

}



class kotak implements Banktransaction{ // class implements interface

    public function deposit(float $amount):bool{

        echo "Amount $amount is deposited in kotak bank";
        return true;
    }


    public function withdraw(float $amount):bool{

        echo "Amount $amount is withdrawn from kotak bank";
        return true;
    }
}


$kotakobj = new kotak();
echo "Transasction Details for kotak: <br>";
$kotakobj->deposit(1000.00); // Amount 1000 is deposited in kotak bank and object will return true
?>

</html>

