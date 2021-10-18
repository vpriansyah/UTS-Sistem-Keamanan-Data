<?php
require "koneksi.php";

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result = mysqli_query($koneksi, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: dashboard.php");
	} else {
		echo "<script>alert('Maaf, Username atau Password Salah.')</script>";
	}
}


?>

<div class="login-box">
  <link rel="stylesheet" href="src/css.css">
  <h2>Login User</h2>
  <form method="post" action="">
    <div class="user-box">
      <input type="text" name="username" id="username">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" id="password">
      <label>Password</label>
    </div>
    <p><a href="register.php">Belum punya akun?</a></p>
  <br>
    <div  class="form-action-buttons">
      <input type="reset" value="Reset">
      <input type="submit" name="submit">
  </div>
  </form>

</div>

