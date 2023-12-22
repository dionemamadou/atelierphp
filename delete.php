<?php

if(isset($_GET['id'])&& !empty($_GET['id'])){
  $id= strip_tags($_GET['id']);
  include_once"connexion.php";
$sql='delete from vehicule where id=:id';
$query = $db->prepare($sql);
$query->bindvalue(':id',$id,PDO::PARAM_INT);
$query->execute();
header('location:index.php');
}