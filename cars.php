<!--constance carsCard -->
<?php
  define('_CARS_IMG_PATH','upload/voitureNeuf/');
?>

<?php 
include_once('templets/header.php');
?>


<h1>nos voiture</h1>



<?php
    $cars= [
        ['title'=>'Alfa romeo c4', 'description' => 'bulk of the card content','picture'=>'alfaromeoc4rouge.jpg','price'=>'63200 €','year'=>'2023','km'=>'neuf'],
        ['title'=>'berline BMW bleu', 'description' => 'bulk of the card content','picture'=>'BerlineBmwBleue.jpg','price'=>'73800€ ','year'=>'2023','km'=>'neuf'],    
        ['title'=>'berline BMW grise', 'description' => 'bulk of the card content','picture'=>'BlancLandRoverRangeRover.jpg','price'=>'75400€ ','year'=>'2023','km'=>'neuf']
        ]
    ?>
 <div class="row mx-3" >
    <?php foreach ($cars as $kays=>$car){ 

      include('templets/carsCard.php');

        } ?>
  </div>
  














<?php
include_once('templets/footer.php');

?>