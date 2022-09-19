<?php

ini_set("display_errors", 1);
    error_reporting(E_ALL);

require '../dbconfig.php';

$id = $_GET['id'];

//$json = file_get_contents('../fron/edit.html');
//$data = json_decode($json, true);
//die($id)

try{
    $sttm = $conn->prepare("UPDATE usuarios SET nome = ? , cpf = ? where id = ? ");

    $sttm->execute();

    header('Content-Type: applicaton/json');
    echo json_encode(['message' => "dados alterados com sucesso!"]);

}catch(PDOException $r){
    die( $r -> getMessage());
}