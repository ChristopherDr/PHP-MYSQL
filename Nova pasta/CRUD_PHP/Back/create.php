<?php 
 
 require '../dbconfig.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

try{
    $sttm = $conn -> prepare("INSERT INTO usuarios (nome, cpf) VALUES (:usuario_nome, :usuario_cpf)");

    $sttm -> BindParam(":usuario_nome", $nome);
    $sttm -> BindParam(":usuario_cpf", $cpf);

    $sttm -> execute();

}catch (PDOException $ex){
    die($ex -> getMessage());
}
