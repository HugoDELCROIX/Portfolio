<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_contact.css">
    <link rel="stylesheet" href="../css/mediaqueries/iphone12.css">
    <link rel="stylesheet" href="../css/css/all.min.css">
    <link rel="icon" href="../images/logo/circle-h-solid.svg">
    <title>Me contacter</title>
</head>

<body>
    <section>
        <h1><i class="fa-solid fa-address-book"></i> Me contacter</h1>
        <div id="contact">
            <?php
            if ( isset($_POST['submit']) ) {
                $data = array(
            'secret' => "0x1D21f5357Fd0d050370492ac0ECE7DA48B7e1d78",
            'response' => $_POST['h-captcha-response']
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://hcaptcha.com/siteverify");
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            $responseData = json_decode($response);
            if($responseData->success) {
                echo "<h3>Mon adresse mail : <span>contact@hugodelcroix.fr</span></h3>
                <h3>Mon téléphone : <span>07 66 33 20 47</span></h3>
                <button>
                    <a href='mailto:contact@hugodelcroix.fr' target='_blank'>M'envoyer un mail</a>
                </button>";   
            } else {
                echo 'Robot verification failed, please try again.';
            }
        }
        ?>

            <form action="" method="POST">
                <div class="h-captcha" data-sitekey="53b15ea6-027e-438c-a1ca-3f7aea8569e3"></div>
                <input type="submit" name="submit" value="Afficher mes informations"/>
            </form>
            <script src="https://hcaptcha.com/1/api.js" async defer></script>
        </div>
    </section>

    <button><a href="../index.php">Revenir à la page principale</a></button>
</body>

</html>