<?php
try{
    $pdo = new PDO("mysql:dbname=projeto_loginunico;localhost=host","root","");

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}