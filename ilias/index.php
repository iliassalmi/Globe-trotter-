<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Globe trotter</title>
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
            <a href="menu.php">Menu</a>
            <a href="reservation.php">reserver une table</a>
                <a href="deco.php">deconnexion</a>
            <a href="inscription.html">Inscription</a>
            <?php

              if (empty($_SESSION))
              { ?>

  <li><a href="connexion.php"><span>Connexion</span></a></li>
                <?php }
                  else{?>
                    <li><a href="Moncompte.php"><span>Mon compte</span></a></li>
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
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Globe trotter</h1>
          <p class="header-p">Faites voyager vos papilles au cours de votre repas à travers un grand nombre de recettes inspirées notamment de la cuisine de la Méditerranée, d’Inde et d’Asie du Sud-Est et tout spécialement sélectionnées par nos chefs </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Recette du meilleur poulet frit</h2>
              <p></p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>PRÉPARATION
Marinade
Dans un bol, mélanger le lait de beurre, le sel et les épices. Ajouter le poulet et bien l’enrober. Couvrir et réfrigérer au moins 12 heures.</li>
                  <li><i class="fa fa-check"></i>Panure
Dans un grand bol, mélanger la farine, les épices et le sel.</li>
                  <li><i class="fa fa-check"></i>Préchauffer l’huile de la friteuse à 160 °C (325 °F). Tapisser une plaque de cuisson de papier absorbant.</li>
                  <li><i class="fa fa-check"></i>Retirer le poulet de la marinade sans trop l’assécher. Enrober le poulet dans le mélange de farine. Tremper une seconde fois dans la marinade et enrober à nouveau le poulet. Secouer pour retirer l’excédent. Réserver sur une plaque de cuisson. Frire quatre à cinq morceaux à la fois environ 15 minutes. Si vous utilisez un thermomètre, il doit indiquer 82 °C (180 °F) lorsque celui-ci est inséré au centre d’un morceau. Égoutter sur le papier absorbant. Poursuivre avec le reste du poulet.</li>
                  <li><i class="fa fa-check"></i>Mayonnaise épicée
Entre-temps, dans un bol, mélanger tous les ingrédients. Servir avec le poulet.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/res01.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">Up Coming events</h1>
            <p class="header-p">Decorations 100% complete here</p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/res02.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2>Paela party</h2>
                  <p>Concours de la plus grande paela du monde !</p>
                  <address>
                              <strong>Place: </strong>
                              1612 Collins Str, Victoria 8007
                              <br>
                              <strong>Time: </strong>
                              07:30pm
                            </address>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->

  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Globe trotter</h4>
            <address>324 Ellte Road<br>CHELLES,77000</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              ©  Theme. All Rights Reserved
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
