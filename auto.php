<?php
include 'temp/headr.php';

if (isset($_POST['auto'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = 'select * from users where login = "'.$login.'" and password = "'.$password.'"';
    $user = $conect->query($sql)->fetch_assoc();
    
    if ($user) {
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['id_role'] = $user['id_role'];

        if ($user['id_role'] == 1) {
            header('Location: index.php');
            exit;
        }else{
            header('Location: tovar.php');
            exit;
        }
    }else{
        echo 'Не верный логин или пароль!';
    }
}
?>
<h2 class="text-center">Войти</h2>
<form class="mt-4 mb-3" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите логин</label>
    <input required type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите пароль</label>
    <input required type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="auto" class="btn btn-danger">Войти</button>
</form>
<?php
include 'temp/footer.php';
?>