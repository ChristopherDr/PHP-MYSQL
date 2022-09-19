<?php

require "../database/dbconfig.php";



try{
    $sttm = $conn -> prepare("SELECT * FROM usuarios");
    $sttm -> execute();
    //echo "correto";
    $list = $sttm -> fetchAll(PDO::FETCH_ASSOC);
    $list = json_encode($list);
    echo "$list";

}catch(PDOException $err){
    die(json_encode($err -> getMessage()));
}


