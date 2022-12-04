<?php 

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $loginSuccessful = false;

    require('../../../actions/login/patient/verify.php');

    if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){

        $loginSuccessful = true;

        $userId = $_SESSION['idUsuario'];


    }else{

        $loginSuccessful = false;
        header('Location: ../login/patientLogin.php');

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <!-- CSS only -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../../style/stylePattern.css">
    <link rel="stylesheet" href="../../style/styleNavBar.css">
    <link rel="stylesheet" href="../../style/styleListSolicitations.css">
    
    
    <title>Solicitações recebidas</title>


</head>
<body>

    <div class="theNav">

        <ul class="nav nav-pills nav-fill" id="navigator">

            <li class="nav-item">

                <div class="nav-link" id="logo">Logo</div>

            </li>

            <li class="nav-item">
            <a class="nav-link"  aria-current="page" href="#">Início</a>
            </li>
    
            <li class="nav-item">
            <a class="nav-link" href="../listTreatments/listTreatments.php">Tratamentos</a>
            </li>
    
            <li class="nav-item">
            <a class="nav-link" href="../listPatients/listPatients.php">Médicos</a>
            </li>
    
            <li class="nav-item">
            <a class="nav-link" id="nav-link-active" href="listSolicitationsRecived.php">Solicitações</a>
            </li>

            <a href="../searchCPF/searchCPF.php">
            
                <button type="button" class="btn btn-outline-primary" id="smallButtonSearchCPF"> 
                
                    <strong>Alarmes</strong> 
                
                </button>
            
            </a>

            <li class="nav-item">
                <a class="nav-link" id="showUserName"> <strong> <?php echo $loggedUserName; ?> </strong> </a>
            </li>

            <li class="nav-item-end">

                <a href="../patientProfile/patientProfile.htm">

                    <svg xmlns="http://www.w3.org/2000/svg" id="iconUser" class="bi bi-person-square" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                    </svg>

                </a>
                
            
            </li>
    
        </ul>  

    </div>

    
    
        
    <div class="mainBg" id="mainBg">

        <div class="main" id="main">


<!--============================================= TITULO =============================================-->


            <div id="tituloCentral">

                <div class="col-auto" id="titleCPF">

                    <h1> <strong>Solicitações recebidas</strong> </h1>
                
                </div>

            </div>
            

<!--============================================= FORMULARIO =============================================-->
            <div class="row g-3" id="mainDiv">                     


                <div class="divRemedy">

                    <div class="container" id="remedyListEnvolv"> <!--div center-->

                        <div id="remedyListContent">

                            <table class="table table-striped table-hover">

                                <thead>

                                    <tr>

                                        <th scope="col">Tipo de solicitação</th>
                                        <th scope="col">Nome do médico</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Recebido em</th>
                                        <th scope="col">Aceitar</th>
                                        <th scope="col">Recusar</th>

                                    </tr>
                                </thead>

                                <tbody>
                        
                                        <?php

                                            if($systemLevelAccess == 3){

                                                include_once('action/listAllRequest.php');

                                            }else if($systemLevelAccess == 0){

                                                include_once('action/listMyRequest.php');

                                            }

                                        
                                        ?>

                                    

                                    </tbody>
                                
                        
                            </table>
                            
                        </div>

                    </div> 

                </div>

                

            </div>


        </div>

    </div>

    <footer>

        <a href="../../../actions/login/patient/patientLogOut.php">Sair</a>

    </footer>



</body>
</html>
