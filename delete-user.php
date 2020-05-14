<?php 
	include "koneksi.php";

	$delete = "DELETE FROM user WHERE iduser='$_GET[id]'";
	mysqli_query($koneksi,$delete);
	echo"<script>window.alert('Berhasil Dihapus'); window.location.href='user.php#content'</script>";
 ?>