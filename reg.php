<?php
include 'temp/headr.php';

if (isset($_POST['reg'])) {
    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = 'insert into users (fio, phone, email, login, password, id_role) values ("'.$fio.'", "'.$phone.'", "'.$email.'", "'.$login.'", "'.$password.'", 1)';
    $conect->query($sql);
    header('Location: auto.php');
    exit;
}
?>
<h2 class="text-center">Зарегистрироваться</h2>
<form class="mt-4 mb-3" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите Ф.И.О.</label>
    <input required type="text" name="fio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите телефон</label>
    <input required type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите email</label>
    <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите логин</label>
    <input required type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите пароль</label>
    <input required type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="reg" class="btn btn-danger">Зарегистрироваться</button>
</form>
<?php
include 'temp/footer.php';
?>