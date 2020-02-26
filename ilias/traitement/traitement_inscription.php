<?php

require('../model/inscription_class.php');
require('../manager/inscription_manager.php');

$inscription = new inscription($_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['login'], $_POST['mdp']);
$manager=new Manager();
$manager->inscription($inscription);

var_dump($inscription);
?>
