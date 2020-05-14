<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['jenisuser']=="1" && $data['level']=="01"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jenisuser'] = "1";
		$_SESSION['level'] = "01";
		// alihkan ke halaman dashboard admin
		header("location:halaman_superadmin.php");

	// cek jika user login sebagai pegawai
	}else if($data['jenisuser']=="1" && $data['level']=="11"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jenisuser'] = "1";
		$_SESSION['level'] = "11";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_pegawai.php");

	}
	}else{
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
?>