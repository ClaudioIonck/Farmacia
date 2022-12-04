<?php date_default_timezone_set('America/Sao_Paulo'); //error_reporting(0); ?>

<?php 


    session_start();

    $loginSuccessful = false;

    require('../../../actions/login/professional/verify.php');

    if(isset($_SESSION['idProfessional']) && !empty($_SESSION['idProfessional'])){

        $loginSuccessful = true;
        
        include_once('../../../actions/searchCPF/searchCPF.php');


        $professionalId = $_SESSION['idProfessional'];

    }else{

        $loginSuccessful = false;

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
    
    <link rel="stylesheet" href="../../style/stylePattern.css">
    <link rel="stylesheet" href="../../style/styleNavBar.css">
    <link rel="stylesheet" href="../../style/professional/styleListTreatment.css">
    <title>Buscar paciente</title>

</head>
<body>
    
    <!--   nav bar   -->    

    <div class="theNav">

        <ul class="nav nav-pills nav-fill" id="navigator">

            <li class="nav-item">

                <div class="nav-link" id="logo">Logo</div>

            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Início</a>
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

            <a href="../searchCPF/searchCPF.php">
            
                <button type="button" class="btn btn-outline-primary" id="smallButtonSearchCPF" style="transition: 0.3s; background-color: var(--principalColor);color: white; box-shadow: 0.5px 2px 5px 0.5px #621cf8; border: 1px solid white;"> 
                
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

    <!--   nav bar   -->   

    <!--   Conteudo paciente   -->  



    <form action="../../../actions/searchCPF/requestPermission.php" method="POST">

        <div class="mainBg" id="mainBg">

            <div class="main" id="main">



            <!--============================================= TITULO =============================================-->
            <div id="tituloCentral">

                <div class="col-auto" id="titleCPF">

                    <h1> <strong>Tratamentos</strong> </h1>
                
                </div>

            </div>

            <!--============================================= FORMULARIO =============================================-->

            <form>

            <div class="row g-3" id="mainDiv">                     


                <div class="divRemedy">

                    <div class="container" id="remedyListEnvolv"> <!--div center-->

                        <div id="remedyListContent">

                        <div class="row g-3" id="mainDiv"> 


                        <div class="input-group mb-3">



                            <input type="text" class="form-control" placeholder="<?php echo $firstName ?>" aria-label="Username">
                            <input type="text" class="form-control" placeholder="<?php echo $secondName ?>" aria-label="Username">
                            <input type="text" class="form-control" placeholder="<?php echo $userCPF ?>" aria-label="Username">

                            <input type="hidden" id="cpfInsert" name="cpfInsert"  value="<?php echo $userCPF; ?>">

                        </div>

                        <br>

                        <div class="input-group mb-3">

                            <input type="text" class="form-control" placeholder="<?php echo $userGenre ?>" aria-label="Username">
                            <input type="text" class="form-control" placeholder="<?php echo $userNationality ?>" aria-label="Username">

                        </div>

                        <button type="submit" class="btn btn-outline-primary">Solicitar Acesso</button>


                        </div>
                        </div>




                        </div>


                        </div>
                            
                        </div>

                    </div> 

                </div>



            </div>    




















    </form>
            
    <footer>

        <a href="../../../actions/login/professional/professionalLogOut.php">Sair</a>

    </footer>

    <!--   Conteudo paciente   --> 

</body>
</html>