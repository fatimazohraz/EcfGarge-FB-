<!--constance carsCard -->
<?php
  define('_CARS_IMG_PATH','upload/voitureNeuf/');
?>

<!--header-->

<?php
include_once('templets/header.php');
?>

<!--fin header -->
<!-- debut section1 -->

<section>
  <div>
    <img src="" alt="">
  </div>
  <div>

  </div>






</section>
<!--fin section1-->






<!--debut section2-->

<section>
<div class= my-5>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="assets/image/entretienCarrosserie.avif" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>entretien Carrosserie</h1>
                <p class="opacity-75">meilleur service pour une remise a neuf de votre voiture</p>
                <p><a class="btn btn-lg btn-primary" href="#">plus d'info</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="bd-placeholder-img" width="100%" height="100%" src="assets/image/entretienRegulier.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>entretien regulier</h1>
                <p>notre garage vous offre le meilleur entretien pour vos voirure</p>
                <p><a class="btn btn-lg btn-primary" href="#">plus d'info</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="assets/image/imageMecanique.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>mecanique voirute</h1>
                <p>pieces de qualité et employé qualifier pour la reparation de vos voiture</p>
                <p><a class="btn btn-lg btn-primary" href="#">plud d'info</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

</section>
<!-- fin section2-->


<!--debut section3 carsCard -->
<div class="my-5">

<?php
 $cars= [
    ['title'=>'Alfa romeo c4', 'description' => 'bulk of the card content','picture'=>'alfaromeoc4rouge.jpg','price'=>'63200 €','year'=>'2023','km'=>'neuf'],
    ['title'=>'berline BMW bleu', 'description' => 'bulk of the card content','picture'=>'BerlineBmwBleue.jpg','price'=>'73800€ ','year'=>'2023','km'=>'neuf'],    
    ['title'=>'berline BMW grise', 'description' => 'bulk of the card content','picture'=>'BlancLandRoverRangeRover.jpg','price'=>'75400€ ','year'=>'2023','km'=>'neuf']
    ]
 ?>
 <div class="row " class="flux" >
<?php foreach ($cars as $kays=>$car){ 

   include('templets/carsCard.php');

    } ?>
</div>
<div class="text-center mt-5  col-4 col-sm-4 col-md-6 m-auto">

    <a href="cars.php" class="btn btn-primary">voir plus de voiture</a>

</div>

</div>


<!--fin section3 carsCard -->

 




<!--footer -->

<?php
include_once('templets/footer.php');

?>
<!--fin footer-->
