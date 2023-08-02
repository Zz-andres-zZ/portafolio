<?php
class Database
{
    private static $hostname = "mysql:host=localhost;dbname=";
    private static $username = "";
    private static $password = "";
    protected static $conn;
    public function getConnection() {
        try {
            self::$conn = new PDO(self::$hostname, self::$username, self::$password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conn;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
