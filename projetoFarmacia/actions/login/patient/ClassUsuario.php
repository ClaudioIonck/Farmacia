<?php

    date_default_timezone_set('America/Sao_Paulo');

    class Usuario{


        public function login($usuario, $senha){

            global $connectionDataBase;

            $queryUser = "SELECT * FROM patientlogin WHERE patientUserName = '$usuario' AND patientPassword = '$senha'";
            $queryUser = $connectionDataBase->prepare($queryUser);

            //$queryUser->bindValue(":patientUserName", $usuario, PDO::PARAM_STR);
            //$queryUser->bindValue(":patientPassword", $senha);
            
            $queryUser->execute();


            if($queryUser->rowCount() > 0){

                $dado = $queryUser->fetch();

                $_SESSION['idUsuario'] = $dado['idLoginUser'];
                $_SESSION['levelAccess'] = $dado['systemLevelAccess'];

                return true;

            }else{

                return false;

            }


        }


        public function logged($idUsuario){

            global $connectionDataBase;

            $array = array();

            $sql = "SELECT * FROM patientlogin WHERE idLoginUser = '$idUsuario'";
            $sql = $connectionDataBase->prepare($sql);


            //$sql->bindValue(":idUser", $idUsuario);

            $sql->execute();

            $rowInfo = $sql->fetch();


            $loggedUserName = $rowInfo['patientUserName'];
            $systemLevelAccess = $rowInfo['systemLevelAccess'];     

          


        }

    }


?>