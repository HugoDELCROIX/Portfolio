<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style_portfolio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../formulaire_mail.css">
    <link rel="icon" href="images/logo/pc_logo.ico">
    <title>Création d'un pendule oscillatoire</title>
</head>

<body>
    <div id="bloc">
        <h1>Projet de création d'un pendule oscillatoire simple</h1>
        <img src="../../images/pendule.png" alt="Schéma du pendule">
        <button onclick="playPause()">Play/Pause</button>
        <video id="video1" width="420">
            <source src="../pendule/Projet Science 3.mp4" type="video/mp4">
            Your browser does not support HTML video.
        </video>

        <script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
}  
</script> 

    </div>
    <div id="bloc">
        <iframe src="/projets/pendule/Projet_Science_3.pdf" width="100%" height="1000px"></iframe>
    </div>
</body>

</html>