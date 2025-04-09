<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Paillou </title>
    <link rel="stylesheet" href=".//css/cpaillou.css" />
    <link rel="stylesheet" href=".//css/normalize.css" />
    <script src="js/typing2.js" defer></script>
    <script src="js/timeline.js" defer></script>
</head>
<body>

    <?php require_once __DIR__ . '/partials/headertitredev.php'; ?>
    
    <div class="menu">
        <div><a href="index.php" class="index">bio-contact</a></div>
        <div><a href="art.php" class="art">pratique artistique</a></div>
    </div> 

    <div class="hero" data-id="1">
        <h1 class="overlay-text"><a href="/../camille.paillou/dev/hana.php">HANA MARTINELLI</a></h1>
        <p class="overlay-para">Site vitrine pour une sculptrice.</p>
        <img src="images/dev/hana/hanam.PNG" alt="Image de fond">
    </div>
    
    <div class="hero" data-id="2">
        <h1 class="overlay-text"><a href="/../camille.paillou/dev/spp.php">SON PAPIER PIXEL</a></h1>
        <p class="overlay-para">Son Papier Pixel présente le workshop et la documentation issue du projet européen Codename Seedling. </p>
        <img src="images/dev/spp/spp.png" alt="Image de fond">
    </div>
    
    <div class="hero" data-id="3">
        <h1 class="overlay-text"><a href="/../camille.paillou/dev/bap.php">BAP.PERF</a></h1>
        <p class="overlay-para">BAP.PERF est un site pour archiver les performances des étudiants des Beaux-Arts de Paris</p>
        <img src="images/dev/bapperf/bap7.PNG" alt="Image de fond">
    </div>
    
    
    
    <div class="timeline">
        <div class="timeline-item" onclick="selectItem(this)">
            <img src="images/dev/hana/hanam.PNG" alt="Image 1">
            <p class="caption">Hana Martinelli</p>
        </div>
        <div class="timeline-item" onclick="selectItem(this)">
            <img src="images/dev/spp/spp.png" alt="Image 2">
            <p class="caption">Son Papier Pixel</p>
        </div>
        <div class="timeline-item" onclick="selectItem(this)">
            <img src="images/dev/bapperf/bap4.PNG" alt="Image 3">
            <p class="caption">Bap.perf</p>
        </div>
    </div>
    
    <!-- Icône emoji boule -->
    <div id="timeline-icon" class="icon">&#129504;</div>
    
    <?php require_once 'partials/footer.php'; ?>

</body>
</html>

