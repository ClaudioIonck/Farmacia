<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    
    <title>Registrar tratamento</title>
</head>
<body>
    

    <h1>Remédios do tratamento</h1>

    <?php

        if(isset($_SESSION['msg'])){

            echo $_SESSION['msg'];
            
            unset($_SESSION['msg']);

        }

    ?>

    <form method="POST" action="banco/processa.php">

        <div id="formulario">

            <div class="form-group">

                <label>Nome remédio: </label>
                <input type="text" name="nomeRemedio[]" id="nomeRemedio" placeholder="Nome do remédio"/>

                <label>Gramagem remédio: </label>
                <input type="number" step="0.01" value="0.00" name="gramagemRemedio[]" id="gramagemRemedio" placeholder="00.00"/>

                <label>Quantidade: </label>
                <input type="text" name="qntRemedio[]" id="qntRemedio" placeholder="Quantidade na caixa"/>

                <button type="button" onclick="adicionarCampo()">+</button>

            </div>

        </div>
        
        <div class="form-group">

                <input type="submit" value="Cadastrar" name="cadRemedio" />                

        </div>


    </form>

    <script src="script/custom.js"></script>

</body>
</html>