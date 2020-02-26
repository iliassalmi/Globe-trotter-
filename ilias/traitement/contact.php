<?php

require('../model/contact.php');
require('../manager/contact.php');

$reservation = new reservation($_POST['nom'],$_POST['message'],$_POST['mail']);
$manager = new Manager();
$manager->reservation($reservation);

?>
