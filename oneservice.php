<?php
session_start();
//*****************

include "./assets/database/db.php";
include "./navbar.php";

$idservice = intval($_GET['service']);
$sqlservice = "SELECT * FROM `services` WHERE `id`=".$idservice;
$resultservice = mysqli_query($db, $sqlservice);
?>
<br>

<center>
<?php while ($res = mysqli_fetch_assoc($resultservice)) {?>
        <div class="row">
        <div class="col-6">
    <h3 style=" text-align:center;"> </h3>
    <img src="<?= $res["image"]; ?>" class="img-circle" alt="<?= $res["nom"]; ?>" width="250" height="236">
        
        </div>
        <div class="col-auto">
            <br>
            <br>
            <br>
            <h3 style="text-align:center;"><?= $res["nom"]; ?></h3>
        </div>
        
         <!-- /*******/ -->
    </div>
    <?php }?>
    </center>

    <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button" role="tab" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" aria-controls="nav-about" aria-selected="true">Description</button>
                                    <button class="nav-link border-white border-bottom-0" type="button" role="tab" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" aria-controls="nav-mission" aria-selected="false">Reviews</button>
                                </div>
                            </nav>
                           
<h2>Star Rating</h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
       
<style>
.checked {
  color: orange;
}
</style>

<!-- /************************************** */ -->
<div class="col-lg-6">
                            <h4 class="fw-bold mb-3"><?= $services['nom'] ?></h4>
                            <p class="mb-3">Category: <?= $services['categorie_nom'] ?></p>
                            <div class="d-flex mb-4">
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="mb-4"><?= $services['description'] ?></p>
                            <div class="input-group quantity mb-5" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                </div>
                            </div>
                            <a href="#" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                        <!-- /****************************************** */ -->

<br>
<?php include "./footer.php"; ?>
</body>