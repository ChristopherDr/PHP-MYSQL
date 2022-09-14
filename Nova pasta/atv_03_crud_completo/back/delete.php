<?php
// CONEXAO
    require_once('conn.php');
//  PEGAR ID
    $id = $_GET["id"];
//  SELEÇÃO
    try{
        $stmt = $conn->prepare("DELETE FROM alunos WHERE id={$id}");
        $stmt->execute();
    }catch(Exception $ex){
        die($ex->getMessage());
    } 