<?php

abstract class abstracttest {

    abstract public function test();

    public function test1()
    {
        echo "Hi you have called test 1 method from abstract class";

    }



}


class demosbtract extends abstracttest
{
   public function test()
   {
       echo "this is test method <br/>";
   }

}

$demo = new demosbtract();
$demo->test();
$demo->test1();



