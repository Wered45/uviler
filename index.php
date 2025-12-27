<?php
include 'temp/headr.php';
$sql = 'select * from tovar';
$tovar = $conect->query($sql);
?>
<h3 class="text-center">Главная</h3>

<div class="row">
<?php while($row = $tovar->fetch_assoc()){?>
<div class="card" style="width: 18rem;">
  <img src="<?=$row['img']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$row['name_tovar']?></h5>
    <p class="card-text">Категория: <?=$row['categori']?></p>
    <p class="card-text">Размер: <?=$row['wihg']?></p>
    <p class="card-text">Материал: <?=$row['material']?></p>
    <p class="card-text">Проба: <?=$row['proba']?></p>
    <p class="card-text">Цена: <?=$row['price']?></p>
    <a href="sakas.php" class="btn btn-danger">Заказать</a>
  </div>
</div>
<?php }?> 
</div>   
<?php
include 'temp/footer.php';
?>