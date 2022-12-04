<?php


    date_default_timezone_set('America/Sao_Paulo');

    if($loginSuccessful){
        
        include_once('../../../connection/connection.php');
        
        $selectInfoTables = "SELECT * FROM permissionsrequest 
        JOIN professionalinfo ON professionalinfo.idLoginProfessional = permissionsrequest.idUserWhoCalls
        WHERE idUserWhoCalled = $userId ORDER BY idRequest DESC";

        /*$selectInfoTables = "SELECT * FROM permissionsrequest 
        WHERE idUserWhoCalled = $userId ORDER BY idRequest DESC"; */

        $selectInfoTables = $connectionDataBase->prepare($selectInfoTables);
        $selectInfoTables->execute();

        while($rowInfo = $selectInfoTables->fetch(PDO::FETCH_ASSOC)){

            $requestId = $rowInfo['idRequest'];


            if($rowInfo['statusRequest'] == 1 || $rowInfo['statusRequest'] == 0){


            }else{

                if($rowInfo['statusRequest'] == 3){

                    $statusRequest = "<td style='color: orange;'> Permissão temporária </td>";
    
                }else if($rowInfo['statusRequest'] == 2){
    
                    $statusRequest = "<td style='color: #D9D902;'> Não confirmado </td>";
    
                }else if($rowInfo['statusRequest'] == 1){
    
                    $statusRequest = "<td style='color: green;'> Permissão permanente </td>";
    
                }else{
    
                    $statusRequest = "Status não reconhecido";
    
                }
    
                echo "<tr>";
    
                    echo "<td>" . $rowInfo['typeRequest'] . "</td>";
                    echo "<td>" . $rowInfo['professionalFirstName'] . "</td>";
                    echo $statusRequest;
                    echo "<td>" . $rowInfo['createdAt'] . "</td>";   
                    
                    echo "<td>  
                    
                    <a href='action/acceptRequest.php?idRequest=$rowInfo[idRequest]'>
                        <button class='btn btn-outline-secondary'>
    
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-square' viewBox='0 0 16 16'>
                                <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'></path>
                                <path d='M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z'></path>
                            </svg>
                        
                        </button>
                    </a>
                  
                    </td>"; 
    
                    echo "<td>  
                    
                    <a href='action/recuseRequest.php?idRequest=$rowInfo[idRequest]'>
                        <button class='btn btn-outline-secondary'>
    
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-square' viewBox='0 0 16 16'>
                                <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
                                <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                            
                        </button>
                    </a>
                    
                    </td>";
    
                echo "</tr>";

            }

        }

    }else{

        echo "Algo de errado aconteceu ao buscar solicitações de acesso aos tratamentos";

    }



?>
