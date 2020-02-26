<?php
session_start();
require('../model/connexion_class.php');
require('../manager/connexion_manager.php');

$connexion = new connexion($_POST['login'], $_POST['mdp']);
$manager=new Manager();
$manager->connexion($connexion);

var_dump($connexion);
?>
