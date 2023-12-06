<?php

session_start();

include "./assets/database/db.php";
if (!isset($_SESSION["id"]) && !$_SESSION["id"]) {
  header("Location: ./login.php?ref=".$_SERVER['REQUEST_URI']);
  die();
}
if (isset($_POST) && $_POST) {
    $id = $_POST['id'];

    $sql = "DELETE FROM services WHERE id =".$id;
    $X = mysqli_query($db, $sql);
}
$sql = "SELECT * FROM services";
$result = mysqli_query($db, $sql);
?>
<?php include "./navbar.php";?>
<br>
<div class="container">
  <h2>Delete un service</h2>
  <form action="delservice.php" method="post">
    <div class="form-group">
  <label for="name">Nom:</label>
  <select class="form-control" id="id" name="id">
  <?php if (mysqli_num_rows($result) > 0) {
      while($res = mysqli_fetch_assoc($result)) {
        ?>
    <option value="<?= $res['id']?>"><?= $res['nom']?></option>
    <?php }}?>
  </select> 
</div>
<button type="submit" class="btn btn-primary">Delete Service</button>
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