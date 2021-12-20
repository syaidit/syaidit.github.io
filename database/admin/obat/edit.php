<?php 
require 'koneksi.php';

$Id = $_GET["id"];

$obt = query("SELECT * FROM tb_produk WHERE id = $Id")[0];

if(isset($_POST["submit"])) {

if (editobat($_POST) > 0 ){

         echo "<script>
              alert('edit data suksess!!');
              document.location='../../../utama/Admin.php?page=masuk';
          </script>";
      }else {
          echo "<script>
              alert('edit data gagal!!');
              document.location='../../../utama/Admin.php?page=masuk';
          </script>";
      }

}

 ?>

 <html lang="en">
<head>  
  <title>Edit data Obat</title>
  <link rel="stylesheet" type="text/css" href="../../../css/boot 5/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
  <h1 class="text-center">Edit data</h1>
<div class="card mt-3">
  <div class="card-body">
  <form action="" method="post" >
        <input type="hidden" name="id" value="<?= $obt["id"]; ?>">
    <div class="form-group col-md-9">
        <label for="nama_obat">Nama</label>
        <input type="text" name="nama_obat" id="nama_obat" class="form-control" placeholder="Input Nama Obat disini" value="<?= $obt["nama_produk"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="fungsi">Fungsi</label>
        <input type="text" name="fungsi" id="fungsi" class="form-control " placeholder="Input Fungsi disini" value="<?= $obt["fungsi"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="diproduksi_oleh">Diproduksi Oleh</label>
        <input type="text" name="diproduksi_oleh" id="diproduksi_oleh" class="form-control" placeholder="Input Diproduksi Oleh disini" value="<?= $obt["diproduksi_oleh"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="expired">Expired</label>
        <input type="text" name="expired" id="expired" class="form-control" placeholder="Input Expired disini" value="<?= $obt["expired"]; ?>" required>
        </div> 
    <div class="form-group col-md-9">
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control" placeholder="Input Harga disini" value="<?= $obt["harga"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="jenis">Jenis</label>
        <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Input Jenis disini" value="<?= $obt["jenis"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="stok">Stok</label>
        <input type="text" name="stok" id="stok" class="form-control" placeholder="Input Stok disini" value="<?= $obt["stok"]; ?>" required>
        </div>
    <div class="form-group col-md-9">
        <label for="satuan">Satuan</label>
        <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Input Satuan disini" value="<?= $obt["satuan"]; ?>" required>
        </div>

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-secondary btn-sms">Simpan</button>
        </div>
  </form>
</body>
</html>