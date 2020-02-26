<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delicious</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">Accueil</a>
            <a href="#event">Evenement</a>
            <a href="menu.html">Menu</a>
            <a href="reservation.php">reserver une table</a>
            <a href="inscription.html">Inscription</a>
            <?php
              if (isset($_SESSION['login']) && isset ($_SESSION['mdp']))
              { ?>
                  <li><a href="Moncompte.php"><span>Mon compte</span></a></li>

                <?php }
                  else{?>
                  <li><a href="connexion.php"><span>Connexion</span></a></li>
                <?php } ?>
            <a href="contact.html">contact</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
          <h1 class="logo-name">Globe trotter</h1>
          <h2>Restaurant a volonter</h2>
          <p>Cuisine indienne ,Asie du sud est ,Oriental etc..</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu</h1>
          <p class="header-p">Trouver votre bonheur parmis nos plats divers et varier !
            <br>Tout est HALAL et certifier !</p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Tout nos plats</a></li>
            <li><a class="filter" data-filter=".breakfast">Petit déjeuner</a></li>
            <li><a class="filter" data-filter=".lunch">Déjeuner</a></li>
            <li><a class="filter" data-filter=".dinner">Diner</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">cafe et viennoiseries </a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$4.00</span>
            </span>
            <span class="menu-subtitle">6 moceaux de viennoiseries avec un cafe moulu</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">chocolat chaud</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$1.50</span>
            </span>
            <span class="menu-subtitle">lait au chocolat(pur cacao).</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Petit dejeuner complet!</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$10.00</span>
            </span>
            <span class="menu-subtitle">Fruit,viennoiseries,cafe,chocolat chaud, charcuterie , oeuf... </span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">omelette au fromage</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$04.50</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">grec</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$05.99</span>
            </span>
            <span class="menu-subtitle">sandwich a la dinde accompagner de frite</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">poulet frit</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$06.99</span>
            </span>
            <span class="menu-subtitle">6 moceaux de poulet frit</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">thieb poulet rouge</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$10.99</span>
            </span>
            <span class="menu-subtitle">Riz cuisiné avec la sauce tomate,Poulet,Petits légumes.</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Merguez frite !</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$10.99</span>
            </span>
            <span class="menu-subtitle">Merguez au feu de bois !</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">thieb blanc boeuf</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$10.99</span>
            </span>
            <span class="menu-subtitle">Riz cuisiné sans sauce tomate,Morceaux de bœuf,Petits légumes.</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Couscous</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$12.99</span>
            </span>
            <span class="menu-subtitle">Semoule accompagne de viande et de legume.</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">La viande ROYAL!</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$15.99</span>
            </span>
            <span class="menu-subtitle">Boeuf,Poulet,Merguez... accompagner de frite.</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Le Bouftout!</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$30.99</span>
            </span>
            <span class="menu-subtitle">Un mouton entier a manger! si vous le finissez en moins de 2h c'est gratuit !</span>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Delicious</h4>
            <address>324 Ellte Road<br>Delhi, DL 110013</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © Delicious Theme. All Rights Reserved
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
