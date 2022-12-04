<?php 

    date_default_timezone_set('America/Sao_Paulo');

    $dbHost = 'localhost';
    $dbUserName = 'root';
    $dbPassword = 'CHP8xxt3@p55ap::DATAx';
    $dbName = 'testephp';
    
    try{

        $connection = new PDO("mysql:host=$dbHost; dbname=" .$dbName, $dbUserName, $dbPassword);

        echo "Conexao efetuada com sucesso. <br><hr>";

    }catch(PDOException $err){

        echo "Erro: Conexão não sucedida. Tipo do erro: " . $err->getMessage();

    }
    
?>