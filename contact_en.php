<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <link rel="icon" href="images/logo/mailbox.ico">
    <link rel="stylesheet" href="contact_me.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

</head>

<body>


    <?php
if (
    (!isset($_GET['mail_add']) || !filter_var($_GET['mail_add'], FILTER_VALIDATE_EMAIL))
    || !isset($_GET['message']) || empty($_GET['message']) 
    || !isset($_GET['firstname']) || empty($_GET['firstname']) 
    || !isset($_GET['lastname']) || empty($_GET['lastname'])
    )
    {
        echo("<div id='bloc_ifnot'>  
        <h1> <i class='bi bi-envelope'></i> Your message was not sent ! </h1>
        <h5><b> Please make sure all your informations are correcly entered : </b></h5>");

        if (!isset($_GET['firstname']) || empty($_GET['firstname'])){
            echo("<p><b>Firstname : <span class='erreur' >EMPTY <i class='bi bi-exclamation-circle-fill'></i></span></b></p>");
        } else {
            echo("<p><b>Firstname</b> : " . $_GET['firstname'] . " <b> <i class='bi bi-check-lg'></i></b></p>");
        }

        if (!isset($_GET['lastname']) || empty($_GET['lastname'])){
            echo("<p><b>Surname : <span class='erreur' >EMPTY <i class='bi bi-exclamation-circle-fill'></i></span></b></p>");
        } else {
            echo("<p><b>Surname</b> : " . $_GET['lastname'] . " <b> <i class='bi bi-check-lg'></i></b></p>");
        }

        if (!isset($_GET['mail_add']) || !filter_var($_GET['mail_add'], FILTER_VALIDATE_EMAIL)){
            echo("<p><b>Mail : <span class='erreur' >Incorrect mail address <i class='bi bi-exclamation-circle-fill'></i></span></b></p>");
        } else {
            echo("<p><b>Mail</b> : " . $_GET['mail_add'] . " <b> <i class='bi bi-check-lg'></i></b></p>");
        }

        if (!isset($_GET['message']) || empty($_GET['message'])){
            echo("<p><b>Message : <span class='erreur'> Not any message entered <i class='bi bi-exclamation-circle-fill'></i></span></b></p>");
        } else {
            echo("<p><b>Message</b> : " . $_GET['message'] . " <b> <i class='bi bi-check-lg></i></b></p>");
        }
        return;
    }
    
?>
    <div id="bloc">
        <div id="titre">
        
        <h1><i class="bi bi-envelope"></i> Received !</h1>
        </div>
        <div>
            <h5>Recap of your informations : </h5>
            <p><b>Firstname</b> : <?php echo $_GET['firstname']; ?> <b> <i class="bi bi-check-lg"></i></b></p>
            <p><b>Surname</b> : <?php echo $_GET['lastname']; ?><b> <i class="bi bi-check-lg"></i></b></p>
            <p><b>Mail</b> : <?php echo $_GET['mail_add']; ?><b> <i class="bi bi-check-lg"></i></b></p>
            <p><b>Message</b> :
            <div class="message">
                 <?php echo $_GET['message']; ?></p>
            </div>
        </div>
    </div>
</body>

</html>