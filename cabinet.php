<?php
include 'temp/headr.php';
$sql = 'select * from users where id_user = "'.$_SESSION['id_user'].'"';
$user = $conect->query($sql);

if (isset($_POST['user'])) {
    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id_user = $_POST['id_user'];

    $sql_user = 'update users set fio = "'.$fio.'", phone = "'.$phone.'", email = "'.$email.'" where id_user = "'.$id_user.'"';
    header('Location: cabinet.php');
    exit;
}
?>
<h3 class="text-center">Личный кабинет</h3>
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите новую Ф.И.О.</label>
    <input type="text" name="fio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите новую телфон</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите новую почту</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
   <input type="hidden" name="id_user" value="<?=$_SESSION['id_user']?>">
  <button type="submit" name="user" class="btn btn-danger">Изменить</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Ф.И.О.</th>
      <th scope="col">Телефон</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $user->fetch_assoc()){?>
    <tr>
      <th scope="row"><?=$row['fio']?></th>
      <th scope="row"><?=$row['phone']?></th>
      <th scope="row"><?=$row['email']?></th>
    <?php }?>
  </tbody>
</table>
<?php
include 'temp/footer.php';
?>