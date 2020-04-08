<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from f_login where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if($cek > 0){

	$login = mysqli_fetch_assoc($data);

	if($login['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:e/index.php");
	}elseif ($login['level']=="operator") {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:d/index.php");
	}else{
		header("location:index.php?pesan=gagal1");
	}

}else{
	//header("location:index.php?pesan=gagal");
}
?>
