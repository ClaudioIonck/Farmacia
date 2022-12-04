
<?php

    date_default_timezone_set('America/Sao_Paulo');

    $trigger = true;


    if($trigger) {

        include_once('../../../connection/connection.php');

        $loginUserName = 1212;
        

        $result_permissionsRequest = "SELECT * FROM permissionsrequest WHERE idUserWhoCalled = $loginUserName";

        $resultSeacrh = $connectionDataBase->prepare($result_permissionsRequest);

        $resultSeacrh->execute();
        
        
    };



?>
