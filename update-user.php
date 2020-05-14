<?php 
	include "koneksi.php";

	$username		= $_POST['username'];
	$password		= $_POST['password'];
	$jenisuser			= $_POST['jenisuser'];
	$level		= $_POST['level'];
	$status	= $_POST['status'];
	$idprodi			= $_POST['idprodi'];

	$input = "UPDATE user SET username='$username', password='$password', jenisuser='$jenisuser', level='$level', status='$status', idprodi='$idprodi' WHERE iduser='$_GET[id]' ";
	mysqli_query($koneksi,$input);
	echo "<script>window.alert('Berhasil Diubah'); window.location.href='user.php#content'</script>";
 ?>