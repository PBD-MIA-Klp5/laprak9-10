<?php 
	include "koneksi.php";

	$id_user		= $_POST['iduser'];
	$username		= $_POST['username'];
	$password		= $_POST['password'];
	$jenisuser		= $_POST['jenisuser'];
	$level			= $_POST['level'];
	$status			= $_POST['status'];
	$idprodi		= $_POST['idprodi'];

	$input = "INSERT INTO user VALUES('$iduser', '$username', '$password', '$jenisuser', '$level', '$status', '$idprodi')";
	mysqli_query($koneksi,$input);
	echo "<script>window.alert('Berhasil Ditambahkan'); window.location.href='user.php'</script>";
 ?>