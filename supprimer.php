
<?php

if(isset($_GET['id'])){
    require 'model.php';
$sql = 'DELETE FROM modeles WHERE modeles.id = ?';
$q = $bdd->prepare($sql);
$mon_tableau = $q->execute(array($_GET['id']));

header('Location: index.php');
}








?>


