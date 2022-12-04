<?php 

//CRIAR UM FORM PARA DIRECIONAR O BANCO DE DADOS DO CLIENTE

    $dbHost = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "";

    try{

        $link = new PDO("mysql:host=$dbHost; dbname=" .$dbName, $dbUserName, $dbPassword);
        
        echo "<p style='color: green;'>Conexão com servidor efetuada com sucesso. <b> Host: $dbHost | Admin: $dbUserName | DataBase: $dbName </b></p><hr>";

    }catch(PDOException $err){

        echo "<p style='color: red;'>Erro: Conexão não sucedida. Tipo do erro: " . $err->getMessage() . "</p>";

    }


?>