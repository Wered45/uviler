<?php
include 'temp/headr.php';

if (isset($_POST['tovar'])) {
    $name_tovar = $_POST['name_tovar'];
    $prosvod = $_POST['prosvod'];
    $categori = $_POST['categori'];
    $wihg = $_POST['wihg'];
    $material = $_POST['material'];
    $proba = $_POST['proba'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    $sql = 'insert into tovar (name_tovar, prosvod, categori, wihg, material, proba, price, img) values ("'.$name_tovar.'", "'.$prosvod.'", "'.$categori.'", "'.$wihg.'", "'.$material.'", "'.$proba.'", "'.$price.'", "'.$img.'")';
    $conect->query($sql);
    header('Location: tovar.php');
    exit;
}

$sql_tovar = 'select * from tovar';
$new_tovar = $conect->query($sql_tovar);

if (isset($_POST['delet'])) {
  $id_tovar = $_POST['id_tovar'];

  $sql_delet = 'delete from tovar where id_tovar = "'.$id_tovar.'"';
  $conect->query($sql_delet);
  header('Location: tovar.php');
  exit; 
}
?>
<h2 class="text-center">Добавить товар</h2>
<form class="mt-4 mb-3" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите название украшения</label>
    <input required type="text" name="name_tovar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите производителя</label>
    <input required type="text" name="prosvod" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите категорию</label>
    <input required type="text" name="categori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите размер</label>
    <input required type="text" name="wihg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите название материала</label>
    <input required type="text" name="material" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите пробу</label>
    <input required type="text" name="proba" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите цену</label>
    <input required type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Вставить картинку</label>
    <input required type="text" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="tovar" class="btn btn-danger">Добавить</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Название украшения</th>
      <th scope="col">Проиизводитель</th>
      <th scope="col">Категория</th>
      <th scope="col">Размер</th>
      <th scope="col">Метериял</th>
      <th scope="col">Проба</th>
      <th scope="col">Цена</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $new_tovar->fetch_assoc()){?>
    <tr>
      <th scope="row"><?=$row['name_tovar']?></th>
      <th scope="row"><?=$row['prosvod']?></th>
      <th scope="row"><?=$row['categori']?></th>
      <th scope="row"><?=$row['wihg']?></th>
      <th scope="row"><?=$row['material']?></th>
      <th scope="row"><?=$row['proba']?></th>
      <th scope="row"><?=$row['price']?></th>
      <th scope="row"><form method="post">
      <input type="hidden" name="id_tovar" value="<?=$row['id_tovar']?>">
      <button type="submit" name="delet" class="btn btn-dark">Удалить</button>
      </form></th>
    </tr>
    <?php }?>
  </tbody>
</table>
<?php
include 'temp/footer.php';
?>