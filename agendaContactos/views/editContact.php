<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto online</title>
    <link rel="shortcut icon" href="images/telephonered.png" type="image/x-icon">

    <!--Style CSS-->
    <link rel="stylesheet" href="styles/modal.css" media="all">
    <link rel="stylesheet" href="styles/alert.css" media="all">
    <link rel="stylesheet" href="styles/login.css" media="all">
    <link rel="stylesheet" href="styles/header.css" media="all">
    <link rel="stylesheet" href="styles/addContact.css" media="all">

</head>

<body id="body">
  
    <?php include ("header.php"); ?>
    <?php include ("../includes/alert.php") ?>

    <?php 

    if($_SESSION["arryContacts"]){
        $arrayContacts=$_SESSION["arryContacts"];
        foreach($arrayContacts as $data){
            if($data["contactId"]==$_GET["id"]){ //We use the GET method because the id is sended by url
                $contactName=$data["contactName"];
                $phoneNumber=$data["phoneNumber"];
                $email=$data["email"];
                $contactId=$data["contactId"];
                //Configure the session variables
                 $_SESSION["contactId"]=$contactId;
                

                // $_SESSION["contactName"]=$contactName;
                // $_SESSION["phoneNumber"]=$phoneNumber;
                // $_SESSION["email"]=$email;
               
            }
        }
    }
    ?>
   
    <form id="formAddContact" class="form flexColumn" onsubmit="return validateAddition()"
        action="../includes/editContactHandler.php" method="post" tabindex="0" onclick="closeSideBar()">
        <h1 id="titleContact" class="title">Editar contacto</h1>
        <div class="containerInput">
            <label for="nome" class="label">Nome</label>
            <input type="text" name="nome" id="userName" class="input" value="<?php echo $contactName?>"/>
        </div>

        <div class="containerInput">
            <label for="telefone" class="label">Telefone</label>
            <input type="number" name="telefone" id="phoneNumber" class="input" value="<?php echo $phoneNumber?>"/>
        </div>

        <div class="containerInput">
            <label for="email" class="label">Email</label>
            <input type="text" name="email" id="email" class="input" value="<?php echo $email?>"/>
        </div>

        <!--Output section-->
        <div id="containerOutput" class="flexRow">
            <input type="submit" id="buttonSave" class="button buttonOrange" value="Actualizar"></input>
            <input id="buttonClean" class="button buttonRed" value="Limpar" onclick="cleanFieldsByClassName('input')"></input>
        </div>

    </form>
    <?php include ("footer.php") ?>
    <?php include ("modal.php") ?>
</body>

<!--Javascript-->
<script src="javascript/header.js"></script>
<script src="javascript/validation.js"></script>
<script src="javascript/login.js"></script>
<script src="javascript/addContact.js"></script>

</html>