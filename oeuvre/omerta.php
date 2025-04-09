<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Paillou </title>
    <link rel="stylesheet" href="../css/cpaillou.css"/>
    <link rel="stylesheet" href="../css/normalize.css" />
    <script src="../js/typing3.js" defer></script>
    <script src="../js/imagemodal.js" defer></script>
</head>
<body>

<?php require_once __DIR__ . '/../partials/headertitreart.php';?>

<?php require_once __DIR__ . '/../partials/indexart.php'; ?>

<?php require_once __DIR__ . '/../partials/menuart.php'; ?>

    <div class="dev-container">
        <div class="flecheprev-dev"><a href="culpabilite.php">&larr;</a></div>
        <div class="titre-site">Omerta</div>
        <div class="flechesuiv-dev"><a href="fusil.php">&rarr;</a></div>
    </div>

    <div>
        <img src="../images/art/omerta/1.webp" alt="Départ" class="zoom-modal thumbnail img-verti" onclick="openModal(0)"> 
        <img src="../images/art/omerta/2.webp" alt="Image 2" class="zoom-modal thumbnail img-horiz" onclick="openModal(1)">
    </div>

    <section>
        <div class="art-p">
            <p><strong>Omerta</strong></p>
            <p>2024<br>bâche plastique, eau, couture</p>
        </div>
    </section>

    <div id="xModal" class="xModal" onclick="clickOutside(event)">
        <span class="close" onclick="closeModal()">&times;</span>
        
        <div class="xmodalContent">
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <img id="modalImg" class="modal-image">
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>
    </div>

    <?php require_once __DIR__ . '/../partials/footer.php'; ?>

</body>
</html>
