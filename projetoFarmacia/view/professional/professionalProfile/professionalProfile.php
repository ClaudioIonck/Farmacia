<?php 

    session_start();
    date_default_timezone_set('America/Sao_Paulo'); //error_reporting(0);



    $loginSuccessful = false;

    require('../../../actions/login/professional/verify.php');

    if(isset($_SESSION['idProfessional']) && !empty($_SESSION['idProfessional'])){

        $loginSuccessful = true;

        $userId = $_SESSION['idProfessional'];

        include_once('action/myProfessionalProfile.php');


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    

    <link rel="stylesheet" href="../../style/stylePattern.css">
    <link rel="stylesheet" href="../../style/styleNavBar.css">
    <link rel="stylesheet" href="../../style/styleProfessionalProfile.css">

    
    
    <title>Meu perfil</title>

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
            <a class="nav-link" href="../listPatients/listPatients.php">Pacientes</a>
            </li>
    
            <li class="nav-item">
            <a class="nav-link" href="../listSolicitations/listSolicitations.php">Solicitações</a>
            </li>

            <a href="../searchCPF/searchCPF.php">
            
                <button type="button" class="btn btn-outline-primary" id="smallButtonSearchCPF"> 
                
                    <strong>Buscar CPF</strong> 
                
                </button>
            
            </a>

            <li class="nav-item">
                <a class="nav-link" id="showUserName"> <strong> <?php echo $professionalUserName; ?> </strong> </a>
            </li>

            <li class="nav-item-end">

                <a href="professionalProfile.php">

                    <svg xmlns="http://www.w3.org/2000/svg" id="iconUser" class="bi bi-person-square" viewBox="0 0 16 16" style="box-shadow: 0.5px 2px 5px 0.5px #621cf8;">
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

                    <h1> <strong>Meu perfil</strong> </h1>

                </div>

            </div>

<!--============================================= FORMULARIO =============================================-->

            <form method="POST" action="banco/#.php">
                
                <div class="row g-3" id="mainDiv">     

                    <div class="row g-3">

                        <div class="col-md-4">

                            <label for="professionalFirstName">Nome</label>
                            <input name="professionalFirstName" type="text" class="form-control" id="professionalFirstName" placeholder="<?php echo $firstName; ?>" required>
                        
                        </div>

                        <div class="col-md-4">

                            <label for="professionalSecondName">Sobrenome</label>
                            <input name="professionalSecondName" type="text" class="form-control" id="professionalSecondName" placeholder="<?php echo $secondName; ?>" required>
                        
                        </div>

                        <div class="col-md-2">

                            <label for="bornDate">Nascimento</label>
                            <input type="date" class="form-control" id="bornDate" placeholder="<?php echo $bornDate; ?>" required>
                        
                        </div>

                        <div class="col-md-2">

                            <div>
                                <label for="professionalGenre">Gênero</label>
                                <select class="form-select" id="professionalGenre">
                                    <option selected><?php echo $userGenre; ?></option>
                                    <option value="1">Feminino</option>
                                    <option value="2">Masculino</option>
                                    <option value="3">Neutro</option>
                                    <option value="4">Prefiro não informar</option>
                                </select>
                            </div>
                        
                        </div>

                    </div>

                    <div class="row g-3">

                        <div class="col">
                            <label for="professionalUserName">Nome de usuário</label>
                            <input type="text" class="form-control" id="professionalUserName" placeholder="<?php echo $userName; ?>" required>
                        </div>
                    
                    </div>

                    <div class="row g-3">

                        <div class="col-md-4">
                            <label for="professionalEmail">E-mail</label>
                            <input type="email" class="form-control" id="professionalEmail" placeholder="<?php echo $userEmail; ?>" required>
                        </div>

                        <div class="col-md-5">
                            <label for="professionalPassword">Senha</label>
                            <input type="password" class="form-control" id="professionalPassword" placeholder="<?php echo $userPassword; ?>" required>
                        </div>

                        <div class="col-md-1">
            
                            <label for="ddd1">DDD</label>
                            <input type="text" class="form-control" id="ddd1" placeholder="<?php echo $userNumberDDD; ?>" required>
            
                        </div>

                        <div class="col-md-2"
                        >
                            <label for="phone1">Telefone</label>
                            <input type="text" class="form-control" id="phone1" placeholder="<?php echo $userNumberPhone; ?>" required>
                            
                        </div>

                    </div>


                    <div class="row g-3">
                        
                        <div class="col-md-4">

                            <label for="professionalNationality">Nacionalidade</label>
                            
                            <select class="form-select" id="professionalNationality ">

                                <option selected><?php echo $userNationality; ?></option>

                                <option value="1">Brasileiro</option>
                                <option value="2">Alemão</option>
                                <option value="3">Americano</option>
                                <option value="4">...</option>
                            
                            </select>

                        </div>


                        <div class="col-md-4">
                
                            <label for="professionalUF">UF</label>

                            <select class="form-select" id="professionalUF">

                                <option selected><?php echo $userState; ?></option>

                                <option value="1">Santa Catarina (SC)</option>
                                <option value="2">Paraná (PR)</option>
                                <option value="3">São Paulo (SP)</option>
                                <option value="4">...</option>
                            
                            </select>

                        </div>

                        <div class="col-md-4">

                            <label for="professionalCity">Cidade</label>
                            <input type="text" class="form-control" id="professionalCity" placeholder="<?php echo $userCity; ?>" required>
                        </div>

                    </div>


                    <div class="row g-3">
                        
                        <div class="col-md-3">

                            <label for="professionalLevelAccess">Tipo de atuação</label>

                            <select class="form-select" id="professionalLevelAccess">

                                <option selected><?php echo $kingActuating; ?></option>

                                <option value="1">Médico Autônomo</option>
                                <option value="2">Médico Registrado</option>
                                <option value="3">Enfermeiro Autônomo</option>
                                <option value="4">Enfermeiro Registrado</option>
                                <option value="5">Farmacêutico</option>

                            </select>

                        </div>

                        <div class="col-md-3">
                        
                            <label for="professionalType">Área de atuação</label>

                            <select class="form-select" id="professionalType">
                                <option selected><?php echo $typeActuacting; ?></option>
                            
                                <option value="Neurologista">Neurologista</option>
                                <option value="Pediatra">Pediatra</option>
                                <option value="Dentista">Dentista</option>
                            </select>
                        
                        </div>

                        <div class="col-md-3">
                            <label for="professionalIdentificationType">Sigla de identificação</label>
                            <input type="text" class="form-control" id="professionalIdentificationType" placeholder="<?php echo $identificationType; ?>" required>
                        </div>

                        <div class="col-md-3">
                            <label for="professionalIdentificationCode">Número de identificação</label>
                            <input type="text" class="form-control" id="professionalIdentificationCode" placeholder="<?php echo $identificationCode; ?>" required>
                        </div>

                    </div>

                    <div class="row g-3">

                        <!--
                        <div class="col-auto">

                            <button type="button" class="btn btn-success"  id="buttonGiant" >Cadastrar</button>
                        
                        </div>
                        -->
                    
                    </div>

                    <br><br>
                        
                </div>

            </form>

        </div>

        </div>
        <!--</div>-->
    </div>

    <footer>

        <a href="../../../actions/login/professional/professionalLogOut.php">Sair</a>

    </footer>

</body>

</html>