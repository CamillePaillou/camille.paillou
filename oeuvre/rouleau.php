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
        <div class="flecheprev-dev"><a href="permission.php">&larr;</a></div>
        <div class="titre-site">Rouleau</div>
        <div class="flechesuiv-dev"><a href="dent.php">&rarr;</a></div>
    </div>

    <div>
        <img src="../images/art/rouleau/1.webp" alt="Départ" class="zoom-modal thumbnail img-horiz" onclick="openModal(0)"> 
        <img src="../images/art/rouleau/2.webp" alt="Image 2" class="zoom-modal thumbnail img-horiz" onclick="openModal(1)">
        <img src="../images/art/rouleau/3.webp" alt="Image 3" class="zoom-modal thumbnail img-horiz" onclick="openModal(2)">
        <img src="../images/art/rouleau/4.webp" alt="Image 4" class="zoom-modal thumbnail img-horiz" onclick="openModal(3)">
        <img src="../images/art/rouleau/5.webp" alt="Image 4" class="zoom-modal thumbnail img-horiz" onclick="openModal(4)">
        <img src="../images/art/rouleau/5.webp" alt="Image 4" class="zoom-modal thumbnail img-horiz" onclick="openModal(5)">
        <img src="../images/art/rouleau/6.webp" alt="Image 4" class="zoom-modal thumbnail img-horiz" onclick="openModal(6)">
        <img src="../images/art/rouleau/7.webp" alt="Image 4" class="zoom-modal thumbnail img-horiz" onclick="openModal(7)">
        <img src="../images/art/rouleau/8.webp" alt="Image 4" class="zoom-modal thumbnail img-verti" onclick="openModal(8)">
    </div>

    <section>
        <div class="art-p">
            <p><strong>Permission - scupture</strong></p>
            <p>2025<br>papier mâché<br>1m80</p>
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

