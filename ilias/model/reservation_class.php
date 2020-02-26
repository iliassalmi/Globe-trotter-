<?php
class reservation{
  private $_nom;
  private $_date;
  private $_tel;
  private $_message;
  private $_heure;
  private $_mail;
  private $_nb_personne;

public function __construct($nom,$date,$tel,$message,$heure,$mail,$nb_personne){
  $this->setNom($nom);
  $this->setDate($date);
  $this->setTel($tel);
  $this->setMessage($message);
  $this->setHeure($heure);
  $this->setMail($mail);
  $this->setNb_personne($nb_personne);
}

public function setNom($nom){
//  if(empty($nom)){

//  }
//else {
  $this->_nom = $nom ;

}

public function setDate($date){
//  if(empty($date)){

//  }
//else {
$this->_date = $date ;
}

public function setTel($tel){
//  if(empty($tel)){

//  }
//else {
  $this->_tel = $tel ;
}


public function setMessage($message){
//  if(empty($message)){

//  }
//else {
$this->_message = $message ;
}

public function setNb_personne($nb_personne){
  //if(empty($nb_personne)){

  //}
//else {
  $this->_nb_personne = $nb_personne ;
}

public function setMail($mail){
  //if(empty($mail)){

  //}
//else {
  $this->_mail = $mail ;
}

public function setHeure($heure){
  //if(empty($heure)){

  //}
//else {
  $this->_heure = $heure ;
}


public function getNom(){
  return $this->_nom;
}
public function getDate(){
  return $this->_date;
}
public function getTel(){
  return $this->_tel;
}
public function getHeure(){
  return $this->_heure;
}
public function getMail(){
  return $this->_mail;
}
public function getMessage(){
  return $this->_message;
}
public function getNb_personne(){
  return $this->_nb_personne;
}
}




 ?>
