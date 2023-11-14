<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gaëlle Balois</title>

    <link rel="icon" type="images/x-icon" href="files/img/favicon.png"/>
    <!-- Include CSS Styles -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
</head>

<body>
<nav>
    <!-- Navigation links go here -->
    <div><a href="#">Gaëlle Balois</a></div>
    <ul>
        <li><a href="#présentation">Moi</a></li>
        <li><a href="#réalisation">Mes Projets</a></li>
        <li><a href="#compétences">CV</a></li>
        <li><a href="#contact-form">Contactez-moi</a></li>
    </ul>
</nav>
<header>
    <div class="header-content">
        <div class="headerContent">
            <div class="title-container">
                <h1 class="sitetitle">Web Designer / dévelopeur frontend</h1>
            </div>
            <div class="button-container">
                <a class="contact-button" href="#contact-form">Contactez moi</a>
            </div>

        </div>

    </div>
</header>
<main>
    <div id="présentation" class="présentation">
        <h1>Un peu plus sur moi...</h1>
        <div class="pres">
            <div>Étudiante Lilloise en 3e année de BUT MMI à l'IUT de Lens, je cherche à me spécialiser en Développement
                Web front end et Web design, une précédente formation dans le domaine de l'animation et du jeu vidéo
                m'ont également permis d'acquérir une sensibilité et des compétences esthétique riche, qui peuvent
                également s'exprimer dans mon domaine actuel, et un stage de 3 mois réalisé au japon m'ont permit
                d'acquérir indépendance, ouverture d'esprit et adaptabilité.
            </div>
            <div>Je recherche donc une alternance dès que possible pour l'année 2023/2024 dans le domaine du web afin de
                compéter ma formation, d'acquérir de nouvelles compétences ainsi que d'enrichir mes connaissances.
            </div>
            <div>Passionné par les univers du numérique et de la création, doté d’une grande ouverture d’esprit, je suis
                très calme et possède un bon esprit d’équipe. Je dispose également d’un très bon niveau d’anglais, en
                plus de ma maitrise de plusieurs langages de programmation (PHP, HTML, CSS, JS, SQL) et je suis aussi
                formé sur les frameworks Laravel, vue.js, Blade, et Wordpress, et maitrise Git. De plus, je maitrise
                plusieurs logiciels graphique tels que la suite Adobe, Figma, Blender, 3dsMax et Maya.
                Si mon profil vous intéresse, n’hésitez pas à me contacter !
            </div>
        </div>
    </div>
    <div id="réalisation" class="réalisations">
        <h2 class="titreCategorie">Réalisations</h2>
        <div class="expandable-box">
            <h2 class="box-title">Artistry</h2>
            <div class="box-content">
                <p>Réalisation principale de mon stage de 3 mois au Kosen d'Oyama, Japon, cette application en réalité
                    augmentée pour le dispositif Hololens, de microsoft, a été réalisé en C# sur Unity, avec des outils
                    tels que le Mixed Reality Toolkit (MRTK).</p>
                <p>Il s'agit d'une visite de musée virtuelle, pour laquelle a été pensé une identité graphique simple,
                    pensée pour permettre l'accès à l'art et à la culture par des populations qui n'y ont pas facilement
                    accès pour diverses raisons, comme par exemple l'éloignement ou la destruction des oeuvres en
                    question, à destination principalement des écoles.</p>

                <div class="stats">
                    <div class=" stat date"><i class='bx bx-time-five' style='color:#da6363'></i>
                        <span>04-07/2023</span></div>
                    <div class="stat outils"><i class='bx bx-code-alt' style='color:#da6363'></i> <span>C# | Unity | MRTK</span>
                    </div>
                    <div class="stat genre"><i class='bx bx-laptop' style='color:#da6363'></i><span>Hololens</span>
                    </div>
                </div>

                <div class="illustrations">
                    <video width="900" autoplay muted>
                        <source src="files/videos/videoHololens.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="images">
                        <div class="image1"><img src="files/img/1.png" width="300" alt="image artistry 1"></div>
                        <div class="image2"><img src="files/img/2.png" width="300" alt="image artistry 2"></div>
                        <div class="image3"><img src="files/img/3.png" width="300" alt="image artistry 3"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="expandable-box">
            <h2 class="box-title">Skybound Scavenger</h2>
            <div class="box-content">
                <p>Réalisé au cours du 4ème semestre de ma formation MMI, ce projet de création de jeu vidéo Android
                    (réalisé sous Android Studio), est le fruit d'un travail d'équipe réalisé par 2 coéquipiers et ma
                    même. Sur ce projet, j'ai réalisé l'ensemble des assets graphiques, a l'exception du logo, et me
                    suis également chargé de l'ensemble du level design. Cette application est disponible au
                    téléchargement sur le <a class="lien"
                                             href="https://play.google.com/store/apps/details?id=fr.iutlens.courmont.skyboundscavenger">
                        Play Store</a> ou grace au QR code suivant :</p>
                <div class="stats">
                    <div class=" stat date"><i class='bx bx-time-five' style='color:#da6363'></i>
                        <span>01-04/2023</span></div>
                    <div class="stat outils"><i class='bx bx-paint' style='color:#da6363'></i>
                        <span>Piskel | Krita</span></div>
                    <div class="stat genre"><i class='bx bx-laptop' style='color:#da6363'></i><span>Android</span></div>
                </div>
                <div class="illustrations">
                    <video width="900" autoplay muted loop>
                        <source src="files/videos/prezJeu.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="images">
                        <div class="image1"><img src="files/img/QR.png" width="300" alt="QR code Skybound Scavenger">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="expandable-box">
            <h2 class="box-title">Terre-éclat</h2>
            <div class="box-content">
                <p>Terre-éclat est un projet de web design réalisé sur Figma en septembre 2023. Avec un thème, layout,
                    et contenu imposé, il s'agissait de designer l'ensemble de la page d'acceuil d'un site marchand
                    ainsi que la page d'un article en vente. Les couleurs, la mise en page de chaque élément étaient
                    libre, seul l'ordre général, le logo et le contenu de la page étaient imposés. Le prototype de la
                    page est accessible en suivant <a class="lien"
                                                      href="https://www.figma.com/proto/6Wfa65awamy2DOorFqeRjy/Terre-Eclat?page-id=0%3A1&type=design&node-id=1-4&viewport=191%2C125%2C0.65&t=Q4x01kVCIqiR5oHQ-1&scaling=min-zoom&mode=design">ce
                        lien</a></p>
                <div class="stats">
                    <div class=" stat date"><i class='bx bx-time-five' style='color:#da6363'></i> <span>09/2023</span>
                    </div>
                    <div class="stat outils"><i class='bx bx-paint' style='color:#da6363'></i> <span>Figma</span></div>
                    <div class="stat genre"><i class='bx bx-laptop' style='color:#da6363'></i><span>Website</span></div>
                </div>
                <div class="illustrations">
                    <div class="images">
                        <div class="image1"><img src="files/img/terreeclat1.png" width="450" alt="Image terre éclat 1">
                        </div>
                        <div class="image1"><img src="files/img/terreeclat2.png" width="450" alt="Image terre éclat 2">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="expandable-box">
            <h2 class="box-title">Nature venture</h2>
            <div class="box-content">
                <p>Nature venture est un projet de design, visant a créer l'identité d'une marque à partir de son nom et
                    d'un bref pitch. À partir de ce bref descriptif nous avont donc par groupe de 3 mis en communs nos
                    différents centres d'intérêt afin d'en faire une marque unique, et ancrée dans ses valeurs. Nature
                    venture est ainsi parti d'un simple nom pour devenir une marque outdoor de qualité, résolument
                    dans la pop culture, l'aventure et l'avant-gardisme, tirants sont inspirations des univers du jeu
                    vidéo et du manga et contrastant fièrement avec ses concurrents.</p>
                <div class="stats">
                    <div class=" stat date"><i class='bx bx-time-five' style='color:#da6363'></i> <span>10/2023</span>
                    </div>
                    <div class="stat outils"><i class='bx bx-paint' style='color:#da6363'></i> <span>Figma</span></div>
                    <div class="stat genre"><i class='bx bx-laptop' style='color:#da6363'></i><span>Direction Artistique</span></div>
                </div>
                <div class="illustrations">
                    <div class="images">
                        <object data="files/natureventure.pdf" type="application/pdf" width="100%" height="500px">
                            <p>Affichage du fichier PDF impossible <a href="files/natureventure.pdf">Telechargez</a> plutôt</p>
                        </object>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div id="compétences" class="compétences">
        <h2 class="titreCategorie">Compétences</h2>
        <div class="compgridcontainer">
            <div class="compGrid">
                <img class="comp-logo" alt=" Logo vsc" src="files/img/logos/Visual_Studio_Code_1.35_icon.svg.png">
                <img class="comp-logo" alt=" Logo figma" src="files/img/logos/640px-Figma-1-logo.png">
                <img class="comp-logo" alt=" Logo react" src="files/img/logos/React-icon.svg.png">
                <img class="comp-logo" alt=" Logo vuejs" src="files/img/logos/Vue.js_Logo_2.svg.png">
                <img class="comp-logo" alt=" Logo laravel" src="files/img/logos/640px-Laravel.svg.png">
                <img class="comp-logo" alt=" Logo photoshop" src="files/img/logos/photoshop.png">
                <img class="comp-logo" alt=" Logo illustrator" src="files/img/logos/illustrator.png">
                <img class="comp-logo" alt=" Logo premiere pro" src="files/img/logos/premiere-pro.png">
                <img class="comp-logo" alt=" Logo after effect" src="files/img/logos/after-effect.png">
                <img class="comp-logo" alt=" Logo Blender" src="files/img/logos/Blender_logo_no_text.svg.png">
                <img class="comp-logo" alt=" Logo Github" src="files/img/logos/github_PNG80-2765046503.png">
            </div>
        </div>

        <div class="button-container cv-container">
            <a class="cv-button" href="files/CV-gaëlle_Balois.pdf" download>Téléchargez le CV</a>
        </div>
    </div>
    <div class="contact" id="contact-form">
        <h2 class="titreCategorie">Contactez-moi !</h2>
        <div class="infos">
            <ul>
                <li><i class='bx bx-phone'></i><a href="tel:+33789544672">07 89 54 46 72</a></li>
                <li><i class='bx bxl-gmail'></i><a href="mailto:gaelle.balois@gmail.com">gaelle.balois@gmail.com</a>
                </li>
                <li><i class='bx bxl-linkedin'></i> <a href="https://www.linkedin.com/in/gaelle-balois/">Gaëlle
                    Balois</a></li>

            </ul>
        </div>
        <script type="text/javascript" src="https://form.jotform.com/jsform/232736592528364"></script>
    </div>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> | Gaëlle Balois </p>
</footer>
<script src="script.js"></script>
</body>

</html>