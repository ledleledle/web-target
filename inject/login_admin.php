<?php
session_start();
include 'connect.php';
@$param = $_SESSION['param'];

if(isset($_POST['submit'])){
$username = $_POST['name'];
$password = $_POST['pass'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'");
$cek = mysqli_num_rows($query);

if($cek == 0) {
  header("location:login_admin.php");
	$_SESSION['param'] = 'gagal';
}else{
  unset($_SESSION['param']);
	header("location:admin.php");
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" method="POST">
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Hello, Admin</h1>
    <?php
    if($param == "gagal"){ ?>
    <div class="alert alert-danger">
  <strong>Gagal !</strong> Username atau Password Salah.
</div> <?php } ?>
  </div>

  <div class="form-label-group">
    <input type="text" id="inputUser" class="form-control" placeholder="Username" name="name" required autofocus>
    <label for="inputUser">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
    <label for="inputPassword">Password</label>
  </div>
  <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Login!">
  <p class="mt-5 mb-3 text-muted text-center">&copy; UNP Kediri 2019</p>
</form>
</body>
</html>