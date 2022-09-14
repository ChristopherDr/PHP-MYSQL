<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
// VARIAVEIS
    # LOGIN
        $user = "root"; 
        $pass = "123456"; 
    # ENTRADA
        // $nome = $_POST['nome'];
        // $email = $_POST['email'];
        // $sexo = $_POST['sexo'];
        // $data_nas = $_POST['data_nasc'];
// CONECTAR
    $conn = new PDO('mysql:host=192.168.3.65;dbname=std_database', $user, $pass);