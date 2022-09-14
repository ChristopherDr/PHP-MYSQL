<?php
// CONEXAO
    require_once('conn.php');
// SELEÇÃO
    try{
        $stmt = $conn->prepare("SELECT * FROM alunos");
        $stmt->execute();
    }catch(Exception $ex){
        die($ex->getMessage());
    }
// EXIBIR OS DADOS
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $data = json_encode($data);
    header("content-type: application/json");
    echo($data);