<?php

    date_default_timezone_set('America/Sao_Paulo'); 

    require('../../../connection/connection.php');

    session_start();
    unset($_SESSION['idProfessional']);

    header('Location: ../../../view/professional/login/professionalLogin.php');

?>