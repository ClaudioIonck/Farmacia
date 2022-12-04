<?php

    date_default_timezone_set('America/Sao_Paulo');

    if(!empty($_GET['idRequest'])) {

        include_once('../../../../connection/connection.php');

        echo $idRequest = $_GET['idRequest'];

        $selectInfoTables = "SELECT * FROM permissionsrequest";

        $selectInfoTables = $connectionDataBase->prepare($selectInfoTables);
        $selectInfoTables->execute();

        echo $returnedAt = date('Y-m-d H:i:s');

        
        while($rowInfo = $selectInfoTables->fetch(PDO::FETCH_ASSOC)){

            echo "<br><br>";

            echo "Request:";
            echo $rowInfo['idRequest'];

            echo "<br>";
            echo "User:";
            echo $rowInfo['idUserWhoCalled'];

            echo "<br>";
            echo "Status:";
            echo $rowInfo['statusRequest'];


        }


        $refreshStatusRequestQuery = "UPDATE permissionsrequest SET statusRequest = 0 WHERE idRequest = $idRequest"; 

            $refreshStatusRequest = $connectionDataBase->prepare($refreshStatusRequestQuery);
            $refreshStatusRequest->execute();
            

            $refreshStatusRequestQuery = "UPDATE permissionsrequest SET returnedAr = '$returnedAt' WHERE idRequest = $idRequest"; 

            $refreshStatusRequest = $connectionDataBase->prepare($refreshStatusRequestQuery);
            $refreshStatusRequest->execute();

            $refreshStatusRequestQuery = "UPDATE permissionsrequest SET statusComplement = 'Recusado' WHERE idRequest = $idRequest"; 

            $refreshStatusRequest = $connectionDataBase->prepare($refreshStatusRequestQuery);
            $refreshStatusRequest->execute();

            header('Location: ../listSolicitationsRecived.php');



    }else{

        echo "Não foi possível encontrar a solicitação <br>";
        
        echo"<button type='submit'>Voltar</button> >";

    }

?>