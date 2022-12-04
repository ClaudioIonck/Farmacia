<?php

    date_default_timezone_set('America/Sao_Paulo');

    if(!empty($_GET['idRequest'])) {

        include_once('../../../../connection/connection.php');

        echo $idRequest = $_GET['idRequest'];

        echo "<br>";

        $selectInfoTables = "SELECT * FROM permissionsrequest";

        $selectInfoTables = $connectionDataBase->prepare($selectInfoTables);
        $selectInfoTables->execute();

        echo $returnedAt = date('Y-m-d H:i:s');

        echo "<br>";

        
        while($rowInfo = $selectInfoTables->fetch(PDO::FETCH_ASSOC)){

            echo "<br><br>Id:";
            echo $rowInfo['idRequest'];

            echo "<br>User";
            echo $rowInfo['idUserWhoCalled'];

            echo "<br>Status";
            echo $rowInfo['statusRequest']; 

        }




        $refreshStatusRequestQuery = "UPDATE permissionsrequest SET statusRequest = 1 WHERE idRequest = $idRequest"; 

        $refreshStatusRequest = $connectionDataBase->prepare($refreshStatusRequestQuery);
        $refreshStatusRequest->execute();

        

        $refreshReturnedAtQuery = "UPDATE permissionsrequest SET returnedAt = '$returnedAt' WHERE idRequest = $idRequest"; 

        $refreshReturnedAt = $connectionDataBase->prepare($refreshReturnedAtQuery);
        $refreshReturnedAt->execute();


        $refreshStatusComplementQuery = "UPDATE permissionsrequest SET statusComplement = 'Aceito' WHERE idRequest = $idRequest"; 

        $refreshStatusComplement = $connectionDataBase->prepare($refreshStatusComplementQuery);
        $refreshStatusComplement->execute();


        header('Location: ../listSolicitationsRecived.php');


    
    }else{

        echo "Não foi possível encontrar a solicitação <br>";
        
        echo"<button type='submit'>Voltar</button> >";

    }


?>