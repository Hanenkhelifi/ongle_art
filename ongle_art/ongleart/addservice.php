<?php
session_start();

include "./assets/database/db.php";
if (!isset($_SESSION["id"]) && !$_SESSION["id"]) {
    header("Location: ./login.php?ref=".$_SERVER['REQUEST_URI']);
    die();
}
if (isset($_POST) && $_POST) {
  if($_POST['categorie'] != ''){
    $name = $_POST['name'];
    
    $categorie = $_POST['categorie'];
    $target_dir = "./assets/images/categories/".$categorie."/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $sql = "INSERT INTO services VALUES (NUll,'$name','$target_file', '$categorie')";
    $X = mysqli_query($db, $sql);

  }
}

?>
<?php include "./navbar.php";?>
<br>
<div class="container">    
<form method="post" action="addservice.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Nom</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter nom de Service" required>
  </div>
  <div class="form-group">
  <label for="image" >Select image :</label>
  <input type="file" id="image" class="form-control" name="image" accept="image/png, image/jpeg" aria-describedby="imgHelp" value="" required>
  </div>
  <div class="form-group">
  <label for="categorie" aria-describedby="categorieHelp">Select categorie :</label>
    <select class="form-control" id="categorie" name="categorie" required>
    <option value="" hidden>Select categorie</option>
  
    <?php
              $categoriessql = "SELECT * FROM categories";
              $categories = mysqli_query($db, $categoriessql);
              if (mysqli_num_rows($categories) > 0) {
        while ($categoriesres = mysqli_fetch_assoc($categories)) { ?>
              <option value="<?= $categoriesres["id"] ?>"><?= $categoriesres["nom"] ?></option>
              <?php }
    } ?>
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Add Service</button>
</form>
</div>
<br>
<script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
<?php include "./footer.php";?>
</body>
</html>