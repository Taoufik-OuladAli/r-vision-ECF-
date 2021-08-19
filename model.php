
<?php

try{
  $options = [
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
  PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION
  ];
  $bdd = new PDO('mysql:host=localhost;dbname=ecf_revision', 'root', '', $options);

}catch(Exception $e){
  
  die('Erreur : ' . $e->getMessage());

}







