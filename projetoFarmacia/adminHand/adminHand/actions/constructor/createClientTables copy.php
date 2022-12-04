<?php

    //SystemLog
    $queryCreateTableSystemLog  = "CREATE TABLE systemLog(

        idLog INT AUTO_INCREMENT PRIMARY KEY,
        idItem INT NOT NULL,
        nameMovement VARCHAR(45) NOT NULL,
        typeMovement VARCHAR(45) NOT NULL,
        dateTimeLog DATETIME(2) NOT NULL,
        idUserMovement INT NOT NULL

    )" or die("Erro ao criar a tabela systemLog" . $link->connect_error);

        $resultCreateTableSystemLog = $link->query($queryCreateTableSystemLog);

        echo "<script> console.log('Tabela systemLog criada com sucesso') </script>";





    //Developers Login
    $queryCreateTableDevelopers  = "CREATE TABLE developers(

        idDev INT AUTO_INCREMENT PRIMARY KEY,
        devUserName VARCHAR(25) NOT NULL,
        devPassword VARCHAR(255) NOT NULL,
        systemLevelAccess INT(2) NOT NULL,  #É o nível de autoridade no sistema em geral.
        devLevelAccess INT(2) NOT NULL,     #É o nível de autoridade dentro do nível do sistema.
        devObservation VARCHAR(255),
        logDate DATETIME(2) NOT NULL

    )" or die("Erro ao criar a tabela Developers" . $link->connect_error);

        $resultCreateTableDevelopers = $link->query($queryCreateTableDevelopers);

        echo "<script> console.log('Tabela Developers criada com sucesso') </script>";


    //Professional Login
    $queryCreateTableProfessionalLogin  = "CREATE TABLE professionallogin(

        idProfessional INT AUTO_INCREMENT PRIMARY KEY,
        professionalUserName VARCHAR(25) NOT NULL,
        professionalPassword VARCHAR(255) NOT NULL,
        systemLevelAccess INT(2) NOT NULL, 
        professionalLevelAccess INT(2) NOT NULL,
        professionalObservation VARCHAR(255),
        logDate DATETIME(2) NOT NULL

    )" or die("Erro ao criar a tabela Professional Login" . $link->connect_error);

        $resultCreateTableProfessionalLogin = $link->query($queryCreateTableProfessionalLogin);

        echo "<script> console.log('Tabela Professional Login criada com sucesso') </script>";


//----------------------------------------------------------------------------------------------


    //Professional Login
    $queryCreateTableProfessionalLogin  = "CREATE TABLE professionallogin(

        idProfessional INT AUTO_INCREMENT PRIMARY KEY,
        professionalUserName VARCHAR(25) NOT NULL,
        professionalPassword VARCHAR(255) NOT NULL,
        systemLevelAccess INT(2) NOT NULL, 
        professionalLevelAccess INT(2) NOT NULL,
        professionalObservation VARCHAR(255),
        logDate DATETIME(2) NOT NULL

    )" or die("Erro ao criar a tabela Professional Login" . $link->connect_error);

        $resultCreateTableProfessionalLogin = $link->query($queryCreateTableProfessionalLogin);

        echo "<script> console.log('Tabela Professional Login criada com sucesso') </script>";



































    //Collaborators
        $queryCreateTableCollaborators  = "CREATE TABLE collaborators(

            idUser INT AUTO_INCREMENT PRIMARY KEY,
            firstName VARCHAR(25) NOT NULL,
            secondName VARCHAR(25) NOT NULL,
            cpf VARCHAR(15) NOT NULL,
            loginUserName VARCHAR(25) NOT NULL,
            passwordUser VARCHAR(255) NOT NULL,
            levelAccess INT(2) NOT NULL,
            officeType VARCHAR(35) NOT NULL,
            officeLevel VARCHAR(15) NOT NULL,
            bornDate DATE NOT NULL,
            genre VARCHAR(15) NOT NULL,
            stateUser VARCHAR(45) NOT NULL,
            city VARCHAR(45) NOT NULL,
            streetName VARCHAR(80) NULL,
            residentialNumber VARCHAR(15) NULL,
            complementHome VARCHAR(100) NULL,
            hiredDate DATE NOT NULL,
            cutOffDate DATE NULL,
            userStatus VARCHAR(15) NOT NULL,
            firstEntryTime TIME(3) NULL,
            firstExitTime TIME(3) NULL,
            secondEntryTime TIME(3) NULL,
            secondExitTime TIME(3) NULL,
            phoneDDD1 VARCHAR(8) NOT NULL,
            phoneNumber1 VARCHAR(15) NOT NULL,
            phoneDDD2 VARCHAR(8) NULL,
            phoneNumber2 VARCHAR(15) NULL,
            observationUser VARCHAR(255) NULL,
            logDate DATETIME(2) NOT NULL

        )" or die("Erro ao criar a tabela Collaborators " . $link->connect_error);

            $resultCreateTableCollaborators = $link->query($queryCreateTableCollaborators);

            echo "<script> console.log('Tabela Collaborators criada com sucesso') </script>";

            
    //Client Juridic
        $queryCreateTableStatusAccount  = "CREATE TABLE clientjuridic(

            clientRegister INT AUTO_INCREMENT PRIMARY KEY,
            clientType VARCHAR(22) NOT NULL,
            clientID INT NOT NULL UNIQUE,
            clientLabel VARCHAR(45) NOT NULL,
            clientOfficialName VARCHAR(65),
            clientCNPJ VARCHAR(22),
            clientBranch VARCHAR(45),
            email VARCHAR(65),
            clientSite VARCHAR(65),
            responsible1 VARCHAR(45),
            ddd1 INT(6),
            phone1 VARCHAR(22),
            responsible2 VARCHAR(45),
            ddd2 INT(6),
            phone2 VARCHAR(22),
            clientStart DATE NOT NULL,
            clientLost DATE,
            quantityLostTime INT,
            clientState VARCHAR(45),
            clientCity VARCHAR(45),
            clientAdress VARCHAR(65),
            residentialNumber VARCHAR(22),
            addressComplement VARCHAR(100),
            collaboratorResponsible VARCHAR(45),
            clientStatus VARCHAR(45),
            organizationChildren VARCHAR(100),
            idKindPlan INT,
            kindPlan VARCHAR(22),
            frequencePlan VARCHAR(22),
            createdAt datetime(2) NOT NULL,
            observation VARCHAR(255)


        )" or die("Erro ao criar a tabela StatusAccount" . $link->connect_error);

            $resultCreateTableStatusAccount = $link->query($queryCreateTableStatusAccount);

            echo "<script> console.log('Tabela StatusAccount criada com sucesso') </script>";


    //Client Fisic
        $queryCreateTableStatusAccount  = "CREATE TABLE clientfisic(

            clientRegister INT AUTO_INCREMENT PRIMARY KEY,
            clientType VARCHAR(22) NOT NULL,
            clientID INT NOT NULL UNIQUE,
            clientFirstName VARCHAR(45) NOT NULL,
            clientSecondName VARCHAR(65),
            clientCPF VARCHAR(22),
            clientGenre VARCHAR(45),
            email VARCHAR(65),
            socialMedia VARCHAR(65),
            bornDate DATE,
            socialStatus VARCHAR(22),
            ddd1 INT(6),
            phone1 VARCHAR(22),
            ddd2 INT(6),
            phone2 VARCHAR(22),
            clientStart DATE NOT NULL,
            clientLost DATE,
            quantityLostTime INT,
            clientState VARCHAR(45),
            clientCity VARCHAR(45),
            clientAdress VARCHAR(65),
            residentialNumber VARCHAR(22),
            addressComplement VARCHAR(100),
            collaboratorResponsible VARCHAR(45),
            clientStatus VARCHAR(45),
            organizationChildren VARCHAR(100),
            idKindPlan INT,
            kindPlan VARCHAR(22),
            frequencePlan VARCHAR(22),
            createdAt DATETIME(2) NOT NULL,
            observation VARCHAR(255)


        )" or die("Erro ao criar a tabela StatusAccount" . $link->connect_error);

            $resultCreateTableStatusAccount = $link->query($queryCreateTableStatusAccount);

            echo "<script> console.log('Tabela StatusAccount criada com sucesso') </script>";
    

    //Journ Mark
        $queryCreateTableJournMark  = "CREATE TABLE journmark(

            idMark INT AUTO_INCREMENT PRIMARY KEY,
            userName VARCHAR(45) NOT NULL,
            stepMarkQuantity INT NOT NULL,
            stepDate DATE NOT NULL,
            stepHour TIME(3) NOT NULL,
            stepStatus VARCHAR(25) NOT NULL,
            stepEndCount INT NOT NULL,
            stepStartCount INT NOT NULL,
            extendedTimeMinute INT NOT NULL,
            extendedTimeHour INT NOT NULL,
            extendedTimeSecond INT NOT NULL

        )" or die("Erro ao criar a tabela JournMark" . $link->connect_error);

            $resultCreateTableJournMark = $link->query($queryCreateTableJournMark);

            echo "<script> console.log('Tabela journmark criada com sucesso') </script>";

    //Status account
        $queryCreateTableStatusAccount  = "CREATE TABLE statusaccount(

            idAction INT AUTO_INCREMENT PRIMARY KEY,
            collaboratorResponsible VARCHAR(45) NOT NULL,
            clientID INT NOT NULL,
            clientName VARCHAR(45) NOT NULL,
            logDate DATE NOT NULL,
            statusAccount VARCHAR(45) NOT NULL,
            actionType VARCHAR(45) NOT NULL

        )" or die("Erro ao criar a tabela StatusAccount" . $link->connect_error);

            $resultCreateTableStatusAccount = $link->query($queryCreateTableStatusAccount);

            echo "<script> console.log('Tabela StatusAccount criada com sucesso') </script>";


?>