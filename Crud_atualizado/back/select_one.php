<?php

require "../database/dbconfig.php";

$id = $_GET['id'];

try{
    $sttm = $conn -> prepare("SELECT * FROM usuarios WHERE id=?");
    $sttm -> execute();
    //echo "correto";
    $item = $sttm -> fetch(PDO::FETCH_ASSOC);
    $item = json_encode($item);
    echo "$item";

}catch(PDOException $err){
    die(json_encode($err -> getMessage()));
}


