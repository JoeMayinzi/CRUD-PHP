<?php
    require "config.php";
    
    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        $dataBase = new PDO($dsn, $user, $password);
    }catch(PDOException $e) {
        echo "Error : ". $e->getMessage();
    }
?>