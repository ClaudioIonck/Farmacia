<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../style/register/index.css">
    <link rel="stylesheet" href="../../style/register/indexTable.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <?php

        include_once('../../actions/connection/connection.php');

        $collaboratorResponsible = "arend";

    ?>

    <!--
        <nav style="display: flex; list-style: none; background-color: #D9D9D9; ">

            <div style="border: 1.5px solid black; padding: 5px; border-radius: 5px;">   <a href="index.php">    <li>Create Client BD</li></a></div>

        </nav>
    -->

    <center>
    <h1>ADMIN HAND</h1>
    <h4>Uniclini</h4>
    </center>

    <hr>

    <form action="../../actions/constructor/createDataBase.php" method="POST">

        <div class="form-group">

            <label for="dataBaseClientName"> <strong> Nome do cliente </strong></label>
            <input type="text" id="dataBaseClientName" name="dataBaseClientName" class="form-control" aria-describedby="emailHelp" placeholder="Digite o nome do cliente..." required />

            <br>

            <label for="planGrade"> <strong> Nível do plano </strong> </label>
            <input type="text" id="planGrade" name="planGrade" for="planGrade" class="form-control" aria-describedby="emailHelp" placeholder="Digite o nível do plano..." required />

            <br><br>

            <label for="collaboratorResponsible">  <strong> Responsável pela criação </strong> </label>
            <input type="text" for="collaboratorResponsible" class="form-control form-control-sm" aria-describedby="emailHelp" placeholder="Digite o colaborador responsável..."  value="<?php echo $collaboratorResponsible; ?>" disabled />
            <input type="hidden" id="collaboratorResponsible" name="collaboratorResponsible" for="collaboratorResponsible" value="<?php echo "<strong>" . $collaboratorResponsible; "</strong>" ?>"/>
            <p style="font-size: 12px;">Será puxado automaticamente quando o colaborador logar no sistema</p>

        

            <hr>


            <div class="form-inline">


                <button type='submit' class='btn btn-success' id="submit" name="submit" for="submit">Criar banco</button>

              
                <a href="../../actions/deleteAllLog.php" id="deleteButton" name="deleteButton" for="deleteButton"> <button type='button' class='btn btn-danger'>Delete logs</button> </a>
      
            
            </div>

        </div>

    </form>

        <hr>

        <br>

        <div class="table-control">

            <table class="table1">

                <thead class="headList">

                    <tr>

                        <th scope="col">N° Ação</th>
                        <th scope="col">ID Cliente</th>
                        <!--    <th scope="col">Senha</th>  -->
                        <th scope="col">Nome</th>
                        <th scope="col">Nível Plano</th>
                        <th scope="col">Colaborador responsável</th>
                        <th scope="col">Banco de dados</th>
                        <th scope="col">Ação realizada</th>
                        <th scope="col">Log</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Deletar</th>
                                    
                    </tr>

                </thead>

                <tbody class="bodyList">

                    <?php

                        include_once('../../actions/connection/connectionAdmin.php');
                        
                        $sqlSelectAllLogs = "SELECT * FROM createdatabaselog WHERE idAction > 0 ORDER BY idAction DESC";

                        //Seleciona os registros
                        $resultSelectAllLogs = $link->prepare($sqlSelectAllLogs);

                        $resultSelectAllLogs->execute();


                        while($user_data = $resultSelectAllLogs->fetch(PDO::FETCH_ASSOC)) {

                            echo"<tr class='theRow'>";

                                echo"<td class='tableActionID'>" . $user_data['idAction'] . "</td>";
                                echo"<td class='tableClientID'>" . $user_data['generatedClientID'] . "</td>";
                                echo"<td class='tableClientName'>" . $user_data['clientName'] . "</td>";
                                echo"<td class='tablePlanGrade'>" . $user_data['planGrade'] . "</td>";
                                echo"<td class='tableCollaboratorResponsible'>" . $user_data['collaboratorResponsible'] . "</td>";
                                echo"<td class='tableDataBaseName'>" . $user_data['dataBaseName'] . "</td>";
                                echo"<td class='tableActionRealized'>" . $user_data['actionRealized'] . "</td>";
                                echo"<td class='tableLogDate'>" . $user_data['logDate'] . "</td>";
                                echo"<td class='tableClientDataBasePassword'>" . $user_data['clientDataBasePassword'] . "</td>";
                                
                                echo"<td> 

                                    <a class='btnActionEdit' href='#?idAction=$user_data[idAction]'>

                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>

                                            <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                                                    
                                        </svg>
                                                
                                    </a>
                                            
                                </td>";

                            echo"</tr>";


                        }














































                                
                    ?>
                                

                </tbody>

            </table>  

        </div>
            

    

    
</body>
</html>