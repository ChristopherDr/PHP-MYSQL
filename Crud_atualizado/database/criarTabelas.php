<?php

require_once './dbconfig.php';

try{
    $sttm = $conn -> prepare("CREATE TABLE usuarios(
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome varchar(50), 
        cpf varchar(50) UNIQUE)");
    $sttm -> execute();

} catch(PDOException $ep) {
    die($ep -> getMessage());
}
