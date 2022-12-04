<?php 

//CRIAR UM FORM PARA DIRECIONAR O BANCO DE DADOS DO CLIENTE

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'uniclini_admin_log');

    try{

        $link = new PDO('mysql:host=' . HOST. '; dbname=' . DBNAME . ';', USER, PASS);


        echo "<p style='color: green;'>Conexão com admin efetuada com sucesso. <b> Host: " . HOST . " | Admin: " . USER . " | DataBase: " . DBNAME ." </b></p><hr>";

    }catch(PDOException $err){

        echo "<p style='color: red;'>Erro: Conexão não sucedida. Tipo do erro: " . $err->getMessage() . "</p>";

    }


?>