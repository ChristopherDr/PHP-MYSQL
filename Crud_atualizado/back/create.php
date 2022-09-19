<?php 

require "../database/dbconfig.php";


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];


try{
    $sttm = $conn -> prepare("INSERT INTO usuarios (nome, cpf) VALUES (:usuario_nome, :usuario_cpf)");


    $sttm -> BindParam(":usuario_nome", $nome);
    $sttm -> BindParam(":usuario_cpf", $cpf);
    $sttm -> execute();
    //echo"Certo";

}catch(PDOException $err){
    die($err -> getMessage());
}