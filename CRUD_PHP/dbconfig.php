<?php


$local = "localhost";
$nameBase = "cadastro";
$user = "root";
$passsword = "root";

$conf = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$conn = new PDO("mysql:host=$local; dbname=$nameBase", $user, $passsword);


try {
    $conn = new PDO("mysql:host=$local; dbname=$nameBase", $user, $passsword);
    //echo "conectado!";

} catch (PDOException $ex){
    die($ex -> getMessage());
} 