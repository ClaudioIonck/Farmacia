<?php

    date_default_timezone_set('America/Sao_Paulo');

    include_once('../../../connection/connection.php');

        $selectInfoTables = "SELECT * FROM permissionsrequest 
        JOIN patientinfo 
        ON patientinfo.idLoginUser = permissionsrequest.idUserWhoCalled 
        WHERE idUserWhoCalls = $idLoginProfessional 
        ORDER BY idRequest DESC";

        $selectInfoTables = $connectionDataBase->prepare($selectInfoTables);
        $selectInfoTables->execute();

        while($rowInfo = $selectInfoTables->fetch(PDO::FETCH_ASSOC)){


            if($rowInfo['statusRequest'] != 2){



            }else{

                echo "<tr>";

                    if($rowInfo['statusRequest'] == 3){

                        $statusRequest = "<td style='color: orange;'> Aceito temporariamente </td>";

                    }else if($rowInfo['statusRequest'] == 2){

                        $statusRequest = "<td style='color: #D9D902;'> Não respondido </td>";

                    }else if($rowInfo['statusRequest'] == 1){

                        $statusRequest = "<td style='color: green;'> Aceito permanentemente </td>";

                    }else if($rowInfo['statusRequest'] == 0){

                        $statusRequest = "<td style='color: red;'> Permissão negada </td>";

                    }else{

                        $statusRequest = "Status não reconhecido";

                    }


                    echo "<td>" . $rowInfo['typeRequest'] . "</td>";
                    echo "<td>" . $rowInfo['userFirstName'] . " " . $rowInfo['userSecondName'] . "</td>"; 
                    echo $statusRequest;
                    echo "<td>" . $rowInfo['createdAt'] . "</td>";                                          
                
                echo "</tr>";

            }

        }


?>
