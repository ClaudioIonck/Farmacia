<?php

    date_default_timezone_set('America/Sao_Paulo');

    include_once('../../../connection/connection.php');

        $idLogado = 1;

        $selectInfoTables = "SELECT DISTINCT userFirstName, userSecondName, userEmail, bornDate FROM treatments 
        JOIN patientinfo 
        ON patientinfo.idUser = treatments.idPatient 
        WHERE idProfessional = $idLogado"; 


        $selectInfoTables = $connectionDataBase->prepare($selectInfoTables);
        $selectInfoTables->execute();

        while($rowInfo = $selectInfoTables->fetch(PDO::FETCH_ASSOC)){

            echo "<tr>";

                echo "<td>" . $rowInfo['userFirstName'] . "</td>";
                echo "<td>" . $rowInfo['userSecondName'] . "</td>";
                echo "<td>" . $rowInfo['userEmail'] . "</td>";
                echo "<td>" . $rowInfo['bornDate'] . "</td>";                                          
            
            echo "</tr>";

        }


?>
