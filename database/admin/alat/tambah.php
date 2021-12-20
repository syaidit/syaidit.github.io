<?php 
require 'koneksi.php';

if(isset($_POST["submit"])) {

if (tambahalat($_POST) > 0 ){

         echo "<script>
              alert('Simpan data alat suksess!!');
              document.location='../../../utama/Admin.php?page=alat';
          </script>";
      }else {
          echo "<script>
              alert('Simpan data alat gagal!!');
              document.location='../../../utama/Admin.php?page=alat';
          </script>";
      }

}

 ?>

 <html lang="en">
<head>  
  <title>Tambah data Alat</title>
  <link rel="stylesheet" type="text/css" href="../../../css/boot 5/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
  <h1 class="text-center">Tambah data</h1>
<div class="card mt-3">
  <div class="card-body">
  <form action="" method="post" >
    <div class="form-group col-md-9">
        <label for="nama_obat">Nama Alat</label>
        <input type="text" name="nama_obat" id="nama_obat" class="form-control" placeholder="Input Nama Obat disini" required>
        </div>
    <div class="form-group col-md-9">
        <input type="hidden" name="fungsi" class="form-control " placeholder="Input Fungsi disini" >
        </div>
    <div class="form-group col-md-9">
        <input type="hidden" name="diproduksi_oleh" class="form-control" placeholder="Input Diproduksi Oleh disini" >
        </div>
    <div class="form-group col-md-9">
        <input type="hidden" name="expired" class="form-control" placeholder="Input Expired disini">
        </div> 
    <div class="form-group col-md-9">
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control" placeholder="Input Harga disini" required>
        </div>
    <div class="form-group col-md-9">
        <label for="jenis">Jenis</label>
        <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Input Jenis disini" required>
        </div>
    <div class="form-group col-md-9">
        <label for="stok">Stok</label>
        <input type="text" name="stok" id="stok" class="form-control" placeholder="Input Stok disini" required>
        </div>
    <div class="form-group col-md-9">
        <label for="satuan">Satuan</label>
        <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Input Satuan disini" required>
        </div>

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-secondary btn-sms">Simpan</button>
        </div>
  </form>
</body>
</html>