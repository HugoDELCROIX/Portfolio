<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <link rel="icon" href="images/logo/mailbox.ico">
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
        echo('Il faut un email et un message valides pour soumettre le formulaire.');
        return;
    }
    
?>
<h1>Message bien reçu !</h1>

<div class="card">
    
    <div class="card-body">
        <h5 class="card-title">Rappel de vos informations</h5>
        <p class="card-text"><b>firstname</b> : <?php echo $_GET['firstname']; ?></p>
        <p class="card-text"><b>Last name</b> : <?php echo $_GET['lastname']; ?></p>
        <p class="card-text"><b>Email</b> : <?php echo $_GET['mail_add']; ?></p>
        <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
    </div>
</div>
</body>
</html>