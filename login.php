<?php
include 'connect.php';

if(isset($_POST['submit'])){
$username = $_POST['name'];
$password = $_POST['pass'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'");
$cek = mysqli_num_rows($query);

//SELECT * FROM admin WHERE username='xxx' OR 1=1 -- ' AND password='yyy';

if($cek == 0) {
	die("Username dan Password Tidak Terdaftar");
}else{
	header("location:admin.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web Target</title>
</head>
<body>
	<h1>Login</h1>
	<form method="POST">
		<label>Username</label><br>
		<input type="text" name="name"><br>
		<label>Password</label><br>
		<input type="password" name="pass"><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>