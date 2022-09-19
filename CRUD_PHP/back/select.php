<?php

require '../dbconfig.php';

try{
    //PREPARAR A QUERY PARA O BANCO.
    $sttm = $conn -> prepare("SELECT * FROM usuarios");
    //EXECUTA A QUERY PREPARADA NO BANCO.
    $sttm -> execute();
    //ARMAZENA OS VALORES ENCONTRADOS DA QUER ACIMA E TANSFORMA OS DADOS EM UM OBJETO.

    $list = $sttm -> fetchAll(PDO::FETCH_ASSOC);
    $list = json_encode($list);
    echo "$list";
    

}catch(PDOException $ex){
    die($ex -> getMessage);
}

