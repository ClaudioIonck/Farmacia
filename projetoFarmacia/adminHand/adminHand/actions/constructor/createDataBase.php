<?php

    date_default_timezone_set('America/Sao_Paulo');


    if(isset($_POST['submit'])) {

        include_once('../connection/connection.php');

        $clientName                 = str_replace(" ", "_",$_POST['dataBaseClientName']);
        $clientGradePlan            = str_replace(" ", "",$_POST['planGrade']);
        $collaboratorResponsible    = str_replace(" ", "",$_POST['collaboratorResponsible']);
        $thisActionRealized         = "create_DataBase_Tables";
        $logDate                    = date('Y-m-d H:i:s');
        $clientDataBasePassword     = "0000";

        $generatedClientID = rand(2,9999999);


        $clientDataBaseName = "client_" . $clientName . "_" . $generatedClientID;

        echo "<br>" . $clientDataBaseName;


        //CREATE BANCO DE DADOS
            
            $queryCreateSchema = "CREATE SCHEMA IF NOT EXISTS $clientDataBaseName" or die ("<br> Erro ao criar o banco de dados $clientDataBaseName" . $link->connection_error);

            $resultCreateSchema = $link->query($queryCreateSchema);

            if($link->query($queryCreateSchema) == TRUE){

                echo "<p style='color: green;'> Banco de dados criado com sucesso </p> <br>";
            
            }else{

                echo "<p style='color: red;'> Banco de dados não foi criado </p> <br>";

            } 


        //CONNECT DATA BASE RECEM CRIADA


            $dbHostNew = "localhost";
            $dbUserNameNew = "root";
            $dbPasswordNew = "";
            

            try{

                $linkNewDB = new PDO("mysql:host=$dbHostNew; dbname=" .$clientDataBaseName, $dbUserNameNew, $dbPasswordNew);
                
                echo "Conexão com admin efetuada com sucesso. <b> Host: $dbHostNew | Admin: $dbUserNameNew | DataBase: $clientDataBaseName </b><hr>";
        
            }catch(PDOException $err){
        
                echo "<br> Erro: Conexão não sucedida. Tipo do erro: " . $err->getMessage();
        
            }

        //CREATE TABLES

            include('createClientTables.php');

        //INSERT STATUS ACCOUNT
        
            include('insertStatusAccountCreated.php');

        //ADMIN LOG
            
            include('createDataBaseLog.php');

        //TABLE MOVEMENT

            include('createMovementTable.php');
            
        
        //END

    }

    header('Location: ../../register/registerBank/index.php');
    

    

?>