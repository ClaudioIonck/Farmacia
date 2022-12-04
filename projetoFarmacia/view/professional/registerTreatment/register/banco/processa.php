<?php 

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    //Limpar o buffer
    ob_start();

    include_once '../conexao/conexao.php';

    //Receber os dados form
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //print_r($dados);


    //Variaveis de acesso
    $tableName = "treatments";

    //Verificar se o usuario clicou no botao

    if(!empty($dados['buttonRegister'])){

        echo "<br><br><hr>";

        foreach($dados['remedyName'] as $chave => $nome){

            echo "Chave: $chave <br>";
            echo "Remédio: $nome <br>";
            echo "Gramagem: ". $dados['remedyMg'][$chave] . "<br>";
            echo "Quantidade: " . $dados['remedyQuantity'][$chave] . "<hr>";


            $queryUsuario = "INSERT INTO {$tableName}(nomeRemedio, gramagemRemedio, qntRemedio) 
                
                             VALUES (:nomeRemedio, :gramagemRemedio, :qntRemedio)";

            $cadUsuario = $connection->prepare($queryUsuario);

            $cadUsuario->bindParam(':nomeRemedio', $nome);
            $cadUsuario->bindParam(':gramagemRemedio', $dados['gramagemRemedio'][$chave]);
            $cadUsuario->bindParam(':qntRemedio', $dados['qntRemedio'][$chave]);

            $cadUsuario->execute();

        }  

        //Variavel global com mensagem de sucesso.
        $_SESSION['msg'] = "<p style='color: green;'>Usuário(s) cadastrado(s) com sucesso!</p>";

        header("Location: ../index.php");

    }else{

        $_SESSION['msg'] = "<p style='color: red;'>ERRO! Usuário(s) NÃO cadastrado(s) com sucesso!</p>";

        header("Location: ../index.php");

    };

?>