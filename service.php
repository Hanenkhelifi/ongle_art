<?php
session_start();
/**************************/

/**************************************** */
include "./assets/database/db.php";
if ((isset($_GET['search']) && $_GET['search'])) {
  $sqlresultsearch = "SELECT * FROM services WHERE nom LIKE '%".$_GET['search']."%'";
  $resultsearch = mysqli_query($db, $sqlresultsearch);
}
else{
$sql = "SELECT * FROM categories";
$result = mysqli_query($db, $sql);
}
include "./navbar.php"; ?>
<br>
<?php if (mysqli_num_rows($resultsearch) > 0) {
  while ($res = mysqli_fetch_assoc($resultsearch)) { ?>
    <div id="myCarousel" class="carousel slide banner1" data-ride="carousel">
      <div class="carousel-inner">
        <div class="we_do slin">
          <div class="container">
            <div class="row" id="S">
              <br>
              <div class="col-lg-10 offset-lg-1 col-md-12">
                <div class="row" style="align-items: center;justify-content: center;">
                      <div class="col-sm-3">


                        <a href="oneservice.php?service=<?php echo $res['id'] ?>" style="color: black;">
                          <h3 style="text-align:center;"><?= $res["nom"]; ?></h3>
                        </a>
                        <img src="<?= $res["image"]; ?>" class="img-circle" alt="<?= $res["nom"]; ?>" width="250" height="236">
                      </div>
                      


                  
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
    <?php }
                  } ?>
<?php if (mysqli_num_rows($result) > 0) {
  while ($res = mysqli_fetch_assoc($result)) { ?>
    <div id="myCarousel" class="carousel slide banner1" data-ride="carousel">
      <div class="carousel-inner">
        <div class="we_do slin">
          <div class="container">
            <div class="row" id="S">
              <br>
              <div class="col-lg-10 offset-lg-1 col-md-12">
                <center>
                  <div class="title">
                    <h1 style="background-color: pink;">
                      <b><?= $res['nom']; ?></b>
                    </h1>
                    <br>
                  </div>
                </center>
                <div class="row" style="align-items: center;justify-content: center;">
                  <?php
                  $sqlservice = "SELECT * FROM services WHERE categorie='" . $res['id'] . "'";
                  $resultservice = mysqli_query($db, $sqlservice);
                  if (mysqli_num_rows($resultservice) > 0) {
                    while ($ress = mysqli_fetch_assoc($resultservice)) {
                  ?>
                      <div class="col-sm-3">


                        <a href="oneservice.php?service=<?php echo $ress['id'] ?>" style="color: black;">
                          <h3 style="text-align:center;"><?= $ress["nom"]; ?></h3>
                        </a>
                        <img src="<?= $ress["image"]; ?>" class="img-circle" alt="<?= $ress["nom"]; ?>" width="250" height="236">
                      </div>
                      


                  <?php }
                  } ?>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
<?php }
} ?>
<br>
<?php include "./footer.php"; ?>
</body>