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
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";

		$cekid = "SELECT * from user WHERE username='$username'";
        $cekidQry = mysqli_query($koneksi, $cekid)  or die ("Query barang salah : ".mysql_error());
    
            foreach($cekidQry as $idRow) {

           $_SESSION['id_user'] = $idRow['id_user'];
           }
		// alihkan ke halaman dashboard admin
		header("location:admin.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:pegawai.php");

	// cek jika user login sebagai penjahit
	}else if($data['level']=="penjahit"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "penjahit";

		$cekid = "SELECT * from user WHERE username='$username'";
        $cekidQry = mysqli_query($koneksi, $cekid)  or die ("Query barang salah : ".mysql_error());
    
            foreach($cekidQry as $idRow) {

           $_SESSION['id_user'] = $idRow['id_user'];
           }
		// alihkan ke halaman dashboard penjahit
		header("location:penjahit.php?page=barang");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>