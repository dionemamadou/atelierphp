<?php
include_once"boostrap.php";
include_once"navbar.php";
if(isset($_GET['id'])&& !empty($_GET['id'])){
  $id= strip_tags($_GET['id']);
  include_once"connexion.php";
$sql='select * from vehicule where id=:id';
$query = $db->prepare($sql);
$query->bindvalue(':id',$id,PDO::PARAM_INT);
$query->execute();
$RESULT=$query->fetch();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<div class="card m-2 bg-info">
<h3 class="card-title">voiture N<?=  $RESULT['id']?></h3>
<p><?=$RESULT['marque']?></p>
<p><?=$RESULT['model']?></p>
</div>
<body>
  
</body>
</html>