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
       echo "Erro com o acesso ao banco de dados: " . $e->getMessage();
    }catch(Exception $e){
        echo "Erro Genérico: " . $e->getMessage();
    }

    // if($pdo){
    //     echo 'Conexão bem Sucedida!';
    // }else{
    //     echo 'Não foi possível conectar com o banco de dados!';
    // }




?>