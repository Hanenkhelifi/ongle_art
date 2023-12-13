<?php
session_start();

include "./assets/database/db.php";
/*si la variable existe et a une vn-n sigque l'ut dej conncar idstok */
if (isset($_SESSION["id"]) && $_SESSION["id"]) {
  header("Location: ./");
  die();
}

if (isset($_POST) && $_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  /*pour vérifier les informations d'identification :*/
  $sql = "SELECT * FROM `users` WHERE `email` = '".$email."' and `password` = '".$password."'";
  $result = mysqli_query($db, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($res = mysqli_fetch_assoc($result)) {
    $_SESSION['id'] = $res['id'];
    }
    if($_POST['ref'] == '') {
      header("Location: ./");
      die();
    }else{
      header("Location: ".$_POST['ref']);
      die();
    }
    

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
                <h2>Login</h2>
                <h6>POUR RESTER INFORME SUR L'ACTUALITE DE NOS INSTITUTS</h6>
              </div>
            </center>
          </div>
        </div>
        <div class="row">
        <?php 
  if($err == 'true') {
    echo '<center><div class="alert alert-warning">Login Error!!</div></center>';
  }
  ?>
          <form method="post" action="login.php">
            <div class="form-group">
              <label for="exampleInputEmail1"> Email :</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password :</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Mot de passe">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Souviens-toi de moi.</label>
              <input type="hidden" name="ref" value="<?= $_GET["ref"]; ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="background-color:#0d6efd">Login</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <?php include "./footer.php";?>
  </body>
</html>