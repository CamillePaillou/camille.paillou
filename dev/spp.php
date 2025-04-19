<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Paillou </title>
    <link rel="stylesheet" href="../css/cpaillou.css" />
    <link rel="stylesheet" href="../css/normalize.css" />
    <script src="/../camille.paillou/js/typing2.js" defer></script>
</head>
<body>

    <?php require_once __DIR__ . '/../partials/headertitredev.php';?>

    <?php require_once __DIR__ . '/../partials/indexdev.php'; ?>

    <div class="dev-container"> 
        <div class="flecheprev-dev"><a href="hana.php">&larr;</a></div>
        <div class="titre-site">SON PAPIER PIXEL</div>
        <div class="flechesuiv-dev"><a href="bap.php">&rarr;</a></div>
    </div>

    <div class="colonne-dev">
        <div class="dev-image">
            <figure>
                <img src="../images/dev/spp/spp.png"> 
                <figcaption class="legende-dev">Capture d'écran de la page d'accueil</figcaption>
            </figure>
            <figure>
                <img src="../images/dev/spp/spp2.PNG"> 
                <figcaption class="legende-dev">Capture d'écran de la page Documentation</figcaption>
            </figure>
            <figure>
                <img src="../images/dev/spp/spp3.PNG">
                <figcaption class="legende-dev">Capture d'écran de la page Documentation - archive audio</figcaption>
            </figure>
            <figure>
                <img src="../images/dev/spp/spp4.PNG">
                <figcaption class="legende-dev">Capture d'écran de la page Documentation - workshop à la Villette Makerz</figcaption>
            </figure>
            <figure>
                <img src="../images/dev/spp/spp5.PNG">
                <figcaption class="legende-dev">Capture d'écran de la page Photos - workshop à la Villette Makerz </figcaption>
            </figure>
            <figure>
                <img src="../images/dev/spp/spp6.PNG">
                <figcaption class="legende-dev">Capture d'écran de la page A propos</figcaption>
            </figure>
        </div>
        <div class="dev-p">
            <h3><a href="" target="_blank">Visiter le site : sonpapierpixel.</a></h3>
            <p><strong>présentation du site</strong></p>
            <p>Son Papier Pixel présente le workshop et la documentation issue du projet européen Codename Seedling auquel j’ai participé en tant qu’artiste. Le but était donc de présenter notre atelier, notre équipe et les différents types d’archives (fichier audio, scan 3D, fanzine, photos et vidéos) produites lors de son élaboration et des temps de réalisation. 
               <br><br> La page d’accueil comporte une courte présentation textuelle, une vidéo et un scan 3D. En ce qui concerne la documentation, il fallait trouver un moyen pour faciliter le parcours utilisateurs en créant un design simple et efficace.  
               <br><br> Pour gérer les fichiers audios, nous avons choisi de créer une playlist ou les différentes pistes sont réparties en deux colonnes. Ainsi l’utilisateur peut sélectionner n’importe quelle réponse à la question. 
               <br><br>Pour organiser les autres types d’archives, j’ai choisi de coder une page basée sur une grille initiale de quatre cases. Une fois qu’une case est cliquée, elle est redimensionnée en plein écran et les autres cases sont réduites et disparaissent. 
               <br>La page des photos possède un effet de défilement fixe et celle des vidéos a un effet de scroll horizontal. Les scans sont gérés avec three.js.                
               <br>La page A propos est composée de différents containers avec une barre de navigation pour changer le contenu. 
            </p>
            <br><p><strong>programmation</strong></p>
            <p>Ce site m’a permis d’approfondir mes connaissances en html, css et javascript. J’ai pu découvrir three.js et React.</p>
        </div> 
    </div>

    <?php require_once __DIR__ . '/../partials/footer.php'; ?>

</body>
</html>
