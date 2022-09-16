<?php
ini_set("display_errors", 1);
   // error_reporting(E_ALL);

require '../dbconfig.php';
$id = (int) $_GET['id'];

$json = file_get_contents('php://input');
$data = json_decode($json, true); 

try{
    $sttm = $conn->prepare("UPDATE usuarios SET nome = ? , cpf = ? where id = ? ");
    $sttm->execute([$data['nome'], $data['cpf'], $id]);
    $total = $stmt->rowCount();
    
    header('Content-Type: applicaton/json');

    if ($total > 0) {
        echo json_encode(['message' => "dados alterados com sucesso!"]);
    } else {
        echo json_encode(['error' => "registro nao encontrado"]);
    }

}catch(PDOException $r){
    die( $r -> getMessage());
}