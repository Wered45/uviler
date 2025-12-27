<?php
include 'temp/headr.php';
if (!isset($_SESSION['id_user']) || $_SESSION['id_role'] != 1) {
  header('/');
  exit;
}

if (isset($_POST['sakas'])) {
    $name_tovar = $_POST['name_tovar'];
    $col = $_POST['col'];
    $date = $_POST['date'];

    $sql = 'insert into orders (col, date, id_user, name_tovar) values ("'.$col.'", "'.$date.'", "'.$_SESSION['id_tovar'].'", "'.$name_tovar.'")';
    $conect->query($sql);
    header('Location: orders.php');
    exit;
}

$sql_tovar = 'select * from tovar';
$tovar = $conect->query($sql_tovar);
?>
<h2 class="text-center">Заказть товар</h2>
<form class="mt-4 mb-3" method="post">
  <select class="form-select" name="name_tovar" aria-label="Default select example">
    <option selected>Выбрать товар</option>
    <?php while($row = $tovar->fetch_assoc()){?>
    <option value="<?=$row['id_tovar']?>"><?=$row['name_tovar']?></option>
    <?php }?>
  </select>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите количество</label>
    <input required type="number" name="col" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите дату</label>
    <input required type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="sakas" class="btn btn-danger">Заказать</button>
</form>
<?php
include 'temp/footer.php';
?>