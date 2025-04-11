<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Paillou </title>
    <link rel="stylesheet" href=".//css/cpaillou.css" />
    <link rel="stylesheet" href=".//css/normalize.css" />
    <script src="js/photoindex.js" defer></script>
</head>
<body>
    

<!--<header>
    <script src="js/typing1.js" defer></script>
    <h1 class="cp"><a href="index.php" id="title1"></a></h1>
    <hr class="solid">
</header>-->


<section class="split-screen">
    <div class="cp">Camille Paillou</div>

  <div class="column left">
    <img src="images/dev/hana/hana2.PNG" class="slideshow-img" alt="Gauche 1">
    <img src="images/dev/bapperf/bap7.PNG" class="slideshow-img" alt="Gauche 2">
    <img src="images/dev/spp/spp2.PNG" class="slideshow-img" alt="Gauche 3">
    <div><a href="dev.php" class="overlay-text" target="blank">développement web</a></div>
  </div>
  
  <div class="column right">
    <img src="images/art/echine/1.webp" class="slideshow-img" alt="Droite 1">
    <img src="images/art/accrochagebache/1.webp" class="slideshow-img" alt="Droite 2">
    <img src="images/art/permission/2.webp" class="slideshow-img" alt="Droite 3">
    <div class="overlay-text">pratique artistique</div>
  </div>
</section>



    <div class="bio-container">
        <div class="bio-column">
            <h2 class="bio">bio</h2>
            <p class="bio-left">Je m'appelle Camille Paillou. Je suis en dernière année de master aux Beaux-Arts de Paris et j’apprends en parallèle le développement web. 
                <strong>Je recherche pour la rentrée 2025, une entreprise pour réaliser une alternance et devenir développeuse web.</strong> Je vous détaille mon projet et mon parcours dans les lignes suivantes. 
            <br><br><strong>-> art</strong> J’ai d’abord obtenu ma licence aux Beaux-Arts de Tours où je réalisais des performances absurdes et colorés jusqu’en 2022.  A mon arrivée à Paris, j’ai suivi une formation professionnalisante pour apprendre à créer des expositions (<a href="https://beauxartsparis.fr/fr/exposition-simple/sur-le-feu" target="_blank">Sur le Feu,</a>2022)
                 et j’ai intégré l’atelier d’Emmanuelle Huynh (danse) et d’Anne Rochette (sculpture). 
                <br> Aujourd’hui, mes deux matériaux de prédilection sont le papier mâché et la bâche plastique avec lesquels je créé des formes minimalistes et des manipulations performatives. Vous pouvez découvrir ma démarche artistique et mes productions <a href="art.php" target="_blank">ici</a>. 
            </p>
        </div>
        <div class="bio-column">
            <p class="bio-right"><strong>archivage des performances</strong> Je m’intéresse également à l’archivage des performances. Je suis présidente de l’association BAP.PERF qui a pour but de conserver et de valoriser les archives des étudiants des Beaux-Arts de Paris. Le site internet sortira en juin 2025. 
                C’est un sujet complexe et passionnant pour lequel j’ai écrit un mémoire et réalisé un stage au Générateur pour alimenter leur site <a href="https://performancesources.com/" target="blank">PerformanceSources</a>. 
                <br><br><strong>médiation et workshop</strong> J’ai plusieurs expériences dans la médiation d’exposition et dans la création de workshop : atelier de confection de drapeaux à la Fondation du Doute, stage à la MGI, projet européen Codename Seedling... Vous pouvez découvrir ces expériences sur la page des <a href="/art/news.php" target="_blank">news</a>. 
                 Je vais bientôt animer un atelier de couture dans un FAM qui accueille des personnes en situations de handicap. 
                <br><br><strong>-> dev</strong> J’ai eu la chance de suivre des cours d’introduction au développement web dans mon école puis j’ai participé à la piscine Web de 42 et à une prépa de 4 mois au sein de la 2iAcademy (2024) ce qui a confirmé mon attrait pour la programmation. Je suis vraiment passionné par ces outils qui permettent de communiquer et de promouvoir l’art. 
                Depuis j’ai réalisé quelques sites que je vous présente <a href="dev.php" target="blank">ici</a>. 
                <br>A terme, j’aimerais devenir développeuse-web et travailler pour des entreprises, institutions ou des particuliers impliqués dans le monde culturel. Je suis en recherche active d’une entreprise pour réaliser mon alternance. Si mon profil vous intéresse, n’hésitez pas à me contacter. 
            </p>
        </div>
        <div class="tags-column">
            <a href="dev.php" class="tag tag1 pulsing-border">développement web</a>
            <a href="art.php" class="tag tag2 pulsing-border">pratique artistique</a>
        </div>
    </div>

    <div>
        <hr class="hr-contact">
        <h2 class="contact">contact</h2>
        <form class="contact-form">
            <label for="name">Votre nom</label>
            <textarea id="name" name="name" rows="1" placeholder="Entrez votre nom..."></textarea>
        
            <label for="email">Votre email</label>
            <textarea id="email" name="email" rows="1" placeholder="Entrez votre email..."></textarea>
        
            <label for="message">Votre message</label>
            <textarea id="message" name="message" rows="5" placeholder="Votre message..."></textarea>
        
            <button type="submit">Envoyer</button>
          </form>
    </div>

    <?php require_once 'partials/footer.php'; ?>


</body>
</html>