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
        <h1> Votre message ne s'est pas envoyé !</h1>
        <h5><b> Veuillez vérifier les informations que vous avez rempli toutes les informations ci-dessous :</b></h5>
        <p><b>Prénom</b> : " . $_GET['firstname'] . "</p>
        <p><b>Nom</b> : " . $_GET['lastname'] . "</p>
        <p><b>Email</b> : " . $_GET['mail_add'] . "</p>
        <p><b>Message</b> : " . $_GET['message'] . "</p>
        </div>");
        return;
    }
    
?>
    <div id="bloc">
        <div id="titre">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2ecc71"
                class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                <path
                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z" />
                <path
                    d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
            </svg>
            <h1>Message bien reçu !</h1>
        </div>
        <div>
            <h5>Rappel de vos informations</h5>
            <p><b>Prénom</b> : <?php echo $_GET['firstname']; ?></p>
            <p><b>Nom</b> : <?php echo $_GET['lastname']; ?></p>
            <p><b>Email</b> : <?php echo $_GET['mail_add']; ?></p>
            <p><b>Message</b> :
            <div class="message">
                 <?php echo $_GET['message']; ?></p>
            </div>
        </div>
    </div>
</body>

</html>