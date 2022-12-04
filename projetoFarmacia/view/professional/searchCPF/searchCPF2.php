<?php 

    session_start();

    date_default_timezone_set('America/Sao_Paulo'); //error_reporting(0);

    $loginSuccessful = false;

    require('../../../actions/login/professional/verify.php');

    if(isset($_SESSION['idProfessional']) && !empty($_SESSION['idProfessional'])){

        $loginSuccessful = true;

        $userId = $_SESSION['idProfessional'];

        //include('action/myProfessionalProfile.php');



    }else{

        header('Location: ../login/professionalLogin.php');

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
    
    <link rel="stylesheet" href="../../style/styleSearchCPF.css">
    <link rel="stylesheet" href="../../style/styleNavBar.css">
    
    <title>Buscar paciente</title>

</head>
<body>
    
    
    <div class="theNav">

        <ul class="nav nav-pills nav-fill" id="navigator">

            <li class="nav-item">

                <div class="nav-link" id="logo">Logo</div>

            </li>

            <li class="nav-item">
              <a class="nav-link" id="nav-link" aria-current="page" href="#">Início</a>
            </li>
    
            <li class="nav-item">
              <a class="nav-link" href="../listTreatments/listTreatments.php">Tratamentos</a>
            </li>
    
            <li class="nav-item">
              <a class="nav-link" href="../listPatients/listPatients.php">Pacientes</a>
            </li>
    
            <li class="nav-item">
              <a class="nav-link" href="../listSolicitations/listSolicitations.php">Solicitações</a>
            </li>

            <a href="searchCPF.php">
                
                <button type="button" class="btn btn-outline-primary" id="smallButtonSearchCPFSelected"> 
                
                    <strong>Buscar CPF</strong> 
                
                </button>
            </a>

            <li class="nav-item">
                <a class="nav-link" id="showUserName"> <strong> <?php echo $professionalUserName; ?> </strong> </a>
            </li>

            <li class="nav-item-end">

                <a href="../professionalProfile/professionalProfile.php">

                    <svg xmlns="http://www.w3.org/2000/svg" id="iconUser" class="bi bi-person-square" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                    </svg>

                </a>
                
               
            </li>
    
        </ul>  

    </div>


    <form action="../patientProfile/patientProfile.php" method="POST">

        <div class="mainBg" id="mainBg">

            <div class="main" id="main">
    
                <div id="tituloCentral">
    
                    <div class="col-auto" id="titleCPF">
                        <h1>
                            <strong>O CPF buscado não foi encontrado</strong> 
                        </h1>
                    </div>
    
                </div>
    
                
                <div id="divBusca">
    
                    <div class="row g-3" id="cpfDiv">
                        
                        <div id="cpfInput" class="col-auto">
                            <input type="text" id="cpfInsert" name="cpfInsert"  class="form-control" placeholder="Insira o CPF do paciente que você deseja encontrar...">
                        </div>
    
                        <div id="iconDiv" class="col-auto">
                            
                            <button type="submit" class="btn btn-light mb-3" id="buttonSearch" name="buttonSearch">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" id="iconSearch" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
        
                            </button>
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
    
        </div>

    </form>
            
    <footer>

        <a href="../../../actions/login/professional/professionalLogOut.php">Sair</a>

    </footer>



</body>
</html>