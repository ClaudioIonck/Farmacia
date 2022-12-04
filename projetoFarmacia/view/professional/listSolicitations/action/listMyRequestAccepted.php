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


            if($rowInfo['statusRequest'] == 1 OR $rowInfo['statusRequest'] == 3){

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
                echo "<td>" . $rowInfo['returnedAt'] . "</td>";    
                
                echo "<td>  
                    
                    <a href='../viewTreatments/listPatientTreatments.php?idUserWhoCalled=$rowInfo[idUserWhoCalled]'>
                        <button class='btn btn-outline-secondary'>
    
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                                <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                                <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                            </svg>
                        
                        </button>
                    </a>
                  
                    </td>";
            
                echo "</tr>";



            }else{

                


            }

            

        }


?>
