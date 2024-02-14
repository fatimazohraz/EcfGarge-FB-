<div class="col-md-4 col-sm-12">

      <div class="card" >
        <img class="card-img-top" src=<?=_CARS_IMG_PATH.$car['picture']?>  alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?=$car['title']?></h5>
          <p class="card-text"><?=$car['description']?></p>
          <div class="container">
            <div ><p> <?=$car['price']?> </p></div>
            <div ><p> <?=$car['year']?> </p></div>
            <div ><p> <?=$car['km']?> </p></div>
          </div>
          <a href="car.php?id=<?=$key;?>" class="btn btn-primary" > detailles</a>
        </div>
      </div>

</div>






















