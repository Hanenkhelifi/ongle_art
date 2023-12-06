<?php
session_start();

include "./assets/database/db.php";
if (isset($_SESSION["id"]) && $_SESSION["id"]) {
    header("Location: ./");
    die();
}
if (isset($_POST) && $_POST) {
  $name = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $password = $_POST['password'];
    $ins = "INSERT INTO `users` VALUES (NULL,'".$name."','".$prenom."','".$email."','".$password."')";
      $resultins = mysqli_query($db, $ins);
      $sql = "SELECT * FROM `users` WHERE `email` = '".$email."' and `password` = '".$password."'";
      $result = mysqli_query($db, $sql);
      if (mysqli_num_rows($result) > 0) {
        while($res = mysqli_fetch_assoc($result)) {
        $_SESSION['id'] = $res['id'];
        }
        header("Location: ./");
        die();
      }else{
      $err = "true";
      } 
}
?>
<?php include"./navbar.php";?>

<br>
<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <center>
          <div class="titlepage" id="in">
            <h2>Sign Up</h2>
            <h6>POUR RESTER INFORME SUR L'ACTUALITE DE NOS INSTITUTS</h6>
          </div>
        </center>
      </div>
    </div>
    <div class="row">
    <?php 
  if($err == 'true') {
    echo '<center><div class="alert alert-warning">Sign Up Error!!</div></center>';
  }
  ?>
<form method="post" action="signup.php">
  <div class="form-group">
    <label for="nom">Nom :</label>
    <input type="text" class="form-control" name="nom" id="nom" aria-describedby="nomHelp" placeholder="Enter nom">
  </div>
  <div class="form-group">
    <label for="prenom">Prenom :</label>
    <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="prenomHelp" placeholder="Enter prenom">
  </div>
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="Password">Password :</label>
    <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
        </div>
  </div>
</div>
<br>
<?php include "./footer.php";?>
</body>
</html>