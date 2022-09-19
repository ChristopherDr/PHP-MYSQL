<?php 

$dataBase = "localhost";
$nomeDb = "cadastro";
$user = "root";
$pass = "root";


try{
    //A conexão via PDO é feita através de uma instanciação (new) $var = new PDO(mysql:host="$database"; dbname=$nomeDb, $user, $pass)
$conn = new PDO("mysql:host=$dataBase; dbname=$nomeDb", $user, $pass);
//echo "certo";
}catch(PDOException $err){
    die($err -> getMessage());
}
