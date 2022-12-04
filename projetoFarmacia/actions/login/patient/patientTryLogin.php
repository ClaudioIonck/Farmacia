<?php 

    session_start();

    date_default_timezone_set('America/Sao_Paulo');

    require('../../../connection/connection.php');
    require('ClassUsuario.php');


    


    if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])){

        $userObject = new Usuario();

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        
        //echo "<br>";
        //echo $senha;

        if($userObject->login($usuario, $senha) == true){
            
            if(isset($_SESSION['idUsuario'])){

                header('Location: ../../../view/patient/listSolicitationsRecived/listSolicitationsRecived.php');

            }else{

                header('Location: ../../../view/patient/login/patientLogin.php');

            }

        }else{

            header('Location: ../../../view/patient/login/patientLogin.php');

        }

    }else{

        header('Location: ../../../view/patient/login/patientLogin.php');

    }



    /* $idUser = $dado['idLoginUser'];
                $systemLevelAccess = $dado['systemLevelAccess'];
                $patientLevelAccess = $dado['patientLevelAccess'];

                echo "<div style='background-color: yellow; border: 2px solid black; color: black; position: absolute; padding: 20px; width: 300px; height: 150px;'";

                    
                    echo "<p> <strong>User: </strong>" . $idUser . "</p>";
                    echo "<p> <strong>User: </strong>" . $usuario . "</p>";
                    echo "<p> <strong>System Access: </strong>" . $systemLevelAccess . "</p>"; 
                    echo "<p> <strong>Patient Level Access: </strong>" . $patientLevelAccess . "</p>";


                echo "</div>";

                */

?>


