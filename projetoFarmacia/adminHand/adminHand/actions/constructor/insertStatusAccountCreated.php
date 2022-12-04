<?php

    $statusAccount = "Active";
    $actionType = "Database created";

    $query_StatusAccount = "INSERT INTO statusaccount(collaboratorResponsible, clientID, 
                        clientName, logDate, 
                        statusAccount, actionType)

                    VALUES('$collaboratorResponsible', '$generatedClientID',
                    '$clientDataBaseName', '$logDate',
                    '$statusAccount', '$actionType')";


    $insert_Table_StatusAccount = $linkNewDB->prepare($query_StatusAccount);

    $insert_Table_StatusAccount->execute();

?>





