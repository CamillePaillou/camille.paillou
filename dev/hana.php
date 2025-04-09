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

    <?php require_once 'partials/indexdev.php'; ?>

    <div class="dev-container"> 
        <div class="flecheprev-dev"><a href="bap.php">&larr;</a></div>
        <div class="titre-site"><a href="https://hanamartinelli.com/" target="_blank">HANA MARTINELLI</a></div>
        <div class="flechesuiv-dev"><a href="spp.php">&rarr;</a></div>
    </div>

    <div class="colonne-dev">
        <div class="dev-image">
            <figure>
                <img src="../images/dev/hana/hanam.PNG"> 
                <figcaption>Capture d'écran de la page d'accueil</figcaption>
            </figure>
            <figure>
                <img src="../images/dev/hana/hana2.PNG"> 
                <figcaption>Capture d'écran de la page Works</figcaption>
            </figure>
            <figure>
                <img src="../images/dev/hana/hana3.PNG">
                <figcaption>Capture d'écran de la page News</figcaption>
            </figure>
        </div>
        <div class="dev-p">
            <h3><a href="https://hanamartinelli.com/" target="_blank">Visiter le site : hanamartinelli.com</a></h3>
            <p><strong>présentation du site</strong></p>
            <p>Hana Martinelli est un site vitrine pour une sculptrice. Le but était de mettre en avant ses productions et les évènements affiliés à sa pratique artistique comme ses expositions. 
                <br><br>Pour cela nous avons choisi de créer une page d’accueil pour introduire son travail en montrant à travers un diaporama, 4 photographies. 
                <br><br>La page <a href="https://hanamartinelli.com/works.php" target="_blank">Works</a> est consacrée à ses œuvres qui sont affichées en colonne et légendées. L’image modal permet de mieux les visualiser. On peut aussi naviguer facilement entre les pages de ses productions grâce à des flèches contenant leurs photographies et leurs titres. 
                <br><br>La page des <a href="https://hanamartinelli.com/news.php" target="_blank">News</a> est divisée en plusieurs sections et permet de découvrir ses différentes actualités et archives. Son site contient également une page pour sa bio, son portfolio téléchargeable en pdf et un formulaire de contact. 
            </p>
            <br><p><strong>programmation</strong></p>
            <p>Ce site étant le premier que j’ai codé , il m’a permis de découvrir les langages comme html, css, JavaScript et Php. 
                J’ai également appris les bases du responsive et à utiliser Figma pour réaliser les maquettes. 
                Le formulaire de contact est relié au service email.js  
                </p>
        </div> 
    </div>

    <?php require_once 'partials/footer.php'; ?>

</body>
</html>
