<?php
function read(): array
{

    $user = "root";
    $pass = "root";
    $db = "PHP_DB";
    try {
        $dbh = new PDO("mysql:host=localhost:3306;dbname=$db", $user, $pass);
        $req = "SELECT * FROM Articles a, Categories c, Types t WHERE a.categorie_id = c.id AND a.type_id = t.id";
        return $dbh->query($req)->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        return [];
    }
}
