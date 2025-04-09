<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Paillou </title>
    <link rel="stylesheet" href="../css/cpaillou.css"/>
    <link rel="stylesheet" href="../css/normalize.css" />
    <script src="/../camille.paillou/js/typing3.js" defer></script>
</head>
<body>

<?php require_once __DIR__ . '/../partials/headertitreart.php';?>

<?php require_once __DIR__ . '/../partials/indexart.php'; ?>

    <div class="menu-art">
        <div><a href="../art.php">works</a></div>
        <div><a href="demcv.php">démarche artistique</a></div>
        <div><a href="news.php">expériences et cv</a></div>
    </div>

    <h2 class="bio">portfolio</h2>
        <div class="colonne-portfolio">
            <div class="colonne-portfolio-left">
                <img src="portfolioh.jpg">
                <p class="para-portfolio"><strong>Portfolio 2024-2025</strong> <br>(format horizontal)</p>
                <button class="tele"><a href="portfolioHorizontal.pdf" target="_blank">Télécharger</a></button>
            </div>
            <div class="colonne-portfolio-right">
                <img src="portfoliov.jpg">
                <p class="para-portfolio"><strong>Portfolio 2024-2025</strong><br> version courte (format vertical)</p>
                <button class="telev"><a href="portfolioVertical.pdf" target="_blank">Télécharger</a></button>
            </div>
        </div>

    <?php require_once __DIR__ . '/../partials/footer.php'; ?>

    </body>
    </html>