<?php 

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    if(isset($_SESSION['idProfessional']) && !empty($_SESSION['idProfessional'])){

        $loginSuccessful = true;
        
        $professionalId = $_SESSION['idProfessional'];

    }else{

        $trigger = false;
        $loginSuccessful = false;

        header('Location: ../login/professionalLogin.php');

    }

    $trigger = true;


    if($trigger && $loginSuccessful) {

        include_once('../../connection/connection.php');

        $searchedCPFClean1 = str_replace(".", "", $_POST['cpfInsert']);
        $searchedCPFClean2 = str_replace("-", "", $searchedCPFClean1);

        $typeRequest = "Historico Tratamentos";
        $idUserWhoCalls = $professionalId;
        $statusRequest = 2;
        $statusComplement = "Envio realizado";
        $createdAt = date('Y-m-d H:i:s');

        

        //Buscar paciente-------------------------------------------------------------------

            $result_cpf = "SELECT * FROM patientinfo WHERE userCPF = $searchedCPFClean2";

            $resultSeacrh = $connectionDataBase->prepare($result_cpf);

            $resultSeacrh->execute();


            

            while($userRow = $resultSeacrh->fetch(PDO::FETCH_ASSOC)){

                $idUserWhoCalled = $userRow['idLoginUser'];
        
            }


        //Verifica se existe solicitação-------------------------------------------------------------------

            $result_requests = "SELECT * FROM permissionsrequest WHERE idUserWhoCalls = $professionalId";

            $resultSeacrh_requests = $connectionDataBase->prepare($result_requests);

            $resultSeacrh_requests->execute();

            //$countRows = $resultSeacrh_requests->rowCount();


            while($userRow = $resultSeacrh_requests->fetch(PDO::FETCH_ASSOC)){

                $idUserWhoCallsExist = $userRow['idUserWhoCalls'];
                $idUserWhoCalledExist = $userRow['idUserWhoCalled'];

                if($idUserWhoCallsExist == $idUserWhoCalls && $idUserWhoCalledExist == $idUserWhoCalled){

                    $isExistSolicitation = true;


                }else{

                    $isExistSolicitation = false;

                }
        
            }

            if($isExistSolicitation){

                echo "Já existe solicitação para este usuário";

                echo "<a href='../../view/professional/searchCPF/searchCPF.php'>Voltar</a>";

            }else{
           
                //Enviar solicitação-------------------------------------------------------------------

                
                    $query_StatusAccount = "INSERT INTO permissionsrequest(typeRequest, idUserWhoCalls, idUserWhoCalled, statusRequest, statusComplement, createdAt)
                
                    VALUES('$typeRequest', '$idUserWhoCalls', '$idUserWhoCalled', '$statusRequest', '$statusComplement', '$createdAt')";
                
                
                    $insert_Table_StatusAccount = $connectionDataBase->prepare($query_StatusAccount);
                
                    $insert_Table_StatusAccount->execute();

                    header('Location: ../../view/professional/searchCPF/searchCPF.php');


            }

            

            



        
        
    };

    


    



?>