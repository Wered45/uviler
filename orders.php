<?php
include 'temp/headr.php';
$sql = 'select * from orders 
join tovar on orders.id_tovar = tovar.id_tovar
join users on orders.id_user = users.id_user';
$tovar = $conect->query($sql);
?>
<h2 class="text-center">Мои заказы</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Название украшения</th>
      <th scope="col">Количество</th>
      <th scope="col">Цена</th>
      <th scope="col">Дата покупки</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $tovar->fetch_assoc()){?>
    <tr>
      <th scope="row"><?=$row['name_tovar']?></th>
      <th scope="row"><?=$row['col']?></th>
      <th scope="row"><?=$row['price']?></th>
      <th scope="row"><?=$row['date']?></th>
    </tr>
    <?php }?>
  </tbody>
</table>
<?php
include 'temp/footer.php';
?>