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
        <center>

        <br><br>

        <h2>Página desativada</h2>

        <br><br><hr><br><br><br><br>

        <!-- Aviso se estive desativado -->

        <div class="card" style="width: 18rem;">
                
            <div class="card-body">
                <h5 class="card-title">Redirecionando em (3s) ...</h5>
                <p class="card-text">
                
                <?php

                    echo "<br><br>";

                    for( $i = 0 ; $i < 4 ; $i++ )
                    {

                        if($i != 3){

                            echo $i ;
                            flush();
                            ob_flush();
                            sleep(1);

                            

                        }else{

                            echo $i;
                            flush();
                            ob_flush();
                            sleep(1);

                        }
                        
                    }

                    echo "<br><hr><br>";

                    $trigger = true;

                    echo"<a href='../register/registerBank/index.php'><button type='button' class='btn btn-success'>Voltar</button></a>";


                    //-----------------DELETE---------------------------------------



                    ?>


                </p>

                <br>
                
            </div>
        </div>


        <!-- Delete -->

        <?php
            /*
                $trigger = true;


                if($trigger){
                        
                    include_once('../connection/connectionAdmin.php');


                    //DELETE ALL

                        $sqlSelect = "SELECT * FROM createdatabaselog ";

                        $resultQueryDelete = $link->query($sqlSelect);


                        if($resultQueryDelete->num_rows > 0) {

                            $sqlDelete = "DELETE FROM createdatabaselog";

                            $resultDelete = $link->query($sqlDelete);
                                
                        }  

                }

                header('Location: ../register/registerBank/index.php');
            */
        ?>

        </center>

    </body>

</html>