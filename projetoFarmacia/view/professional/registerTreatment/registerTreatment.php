
<?php 

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    require('../../../actions/login/professional/verify.php');

    if(isset($_SESSION['idProfessional']) && !empty($_SESSION['idProfessional'])){



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
    
    <link rel="stylesheet" href="../../style/stylePattern.css">
    <link rel="stylesheet" href="../../style/styleNavBar.css">
    <link rel="stylesheet" href="../../style/styleRegisterTreatment.css">
    
    
    <title>Registar novo tratamento</title>

    <?php

        if(isset($_SESSION['msg'])){

            echo $_SESSION['msg'];
            
            unset($_SESSION['msg']);

        }

    ?>

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
            <a class="nav-link" id="nav-link-active" href="../listTreatments/listTreatments.php">Tratamentos</a>
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

                <a href="../professionalProfile/professionalProfile.php">

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

                    <h1> <strong>Registar um novo tratamento</strong> </h1>
                
                </div>

            </div>
            

<!--============================================= FORMULARIO =============================================-->

            <form method="POST" action="banco/processa.php">

                <div class="row g-3" id="mainDiv">                     

                    <div id="nameInput" class="col-auto">

                        <label for="treatmentName">Nome do tratamento</label>
                        <input type="text" id="treatmentName"  class="form-control" placeholder="Digite o nome do tratamento">
                    
                    </div>

<!--============================================= DETALHES =============================================-->

                    <div class="row g-3">

                        <div class="col">
                            <label for="identificationNumber">CPF paciente</label>
                            <input type="text" id="identificationNumber" class="form-control" placeholder="CPF do paciente" aria-label="First name">
                        </div>

                        <div class="col">
                            <label for="patientName">Nome do paciente</label>
                            <input type="text" id="patientName" class="form-control" placeholder="Nome do paciente" aria-label="Last name">
                        </div>

                    </div>

                    
                        
                    <div class="row g-3">

                        <div class="col">    

                            <div class="md-form md-outline input-with-post-icon datepicker" id="data">
                                <label for="treatmentStart">Data de início</label>
                                <input placeholder="Select date" type="date" id="treatmentStart" class="form-control">
                            </div>

                        </div>

                        <div class="col">

                            <div class="md-form md-outline input-with-post-icon datepicker" id="data">
                                <label for="treatmentEnd">Previsão de término</label>
                                <input placeholder="Select date" type="date" id="treatmentEnd" class="form-control">
                            </div>

                        </div>

                        <div class="col">

                            <div class="md-form md-outline input-with-post-icon datepicker" id="data">
                                <label for="quantityPhasesTreatments">Fases de tratamento</label>
                                <input placeholder="Insira a quantidade de fases" type="number" id="quantityPhasesTreatments" class="form-control">
                            </div>

                        </div>

                    </div>




                    <div class="row g-3">

                        <div class="col">

                            <label for="clinicResponsible">Clinica responsável</label>
                            <input type="text" id="clinicResponsible" class="form-control" placeholder="CPF do paciente" aria-label="First name">
                        
                        </div>

                        <div class="col">
                            
                            <label for="professionalResponsible">Médico responsável</label>
                            <input type="text" id="professionalResponsible" class="form-control" placeholder="Nome do paciente" aria-label="Last name">
                        
                        </div>

                    </div>

                    <br>
                    
                    <div class="input-group">

                        <input type="file" class="form-control" id="fileAnexed" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    
                    </div>

<!--============================================= REMEDIOS =============================================-->

                        <br>


                    <div class="divRemedy">
                    
                        <label>Remédios</label>

                        <div class="container" id="remedyListEnvolv"> <!--div center-->

                            <div id="remedyListContent">

                                <div class="form-group">

                                    <label for="remedyName">Nome remédio: </label>
                                    <input type="text" name="remedyName[]" id="remedyName" placeholder="Nome do remédio"/>

                                    <label for="remedyMg">Gramagem remédio: </label>
                                    <input type="number" step="0.01" value="0.00" name="remedyMg[]" id="remedyMg" placeholder="00.00"/>

                                    <label for="remedyQuantity">Quantidade: </label>
                                    <input type="text" name="remedyQuantity[]" id="remedyQuantity" placeholder="Quantidade na caixa"/>

                                    <button type="button" onclick="adicionarCampo()">+</button>

                                </div>

                            </div>

                        </div> 

                    </div>

                    <div class="row g-3">

                        <div class="col-auto">

                            <button type="button" class="btn btn-success"  id="buttonRegister" name="buttonRegister" >Cadastrar</button>
                        
                        </div>
                    
                    </div>

                </div>

            </form>

        </div>

    </div>

    <footer>

        <a href="../../../actions/login/professional/professionalLogOut.php">Sair</a>

    </footer>

    <script src="script/cadastrarTratamento/scriptTratamento.js"></script>
    



</body>
</html>