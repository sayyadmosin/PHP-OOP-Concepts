<?php
class Singleton{

    private static $instance= NULL;

    private function __construct()
    {

        echo "Construct initiated <br/>";
    }


    public static function getInstance()
    {
            if(self::$instance == NULL)
            {
                self::$instance = new Static();

            }
            else
            {
                echo "Object is already created <br/>";

            }

    }

}

$obj=Singleton::getInstance();
$obj=Singleton::getInstance();

?>