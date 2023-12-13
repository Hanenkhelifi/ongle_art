<?php
session_start();
//*****************

include "./assets/database/db.php";

$sql = "SELECT * FROM categories";
$result = mysqli_query($db, $sql);
include "./navbar.php";
///////////////////////////////////////////////
// include_once("include/db.php");

// // get proeduct
// if (isset($_GET) && $_GET && $_GET['id']){
//     $sql = "SELECT services.id, services.nom, image , categorie.nom as categorie_nom FROM `services` INNER JOIN categorie on id_categorie = categorie.id WHERE product.id = " . $_GET['id'];
//     $result = $conn->query($sql);
    
//     if ($result->num_rows > 0) {
//         // output data of each row
//         $product = $result->fetch_assoc();
//     } else {
//         $conn->close();
//         header('Location: 404.html');
//         die;
//     }
// } else {
//     $conn->close();
//     header('Location: 404.html');
//     die;
// }

// // add review
// if (isset($_POST) && $_POST) {
//     $sql = "INSERT INTO `review` (`id_user`, `id_services`, `rating`, `comment`) VALUES ('1', '" . $_GET['id'] . "', '" . $_POST['rating'] . "', '" . $_POST['review'] . "');";
//     if ($conn->query($sql) !== TRUE) {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// // get reviews

// $sql = "SELECT rating, comment, date, nom, image_src FROM `review` INNER JOIN user on id_user = user.id where id_product = " . $_GET['id'] . " ORDER by date desc;";
// $result = $conn->query($sql);
// $conn->close();
// ?>






<br>
<?php
        // Récupérer le nom de l'image à partir de la requête GET
        $image = isset($_GET['image']) ? $_GET['image'] : '11.jpg';
        ?>


<center>
    <div class="row">
        <div class="col-6">
    <h3 style=" text-align:center;"> </h3>

            <img src="11.jpg" width="460" height="345">
        </div>
        <div class="col-auto">
            <br>
            <br>
            <br>
            <h3 style="text-align:center;">Frensh</h3>
            <p> French est une mise en bseauté des ongles qui consiste à souligner le sourire de l'ongle.</p>
        </div>

         <!-- /*******/ -->
    </div>

    <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button" role="tab" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" aria-controls="nav-about" aria-selected="true">Description</button>
                                    <button class="nav-link border-white border-bottom-0" type="button" role="tab" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" aria-controls="nav-mission" aria-selected="false">Reviews</button>
                                </div>
                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                    <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                    <?php 
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) { ?>
                                                <div class="d-flex">
                                                    <img src="<?= $row['image'] ?>" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                                    <div class="">
                                                        <p class="mb-2" style="font-size: 14px;"><?= $row['date'] ?></p>
                                                        <div class="d-flex justify-content-between">
                                                            <h5><?= $row['nom'] ?></h5>
                                                            <div class="d-flex mb-3">
                                                                <?php for($i=0; $i < 5; $i++ ){
                                                                    if ($i < $row['rating'] ){ ?>
                                                                    <i class="fa fa-star text-secondary"></i>
                                                                    <?php } else { ?> 
                                                                        <i class="fa fa-star"></i>
                                                                <?php }} ?>
                                                            </div>
                                                        </div>
                                                        <p><?= $row['comment'] ?></p>
                                                    </div>
                                                </div>
                                        <?php }
                                        } else {
                                            echo "0 reviews";
                                        }
                                    ?>
                                </div>
       
</center>


<br>
<?php include "./footer.php"; ?>
</body>