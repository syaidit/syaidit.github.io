

<?php

//panggil koneksi database
include "../koneksi/koneksi.php";

$pass = mysqli_escape_string($koneksi, $_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM apoteker WHERE username = '$username' AND level = '$level' ");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if ($user_valid) {
    //jika username terdaftar
    //cek password sesuai atau tidak
    if ($password == $user_valid['password']) {
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama'] = $user_valid['nama'];
        $_SESSION['tempat'] = $user_valid['tempat'];
        $_SESSION['tanggal_lahir'] = $user_valid['tanggal_lahir'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level user
        if ($level == "Admin") {
            header('location:../utama/Admin.php');
        } elseif ($level == "Pegawai") {
            header('location:../utama/Pengguna.php');
        }
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='../index.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='../index.php'</script>";
}
?>