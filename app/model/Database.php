<?php

class Database
{
    private static $host = "localhost";
    private static $baseD = "test";
    private static $user = "root";
    private static $pass = "";
    protected static $conect;

    public function __construct()
    {
        try {
            self::$conect = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$baseD, self::$user, self::$pass);
            self::$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<div alt='conectado' class='conection'><span class='status'></span></div>";
            return self::$conect;
        } catch (PDOException $e) {
            $response = ['Error' => 'error' . $e->getMessage()];
            echo "<pre>";
            print_r([
                'AQUI EL ERROR' => json_encode($response)
            ]);
            echo "</pre>";
            die();
        }
    }
}
