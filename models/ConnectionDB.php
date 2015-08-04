<?php

class ConnectionDB
{
    protected static $_instance;
   
    public static function getInstance()
    {
     if (self::$_instance === null) {
         self::$_instance = new self; 
     } 
     return self::$_instance;
    }
    
    public static function connect()
    {
        return mysqli_connect("127.0.0.1", "kirill", "123", "test");
    }

    private  function __construct()
    {

    }

    private function __clone()
    {
        
    }

    private function __wakeup()
    {
        
    }
}