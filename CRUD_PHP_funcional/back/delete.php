<?php

require '../dbconfig.php';

$id = $_GET['id'];


try{
    $sttm =$conn->prepare("DELETE FROM usuarios where id=?");
    $sttm->execute([$id]);

    header('Content-Type: applicaton/json');
    echo json_encode(['message' => "registro #{$id} excluido"]);

} catch (PDOException $ex){
        die( $er -> getMessage());
}

