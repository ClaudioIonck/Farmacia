<?php

    date_default_timezone_set('America/Sao_Paulo');

    include_once('../../../connection/connection.php');

        $selectInfoTables = "SELECT * FROM permissionsrequest ORDER BY idRequest DESC";

        $selectInfoTables = $connectionDataBase->prepare($selectInfoTables);
        $selectInfoTables->execute();

        while($rowInfo = $selectInfoTables->fetch(PDO::FETCH_ASSOC)){

            echo "<tr>";

                echo "<td>" . $rowInfo['typeRequest'] . "</td>";
                echo "<td>" . $rowInfo['idUserWhoCalled'] . "</td>";
                echo "<td>" . $rowInfo['statusRequest'] . "</td>";
                echo "<td>" . $rowInfo['createdAt'] . "</td>";                                          
            
            echo "</tr>";

        }


?>
