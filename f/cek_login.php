<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$username = addslashes(trim($_POST['username']));
// $username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from f_login where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    if ($login['level']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin";
        header("location:e/index.php");
    } elseif ($login['level']=="operator") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:d/index.php");
    } elseif ($login['level']=="tkj") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:d/tkj/index.php");
    } elseif ($login['level']=="rpl") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "rpl";
        header("location:d/rpl/");
    } elseif ($login['level']=="otkp") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:d/otkp/index.php");
    } elseif ($login['level']=="akl") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "akl";
        header("location:d/akl/index.php");
    } elseif ($login['level']=="tkr") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:d/tkr/index.php");
    } elseif ($login['level']=="op-mesin") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "mesin";
        header("location:d/mesin/index.php");
    } else {
        echo "gagal1";
        // header("location:index.php?pesan=gagal1");
    }
} else {
    echo "gagal2";

    // header("location:index.php?pesan=gagal");
}
