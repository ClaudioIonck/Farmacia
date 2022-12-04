<?php

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    include_once('../../../connection/connection.php');

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    

    <title>Login - Paciente</title>

</head>
<body>

    <h3>Login Paciente</h3>




    <form action="../../../actions/login/patient/patientTryLogin.php" method="POST">

        <label for="usuario">Usuário</label>
        <input type="text" id="usuario" name="usuario" />

        <br><br>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" />

        <br><br><br>

        <button type="submit" id="SendLogin" name="SendLogin" class="btn btn-success">Acessar</button>

        <br><br>
        <a href="../registerPatient/registerPatient.php">Registrar</a>
        <a href="#">Esqueci a senha</a>
        

    </form>
    
</body>
</html>