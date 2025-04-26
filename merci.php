<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Paillou </title>
    <link rel="stylesheet" href=".//css/cpaillou.css" />
    <link rel="stylesheet" href=".//css/normalize.css" />
    <script src="js/typing1.js" defer></script>
</head>
<body>

    <?php require_once __DIR__ . '/partials/headertitrecp.php'; ?>

    <div class="menu-merci">
        <div><a href="index.php">bio-contact</a></div>
        <div><a href="dev.php">développement-web</a></div>
        <div><a href="art.php">pratique artistique</a></div>
    </div> 

    <div class="merci">
        <h1>Merci pour votre message</h1>
        <p>Je reprendrai contact avec vous dans quelques jours.</p>
        <p>À très bientôt</p>
    </div>  

    <div class="div-cv">
    <h2 class="titre-dem">cv</h2>
        <img src="cv.PNG" class="img-cv" alt="cv">
        <button class="tele"><a href="cv.pdf" target="_blank">Télécharger mon cv</a></button>
    </div> 

    <h2 class="titre-dem">portfolio</h2>
            <div class="colonne-portfolio">
                <div class="colonne-portfolio-left">
                    <img src="art/portfolioh.jpg" alt="couverture portfolio">
                    <p class="para-portfolio"><strong>Portfolio 2024-2025</strong> <br>(format horizontal)</p>
                    <button class="tele"><a href="art/portfolioHorizontal.pdf" target="_blank">Télécharger</a></button>
                </div>
                <div class="colonne-portfolio-right">
                    <img src="art/portfoliov.jpg" alt="couverture portfolio">
                    <p class="para-portfolio"><strong>Portfolio 2024-2025</strong><br> version courte (format vertical)</p>
                    <button class="telev"><a href="art/portfolioVertical.pdf" target="_blank">Télécharger</a></button>
                </div>
            </div>

    <?php require_once 'partials/footer.php'; ?>

</body>
</html>