<?php

    include('../connection/connectionAdmin.php');

    $query_DataBase_Log = "INSERT INTO createdatabaselog(generatedClientID, clientName, 
                            planGrade, collaboratorResponsible, 
                            dataBaseName, actionRealized, logDate, clientDataBasePassword)

                            VALUES('$generatedClientID', '$clientName',
                            '$clientGradePlan', '$collaboratorResponsible',
                            '$clientDataBaseName', '$thisActionRealized', '$logDate', '$clientDataBasePassword')";


    $insert_Table_DataBase_Log = $link->prepare($query_DataBase_Log);

    $insert_Table_DataBase_Log->execute();


?>