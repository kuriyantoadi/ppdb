<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai

// menghitung jumlah data yang ditemukan

if ($cek > 0) {
    if ($login['level']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:e/index.php");
    } elseif ($login['level']=="operator") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:d/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
