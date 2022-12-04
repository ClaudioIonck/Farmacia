<?php 


    if($loginSuccessful){

        include_once('../../../connection/connection.php');

        $result_myProfile = "SELECT * FROM professionalinfo WHERE idLoginProfessional = $userId";
            
        $resultSeacrh_myProfile = $connectionDataBase->prepare($result_myProfile);
        $resultSeacrh_myProfile->execute();

        while($userRow = $resultSeacrh_myProfile->fetch(PDO::FETCH_ASSOC)){

            $firstName = $userRow['professionalFirstName'];
            $secondName = $userRow['professionalSecondName'];
            $bornDate = $userRow['professionalFirstName'];
            $userGenre = $userRow['professionalGenre'];

            $userName = $userRow['professionalUserName'];

            $userEmail = $userRow['professionalEmail'];
            $userPassword = null;
            $userNumberDDD = $userRow['ddd1'];
            $userNumberPhone = $userRow['phone1'];

            $userNationality = $userRow['professionalNationality']; 
            $userState = $userRow['professionalUF']; 
            $userCity = $userRow['professionalCity'];

            $kingActuating = "Médico Registrado";
            $typeActuacting = "Neurologista";
            $identificationType = $userRow['professionalIdentificationType'];
            $identificationCode = $userRow['professionalIdentificationCode'];




            $userCPF = $userRow['professionalCPF'];
            
            

            if($userGenre == "M"){

                $userGenre = "Masculino";

            }else{

                $userGenre = "Feminino";

            }

        }
        
    }else{

        echo "Permissão negada";

    };

    



?>