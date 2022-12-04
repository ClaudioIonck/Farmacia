<?php 

    date_default_timezone_set('America/Sao_Paulo'); 

    $otherDimension = false;
    
    if($otherDimension){


    }else{

        require('../../../connection/connection.php');

    }
    

    if(isset($_SESSION['idProfessional']) && !empty($_SESSION['idProfessional'])){

        require_once('ClassProfessional.php');

        $objectUser = new Professional();

        $idProfessioinal = $_SESSION['idProfessional'];

        //$listLogged = $objectUser->logged($_SESSION['idUsuario']);

        $sql = "SELECT * FROM professionallogin WHERE idLoginProfessional = '$idProfessioinal'";
        $sql = $connectionDataBase->prepare($sql);


        //$sql->bindValue(":idUser", $idUsuario);

        $sql->execute();

        $rowInfo = $sql->fetch();


        $idLoginProfessional = $rowInfo['idLoginProfessional'];
        $professionalUserName = $rowInfo['professionalUserName'];
        $systemLevelAccess = $rowInfo['systemLevelAccess'];    

        

    }else{

        header('Location: ../../../view/professional/login/professionalLogin.php');

    }


?>