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
    

    <title>Registrar Conta</title>

</head>
<body>

    <h3>Registrar Conta</h3>


    <form action="action/registerPatientAccount.php" method="POST">

        
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" />
    
    
        <label for="sobrenome">Sobrenome</label>
        <input type="text" id="sobrenome" name="sobrenome" />

        <br><br>

        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" />

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" />

        <br><br>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" />

        <br><br><br>

        <button type="submit" id="SendLogin" name="SendLogin" class="btn btn-success">Registrar</button>
        
        

    </form>

    <a href="../login/patientLogin.php"><button class="btn btn-danger">Cancelar</button>
    
</body>
</html>