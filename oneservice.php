<?php
session_start();


include "./assets/database/db.php";
$sql = "SELECT * FROM categories";
$result = mysqli_query($db, $sql);
include "./navbar.php"; ?>
<br>

<center>

    <h3 style="text-align:center;"><?= $ress["nom"]; ?></h3>

    <img src="" width="460" height="345">

</center>


<br>
<?php include "./footer.php"; ?>
</body>