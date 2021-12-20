<?php
require 'koneksi.php';

$alat = query("SELECT * FROM tb_produk WHERE jenis =
	'alat'");

?>
<html>
<head>
	<title>Data Alat Medis</title>
	<link rel="stylesheet" type="text/css" href="../css/boot 5/bootstrap/dist/css/bootstrap.min.css">
</head> 
<body>
	<div class="container" style="margin-top:20px"> 
<center><font size="6">Data Alat Medis</font></center>
	<div class="card mt-3">
  <div class="card-body">
  	  <a href="../database/admin/alat/tambah.php" name=""><button class="btn btn-dark right">Tambah Data Alat</button></a>
<table class="table table-bordered table-stripped" >

	<tr>
		<th class="text-center">Id</th>
		<th class="text-center">Nama Alat</th>
		<th class="text-center">harga</th>
		<th class="text-center">Stok</th>
		<th class="text-center">jenis</th>
		<th class="text-center">Satuan</th>
		<th class="text-center">Opsi</th>
	</tr>
  		<?php
  			$no = 1;
  			$tampil = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE jenis = 'alat' ");
  			while($row = mysqli_fetch_array($tampil)) {
  		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?=$row["nama_produk"]; ?></td>		
			<td><?=$row["harga"]; ?></td>		
			<td><?=$row["stok"]; ?></td>		
			<td><?=$row["jenis"]; ?></td>		
			<td><?=$row["satuan"]; ?></td>		
			<td>
				<a href="../database/admin/alat/edit.php?id=<?= $row['id'];?>" class="btn btn-secondary btn-sm">Edit</a> 
  				<a href="../database/admin/alat/hapus.php?id=<?=$row['id'];?>" 
            	onclick="return confirm('yakin mau hapus???')" class="btn btn-danger btn-sm"> Hapus </a>
			</td>			
		</tr>
	<?php }; ?>

</table>
</body>
</html>