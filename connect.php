<?php
    require "config.php";
    
    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        $dataBase = new PDO($dsn, $user, $password);
        if ($dataBase) {
            echo "Conncté à la base de données avec succès";
        }
    }catch(PDOException $e) {
        echo "Error : ". $e->getMessage();
    }
?>