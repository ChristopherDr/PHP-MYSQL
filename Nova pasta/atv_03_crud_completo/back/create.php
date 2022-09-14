<?php
// CONEXAO
    require_once('conn.php');   
// ENTRADA
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $data_nas = $_POST['data_nasc'];
// PREPARAR




























    # INSERIR DADOS
        try{
            $stmt = $conn->prepare("INSERT INTO alunos (nome, email, sexo, data_nas) 
                VALUES (:nome, :email, :sexo, :data_nas)");
            $stmt->execute(array('nome'=> $nome,'email'=> $email,'sexo'=> $sexo,'data_nas'=> $data_nas));
        }catch(Exception $ex){
            die($ex->getMessage());
        }
// RELOCALIZAR 
    header('Location: ../front/index.html');