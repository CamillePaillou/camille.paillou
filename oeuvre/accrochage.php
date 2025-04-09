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

    <?php require_once 'partials/headertitreart.php'; ?>

    <?php require_once 'partials/indexart.php'; ?>

    <?php require_once 'partials/menuart.php'; ?>

    <div class="dev-container">
        <div class="flecheprev-dev"><a href="carton.html">&larr;</a></div>
        <div class="titre-site">Accrochage cour vitrée</div>
        <div class="flechesuiv-dev"><a href="obeissance.html">&rarr;</a></div>
    </div>

        <div>
            <img src="../images/art/accrochagebache/1.webp" alt="Image 1" class="zoom-modal thumbnail img-horiz" onclick="openModal(0)"> 
            <img src="../images/art/accrochagebache/2.webp" alt="Image 2" class="zoom-modal thumbnail img-horiz" onclick="openModal(1)">
        </div>

    <section>
        <div class="art-p">
            <p><strong>Accrochage cours vitrée</strong></p>
            <p>Beaux-Arts de Paris<br>2024<br>Oeuvres présentes : Omerta, L'Obéissance,</p>
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

    <?php require_once 'partials/footer.php'; ?>

</body>
</html>