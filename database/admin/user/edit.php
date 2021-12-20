<?php 
require 'koneksi.php';

$Id = $_GET["Id"];

$apt = query("SELECT * FROM apoteker WHERE Id = $Id")[0];

if(isset($_POST["submit"])) {

if (edit($_POST) > 0 ){

         echo "<script>
              alert('edit data suksess!!');
              document.location='../../../utama/Admin.php?page=pengguna';
          </script>";
      }else {
          echo "<script>
              alert('edit data gagal!!');
              document.location='../../../utama/Admin.php?page=pengguna';
          </script>";
      }

}

 ?>
<html lang="en">
<head>  
  <title>Edit data Apoteker</title>
  <link rel="stylesheet" type="text/css" href="../../../css/boot 5/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
  <h1 class="text-center">Edit data</h1>
<div class="card mt-3">
  <div class="card-body">
  <form action="" method="post" >
    <input type="hidden" name="Id" value="<?= $apt["Id"]; ?>">
    <div class="form-group col-md-9">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Input Nama disini" value="<?= $apt["nama"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control " placeholder="Input Alamat disini" value="<?= $apt["alamat"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="tempat">Tempat</label>
        <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Input Tempat Lahir disini" value="<?= $apt["tempat"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="tanggal_lahir">Tanggal_Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $apt["tanggal_lahir"]; ?>" required>
        </div> 
    <div class="form-group col-md-9">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Input Tanggal Lahir disini" value="<?= $apt["jenis_kelamin"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Input Username disini" value="<?= $apt["username"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="password">Password</label>
        <input type="text" name="password" id="password" class="form-control" placeholder="Input Password disini" value="<?= $apt["password"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="level">Level</label>
        <input type="text" name="level" id="level" class="form-control" placeholder="Input level disini" value="<?= $apt["level"]; ?>" required>
        </div>

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-secondary btn-sms">Simpan</button>
        </div>
  </form>
</body>
</html>