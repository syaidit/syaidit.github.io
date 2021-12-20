<?php 
require 'koneksi.php';

if(isset($_POST["submit"])) {

if (tambah($_POST) > 0 ){

		 echo "<script>
              alert('Simpan data suksess!!');
              document.location='../../../utama/Admin.php?page=pengguna';
          </script>";
      }else {
      	  echo "<script>
              alert('Simpan data gagal!!');
              document.location='../../../utama/Admin.php?page=pengguna';
          </script>";
      }

}

 ?>
<html lang="en">
<head>  
  <title>Tambah data Apoteker</title>
  <link rel="stylesheet" type="text/css" href="../../../css/boot 5/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
  <h1 class="text-center">Tambah data</h1>
<div class="card mt-3">
  <div class="card-body">
  <form action="" method="post" >
    <div class="form-group col-md-9">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Input Nama disini" required>
        </div>
    <div class="form-group col-md-9">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control " placeholder="Input Alamat disini" required>
        </div>
    <div class="form-group col-md-9">
        <label for="tempat">Tempat</label>
        <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Input Tempat Lahir disini" required>
        </div>
    <div class="form-group col-md-9">
        <label for="tanggal_lahir">Tanggal_Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
        </div> 
    <div class="form-group col-md-9">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Input Tanggal Lahir disini" required>
        </div>
    <div class="form-group col-md-9">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Input Username disini" required>
        </div>
    <div class="form-group col-md-9">
        <label for="password">Password</label>
        <input type="text" name="password" id="password" class="form-control" placeholder="Input Password disini" required>
        </div>
    <div class="form-group col-md-9">
        <label for="level">Level</label>
        <input type="text" name="level" id="level" class="form-control" placeholder="Input level disini" required>
        </div>

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-secondary btn-sms">Simpan</button>
        </div>
  </form>
</body>
</html>