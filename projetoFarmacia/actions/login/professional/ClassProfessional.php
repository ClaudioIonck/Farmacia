<?php

    date_default_timezone_set('America/Sao_Paulo'); 

    class Professional{


        public function login($professional, $senha){

            global $connectionDataBase;

            $queryUser = "SELECT * FROM professionallogin WHERE professionalUserName = '$professional' AND professionalPassword = '$senha'";
            $queryUser = $connectionDataBase->prepare($queryUser);

            
            $queryUser->execute();


            if($queryUser->rowCount() > 0){

                $dado = $queryUser->fetch();

                $_SESSION['idProfessional'] = $dado['idLoginProfessional'];
                $_SESSION['professionalLevelAccess'] = $dado['professionalLevelAccess'];

                return true;

            }else{

                return false;

            }


        }


        public function logged($idProfessional){

            global $connectionDataBase;

            $array = array();

            $sql = "SELECT * FROM professionallogin WHERE idLoginProfessional = '$idUsuario'";
            $sql = $connectionDataBase->prepare($sql);


            //$sql->bindValue(":idUser", $idUsuario);

            $sql->execute();

            $rowInfo = $sql->fetch();


            $loggedUserName = $rowInfo['professionalUserName'];
            $systemLevelAccess = $rowInfo['systemLevelAccess'];        


        }

    }


?>