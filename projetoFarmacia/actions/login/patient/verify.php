<?php 

    date_default_timezone_set('America/Sao_Paulo'); 
    
    require('../../../connection/connection.php');

    if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){

        require_once('ClassUsuario.php');

        $objectUser = new Usuario();

        $idUsuario = $_SESSION['idUsuario'];

        //$listLogged = $objectUser->logged($_SESSION['idUsuario']);

        $sql = "SELECT * FROM patientlogin WHERE idLoginUser = '$idUsuario'";
        $sql = $connectionDataBase->prepare($sql);


        //$sql->bindValue(":idUser", $idUsuario);

        $sql->execute();

        $rowInfo = $sql->fetch();


        $loggedUserName = $rowInfo['patientUserName'];
        $systemLevelAccess = $rowInfo['systemLevelAccess'];    

        

    }else{

        header('Location: ../../../view/patient/login/patientLogin.php');

    }


?>