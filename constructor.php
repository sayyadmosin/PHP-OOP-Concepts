<?php
class constructortest{
    public function __construct() //this is constructor
    {
        echo "connected <br/>";
    }

    public function __destruct() // this is destructor
    {
        echo "disconnected <br/>";
    }


public function test()
{
 echo "this is normal test method <br/>";
}



}

// creating objects here

$classobj = new constructortest();

$classobj->test();


