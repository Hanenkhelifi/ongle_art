<?php session_start(); ?>
<?php include"./navbar.php";?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="h-100 w-100" src="./assets/images/Header/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-block">
        <h3 style="color: black;">N ’y a qu’un pas à faire pour avoir votre dose de bonheur. </h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="h-300 w-100" src="./assets/images/Header/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-block">
        <p style="color: black;"> L'ART DE LONGLES est votre site d'onglerie ,Pour des mains parfaites jusqu'au bout des ongles. Pour prendre soin de vos mains et les mette en valeur on à mis à votre disposition des Prothésiste Ongulaire qui se déplacent jusqu'à votre domicile. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="h-100 w-100" src="./assets/images/Header/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-block"></div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<main id="about">
  <div class="about mt-5 mb-5">
    <div class="container-fluid">
      <h1 class="h2-responsive fw-bold text-center my-2"> About </h1>
      <br>
      <div class="row pt-5">
        <div class="col-md-5 align-items-stretch">
          <img class="img" src="./assets/images/About/About.jpg" style="width: 480px">
        </div>
        <br>
        <br>
        <div class="col-md-7">
          <br>
          <br>
          <br>
          <br>
          <h3 class="h2-responsive fw-bold text-start section-heading"> Ongle Art</h3>
          <center>
            <h6 class="lh-base">
              <strong class="ih-lg">L'ART DE LONGLES</strong> est votre site d'onglerie ,Pour des mains parfaites jusqu'au bout des ongles. Pour prendre soin de vos mains et les mette en valeur on à mis à votre disposition des <strong>Prothésiste Ongulaire </strong> qui se déplacent jusqu'à votre domicile. <br>
              <strong> N ’y a qu’un pas à faire pour avoir votre dose de bonheur. </strong>
            </h6>
          </center>
        </div>
      </div>
    </div>
  </div>
</main>
<br>
<?php include"./footer.php";?>
</body>
</html>