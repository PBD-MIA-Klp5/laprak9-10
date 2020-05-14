<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pegawai</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	?>
	<div class="container">
		<div id="contact">
			<div class="row">
				<ul>
					<li>
						<a href="#" class="user"><i class="ti-user"></i>&nbsp;Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level'];?></a>

					</li>
				</ul>
			</div>
		</div>
	</div>
<div class="header">
			<div class="row">
				<div class="nav">
					<ul>
						<li>
							<a href="halaman_pegawai.php">HOME</a>
							<a href="logout.php"><button class="btn-logout">Log Out</button></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
<!DOCTYPE html>
<html>
<head>
	<title>Program Studi</title>
</head>
<body>
	
	<!-- akhir bagian header template -->
	<div class="wrap">
		<!-- bagian konten Blog -->
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
				</div>
				<?php 
require ("koneksi.php");

$hub = open_connection();
read_data();
mysqli_close($hub);
?>

<?php 
function read_data()
{
	global $hub;
	$query = "select * from dt_prodi";
	$result = mysqli_query($hub, $query);
?>

<h2>Data Program Studi</h2>
<table border="1" cellpadding="2" >
	<tr>
		<td>ID</td>
		<td>KODE</td>
		<td>NAMA PRODI</td>
		<td>AKREDITASI</td>
	</tr>
	<?php while ($row = mysqli_fetch_array($result)) { ?>
	<tr>
		<td><?php echo $row['idprodi']; ?></td>
		<td><?php echo $row['kdprodi']; ?></td>
		<td><?php echo $row['nmprodi']; ?></td>
		<td><?php echo $row['akreditasi']; ?></td>
	</tr>
	<?php } ?>
	</table>
<?php } ?>
</body>
</html>
</body>
</html>