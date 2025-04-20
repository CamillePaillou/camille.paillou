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

    <div class="layout">
        <div class="timeline">
            <div class="timeline-item active" onclick="selectItem(this)">
                <img src="images/dev/hana/hanam.PNG" alt="Capture d'écran du site d'Hana Martinelli">
                <p class="caption">Hana Martinelli</p>
            </div>
            <div class="timeline-item" onclick="selectItem(this)">
                <img src="images/dev/spp/spp.png" alt="Capture d'écran du site Son Papier Pixel">
                <p class="caption">Son Papier Pixel</p>
            </div>
            <div class="timeline-item" onclick="selectItem(this)">
                <img src="images/dev/bapperf/bap4.PNG" alt="Capture d'écran du site bap.perf">
                <p class="caption">Bap.perf</p>
            </div>
        </div>

        <div class="hero-container"> 
            <div class="hero" data-id="1">
                <h1 class="overlay-name"><a href="/../camille.paillou/dev/hana.php">Hana Martinelli</a></h1>
                <p class="overlay-para">Site vitrine pour une sculptrice.</p>
                <!--image vertical--> 
                <img class="hero-img hero-img-vertical" src="images/dev/hana/hv.PNG" alt="Capture d'écran du site d'Hana Martinelli">
                <!--image horizontal--> 
                <img class="hero-img hero-img-horizontal" src="images/dev/hana/hanam.PNG" alt="Capture d'écran du site d'Hana Martinelli">
            </div>
            <div class="hero" data-id="2">
                <h1 class="overlay-name"><a href="/../camille.paillou/dev/spp.php">Son Papier Pixel</a></h1>
                <p class="overlay-para">Son Papier Pixel présente le workshop et la documentation issue du projet européen Codename Seedling. </p>
                <!--image vertical--> 
                <img class="hero-img hero-img-vertical" src="images/dev/spp/sppv.PNG" alt="Capture d'écran du site Son Papier Pixel">
                <!--image horizontal--> 
                <img class="hero-img hero-img-horizontal" src="images/dev/spp/spp.png" alt="Capture d'écran du site Son Papier Pixel">
            </div>
            <div class="hero" data-id="3">
                <h1 class="overlay-name"><a href="/../camille.paillou/dev/bap.php">Bap.perf</a></h1>
                <p class="overlay-para">BAP.PERF est un site pour archiver les performances des étudiants des Beaux-Arts de Paris</p>
                <!--image vertical--> 
                <img class="hero-img hero-img-vertical" src="images/dev/bapperf/bapv1.PNG" alt="Capture d'écran du site bap.perf">
                <!--image horizontal--> 
                <img class="hero-img hero-img-horizontal" src="images/dev/bapperf/bap7.PNG" alt="Capture d'écran du site bap.perf">
            </div>
        </div>
    </div>
    
    <?php require_once 'partials/footer.php'; ?>

</body>
</html>

