<?php
  define('_CARS_IMG_PATH','assets/image/');
?>

<?php
include ('templets/header.php');
?>


<?php
 $cars= [
    ['title'=>'Cardtitle', 'description' => 'bulk of the card content','picture'=>'entretienCarrosserie.avif','price'=>'1000','year'=>'2012'],
    ['title'=>'Cardtitle', 'description' => 'bulk of the card content','picture'=>'entretienCarrosserie.avif','price'=>'1000','year'=>'2012'],    
    ['title'=>'Cardtitle', 'description' => 'bulk of the card content','picture'=>'entretienCarrosserie.avif','price'=>'1000','year'=>'2012']
    ]
 ?>
 <div class="row">
<?php

foreach ($cars as $kays=>$car){ ?>

<div class="col-md-4">

      <div class="card" >
        <img class="card-img-top" src=<?=_CARS_IMG_PATH.$car['picture']?>  alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="row">
            <div><p> prix </p></div>
            <div><p> année </p></div>
            <div><p> km </p></div>
          </div>
          <a href="#" class="btn btn-primary">détailles</a>
        </div>
      </div>
    

</div>

<?php

}?>
</div>

 





<?php
include('templets/footer.php');

?>