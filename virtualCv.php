<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jonas MEDENOUVO Dévéloppeur Fullstack</title>

    <!--    css perso-->
    <link rel="stylesheet" href="css/VirtualCv.css">

    <!--    css Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


</head>

<body>

<header class="">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Techno">Technologies</a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#CV">Curriculum Vitae</a>-->
<!--                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <!--                    formulaire de recherche dans la barre-->
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
                        <button class="btn my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Home -->
<section id="home" class="firstSection scroller">
    <div class="container">
        <div class="zone1">
            <img src="img/Jonas.png" alt="photo identité" class="img-thumbnail rounded  w-25">
            <div class="">Jonas MEDENOUVO</div>
            <div class="">Développeur FullStack</div>
            <a class="btn btn-xl js-scroll-trigger" href="#services">Présentation</a>
        </div>
    </div>
</section>

<!-- Services -->
<section id="Techno" class="scroller" style="margin-bottom: 20%;padding-top: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="">Technologies</h2>
                <h3 class="section-subheading text-muted">
                    “C’est la qualité de l’oeuvre qui doit porter et légitimer la technologie et non l’inverse.” <i>Jean
                        Zeitoun </i>
                </h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x" style="line-height:1em;">
              <img src="img/portfolio/symfony.png" class="w-100">
            </span>
                <h4 class="col-md-4">Symfony</h4>
                <p class="text-muted">Symfony est un framework PHP basé sur l'architecture MVC et développé par la
                    société française SensioLabs.
                    Il permet de faciliter et d’accélérer les développements d’applications web en capitalisant sur des
                    briques logicielles (ou bundles) existantes et déjà éprouvées. </p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x" style="line-height:1em;">
              <img src="img/portfolio/java.png" alt="" class="w-100">
            </span>
                <h4 class="">JAVA-JEE</h4>
                <p class="text-muted">J2EE est l'acronyme de Java 2 Entreprise Edition. Cette édition est dédiée à la
                    réalisation d'applications pour entreprises. J2EE est basé sur J2SE (Java 2 Standard Edition) qui
                    contient les API de base de Java.
                    Depuis sa version 5, J2EE est renommée Java EE (Enterprise Edition).</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x" style="line-height:1em;">
             <img src="img/portfolio/DotNET.png" alt="" class="w-100">
            </span>
                <h4 class="col-md-4">.NET</h4>
                <p class="text-muted">Plateforme de développement permettant de générer des applications pour le web,
                    Windows, Windows Phone, Windows Server et Microsoft Azure.
                    Il se compose du common language runtime (CLR) et de la bibliothèque de classes .NET Framework, qui
                    offre une vaste gamme de fonctionnalités et prend en charge de nombreux standards.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid-->
<section class="bg-light scroller" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" style="margin-top: 5%;">Portfolio</h2>
                <h3 class="section-subheading text-muted">“Mon projet préféré ? C'est le prochain.”
                    <br> <i>Frank Lloyd Wright </i></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/Responsive_Web_Design.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Site Web</h4>
                    <p class="text-muted">Symfony</p>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>App Web</h4>
                    <p class="text-muted">JAVA-JEE</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Web Project</h4>
                    <p class="text-muted">.NET</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>App</h4>
                    <p class="text-muted">ANDROID</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Wordpress</h4>
                    <p class="text-muted">Wordpress-NoSql</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Window</h4>
                    <p class="text-muted">Photography</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Formulaire-->
<section id="contact" class="scroller" style="padding-top: 10%; background: url(img/computerTable.jpg) no-repeat;background-size: cover; ">
    <div class="container">
        <div class="well well-sm">
<!--            <h3><strong>Contact Us</strong></h3>-->
        </div>

        <div class="row">
            <div class="col-md-7"  style="margin-top: 2%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178404.7305771016!2d-0.8103495544847815!3d44.89303874928048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd552c44d840356f%3A0xb86ce378d6390880!2sBordeaux+M%C3%A9tropole!5e0!3m2!1sfr!2sfr!4v1522188498642"
                        width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-md-5">
                <h4><strong>Contactez moi</strong></h4>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="" value="" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="" value="" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="" value="" placeholder="Telephone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit" name="button">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Envoyer
                    </button>
                </form>
            </div>
        </div>
<!--        Radio-->
        <div style="text-align: left;" class="fixed-bottom">
<!--        <div style="text-align: left; margin-top: 10%; position: marker;">-->

            <script>(function(d, s){if(!window.rel){s = d.createElement("script");s.type = "text/javascript";s.async = true;s.id = "radio-de-embedded";s.src = "//www.radio.fr/inc/microsite/js/full.js";d.getElementsByTagName("head")[0].appendChild(s);window.rel = true;}}(document));</script><div class="ng-app-embedded"><div ui-view class="microsite embedded-radio-player" data-playerwidth="340px" data-playertype="web_embedded" data-playstation="bfmtechandco" data-autoplay="false" data-apikey="df04ff67dd3339a6fc19c9b8be164d5b5245ae93"></div></div><noscript><a href="//bfmtechandco.radio.fr" target="_blank">BFM - Tech&Co sur radio.fr</a></noscript>


        </div>

    </div>
</section>



<footer>
    Footer
</footer>

<!--SCRIPTS-->
<!--    Bootstrap CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

<!--Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Srollify-->
<!--chargement-->
<script src="Scrollify-master/jquery.scrollify.js"></script>

<!--Scrollify fonction main-->

<script>
    $(function () {
        $.scrollify({
            section: ".scroller",
        });
    });
</script>

</body>
</html>