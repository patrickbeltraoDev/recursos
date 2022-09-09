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

    
    //------------------------------- INSERT --------------------------------------

    $res = $pdo->prepare("INSERT INTO tabela (nomeDaColuna) VALUES (:n, :t, :e)");

    $res->bindValue(":n", "valor1"); //esse método aceita valores, ou variáveis e funções e repassar para o valores do INSERT
    $res->bindValue(":n", "valor1"); //esse método aceita valores, ou variáveis e funções e repassar para o valores do INSERT
    $res->bindValue(":n", "valor1"); //esse método aceita valores, ou variáveis e funções e repassar para o valores do INSERT
    $res->execute();


    //--- OU O MÉTODO QUERY

    $pdo->query("INSERT INTO tabela (nomeDaColuna) VALUES ('VALOR1', 'VALOR2')")
    

    //------------------------------- SELECT --------------------------------------

    $res = $pdo->prepare("SELECT * FROM tabela WHERE id = :id");
    $res = bindValue(":id", 4);
    $res = execute();
    $res->fetchAll(PDO::FETCH_ASSOC);
    $arrayResultado = $res;

    foreach($arrayResultado as $key => $value){
        echo $key . ":" . $value;
    }

?>