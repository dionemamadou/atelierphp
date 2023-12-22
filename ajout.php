<?php
include_once('boostrap.php');

include_once('navbar.php');

?>
<div class="row">
    <div class="col-6 m-2" >
        <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">marque</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="toyota" name="marque">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">model</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="berlin" name="model">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">matricule</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="th-231-B" name="matricule">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="5000000" name="prix">
        </div>
        <button class="btn btn-success">envoyer</button>
        <a class="btn btn-success"href="index.php">retour</a>
        </form>

    </div>
</div>
<?php
include_once('connexion.php');
if(isset($_POST) && !empty($_POST)){
   $marque = $_POST['marque'];
    $model = $_POST['model'];
    $matricule = $_POST['matricule'];
    $prix = $_POST['prix'];
    $sql = "INSERT INTO `vehicule`(`marque`, `model`, `matricule`, `prix`) VALUES ('$marque','$model','$matricule','$prix')";
    $query = $db->prepare($sql);
    $query->execute();
    echo "ajout avec succes";
     header('location:index.php');
}
include_once('footer.php');