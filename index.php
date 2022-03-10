<?php
$dateNaissance = "01-04-2001";
$aujourdhui = date("Y-m-d"); 
$diff = date_diff(date_create($dateNaissance), date_create($aujourdhui)); 
$perso = "<i class='fa-solid fa-house-laptop'></i><h5>Projet personnel</h5>";
$school = "<i class='fa-solid fa-school'></i><h5>Projet scolaire</h5>";
?>

<!DOCTYPE html>
<html id="top" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Hugo DELCROIX">
    <meta name="description"
        content="Voici mon portfolio numérisé. Vous y trouverez mes informations, formations, projets et moyens de contact.">
    <meta name="keywords" content="Hugo, DELCROIX, portfolio">
    <meta name="copyright" content="Hugo DELCROIX">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries/iphone12.css">

    <script src="script.js" defer></script>

    <link rel="stylesheet" href="css/css/all.min.css">

    <title>Hugo Delcroix</title>
</head>

<body>
    <header>
        <div class="langue">
            <a href="en/index.php"> English</a>
            <a id='langue-top' href="#langue-bot"><i class="fa-solid fa-language"></i></a>
            <a href="index.php"> Français</a>
        </div>

        <h1>Hugo Delcroix</h1>
        <h2>Étudiant en Informatique et Réseaux</h2>
        <div class="logo">
            <a target="_blank" id='deco-linkedin' href="https://www.linkedin.com/in/hugo-delcroix/"><i
                    class="fa-brands fa-linkedin"></i></a>
            <a target="_blank" id='deco-github' href="https://github.com/HugoDELCROIX"><i
                    class="fa-brands fa-github"></i></a>
            <a target="_blank" id='deco-insta' href="https://www.instagram.com/hugo.delcroix_pro/"><i
                    class="fa-brands fa-instagram"></i></a>
            <a id='deco-contact' href="fr/contact.php"><i class="fa-solid fa-paper-plane"></i></a>
        </div>
    </header>

    <section>
        <h1><i class="fa-solid fa-id-badge"></i> À propos de moi</h1>

        <div class="container-img-text container-aboutMe">
            <img src="images/pdp_lunette.jpg" alt="photo de profil">
            <p>Je m’appelle Hugo, j’ai
                <?=$diff->format('%y');?>
                ans.
                Je suis actuellement <b>étudiant en systèmes et réseau à l’Esaip, école
                    d’ingénieur du numérique</b>.
                <br>
                <br>
                J’ai vécu pendant 18 ans à <b>l’île de la Réunion</b> où j’ai eu mon bac mention Bien au <b>lycée
                    Lasalle
                    Saint-Charles</b>. Pendant mon enfance, je me suis pris d’une passion pour <b>l’informatique</b>.
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
                    modernité, de la technologie</b>. J'ai ce <b>souhait</b> de <b>rester à proximité des milieux qui
                    innovent</b> et évoluent au
                sein du numérique.
                <br>
                <br>
                Je compte me spécialiser dans la majeure <b>Cybersécurité</b> durant mon cycle ingénieur et continuer à
                apprendre
                dans le développement Web que ce soit <b>frontend ou backend</b>.</p>
        </div>
        <div class="container-logo">
            <h1><i class="fa-solid fa-bookmark"></i> Mes Centres d’intérêt : </h1>
            <div class="logo-list">
                <img src="images/logo/apple.png" alt="logo_apple">
                <img src="images/logo/tesla.png" alt="logo_tesla">
                <img src="images/logo/linux.png" alt="logo_linux">
                <img src="images/logo/microsoft.png" alt="logo_micrososft">
                <img src="images/logo/HTB.png" alt="logo_HackTheBox" style="border-radius: 10px;">
                <img src="images/logo/RolandGarros logo.png" alt="logo_Roland-Garros">
                <img src="images/logo/worldcup_logo.png" alt="logo_WorldCup">
            </div>

            <h1><i class="fa-solid fa-screwdriver-wrench"></i> Mes Outils : </h1>
            <div class="logo-list">

                <img src="images/logo/Fedora-logo.png" alt="logo_fedora">
                <img src="images/logo/vscode_logo.png" alt="logo_vscode">
                <img src="images/logo/github_logo.png" alt="logo_github">
                <img src="images/logo/office_logo.png" alt="logo_office">
                <img src="images/logo/brave_logo.png" alt="logo_brave">
                <img src="images/logo/androidstudio_logo.png" alt="logo_androidstudio">

            </div>
        </div>
        <div id="container-cv">
            <button>
                <a href="fr/cv.pdf" target="_blank">
                    <div class="cv card-footer">
                        <i class="fa-solid fa-file-pdf"></i>
                        <h6>Voir mon CV</h6>
                    </div>
                </a>
            </button>
        </div>
    </section>

    <section>
        <h1><i class="fa-solid fa-file-lines"></i> Mes compétences </h1>

        <div id="container-skills">
            <div id="list-right">
                <h3>Ce que je sais utiliser</h3>
                <li>HTML/CSS</li>
                <li>JAVA</li>
                <li>UML</li>
                <li>MySQL</li>
                <li>LaTex</li>
                <li>Pack Office</li>
            </div>
            <hr>
            <div id="list-left">
                <h3>Ce que j'apprends à utiliser</h3>
                <li>PHP</li>
                <li>MongoDB</li>
                <li>JavaScript</li>
                <li>Développement Android (Android Studio)</li>
                <li>HackTheBox</li>
            </div>
        </div>
    </section>

    <section>
        <h1><i class="fas fa-user-graduate"></i> Éducation</h1>

        <div class="container-img-text container-list">
            <img src="images/logo/logo_VIA.png" alt="logo_esaip">
            <div class="list-formation">
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
                    <li>Création d'un blog sur le séjour d'études <a href=#dan_project> (En savoir plus)</a></li>
                </ul>
            </div>

        </div>
        <div class="container-img-text container-list">
            <img src="images/logo/logo_ESAIP_INGENIEUR_RVB_2016.png" alt="logo_esaip">
            <div class="list-formation">
                <h4><b>ESAIP, école d'ingénieurs du numérique et de la prévention des risques </b> <br> </h4>
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
        <div class="container-img-text container-list">
            <img src="images/logo/gouv_logo.png" alt="logo_gouv">
            <p>
                <b> 2019 :</b> Obtention d'un bac scientifique mention Bien au sein du <b>Lycée Lasalle
                    Saint-Charles</b>. <br> <br>
                <b> 2017 & 2018 :</b> Voyage scolaire en Afrique du Sud avec obtention d'une <b>certification de
                    niveau d'anglais B1 </b>. <br> <br>
                <b> 2015 :</b> Voyage scolaire en Australie. <br>
            </p>

        </div>

    </section>


    <section>
        <div id="exp_pro">
            <h1><i class="fas fa-hard-hat"></i> Expérience professionnelle</h1>
            <div class="container-img-text container-list">
                <img src="images/france.png" alt="france_flag">
                <div class="list-formation">
                    <h4><b>Stage : </b> </h4>
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
    </section>

    <section>
        <h1><i class="fas fa-project-diagram"></i> Mes projets</h1>
        <div id="container-projects">
            <a href="fr/projets/pendule/Projet_Science_3.pdf" target="blank">
                <div class="container-img-text container-card">
                    <img src="images/miniature_pendule.png" alt="pendule">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Le Pendule Oscillatoire · <span> 2020</span>
                            </h3>
                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Création d'un pendule oscillatoire lors de mon cycle préparatoire</h4>
                        <p>
                            Le projet consiste à
                            créer un pendule oscillatoire et d'y apporter un questionnement scientifique sur son
                            fonctionnement et ce que l'on peut en tirer.
                        </p>
                    </div>
                </div>
            </a>
            <a href="fr/projets/huitre/index.html" target="blank">
                <div class="container-img-text container-card">
                    <img src="images/huitre1.jpg" alt="">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Les Huîtres · <span> 2021</span>
                            </h3>
                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Création d'un site internet lors de mon cycle ingénieur</h4>
                        <p>
                            Le projet consiste à développer un site internet entierement et seulement grâce la
                            technologie HTML/CSS.
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/SiteHuitres" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>Lien vers le dépot GitHub</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="index.php" target="blank">
                <div class="container-img-text container-card">
                    <img src="images/dev_web_miniature.jpg" alt="code">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Portfolio · <span> Actif </span>
                            </h3>
                            <div class=" card-header-icon"><?=$perso?></div>
                        </div>
                        <h4>Création de ce site internet</h4>
                        <p>
                            Portfolio qui répertorie mes formations, compétences, moyens de contacts et mes créations.
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/Portfolio" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>Lien vers le dépot GitHub</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="#container-projects" target="blank">
                <div class="container-img-text container-card">
                    <img src="images/jeu_societe.jpg" alt="">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Citadelle · <span> 2021</span>
                            </h3>

                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Création d'un jeu de société en cyle ingénieur</h4>
                        <p>
                            Le projet consiste à créer le jeu de societe "Citadelle" grâce au langage Java.
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/Citadelle" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>Lien vers le dépot GitHub</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="http://horsensei.online" target="blank">
                <div id="dan_project" class="container-img-text container-card">
                    <img src="images/drapeau_danemark.jpeg" alt="">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Erasmus au Danemark · <span> Actif</span>
                            </h3>
                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Création d'un blog lors de mon séjour Erasmus</h4>
                        <p>
                            Le projet consiste à créer un site internet, sous forme de blog, qui repertorie nos
                            activités et découvertes au Danemark.
                        </p>
                        <button>
                            <a href="https://github.com/Rhylionn/denmark-blog" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>Lien vers le dépot GitHub</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="#container_projects" target="blank">
                <div class="container-img-text container-card">
                    <img src="images/android_project.jpg" alt="">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Cours Android Studio · <span> Actif</span>
                            </h3>
                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Documentation et Exercices</h4>
                        <p>
                            Ce projet contient toute la documentation et les exercices de mon apprentissage du
                            développement d'application mobile.
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/AndroidStudio" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>Lien vers le dépot GitHub</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <header>
        <div class="langue">
            <a href="en/index.php"> English</a>
            <a id='langue-bot' href="#langue-top"><i class="fa-solid fa-language"></i></a>
            <a href="index.php"> Français</a>
        </div>
    </header>

    <footer>
        <div id="version">
            <a href="https://github.com/HugoDELCROIX/Portfolio/releases" target="_blank">
                <i class="fa-solid fa-code-branch"></i>
                <p id="versionNumber"></p>
            </a>
        </div>

    </footer>
</body>

</html>