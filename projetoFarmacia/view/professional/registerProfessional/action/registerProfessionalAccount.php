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

        $insertLoginUserSql = "INSERT INTO professionallogin(professionalUserName, professionalPassword, systemLevelAccess, professionalLevelAccess, logDate)

        VALUES('$userName', '$password', '$systemLevel', '$accessLevel', '$logDate')";

        $insertLoginUserExecute = $connectionDataBase->prepare($insertLoginUserSql);
        $insertLoginUserExecute->execute();


    //-----Select User Created-----/

        $isEquals = false;

        $selectUserCreatedQuery = "SELECT idLoginProfessional, professionalUserName FROM professionallogin ";  

        $selectUserCreated = $connectionDataBase->prepare($selectUserCreatedQuery);
        $selectUserCreated->execute();

        while($rowInfo = $selectUserCreated->fetch(PDO::FETCH_ASSOC)){
            
            $getUserName = $rowInfo['professionalUserName']; 
            
            if($getUserName == $userName){
                

                //Captura id do usuário que acabei de criar
                $internUserId = $rowInfo['idLoginProfessional'];
                
                $isEquals = true;

            
            }else{


                $isEquals = false;
                
            
            }
            

        }


    //-----Insert Info-----/

        if($isEquals){

            $firstName = str_replace(" ", "", $_POST['nome']); 
            $secondName = str_replace(" ", "", $_POST['sobrenome']); 
            $crm = str_replace(" ", "", $_POST['crm']); 
            $bornDate = str_replace(" ", "", $_POST['bornDate']); 
            $ddd1 = str_replace(" ", "", $_POST['ddd1']); 
            $phone1 = str_replace(" ", "", $_POST['phone1']); 
            $email = str_replace(" ", "", $_POST['email']); 


            

            $insertInfoUserSql = "INSERT INTO professionalinfo(idLoginProfessional, professionalFirstName, professionalSecondName, professionalCPF, bornDate, professionalUserName, ddd1, phone1, professionalEmail, createdAt) 

            VALUES('$internUserId', '$firstName', '$secondName','$cpf', '$bornDate', '$userName', '$ddd1', '$phone1', '$email', '$logDate')";

            $insertInfoUserExecute = $connectionDataBase->prepare($insertInfoUserSql);
            $insertInfoUserExecute->execute();


        }else{

            echo "isEquals: " . $isEquals;

        }
    
        

    //header('Location: ../registerProfessional.php');


?>