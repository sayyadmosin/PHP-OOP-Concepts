<?php


class Singleton{


    private static $instance = NULL;


    private function __construct()
    {
        echo "connected <br/>";
    }

    public static function getInstance()
    {
            if(self::$instance==NULL){
                self::$instance=new Static();
            }
            else
            {
                echo "already created <br/>";

            }
            return self::$instance;

    }


}

$obj=Singleton::getInstance();
$obj1=Singleton::getInstance();