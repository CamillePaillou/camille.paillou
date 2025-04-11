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
        <div class="flecheprev-dev"><a href="facette.php">&larr;</a></div>
        <div class="titre-site">Mémoire</div>
        <div class="flechesuiv-dev"><a href="culpabilite.php">&rarr;</a></div>
    </div>

    <div>
        <img src="../images/art/memoire/1.webp" alt="Départ" class="zoom-modal thumbnail img-verti" onclick="openModal(0)"> 
      </div>

    <section>
        <div class="art-p">
            <p><strong>Mémoire</strong></p>
            <p>2024<br>bâche plastique, papier</p>
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