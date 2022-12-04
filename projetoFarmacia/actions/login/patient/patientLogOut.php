<?php

    

    require('../../../connection/connection.php');

    session_start();
    date_default_timezone_set('America/Sao_Paulo'); 
    
    unset($_SESSION['idUsuario']);

    header('Location: ../../../view/patient/login/patientLogin.php');

?>