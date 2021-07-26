<?php
 class ValuesConfig
{
    public static $host;
    public static $root;
    public static $db;
    public static $pass;
    public static $charset;
    public static function submitConfig() 
    {
        self::$host="localhost";
        self::$root="root";
        self::$db="tiindiko";        
        self::$pass="";
        self::$charset="utf8";

    }
}
