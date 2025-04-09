<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Paillou </title>
    <link rel="stylesheet" href="../css/cpaillou.css" />
    <link rel="stylesheet" href="../css/normalize.css" />
    <script src="../js/typing2.js" defer></script>
</head>
<body>

    <?php require_once 'partials/headertitredev.php'; ?>

    <div class="menu">
        <div><a href="../index.php" class="index">bio-contact</a></div>
        <div><a href="../art.php" class="art">pratique artistique</a></div>
    </div>

    <div class="dev-container">
        <div class="flecheprev-dev"><a href="spp.php">&larr;</a></div>
        <div class="titre-site"><a href="https://hanamartinelli.com/" target="_blank">BAP.PERF</a></div>
        <div class="flechesuiv-dev"><a href="hana.php">&rarr;</a></div>
    </div>


    <div class="colonne-dev">
        <div class="dev-image">
            <figure>
                <img src="../images/dev/bapperf/bap4.PNG"> 
                <figcaption>Capture d'écran de la page d'accueil</figcaption>
            </figure>
            <figure>
                <img src="../images/dev/bapperf/bap5.PNG"> 
                <figcaption>Capture d'écran de la suite de la page d'accueil</figcaption>
            </figure>
            <figure>
                <img src="../images/dev/bapperf/bap2.jpeg">
                <figcaption>Capture d'écran de la page Oeuvres</figcaption>
            </figure>
            <figure>
                <img src="../images/dev/bapperf/bap6.PNG">
                <figcaption>Capture d'écran de la page présentant le travail de Sara Noun</figcaption>
            </figure>
        </div>
        <div class="dev-p">
            <p><strong>présentation du site</strong></p>
            <p>BAP.PERF soutient la performance en archivant et diffusant les créations des étudiant.es et d’artistes sortis de l’Ecole Nationale Supérieure des Beaux-Arts de Paris. Ce site est un cas d’étude vivant et dynamique car les œuvres enregistrées, exclusivement des performances, ont été réalisées durant les années d’études des artistes. En témoignant des créations actuelles et anciennes, ce site visibilise le travail de plusieurs générations et est un outil de médiation voué à la compréhension de la performance en s’adressant à tous (grand public, artistes, institutions).
               <br>Cette plateforme est pour les artistes, un espace de visibilité, une archive et une sorte de réseau social. Il permet éventuellement, nous l'espérons, d’échanger des contacts et de créer des opportunités professionnelles.
            </p>
            <br><p><strong>programmation</strong></p>
            <p>BAP.PERF est réalisé sur Wordpress. Je voulais découvrir ce CMS et comprendre son utilisation. BAP.PERF propose la soumission d’un formulaire front-end, un système d’authentification avec le statut d’artiste et différents statuts d’utilisateurs et d’administrateurs. C’est aussi pour cette raison que j’avais choisi Wordpress afin d’utiliser des plugins comme WP User Frontend. 
            <br><br>Il est en cours d’élaboration et de restructuration. </p>
        </div>
    </div>
    
    <?php require_once 'partials/footer.php'; ?>
        
</body>
</html>