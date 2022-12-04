<?php

    date_default_timezone_set('America/Sao_Paulo'); 

    if($loginSuccessful) {

        include_once('../../../connection/connection.php');


        $searchedCPFClean1 = str_replace(".", "", $_POST['cpfInsert']);
        $searchedCPFClean2 = str_replace("-", "", $searchedCPFClean1);
        

        $result_cpf_count = "SELECT * FROM patientinfo WHERE userCPF = $searchedCPFClean2";

        $resultSeacrhCount = $connectionDataBase->prepare($result_cpf_count);
        
        $resultSeacrhCount->execute();

        $count = $resultSeacrhCount->fetchColumn();

        if($count != null){
            
            if($count > 0){

                $result_cpf = "SELECT * FROM patientinfo WHERE userCPF = $searchedCPFClean2";
            
                $resultSeacrh = $connectionDataBase->prepare($result_cpf);
                $resultRequest = $resultSeacrh->execute();

                while($userRow = $resultSeacrh->fetch(PDO::FETCH_ASSOC)){
        
                    $firstName = $userRow['userFirstName'];
                    $secondName = $userRow['userSecondName'];
                    $userCPF = $userRow['userCPF'];
                    $userGenre = $userRow['userGenre'];
                    $userNationality = $userRow['userNationality'];

                    if($userGenre == "M"){

                        $userGenre = "Masculino";

                    }else if($userGenre == "F"){

                        $userGenre = "Feminino";

                    }else{

                        $userGenre = "Indefinido";

                    }

                }
            }
        
        }else{

            echo "Nenhum usuário encontrado";
            header('Location: ../searchCPF/patientNotFinded.php');

        }

    };

?>