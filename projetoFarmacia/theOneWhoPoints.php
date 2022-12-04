<?php


    if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])){



        echo $user = $_POST['usuario'] . "<br>";
        echo $user = $_POST['senha'] . "<br>";


        if(!empty($_POST['typePatient'])){

            $userChoiceTypeProfessional = 0;
            $userChoiceTypePatient = 1;
            $option = "Patient";
            echo $option;

        }else if(!empty($_POST['typeProfessional'])){

            $userChoiceTypeProfessional = 1;
            $userChoiceTypePatient = 0;
            $option = "Professional";
            echo $option;

        }else{

            $userChoiceNotChoice = 0;
            $userChoice = 0;
            $option = "Deu ruim";
            echo $option;

        }

        wait(500);
        
        header('Location: index.php');

/*
        $userChoice = 1;

        if($userChoice){

            include_once('actions/login/professional/professionalTryLogin.php');

        }else if($userChoice == 0){

            include_once('actions/login/patient/patientTryLogin.php');

        }else{

            echo "Error";

        }
*/

    }


?>