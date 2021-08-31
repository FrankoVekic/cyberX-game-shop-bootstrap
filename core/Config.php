<?php 

class Config {

    public static function connect()
    {
    
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbName = "testing";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbName",$username,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

        }catch(PDOException $e)
        {
            echo "Connection failed" . $e->getMessage();
        }
        return $conn;
    }
}
        $conn = Config::connect();
        $stmt = $conn->prepare('SELECT * FROM games WHERE id > 0 ORDER BY id');
        $stmt->execute();
        $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $games;
    

