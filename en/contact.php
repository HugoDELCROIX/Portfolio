<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_contact.css">
    <link rel="stylesheet" href="../css/mediaqueries/iphone12.css">
    <link rel="stylesheet" href="../css/css/all.min.css">
    <title>Me contacter</title>
</head>

<body>
    <section>
        <h1><i class="fa-solid fa-address-book"></i> Contact Me</h1>
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
                echo "<h3>Mail address : <span>hugo.delcroix@hotmail.com</span></h3>
                <h3>Phone : <span>+33 (0)7 66 33 20 47</span></h3>
                <button>
                    <a href='mailto:hugo.delcroix@hotmail.com' target='_blank'>Send me a mail</a>
                </button>";   
            } else {
                echo 'Robot verification failed, please try again.';
            }
        }
        ?>

            <form action="" method="POST">
                <div class="h-captcha" data-sitekey="53b15ea6-027e-438c-a1ca-3f7aea8569e3"></div>
                <input type="submit" name="submit" value="Show my informations"/>
            </form>
            <script src="https://hcaptcha.com/1/api.js" async defer></script>
        </div>
    </section>

    <button><a href="../en/index.php">Go Back Home</a></button>
</body>

</html>