<?php

    date_default_timezone_set('America/Sao_Paulo');

    include_once('../../../connection/connection.php');

    $selectInfoTables = "SELECT * FROM permissionsrequest 
    JOIN professionalinfo ON professionalinfo.idProfessional = permissionsrequest.idUserWhoCalls"; 

    $selectInfoTables = $connectionDataBase->prepare($selectInfoTables);
    $selectInfoTables->execute();

    while($rowInfo = $selectInfoTables->fetch(PDO::FETCH_ASSOC)){


        if($rowInfo['statusRequest'] == 3){

            $statusRequest = "<td style='color: orange;'> Permissão temporária </td>";

        }else if($rowInfo['statusRequest'] == 2){

            $statusRequest = "<td style='color: #D9D902;'> Não confirmado </td>";

        }else if($rowInfo['statusRequest'] == 1){

            $statusRequest = "<td style='color: green;'> Permissão permanente </td>";

        }else if($rowInfo['statusRequest'] == 0){

            $statusRequest = "<td style='color: red;'> Permissão negada </td>";

        }else{

            $statusRequest = "Status não reconhecido";

        }

        echo "<tr>";

            echo "<td>" . $rowInfo['typeRequest'] . "</td>";
            echo "<td>" . $rowInfo['professionalFirstName'] . "</td>";
            echo $statusRequest;
            echo "<td>" . $rowInfo['createdAt'] . "</td>";    
            
            echo "<td>  
                
                <button type='button' class='btn btn-outline-secondary'>

                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-exclamation-square' viewBox='0 0 16 16'>
                        <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
                        <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/>
                    </svg>
                  
                </button>
              
                </td>"; 

                echo "<td>  
                
                <button type='button' class='btn btn-outline-secondary'>

                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-exclamation-square' viewBox='0 0 16 16'>
                        <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
                        <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/>
                    </svg>
                    
                </button>
                
                </td>";

        
        echo "</tr>";

    }


?>
