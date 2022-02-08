<!DOCTYPE html>
<html id="top" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_portfolio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="formulaire_mail.css">
    <link rel="icon" href="images/logo/pc_logo.ico">
    <script src="https://kit.fontawesome.com/720b44c480.js" crossorigin="anonymous"></script>
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
            <!-- <a id="deco_mail" href="#bloc_mail"> <i class="bi bi-envelope-fill"> </i></a> -->
        </div>
    </header>

    <div id="bloc">
        <h1><i class="fas fa-user"></i>  À propos de moi</h1>
        <div id="contenu_about_me">
            <img src="images/pdp_lunette.jpg" alt="photo de profil">
            <p>Je m’appelle Hugo, j’ai
                <?php
                $dateNaissance = "01-04-2001";
                $aujourdhui = date("Y-m-d");
                $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
                echo $diff->format('%y');
            ?>
                ans.
                Je suis actuellement <b>étudiant en systèmes et réseau à l’Esaip, école
                    d’ingénieur du numérique.</b>
                <br>
                <br>
                J’ai vécu pendant 18 ans à <b>l’île de la Réunion</b> où j’ai eu mon bac mention Bien au <b>lycée
                    Lasalle
                    Saint-Charles</b> . Pendant mon enfance, je me suis pris d’une passion pour <b>l’informatique</b> .
                Il m’est déjà arrivé
                de rester des journées entières sur mon ordinateur alors que mes amis me proposaient de profiter du
                soleil
                sur les plages réunionnaises. J'ai très tôt voulu que mon <b>activité professionnelle</b> se base sur le
                <b>numérique</b>
                et c’est chose faite aujourd’hui.
                <br>
                <br>
                J’ai choisi de m’installer en <b>Métropole</b> pour faire mes études supérieures mais aussi <b>me
                    rapprocher de la
                    modernité, de la technologie</b> . J'ai ce <b>souhait</b> de <b>rester à proximité des milieux qui
                    innovent</b> et évoluent au
                sein du numérique.
                <br>
                <br>
                Je compte me spécialiser dans la majeure <b>Cybersécurité</b> durant mon cycle ingénieur et continuer à
                apprendre
                dans le développement Web que ce soit <b>frontend ou backend</b> .</p>
        </div>
        <h2><i class="fas fa-globe-europe"></i>  Mes Centres d’intérêt :  </h2>
        <div id="centres_interet">
            <img src="images/logo/apple.png" alt="logo_apple">
            <img src="images/logo/tesla.png" alt="logo_tesla">
            <img src="images/logo/linux.png" alt="logo_linux">
            <img src="images/logo/RolandGarros logo.png" alt="logo_Roland-Garros">
            <img src="images/logo/logo-Meta.png" alt="logo_meta">
            <img src="images/logo/microsoft.png" alt="logo_micrososft">
        </div>
    </div>

    <div id="bloc">

        <h1><i class="fas fa-book"></i>  Mes compétences  </h1>
        <div id="titre_liste">
            <h3>Cette liste est en constante évolution :</h3>
        </div>
        <div id="contenu_competences">
            <div class="liste liste_competences_c1">
                <div class="icon_liste">
                    <h3>Ce que je sais utiliser</h3>
                </div>
                <li>Anglais B2 (TOEIC)</li>
                <li>HTML/CSS</li>
                <li>JAVA</li>
                <li>UML</li>
                <li>LaTex</li>
                <li>Pack Office</li>
            </div>
            <hr>
            <div class="liste liste_competences_c2">
                <h3>Ce que j'apprends à utiliser</h3>
                <li>MySQL</li>
                <li>PHP</li>
                <li>HackTheBox</li>
            </div>
        </div>
    </div>

    <div id="bloc">
        <h1><i class="fas fa-user-graduate"></i>  Éducation</h1>
        <div id="bloc_formation">
            <div id="contenu_formation">
                <img src="images/logo/logo_VIA.png" alt="logo_esaip">
                <div class="liste">
                    <h4><b>VIA University College</b> <br> </h4>
                    <p>
                        <b>Février à Juin 2022 :</b> Ingénierie Logicielle :<br>
                    </p>
                    <ul>
                        <li>Développement Android</li>
                        <li>Informatique Décisionnelle</li>
                        <li>Bases de données non SQL et relationnelles</li>
                        <li>Conception Web réactive</li>
                        <li>Processus d'ingénierie Web</li>
                        <li>Management de projets en Ingénierie Informatique</li>
                        <li>Création d'un blog sur le séjour d'études <a href="#mes_projets"> (En savoir plus)</a></li>
                    </ul>
                </div>

            </div>
            <div id="contenu_formation">
                <img src="images/logo/logo_ESAIP_INGENIEUR_RVB_2016.png" alt="logo_esaip">
                <div class="liste">
                    <h4><b>ESAIP, école d'ingénieurs du numérique et de la prévention des risques : </b> <br> </h4>
                    <p>
                        <b>2021 - Aujourd'hui :</b> Cycle Ingénieur du numérique : <br>
                    </p>
                    <ul>
                        <li>Analyse mathématiques et Algèbre</li>
                        <li>Dévelopement Web frontend : HTML/CSS</li>
                        <li>Programmation orientée objet : JAVA</li>
                        <li>Gestion de Bases de données : SQL</li>
                    </ul>
                    <p>
                        <b>2019 - 2021 :</b> Classe préparatoire :
                    </p>
                    <ul>
                        <li>Analyse mathématiques et Algèbre</li>
                        <li>Mécanique des mouvements</li>
                        <li>Apprentissage de l'Anglais</li>
                        <li>Introduction à la gestion de projets</li>
                        <li>Science de l'entreprise et éthique professionnelle</li>
                        <li>Stage en entreprise de 1 mois <a href="#exp_pro"> (En savoir plus)</a></li>
                    </ul>
                </div>

            </div>
            <div id="contenu_formation">
                <img src="https://www.education.gouv.fr/sites/default/files/site_logo/2020-07/Logo-MENJ-TRICOLORE.png"
                    alt="logo_gouv">
                <p>
                    <b> 2019 :</b> Obtention d'un bac scientifique mention Bien au sein du <b>Lycée Lasalle
                        Saint-Charles</b>. <br>
                    <b> 2017 & 2018 :</b> Voyage scolaire en Afrique du Sud avec obtention d'une <b>certification de
                        niveau d'anglais B1 </b>. <br>
                    <b> 2015 :</b> Voyage scolaire en Australie. <br>
                </p>

            </div>
        </div>
    </div>

    <div id="bloc">
        <div id="exp_pro">
            <h1><i class="fas fa-hard-hat"></i>  Expérience professionnelle</h1>
            <div id="contenu_formation">
                <img src="images/kdr.png" alt="logo_KDR">
                <div class="liste">
                    <h4><b>Stages : </b> <br> </h4>
                    <p>
                        <b>Avril 2020</b> - <b>K.D.R Électricité : </b> Magasin de matériel électrique et de chantier
                    </p>
                    <ul>
                        <li>Vendre et informer le client</li>
                        <li>Gestion du stock</li>
                        <li>Arranger et soigner les rayons</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="bloc">
        <div id="mes_projets"></div>
        <h1><i class="fas fa-project-diagram"></i>  Mes projets</h1>
        <div class="box_projet">
            <div id="liste_projet">
                <a href="projets/pendule/projet_pendule-fr.php" target="blank">
                    <div class="projet projet-1">
                        <div class="misc">
                            <div class="misctext">
                                <h4 class="title">
                                    Création d'un pendule oscillatoire
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="projets/huitre/index.html" target="blank">
                    <div class="projet projet-2">
                        <div class="misc">
                            <div class="misctext">
                                <h4 class="title">
                                    Création d'un site en utilisant la technologie HTML/CSS
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="http://horsensei.online" target="blank">
                    <div class="projet projet-3">
                        <div class="misc">
                            <div class="misctext">
                                <h4 class="title">
                                    Blog sur mon séjour d'études au Danemark
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- <div id="bloc_mail">
        <h1>Me contacter</h1>
        <form action="contact_fr.php" method="POST">

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
    </div> -->

    <header>
        <div id="langue">
            <a href="index.php"> English</a>
            <a id='langue_bot' href="#top"><i class="bi bi-translate"></i></a>
            <a href="fr.php"> French</a>
        </div>
    </header>


</body>

</html>