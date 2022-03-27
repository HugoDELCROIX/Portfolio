<?php
$dateNaissance = "01-04-2001";
$aujourdhui = date("Y-m-d"); 
$diff = date_diff(date_create($dateNaissance), date_create($aujourdhui)); 
$perso = "<i class='fa-solid fa-house-laptop'></i><h5>Personal project</h5>";
$school = "<i class='fa-solid fa-school'></i><h5>School project</h5>";
?>

<!DOCTYPE html>
<html id="top" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Hugo DELCROIX">
    <meta name="description"
        content="Voici mon portfolio numérisé. Vous y trouverez mes informations, formations, projets et moyens de contact.">
    <meta name="keywords" content="Hugo, DELCROIX, portfolio">
    <meta name="copyright" content="Hugo DELCROIX">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mediaqueries/iphone12.css">
    <link rel="stylesheet" href="../css/carousel.css">

    <script src="../script.js" defer></script>

    <link rel="stylesheet" href="../css/css/all.min.css">

    <title>Hugo Delcroix</title>
</head>

<body>
    <header>
        <div class="langue">
            <a href="index.php"> English</a>
            <a id='langue-top' href="#langue-bot"><i class="fa-solid fa-language"></i></a>
            <a href="../index.php"> Français</a>
        </div>

        <h1>Hugo Delcroix</h1>
        <h2>IT Engineering student</h2>
        <div class="logo">
            <a target="_blank" id='deco-linkedin' href="https://www.linkedin.com/in/hugo-delcroix/"><i
                    class="fa-brands fa-linkedin"></i></a>
            <a target="_blank" id='deco-github' href="https://github.com/HugoDELCROIX"><i
                    class="fa-brands fa-github"></i></a>
            <a target="_blank" id='deco-insta' href="https://www.instagram.com/hugo.delcroix_pro/"><i
                    class="fa-brands fa-instagram"></i></a>
            <a target="_blank" id='deco-stack' href="https://stackoverflow.com/users/18420554/hugod"><i
                    class="fa-brands fa-stack-overflow"></i></a>
            <a id='deco-contact' href="contact.php"><i class="fa-solid fa-paper-plane"></i></a>
        </div>
    </header>

    <section>
        <h1><i class="fa-solid fa-id-badge"></i> About me</h1>

        <div class="container-img-text container-aboutMe">
            <img src="../images/pdp_lunette.jpg" alt="photo de profil">
            <p>My name is Hugo, I'm
                <?=$diff->format('%y');?>
                years old.
                I'm currently <b> studying systems and networks at Esaip, a digital engineering school.</b>

                <br>
                <br>
                I lived for 18 years in <b>Reunion Island</b> where I graduated with honours from <b> Lasalle
                    Saint-Charles high
                    school</b>. During my childhood, I became passionate about <b>computers</b>. It happened to me to
                stay entire days
                on my computer while my friends proposed me to enjoy the sun on the beaches of Reunion Island. Very
                early on, I wanted my <b>professional activity</b> to be based on <b>digital technology</b> and it is
                now a reality.

                <br>
                <br>
                I chose to move to <b>Metropolitan France</b> to do my higher education but also <b>to get closer to
                    modernity and
                    technology</b>. I want to stay close to the places that <b>innovate and evolve within the digital
                    world</b>.

                <br>
                <br>
                I intend to specialise in the <b>Cybersecurity</b> major during my engineering degree and to continue
                learning
                about web development, whether it be <b>frontend or backend</b>.</p>
        </div>
        <div class="container-logo">
            <h1><i class="fa-solid fa-bookmark"></i> My Interests : </h1>
            <div class="logo-list">
                <img src="../images/logo/apple.png" alt="logo_apple">
                <img src="../images/logo/tesla.png" alt="logo_tesla">
                <img src="../images/logo/linux.png" alt="logo_linux">
                <img src="../images/logo/microsoft.png" alt="logo_micrososft">
                <img src="../images/logo/HTB.png" alt="logo_HackTheBox" style="border-radius: 10px;">
                <img src="../images/logo/RolandGarros logo.png" alt="logo_Roland-Garros">
                <img src="../images/logo/worldcup_logo.png" alt="logo_WorldCup">
            </div>

            <h1><i class="fa-solid fa-screwdriver-wrench"></i> My Tools : </h1>
            <div class="logo-list">

                <img src="../images/logo/Fedora-logo.png" alt="logo_fedora">
                <img src="../images/logo/bash.png" alt="logo_bash">
                <img src="../images/logo/vscode_logo.png" alt="logo_vscode">
                <img src="../images/logo/github_logo.png" alt="logo_github">
                <img src="../images/logo/stack_logo.png" alt="logo_stackOverflow">
                <img src="../images/logo/office_logo.png" alt="logo_office">
                <img src="../images/logo/brave_logo.png" alt="logo_brave">
                <img src="../images/logo/androidstudio_logo.png" alt="logo_androidstudio">

            </div>
        </div>
        <div id="container-cv">
            <button>
                <a href="resume.pdf" target="_blank">
                    <div class="cv card-footer">
                        <i class="fa-solid fa-file-pdf"></i>
                        <h6>See my resume</h6>
                    </div>
                </a>
            </button>
        </div>
    </section>

    <section>
        <h1><i class="fa-solid fa-file-lines"></i> My skills </h1>

        <div id="container-skills">
            <div id="list-right">
                <h3>What I can use </h3>
                <li>HTML/CSS</li>
                <li>JAVA</li>
                <li>UML</li>
                <li>MySQL</li>
                <li>LaTex</li>
                <li>Pack Office</li>
            </div>
            <hr>
            <div id="list-left">
                <h3>What I'm learning to use </h3>
                <li>PHP</li>
                <li>MongoDB</li>
                <li>JavaScript</li>
                <li>Android Development (Android Studio)</li>
                <li>HackTheBox</li>
            </div>
        </div>
    </section>

    <section>
        <h1><i class="fas fa-user-graduate"></i> Education</h1>

        <div class="container-img-text container-list">
            <img src="../images/logo/logo_VIA.png" alt="logo_esaip">
            <div class="list-formation">
                <h4><b>VIA University College</b> <br> </h4>
                <p>
                    <b>February to June 2022:</b> Software Engineering :<br>
                </p>
                <ul>
                    <li>Android development</li>
                    <li>Business Intelligence</li>
                    <li>Non-SQL and relational databases</li>
                    <li>Responsive Web Design</li>
                    <li>Web engineering process</li>
                    <li>Project Management in IT Engineering</li>
                    <li>Creation of a blog on the study trip <a href="#dan_project"> (More information)</a></li>
                </ul>
            </div>

        </div>
        <div class="container-img-text container-list">
            <img src="../images/logo/logo_ESAIP_INGENIEUR_RVB_2016.png" alt="logo_esaip">
            <div class="list-formation">
                <h4><b>ESAIP, Digital and Risk Prevention Engineering School </b> <br> </h4>
                <p>
                    <b>2021 - Today:</b> Digital Engineering Cycle : <br>
                </p>
                <ul>
                    <li>Mathematical analysis and algebra</li>
                    <li>Frontend web development : HTML/CSS</li>
                    <li>Object-oriented programming: JAVA</li>
                    <li>Database management: SQL</li>
                </ul>
                <p>
                    <b>2019 - 2021:</b> Preparatory class:
                </p>
                <ul>
                    <li>Mathematical Analysis and Algebra</li>
                    <li>Mechanics of motion</li>
                    <li>Learning English</li>
                    <li>Introduction to project management</li>
                    <li>Business science and professional ethics</li>
                    <li>1 month internship <a href="#exp_pro"> (More information)</a></li>
                </ul>
            </div>

        </div>
        <div class="container-img-text container-list">
            <img src="../images/logo/gouv_logo.png" alt="logo_gouv">
            <p>
                <b> 2019 :</b> Obtained a scientific baccalaureate with honours at the <b>Lycée Lasalle
                    Saint-Charles</b>. <br> <br>
                <b> 2017 & 2018 :</b> School trip to South Africa with <b>a certification of English level B1 </b>. <br>
                <br>
                <b> 2015 :</b> School trip to Australia. <br>
            </p>

        </div>

    </section>


    <section>
        <div id="exp_pro">
            <h1><i class="fas fa-hard-hat"></i> Professional experience</h1>
            <div class="container-img-text container-list">
                <img src="../images/france.png" alt="france_flag">
                <div class="list-formation">
                    <h4><b>Internship : </b> </h4>
                    <p>
                        <b>April 2020</b> - <b>K.D.R Électricité : </b> Electrical and construction equipment shop
                    </p>
                    <ul>
                        <li>Selling and informing the customer</li>
                        <li>Managing the stock</li>
                        <li>Arranging and looking after the shelves</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h1><i class="fas fa-project-diagram"></i> My Projects</h1>
        <div id="container-projects">
            <a href="../en/projects/pendule/Projet_Science_3.pdf" target="blank">
                <div class="container-img-text container-card">
                    <img src="../images/miniature_pendule.png" alt="pendule">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                The Oscillating Pendulum · <span> 2020</span>
                            </h3>
                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Creating an oscillating pendulum during my preparatory cycle</h4>
                        <p>
                            The project consists of creating an oscillating pendulum and bringing to it scientific
                            questions about how it works and what can be learned from it.
                        </p>
                    </div>
                </div>
            </a>
            <a href="../en/projects/huitre/index.html" target="blank">
                <div class="container-img-text container-card">
                    <img src="../images/huitre1.jpg" alt="oyster">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                The Oysters · <span> 2021</span>
                            </h3>
                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Creation of a website during my engineering studies</h4>
                        <p>
                            The project consists in developing a website entirely and only through HTML/CSS.
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/SiteHuitres" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>GitHub Repository</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="https://github.com/HugoDELCROIX/Portfolio/releases" target="blank">
                <div class="container-img-text container-card">
                    <img src="../images/dev_web_miniature.jpg" alt="code">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Portfolio · <span> Active </span>
                            </h3>
                            <div class=" card-header-icon"><?=$perso?></div>
                        </div>
                        <h4>Creation of this website</h4>
                        <p>
                            Portfolio that lists my training, skills, contacts and creations.
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/Portfolio" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>GitHub Repository</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="https://github.com/HugoDELCROIX/Citadelle/blob/main/README.md" target="blank">
                <div class="container-img-text container-card">
                    <img src="../images/jeu_societe.jpg" alt="citadelle">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Citadelle · <span> 2021</span>
                            </h3>

                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Creation of a board game in the engineering cycle</h4>
                        <p>
                            The project consists in creating the board game "Citadelle" using the Java language.
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/Citadelle" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>GitHub Repository</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="http://horsensei.online" target="blank">
                <div id="dan_project" class="container-img-text container-card">
                    <img src="../images/drapeau_danemark.jpeg" alt="denmark_flag">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Erasmus in Denmark · <span> Active</span>
                            </h3>
                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Creating a blog during my Erasmus stay</h4>
                        <p>
                            The project consists of creating a website, in the form of a blog, which lists our
                            activities and discoveries in Denmark.
                        </p>
                        <button>
                            <a href="https://github.com/Rhylionn/denmark-blog" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>GitHub Repository</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="https://github.com/HugoDELCROIX/AndroidStudio/blob/main/README.md" target="blank">
                <div class="container-img-text container-card">
                    <img src="../images/android_project.jpg" alt="android studio">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Android Studio course · <span> Active</span>
                            </h3>
                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Documentation and Exercises</h4>
                        <p>
                            This project contains all the documentation and exercises for my learning of mobile
                            application development.
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/AndroidStudio" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>GitHub Repository</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="../en/projects/Les-Fromages-Francais/index.html" target="blank">
                <div class="container-img-text container-card">
                    <img src="../images/reblochon.jpeg" alt="reblochon">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Les Fromages Français · <span> Active</span>
                            </h3>
                            <div class=" card-header-icon"><?=$school?></div>
                        </div>
                        <h4>Creation of a website during my engineering studies(No Responsive)</h4>
                        <p>
                            The project consists in developing a website entirely and only through HTML/CSS. (Made at
                            Via University College)
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/Les-Fromages-Francais" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>GitHub Repository</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
            <a href="https://github.com/HugoDELCROIX/Hangman/blob/main/README.md" target="blank">
                <div class="container-img-text container-card">
                    <img src="../images/hangman.jpg" style="border: dotted black;" alt="reblochon">
                    <div class="card-description">
                        <div class="card-header">
                            <h3>
                                Hangman · <span> Actif</span>
                            </h3>
                            <div class=" card-header-icon"><?=$perso?></div>
                        </div>
                        <h4>Creation of an Hangman game with Java</h4>
                        <p>
                            Hangman is a paper and pencil guessing game for two or more players. One player thinks of a
                            word, phrase or sentence and the other(s) tries to guess it by suggesting letters within a
                            certain number of guesses.
                        </p>
                        <button>
                            <a href="https://github.com/HugoDELCROIX/Hangman" target="_blank">
                                <div class="card-footer">
                                    <i class="fa-brands fa-github"></i>
                                    <h6>GitHub Repository</h6>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <section>
        <h1><i class="fa-solid fa-laptop-code"></i> My Fedora's theme (Gnome)</h1>
        <div class="carousel">
            <div class="carousel-inner">
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                    checked="checked">
                <div class="carousel-item">
                    <img src="../images/screenshots/Capture d’écran de 2022-03-21 20-11-23.png">
                </div>
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item">
                    <img src="../images/screenshots/Capture d’écran de 2022-03-21 20-11-30.png">
                </div>
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item">
                    <img src="../images/screenshots/Capture d’écran de 2022-03-21 20-12-34.png">
                </div>
                <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                <label for="carousel-2" class="carousel-control next control-1">›</label>
                <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                <label for="carousel-3" class="carousel-control next control-2">›</label>
                <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                <label for="carousel-1" class="carousel-control next control-3">›</label>
                <ol class="carousel-indicators">
                    <li>
                        <label for="carousel-1" class="carousel-bullet">•</label>
                    </li>
                    <li>
                        <label for="carousel-2" class="carousel-bullet">•</label>
                    </li>
                    <li>
                        <label for="carousel-3" class="carousel-bullet">•</label>
                    </li>
                </ol>
            </div>
        </div>
        <div id="carousel-footer">
            <p><i class="fa-solid fa-object-group"></i> Graphite-dark</p>
            <p><i class="fa-solid fa-arrow-pointer"></i> Mocu-White-Right</p>
            <p><i class="fa-solid fa-icons"></i> Reversal-balck-dark</p>
        </div>
    </section>

    <header>
        <div class="langue">
            <a href="index.php"> English</a>
            <a id='langue-bot' href="#langue-top"><i class="fa-solid fa-language"></i></a>
            <a href="../index.php"> Français</a>
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