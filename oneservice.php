<?php
session_start();
//*****************

include "./assets/database/db.php";

$sql = "SELECT * FROM categories";
$result = mysqli_query($db, $sql);
include "./navbar.php"; ?>
<br>










































<center>
    <!-- <div class="row">
        <div class="col-6
    <h3 style=" text-align:center;"> <?= $ress["nom"]; ?></h3>

            <img src="11.jpg" width="460" height="345">
        </div>
        <div class="col-auto">
            <br>
            <br>
            <br>
            <h3 style="text-align:center;">Frensh</h3>
            <p> French est une mise en bseauté des ongles qui consiste à souligner le sourire de l'ongle.</p>
        </div> -->
</center>

</div>
<br>
<?php include "./footer.php"; ?>
</body>