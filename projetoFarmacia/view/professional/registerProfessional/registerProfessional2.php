
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de conta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="main.css" rel="stylesheet">
    </head>

    <body>

        <div class="card container menu">

            <a href="../login/professionalLogin.php">
            
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="svg_sair" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">

                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>

                </svg>
            
            </a>

            <h1>Cadastrar Usuário</h1>


            <form action="test.php" method="POST">

                <div class="container my-5">

                    <nav>

                        <div class="nav nav-tabs" id="nav-tab" role="tablist">

                            <button class="nav-link active" id="isPatient" name="isPatient" data-bs-toggle="tab" data-bs-target="#nav-paciente" type="button" role="tab" aria-controls="nav-paciente" aria-selected="true">Paciente</button>
                            <button class="nav-link" id="isProfessional" name="isProfessional" data-bs-toggle="tab" data-bs-target="#nav-profissional" type="button" role="tab" aria-controls="nav-profissional" aria-selected="true">Profissional</button>
                            
                        </div>
                    
                    </nav>

                
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active p-3" id="nav-paciente" role="tabpanel" aria-labelledby="nav-paciente-tab">

                            <input type="text" id="whatSelected" name="whatSelected" value="0">

                            <div class="container">

                                <div class="row">

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">Sobrenome</label>
                                        <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">CRM</label>
                                        <input type="text" class="form-control"  id="crm" name="crm">
                                    </div>

                                </div>

                                <div class="row">
                                    &nbsp;
                                </div>

                                <div class="row">

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">Usuario</label>
                                        <input type="text" class="form-control"  id="usuario" name="usuario">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">Senha</label>
                                        <input type="password" class="form-control"  id="senha" name="senha">
                                    </div>

                                </div>

                                <div class="row">
                                    &nbsp;
                                </div>

                                <div class="row">

                                    <div class="col-sm-3">
                                        <label for="ddd" class="form-label">DDD</label>
                                        <input type="text" class="form-control" id="ddd1" name="ddd1" placeholder="(47) ">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="text" class="form-control"  id="phone1" name="phone1" placeholder="0 0000-0000 ">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control"  id="bornDate" name="bornDate">
                                    </div>

                                </div>

                                <div class="row">
                                    &nbsp;
                                </div>

                                <div class="row">
                                    <button type="submit" class="btn btn-lg btn-primary" id="SendLogin" name="SendLogin">Registrar</button>
                                </div>

                            </div>
                                
                        </div>

                        <div class="tab-pane fade show p-3" id="nav-profissional" role="tabpanel" aria-labelledby="nav-profissional-tab">
                        
                            <input type="text" id="whatSelected" name="whatSelected" value="1">

                            <div class="container">

                                <div class="row">

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">Sobrenome</label>
                                        <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                                    </div>

                                </div>

                                <div class="row">
                                &nbsp;
                                </div>

                                <div class="row">

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">Usuario</label>
                                        <input type="text" class="form-control"  id="usuario" name="usuario">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">Senha</label>
                                        <input type="password" class="form-control"  id="senha" name="senha">
                                    </div>

                                </div>

                                <div class="row">
                                    &nbsp;
                                </div>

                                <div class="row">

                                    <div class="col-sm-3">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf">
                                    </div>

                                </div>

                                <div class="row">
                                    &nbsp;
                                </div>

                                <div class="row">
                                    <button type="submit" class="btn btn-lg btn-primary" id="SendLogin" name="SendLogin">Registrar</button>
                                </div>

                            </div>
                                
                        </div>

                                
                    </div>
                                
                </div>

            </form>

            

                            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="changeStatus.js"></script>

    </body>

</html>