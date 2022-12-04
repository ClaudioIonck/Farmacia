<?php

    date_default_timezone_set('America/Sao_Paulo');


    include_once('../../../../connection/connection.php');

    $userName = str_replace(" ", "", $_POST['usuario']);       
    $password = str_replace(" ", "", $_POST['senha']);  

    $cpf = str_replace(" ", "", $_POST['cpf']);  

    $systemLevel = 0;
    $accessLevel = 0;

    $logDate = date('Y-m-d H:i:s');


    //-----Insert Login-----/

        $insertLoginUserSql = "INSERT INTO patientlogin(patientUserName, patientPassword, systemLevelAccess, patientLevelAccess, logDate)

        VALUES('$userName', '$password', '$systemLevel', '$accessLevel', '$logDate')";

        $insertLoginUserExecute = $connectionDataBase->prepare($insertLoginUserSql);
        $insertLoginUserExecute->execute();


    //-----Select User Created-----/


        $selectUserCreatedQuery = "SELECT idLoginUser, patientUserName FROM patientlogin ";  

        $selectUserCreated = $connectionDataBase->prepare($selectUserCreatedQuery);
        $selectUserCreated->execute();

        while($rowInfo = $selectUserCreated->fetch(PDO::FETCH_ASSOC)){
            
            $getUserName = $rowInfo['patientUserName']; 
            
            if($getUserName == $userName){
                
                echo "<br>" . $internUserId = $rowInfo['idLoginUser'];
            
            }else{
                
            
            }
            

        }


    //-----Insert Info-----/
    
        $firstName = str_replace(" ", "", $_POST['nome']); 
        $secondName = str_replace(" ", "", $_POST['sobrenome']); 

        

        $insertInfoUserSql = "INSERT INTO patientinfo(idLoginUser, userFirstName, userSecondName, userCPF, createdAt)

        VALUES('$internUserId', '$firstName', '$secondName','$cpf', '$logDate')";

        $insertInfoUserExecute = $connectionDataBase->prepare($insertInfoUserSql);
        $insertInfoUserExecute->execute();

    header('Location: ../registerPatient.php');


?>