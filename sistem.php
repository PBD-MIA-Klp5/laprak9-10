<?php 
session_start();
require("koneksi/koneksi.php");

$hub = open_connection();$usr = $_POST['usr'];
$psw = $_POST['psw'];
$op = $_GET['op'];

if ($op=="in") {
	$cek = mysqli_query($hub,"SELECT * FROM user WHERE username='$usr' AND password='$psw'");
	if (mysqli_num_rows($cek)==1) {
		$c = mysqli_fetch_array($cek);
		$_SESSION['username'] = $c['username'];
		$_SESSION['jenisuser'] = $c['jenisuser'];
		header("location:index.php");
	}
	else {
		die("username/password salah <a href=\"javascript:history.back()\">kembali</a>");
	}
	mysql_close();
}
else if ($op=="out") {
	unset($_SESSION['username']);
	unset($_SESSION['jenisuser']);
	header("location:index.php");
}
else {
}
 ?>