<?php

    date_default_timezone_set('America/Sao_Paulo');

    if(!empty($_GET['idTreatment'])) {

        include_once('../../../../connection/connection.php');

        echo $idTreatment = $_GET['idTreatment'];

        echo "<br>";

        $selectInfoTables = "SELECT * FROM treatments";

        $selectInfoTables = $connectionDataBase->prepare($selectInfoTables);
        $selectInfoTables->execute();

        echo $returnedAt = date('Y-m-d H:i:s');

        echo "<br>";

        
        while($rowInfo = $selectInfoTables->fetch(PDO::FETCH_ASSOC)){

            echo "<br><br>Id:";
            echo $rowInfo['idTreatment'];

            echo "<br>User";
            echo $rowInfo['idUserWhoCalled'];

            echo "<br>Status";
            echo $rowInfo['statusTreatment']; 

        }




        $refreshStatusRequestQuery = "UPDATE treatments SET statusTreatment = 1 WHERE idTreatment = $idTreatment"; 

        $refreshStatusRequest = $connectionDataBase->prepare($refreshStatusRequestQuery);
        $refreshStatusRequest->execute();



        $refreshStatusRequestPermissionQuery = "UPDATE treatmentpermissionsrequest SET statusRequest = 1 WHERE idTreatment = $idTreatment"; 

        $refreshStatusPermissionRequest = $connectionDataBase->prepare($refreshStatusRequestPermissionQuery);
        $refreshStatusPermissionRequest->execute();
    

        $refreshReturnedAtQuery = "UPDATE treatmentpermissionsrequest SET returnedAr = '$returnedAt' WHERE idTreatment = $idTreatment"; 

        $refreshReturnedAt = $connectionDataBase->prepare($refreshReturnedAtQuery);
        $refreshReturnedAt->execute();


        $refreshStatusComplementQuery = "UPDATE treatmentpermissionsrequest SET statusComplement = 'Aceito' WHERE idTreatment = $idTreatment"; 

        $refreshStatusComplement = $connectionDataBase->prepare($refreshStatusComplementQuery);
        $refreshStatusComplement->execute();


        header('Location: ../../../../view/patient/listTreatments/listTreatmentsPendents.php');
    
    }else{

        echo "Não foi possível encontrar a solicitação <br>";
        
        echo"<button type='submit'>Voltar</button> >";

    }


?>