<?php

    $sgbd = 'mysql';
    $dbName = 'pci';
    $host = '172.30.200.91:3306';
    $usuario = 'patrick.beltrao';
    $password = 'PCI2022@qualidade#';

    try{
        $pdo = new PDO ("{$sgbd}:dbname={$dbname};host={$host}", "$usuario", "$password");
    }
    catch(PDOException $e) {
        
    }

    // if($pdo){
    //     echo 'Conexão bem Sucedida!';
    // }else{
    //     echo 'Não foi possível conectar com o banco de dados!';
    // }




?>