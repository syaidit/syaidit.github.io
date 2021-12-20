<?php 
require 'koneksi.php';

$id = $_GET["id"];

$alt = query("SELECT * FROM tb_produk WHERE id = $id")[0];

if(isset($_POST["submit"])) {

if (editalat($_POST) > 0 ){

         echo "<script>
              alert('edit data alat suksess!!');
              document.location='../../../utama/Admin.php?page=alat';
          </script>";
      }else {
          echo "<script>
              alert('edit data alat gagal!!');
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
        <input type="hidden" name="id" value="<?= $alt["id"]; ?>">
    <div class="form-group col-md-9">
        <label for="nama">Nama Alat</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Input Nama Alat disini" value="<?= $alt["nama_produk"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="stok">Stok</label>
        <input type="text" name="stok" id="stok" class="form-control" placeholder="Input Stok disini" value="<?= $alt["stok"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="jenis">jenis</label>
        <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Input jenis disini" value="<?= $alt["jenis"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="satuan">Satuan</label>
        <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Input Satuan disini" value="<?= $alt["satuan"]; ?>" required>
        </div>

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-secondary btn-sms">Simpan</button>
        </div>
  </form>
</body>
</html>