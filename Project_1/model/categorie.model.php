<?php
function readCategories() : array
{
    $user = "root";
    $pass = "root";
    $db = "PHP_DB";
    try {
        $dbh = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
        $req = "SELECT * FROM Categories";
        return $dbh->query($req)->fetchAll(PDO::FETCH_ASSOC);
        echo "Connected successfully";
    }catch (PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        return [];
    }

}