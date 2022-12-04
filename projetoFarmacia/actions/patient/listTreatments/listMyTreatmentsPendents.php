<?php

    date_default_timezone_set('America/Sao_Paulo');

    $idPatient = 1;

    include_once('../../../connection/connection.php');

        $selectInfoTables = "SELECT * FROM treatments
        WHERE idPatient = $userId AND statusTreatment = 4
        ORDER BY idTreatment DESC";

        $selectInfoTables = $connectionDataBase->prepare($selectInfoTables);
        $selectInfoTables->execute();

        while($rowInfo = $selectInfoTables->fetch(PDO::FETCH_ASSOC)){

            $idTreatment = $rowInfo['idTreatment'];

            echo "<tr>";

                if($rowInfo['statusTreatment'] == 3){

                    $statusRequest = "<td style='color: orange;'> Cancelado </td>";

                }else if($rowInfo['statusTreatment'] == 2){

                    $statusRequest = "<td style='color: green;'> Encerrado </td>";

                }else if($rowInfo['statusTreatment'] == 1){

                    $statusRequest = "<td style='color: #550CF2;'> Em andamento </td>";

                }else if($rowInfo['statusTreatment'] == 0){

                    $statusRequest = "<td style='color: red;'> Recusado </td>";

                }else if($rowInfo['statusTreatment'] == 4){

                    $statusRequest = "<td style='color: orange;'> Pendente </td>";
                    
                }else{

                    $statusRequest = "Status não reconhecido";

                }


                echo "<td>" . $rowInfo['treatmentName'] . "</td>";
                echo "<td>" . $rowInfo['clinicResponsible'] . "</td>"; 
                echo "<td>" . $rowInfo['professionalResponsible'] . "</td>"; 
                echo "<td>" . $rowInfo['treatmentStart'] . "</td>"; 
                echo "<td>" . $rowInfo['treatmentEnd'] . "</td>"; 

                echo $statusRequest;

                echo "<td>  
                
                <a href='../../../actions/patient/listTreatments/action/acceptTreatment.php?idTreatment=$rowInfo[idTreatment]'>
                    <button type='button' class='btn btn-outline-secondary'>

                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-square' viewBox='0 0 16 16'>
                            <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'></path>
                            <path d='M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z'></path>
                        </svg>
                    
                    </button>
                </a>
            
                </td>"; 

                echo "<td>  
                   
                <a href='../../../actions/patient/listTreatments/action/recuseTreatment.php?idTreatment=$rowInfo[idTreatment]'>
                    <button type='button' class='btn btn-outline-secondary'>
                        
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-square' viewBox='0 0 16 16'>
                            <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'></path>
                            <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'></path>
                        </svg>

                    </button>
                </a>
            
                </td>";                 
                                                         
            
            echo "</tr>";

        }


        

        


        


?>
