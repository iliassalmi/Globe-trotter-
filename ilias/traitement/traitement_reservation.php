<?php

require('../model/reservation_class.php');
require('../manager/reservation_manager.php');

$reservation = new reservation($_POST['nom'],$_POST['date'],$_POST['tel'],$_POST['message'],$_POST['heure'],$_POST['mail'],$_POST['nb_personne']);
$manager = new Manager();
$manager->reservation($reservation);

?>
