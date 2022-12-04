<?php

    include_once('../connection/connectionAdminMovement.php');

    $dbNameMovement = "uniclini_movement_clients";

    //SystemLog
    $query_CreateTable_ClientMovement  = "CREATE TABLE $clientDataBaseName(

        idAction INT AUTO_INCREMENT PRIMARY KEY,
        clientID INT NOT NULL,
        clientName VARCHAR(45) NOT NULL,
        clientUserID INT NOT NULL,
        clientUserName VARCHAR(45) NOT NULL,
        dataBaseName VARCHAR(85) NOT NULL,
        actionRealized VARCHAR(45) NOT NULL,
        logDate DATETIME(2) NOT NULL

    )" or die("<br> Erro ao criar a tabela systemLog" . $linkMovement->connect_error);

    $create_Table_ClientMovement = $linkMovement->prepare($query_CreateTable_ClientMovement);

    if($create_Table_ClientMovement->execute()){

        echo "<p style='color: green;'>Tabela $clientDataBaseName criada com sucesso </p>";

    }else{

        echo "<p style='color: red;'>Tabela $clientDataBaseName NÃO foi criada com sucesso </p>";

    }

?>