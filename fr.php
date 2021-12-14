<!DOCTYPE html>
<html id="top" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_portfolio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/formulaire_mail.css">
    <link rel="icon" href="images/logo/pc_logo.ico">
    <title>Hugo Delcroix</title>
</head>

<body>
    <header>
        <div id="langue">
            <a href="index.php"> English</a>
            <a id='langue_top' href="#langue_bot"><i class="bi bi-translate"></i></a>
            <a href="fr.php"> French</a>
        </div>

        <h1>Hugo Delcroix</h1>
        <h2>Étudiant en Informatique et Réseaux</h2>
        <div class="logo">
            <a target="_blank" id='deco_linkedin' href="https://www.linkedin.com/in/hugo-delcroix/"><i
                    class="bi bi-linkedin"></i></a>
            <a target="_blank" id='deco_github' href="https://github.com/HugoDELCROIX"><i class="bi bi-github"></i></a>
            <a target="_blank" id='deco_insta' href="https://www.instagram.com/hugo.delcroix_pro/"><i
                    class="bi bi-instagram"></i></a>
            <a id="deco_mail" href="#bloc_mail"> <i class="bi bi-envelope-fill"> </i></a>

        </div>
    </header>

    <div id="bloc">
        <h1>À propos de moi</h1>
        <div id="contenu_about_me">
            <img src="images/pdp_lunette.jpg" alt="photo de profil">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellendus non earum molestiae
                placeat
                rem amet facere voluptatibus? Doloribus culpa, libero quis obcaecati enim neque aut beatae ad accusamus
                provident. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio blanditiis adipisci
                voluptatem dolores excepturi iure quidem voluptatibus, omnis quos ea eum officia commodi, accusamus
                maxime atque! Cum, distinctio nobis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia
                rem repudiandae, eveniet hic consequatur dignissimos amet eius voluptatem esse blanditiis quaerat
                suscipit? Consectetur expedita quas necessitatibus nostrum, molestias nesciunt eos. Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Modi, accusantium vitae! Dicta pariatur nesciunt blanditiis ipsa
                voluptate cum, dolore quos vero excepturi quis, accusantium ipsam iure numquam ducimus modi quia.</p>
        </div>
    </div>

    <div id="bloc">
        <h1>Education</h1>
        <div id="bloc_formation">
            <div id="contenu_formation">
                <img src="images/logo/logo_ESAIP_INGENIEUR_RVB_2016.png" alt="logo_esaip">
                <p></p>
            </div>
            <div id="contenu_formation">
                <img src="https://www.education.gouv.fr/sites/default/files/site_logo/2020-07/Logo-MENJ-TRICOLORE.png"
                    alt="logo_gouv">
                <p></p>
            </div>
        </div>
    </div>
    </div>

    <div id="bloc_mail">
        <h1>Me contacter</h1>
        <form action="Contact_fr.php" method="GET"> 

            <div id="name_mail">
                <div id="fname">
                    <label for="fname"></label>
                    <input type="text" id="fname" name="firstname" placeholder="Prénom..">
                </div>
                <div id="lname">
                    <label for="lname"></label>
                    <input type="text" id="lname" name="lastname" placeholder="Nom..">
                </div>
            </div>
            <label for="mail_add"></label>
            <input type="email" id="mail_add" name="mail_add" placeholder="Votre adresse mail..">

            <label for="message"></label>
            <textarea id="message" name="message" placeholder="Votre message.." style="height:200px"></textarea>

            <input type="submit" value="Envoyer">
        </form>
    </div>
    <header>
        <div id="langue">
            <a href="index.php"> English</a>
            <a id='langue_bot' href="#top"><i class="bi bi-translate"></i></a>
            <a href="fr.php"> French</a>
        </div>
    </header>


</body>

</html>