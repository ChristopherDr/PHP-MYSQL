<?php

require '../dbconfig.php';

$id = (int) $_GET['id'];

try{
    //PREPARAR A QUERY PARA O BANCO.
    $sttm = $conn -> prepare("SELECT * FROM usuarios WHERE id = ?");
    //EXECUTA A QUERY PREPARADA NO BANCO.
    $sttm -> execute([$id]);
    //ARMAZENA OS VALORES ENCONTRADOS DA QUER ACIMA E TANSFORMA OS DADOS EM UM OBJETO.

    $item = $sttm -> fetch(PDO::FETCH_ASSOC);
    $json = json_encode($item);
    echo $json;

}catch(PDOException $ex){
    die(json_encode(['error'=>$ex -> getMessage()]));
}

