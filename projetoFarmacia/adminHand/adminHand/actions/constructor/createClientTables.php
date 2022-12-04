<?php


    //SystemLog
        $query_CreateTable_SystemLog  = "CREATE TABLE systemLog(

            idLog INT AUTO_INCREMENT PRIMARY KEY,
            idItem INT NOT NULL,
            nameMovement VARCHAR(45) NOT NULL,
            typeMovement VARCHAR(45) NOT NULL,
            dateTimeLog DATETIME(2) NOT NULL,
            idUserMovement INT NOT NULL

        )" or die("<br> Erro ao criar a tabela systemLog" . $link->connect_error);

            //$resultCreateTableSystemLog = $link->query($queryCreateTableSystemLog);

            $create_Table_SystemLog = $linkNewDB->prepare($query_CreateTable_SystemLog);

            if($create_Table_SystemLog->execute()){

                echo "<p style='color: green;'> Tabela systemLog criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela systemLog NÃO foi criada com sucesso </p>";

            }


    //Developers Login
        $query_CreateTable_Developers  = "CREATE TABLE developers(

            idDev INT AUTO_INCREMENT PRIMARY KEY,
            devUserName VARCHAR(25) NOT NULL,
            devPassword VARCHAR(255) NOT NULL,
            systemLevelAccess INT(2) NOT NULL,  #É o nível de autoridade no sistema em geral.
            devLevelAccess INT(2) NOT NULL,     #É o nível de autoridade dentro do nível do sistema.
            devObservation VARCHAR(255),
            logDate DATETIME(2) NOT NULL

        )" or die("<br> Erro ao criar a tabela Developers" . $link->connect_error);

            $create_Table_Developers = $linkNewDB->prepare($query_CreateTable_Developers);

            if($create_Table_Developers->execute()){

                echo "<p style='color: green;'>Tabela Developers criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Developers NÃO foi criada com sucesso </p>";

            }


    //Professional Login
        $query_CreateTable_ProfessionalLogin  = "CREATE TABLE professionallogin(

            idLoginProfessional INT AUTO_INCREMENT PRIMARY KEY,
            professionalUserName VARCHAR(25) NOT NULL,
            professionalPassword VARCHAR(255) NOT NULL,
            systemLevelAccess INT(2) NOT NULL,              #Aqui o nível de acesso provavelmente será igual para todos.
            professionalLevelAccess INT(2) NOT NULL,        #Aqui poderá ser usado para alterar o plano no app do paciente
            logDate DATETIME(2) NOT NULL

        )" or die("<br> Erro ao criar a tabela Professional Login" . $link->connect_error);

            $create_Table_ProfessionalLogin = $linkNewDB->prepare($query_CreateTable_ProfessionalLogin);

            if($create_Table_ProfessionalLogin->execute()){

                echo "<p style='color: green;'> Tabela Professional Login criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Professional Login NÃO foi criada com sucesso </p>";

            }


    //Patient Login
        $query_CreateTable_PatientLogin  = "CREATE TABLE patientlogin(

            idLoginUser INT AUTO_INCREMENT PRIMARY KEY,
            patientUserName VARCHAR(25) NOT NULL,
            patientPassword VARCHAR(255) NOT NULL,
            systemLevelAccess INT(2) NOT NULL,          #Aqui o nível de acesso provavelmente será igual para todos.
            patientLevelAccess INT(2) NOT NULL,         #Aqui poderá ser usado para alterar o plano no app do paciente caso o plano seja vendido diretamente para usuário ao invés de clínica.
            logDate DATETIME(2) NOT NULL

        )" or die("<br> Erro ao criar a tabela Patient Login" . $link->connect_error);

            $create_Table_PatientLogin = $linkNewDB->prepare($query_CreateTable_PatientLogin);

            if($create_Table_PatientLogin->execute()){

                echo "<p style='color: green;'> Tabela Patient Login criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Patient Login NÃO foi criada com sucesso </p>";

            }


    //Clinic Login
        $query_CreateTable_ClinicLogin  = "CREATE TABLE cliniclogin(

            idLoginClinic INT AUTO_INCREMENT PRIMARY KEY,
            clinicUserName VARCHAR(25) NOT NULL,
            clinicPassword VARCHAR(255) NOT NULL,
            systemLevelAccess INT(2) NOT NULL,          #Aqui o nível de acesso provavelmente será igual para todos.
            clinicLevelAccess INT(2) NOT NULL,         #Aqui poderá ser usado para alterar o plano no app do paciente caso o plano seja vendido diretamente para usuário ao invés de clínica.
            logDate DATETIME(2) NOT NULL

        )" or die("<br> Erro ao criar a tabela Clinic Login" . $link->connect_error);

            $create_Table_ClinicLogin = $linkNewDB->prepare($query_CreateTable_ClinicLogin);

            if($create_Table_ClinicLogin->execute()){

                echo "<p style='color: green;'> Tabela Clinic Login criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Clinic Login NÃO foi criada com sucesso </p>";

            }


//-----------------------------------------------------------------------------

    //Patient Infos
        $query_CreateTable_PatientInfo  = "CREATE TABLE patientinfo(

            idUser INT AUTO_INCREMENT PRIMARY KEY,
            idLoginUser INT NOT NULL UNIQUE,
            userFirstName VARCHAR(33) NOT NULL,         #O limite foi usado como base o maior nome brasileiro: Charlingtonglaevionbeecheknavare
            userSecondName VARCHAR(65),
            userCPF VARCHAR(22),
            
            userGenre VARCHAR(45),
            userNationality VARCHAR(45),
            userEmail VARCHAR(65),
            bornDate DATE,
            socialStatus VARCHAR(22),

            ddd1 INT(6),
            phone1 VARCHAR(22),

            userStart DATE NOT NULL,    #Usado para quando a conta foi confirmada por email ou celular.
            userLost DATE,              #Usado para caso quando o cliente excluir a conta.
            quantityLostTime INT,       #Quantidade de vezes que o mesmo CPF excluiu a conta.

            userCity VARCHAR(45),
            userAdress VARCHAR(65),
            residentialNumber VARCHAR(12),
            addressComplement VARCHAR(100),

            professionalResponsible VARCHAR(45),    #Usado caso um profissional mencionar o CPF desse cliente em algum tratamento antes do paciente possuir a conta criada.
            
            userStatus VARCHAR(45),
            idKindPlan INT,
            kindPlan VARCHAR(22),
            frequencePlan VARCHAR(22),
            
            createdAt DATETIME(2) NOT NULL #Usado para quando a conta foi registrada.

        )" or die("<br> Erro ao criar a tabela Patient Info" . $link->connect_error);

            $create_Table_PatientInfo = $linkNewDB->prepare($query_CreateTable_PatientInfo);

            if($create_Table_PatientInfo->execute()){

                echo "<p style='color: green;'> Tabela Patient Info criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Patient Info NÃO foi criada com sucesso </p>";

            }


    //Professional Infos
        $query_CreateTable_ProfessionalInfo  = "CREATE TABLE professionalinfo(

            idProfessional INT AUTO_INCREMENT PRIMARY KEY,
            idLoginProfessional INT NOT NULL UNIQUE,
            professionalFirstName VARCHAR(33) NOT NULL,         #O limite foi usado como base o maior nome brasileiro: Charlingtonglaevionbeecheknavare
            professionalSecondName VARCHAR(65),
            professionalCPF VARCHAR(22),

            professionalType VARCHAR(22),                       #Serve para inserir se é um Medico, Farmaceutico, Enfermeiro, etc.
            professionalIdentificationType VARCHAR(22),         #Serve para inserir o tipo de identificação do profissional. (CRM/CRF/Coren)
            professionalIdentificationCode VARCHAR(22),         #Serve para inserir o número do CRM no caso do medico, número do CRF no caso do farmaceutico, número do Coren dos enfermeiros.
            professionalActualEnterprise VARCHAR(22),           #Serve para registrar em qual clínica o profissional está atuando, poderá ser inserido mais que 1 (Dentro de um array).

            professionalGenre VARCHAR(45),
            professionalNationality VARCHAR(45),
            professionalEmail VARCHAR(65),
            bornDate DATE,
            socialStatus VARCHAR(22),

            ddd1 INT(6),
            phone1 VARCHAR(22),

            professionalStart DATE NOT NULL,    #Usado para quando a conta foi confirmada por email ou celular.
            professionalLost DATE,              #Usado para caso quando o cliente excluir a conta.
            quantityLostTime INT,       #Quantidade de vezes que o mesmo CPF excluiu a conta.

            professionalCity VARCHAR(45),
            professionalAdress VARCHAR(65),
            residentialNumber VARCHAR(12),
            addressComplement VARCHAR(100),
            
            professionalStatus VARCHAR(45),
            idKindPlan INT,
            kindPlan VARCHAR(22),
            frequencePlan VARCHAR(22),
            
            createdAt DATETIME(2) NOT NULL, #Usado para quando a conta foi registrada.

            professionalUserName VARCHAR(40), 
            professionalUF INT


        )" or die("<br> Erro ao criar a tabela Professional Info" . $link->connect_error);

            $create_Table_ProfessionalInfo = $linkNewDB->prepare($query_CreateTable_ProfessionalInfo);

            if($create_Table_ProfessionalInfo->execute()){

                echo "<p style='color: green;'> Tabela Professional Info criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Professional Info NÃO foi criada com sucesso </p>";

            }


    //Clinic Infos
        $query_CreateTable_ClinicInfo  = "CREATE TABLE cliniclinfo(

            idClinic INT AUTO_INCREMENT PRIMARY KEY,
            idLoginClinic INT NOT NULL UNIQUE,
            clinicName VARCHAR(45) NOT NULL,         #O limite foi usado como base o maior nome brasileiro: Charlingtonglaevionbeecheknavare
            clinicSocialName VARCHAR(65),
            clinicCNPJ VARCHAR(22),

            clinicLeaderName VARCHAR(33),
            clinicLeaderCPF VARCHAR(22),

            clinicType VARCHAR(22),                       #Serve para inserir se é um Dentista, ortopedista, clinica geral, hospital públic, etc.
            
            clinicEmail VARCHAR(65),
            ddd1 INT(6),
            phone1 VARCHAR(22),

            clinicStart DATE NOT NULL,    #Usado para quando a conta foi confirmada por email ou celular.
            cliniclLost DATE,              #Usado para caso quando o cliente excluir a conta.
            quantityLostTime INT,       #Quantidade de vezes que o mesmo CPF excluiu a conta.

            clinicCountry VARCHAR(45),
            clinicCity VARCHAR(45),
            clinicAdress VARCHAR(65),
            comercialAdressNumber VARCHAR(12),
            addressComplement VARCHAR(100),
            
            clinicStatus VARCHAR(45),
            idKindPlan INT,
            kindPlan VARCHAR(22),
            frequencePlan VARCHAR(22),
            
            createdAt DATETIME(2) NOT NULL #Usado para quando a conta foi registrada.

        )" or die("<br> Erro ao criar a tabela Clinic Info" . $link->connect_error);

            $create_Table_ClinicInfo = $linkNewDB->prepare($query_CreateTable_ClinicInfo);

            if($create_Table_ClinicInfo->execute()){

                echo "<p style='color: green;'> Tabela Clinic Info criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Clinic Info NÃO foi criada com sucesso </p>";

            }


//-----------------------------------------------------------------------------

    //Clinic x Professional 
        $query_CreateTable_Prof_x_Clinic  = "CREATE TABLE clinicxprofessional(

            idRelation INT AUTO_INCREMENT PRIMARY KEY,
            idClinic INT NOT NULL,
            idProfessional INT NOT NULL,

            responsibleCreateRelation VARCHAR(45),      #Usado para registrar o usuário responsável que criou a relação.
            statusRelation VARCHAR(45),                 #Usado para saber se o profissional aceitou o convite de ingresso na clinica. (Aguardando aprovação/Associado/Rompido)
            
            lodDate DATETIME(2) NOT NULL                #Usado para registrar o momento em que a relação foi criada.

        )" or die("<br> Erro ao criar a tabela Prof X Clinic" . $link->connect_error);

            $create_Table_Prof_x_Clinic = $linkNewDB->prepare($query_CreateTable_Prof_x_Clinic);

            if($create_Table_Prof_x_Clinic->execute()){

                echo "<p style='color: green;'> Tabela Prof X Clinic criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Prof X Clinic NÃO foi criada com sucesso </p>";

            }


    //Remedios x Tratamentos
        $query_CreateTable_Remedy_x_Treatment  = "CREATE TABLE treatmentxremedy(

            idRelation INT AUTO_INCREMENT PRIMARY KEY,
            idRemedy INT NOT NULL,
            idTreatment INT NOT NULL,

            recurrence DECIMAL(2,1),        #Numeração da quantidade da recorrência.
            recurrenceType VARCHAR(22),     #Tipo da recorrência. (Horas, dias, semanas, meses)
            quantityBox INT,                #Quantidade de caixas necessárias.
            quantityPills INT,              #Quantidade de pilulas totais, levando em conta a quantidade de caixas e quantas pilulas contidas dentro delas.

            expectedBoxEndDate DATE,           #Expectativa da data em que o remédio irá acabar caso o paciente siga o tratamento na risca.

            responsibleCreateRelation VARCHAR(45),      #Usado para registrar o usuário responsável que criou a relação.
            
            lodDate DATETIME(2) NOT NULL                #Usado para registrar o momento em que a relação foi criada.

        )" or die("<br> Erro ao criar a tabela Remedy X Treatment" . $link->connect_error);

            $create_Table_Remedy_x_Treatment = $linkNewDB->prepare($query_CreateTable_Remedy_x_Treatment);

            if($create_Table_Remedy_x_Treatment->execute()){

                echo "<p style='color: green;'> Tabela Remedy X Treatment criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Remedy X Treatment NÃO foi criada com sucesso </p>";

            }

//-----------------------------------------------------------------------------

    //Tratamento
        $query_CreateTable_Treatments  = "CREATE TABLE treatments(

            idTreatment INT AUTO_INCREMENT PRIMARY KEY,

            treatmentName VARCHAR(22), 
            treatmentStart DATE NOT NULL,
            treatmentEnd DATE,
            
            quantityPhasesTreatments INT,

            idPatient INT,
            patientName VARCHAR(33),

            idClinic INT,
            clinicResponsible VARCHAR(45),
            idProfessional INT,
            professionalResponsible VARCHAR(33),        #Usado para registrar o usuário responsável que criou o tratamento, pode ser tanto um médico quanto um enfermeiro. 
            
            lodDate DATETIME(2) NOT NULL,             #Usado para registrar o momento em que a relação foi criada.

            identificationNumber VARCHAR(45),
            remedyName VARCHAR(150),
            remedyMg VARCHAR(150),
            remedyQuantity INT,
            statusTreatment INT,
            treatmentEndReal VARCHAR(45)


        )" or die("<br> Erro ao criar a tabela Treatment" . $link->connect_error);

            $create_Table_Treatments = $linkNewDB->prepare($query_CreateTable_Treatments);

            if($create_Table_Treatments->execute()){

                echo "<p style='color: green;'> Tabela Treatment criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Treatment NÃO foi criada com sucesso </p>";

            }


    //Remedy
        $query_CreateTable_Remedys  = "CREATE TABLE remedys(

            idRemedy INT AUTO_INCREMENT PRIMARY KEY,

            remedyName VARCHAR(22), 
            remedyRegisterCode VARCHAR(45),     #Os remedios possuem um código de registro.
            remedyProviderName VARCHAR(45),
            remedyPharmacyResponsible VARCHAR(45),

            remedyComposition VARCHAR(45),      #Gramagem ou litragem do remédio.
            remedyPackingType VARCHAR(45),      #Tipo da embalagem. (Caixa, Pacote, Seringa)
            remedyQuantityContains INT,         #Quantidade de unidades dentro da embalagem.
            remedyBatchCode VARCHAR(20),        #Código do lote do remédio.

            remedyMaxTemperature DECIMAL(2,2),   #Temperatura máxima de conservação.

            validity DATE,
            manufacturingDate DATE,

            remedyTagName VARCHAR(100),         #Tag para facilitar buscas.
            leafletResume VARCHAR(150),

            lodDate DATETIME(2) NOT NULL                #Usado para registrar o momento em que a relação foi criada.

        )" or die("<br> Erro ao criar a tabela Remedys" . $link->connect_error);

            $create_Table_Remedys = $linkNewDB->prepare($query_CreateTable_Remedys);

            if($create_Table_Remedys->execute()){

                echo "<p style='color: green;'> Tabela Remedys criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela Remedys NÃO foi criada com sucesso </p>";

            }

//-----------------------------------------------------------------------------

    //Status account
        $query_CreateTable_StatusAccount  = "CREATE TABLE statusaccount(

            idAction INT AUTO_INCREMENT PRIMARY KEY,
            collaboratorResponsible VARCHAR(45) NOT NULL,
            clientID INT NOT NULL,
            clientName VARCHAR(45) NOT NULL,
            logDate DATE NOT NULL,
            statusAccount VARCHAR(45) NOT NULL,
            actionType VARCHAR(45) NOT NULL

        )" or die("<br> Erro ao criar a tabela StatusAccount" . $link->connect_error);

            $create_Table_StatusAccount = $linkNewDB->prepare($query_CreateTable_StatusAccount);

            if($create_Table_StatusAccount->execute()){

                echo "<p style='color: green;'> Tabela StatusAccount criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela StatusAccount NÃO foi criada com sucesso </p>";

            }


//---------------------------------------------------------------------------------

    //permissionrequest
        $query_CreateTable_PermisisonsRequest  = "CREATE TABLE permissionsrequest(

            idRequest INT AUTO_INCREMENT PRIMARY KEY,
            typeRequest VARCHAR(45) NOT NULL,
            idUserWhoCalls INT NOT NULL,
            idUserWhoCalled INT NOT NULL,
            statusRequest INT NOT NULL,
            statusComplement VARCHAR(45) NOT NULL,
            createdAt DATETIME(2),
            returnedAt DATETIME(2)

        )" or die("<br> Erro ao criar a tabela PermisisonsRequest" . $link->connect_error);

            $create_Table_PermisisonsRequest = $linkNewDB->prepare($query_CreateTable_PermisisonsRequest);

            if($create_Table_PermisisonsRequest->execute()){

                echo "<p style='color: green;'> Tabela PermisisonsRequest criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela PermisisonsRequest NÃO foi criada com sucesso </p>";

            }


    //treatmentpermissionsrequest
        
        $query_CreateTable_TreatmentPermissionsRequest  = "CREATE TABLE treatmentpermissionsrequest(

            idRequest INT AUTO_INCREMENT PRIMARY KEY,
            typeRequest VARCHAR(45) NOT NULL,
            idUserWhoCalls INT NOT NULL,
            idUserWhoCalled INT NOT NULL,
            statusRequest INT NOT NULL,
            statusComplement VARCHAR(45) NOT NULL,
            createdAt DATETIME(2),
            returnedAt DATETIME(2),
            idTreatment INT NOT NULL

        )" or die("<br> Erro ao criar a tabela TreatmentPermissionsRequest" . $link->connect_error);

            $create_Table_TreatmentPermissionsRequest = $linkNewDB->prepare($query_CreateTable_TreatmentPermissionsRequest);

            if($create_Table_TreatmentPermissionsRequest->execute()){

                echo "<p style='color: green;'> Tabela TreatmentPermissionsRequest criada com sucesso </p>";

            }else{

                echo "<p style='color: red;'> Tabela TreatmentPermissionsRequest NÃO foi criada com sucesso </p>";

            }











?>