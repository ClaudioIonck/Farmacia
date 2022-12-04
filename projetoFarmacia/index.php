<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Login</title>
</head>

<body>

  <div class="main">

    <div class="img" >
      <img src="#" class="loginImage" alt="img">
    </div>

    <div style="position: absolute; background-color: yellow; color: black; margin-bottom: 800px;" id="teste"></div>


    <form action="theOneWhoPoints.php" method="POST">
    
      <div class="login"> 
        

        <div class="card">

        <div class="container text-center">

            <div class="row">

              <div class="col-3">

                <label class="check-label" for="typePatient">Paciente</label>

              </div>              

            

              <div class="col-1">
                
                <div class="form-check form-switch">

                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">

                
                </div>

              </div>



              <div class="col-4">
              
                <label class="label" for="typeProfessional">Professional</label>

              </div>

            </div>

        </div>




              
            
            <h1 class="" >Acessar</h1>

            <div class="textfiled">
              <label for="usuario">Usuario</label>
              <input type="text" name="usuario" placeholder= "Usuário">
            </div>

            <div class="textfiled">
              <label for="senha">senha</label>
              <input type="password" name="senha" placeholder= "Senha">
            </div>

            <div class="miniLine">
              <div>
                <input type="checkbox" id="remember" name="remember" value="true">
                <label for="remember"> Lembrar Senha </label><br>
              </div>
              <a href="#">Esqueceu a senha?</a>
            </div>

            <button class="btnLogin">Entrar</button>

            <div class="semConta">
              <p>Não possui uma conta? </p>
              <a href="#"> Clique aqui e crie uma!</a>
            </div>
            
          </div>

        </div>

      </div>

    </form>

    <div id="trigger">

    </div>


    <script src="toggle.js"></script>

</body>

</html>