<?php
require 'koneksi.php';

$apotek = query("SELECT * FROM apoteker");

?>
<html>
<head>
	<title>Data apoteker</title>
	<link rel="stylesheet" type="text/css" href="../css/boot 5/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top:20px"> 
<center><font size="6">Data apoteker</font></center>
	<div class="card mt-3">
  <div class="card-body">
  <a href="../database/admin/user/tambah.php" name="tambah"><button class="btn btn-dark right">Tambah Data</button></a>
<table class="table table-bordered table-stripped" >

	<tr>
		<th class="text-center">Id</th>
		<th class="text-center">Nama</th>
		<th class="text-center">Alamat</th>
		<th class="text-center">Tempat</th>
		<th class="text-center">Tanggal Lahir</th>
		<th class="text-center">Jenis Kelamin</th>
		<th class="text-center">Opsi</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $apotek as $row ) : ?>
		<tr>
			<td><?= $i ?></td>
			<td><?=$row["nama"]; ?></td>		
			<td><?=$row["alamat"]; ?></td>		
			<td><?=$row["tempat"]; ?></td>		
			<td><?=$row["tanggal_lahir"]; ?></td>		
			<td><?=$row["jenis_kelamin"]; ?></td>		
			<td>
				<a href="../database/admin/user/edit.php?Id=<?= $row['Id'];?>" class="btn btn-secondary btn-sm">Edit</a> 
  				<a href="../database/admin/user/hapus.php?Id=<?=$row['Id'];?>" 
            	onclick="return confirm('yakin mau hapus???')" class="btn btn-danger btn-sm"> Hapus </a>
			</td>	
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

					</table>
				</div>
			</div>
		</div>
	</body>
</html>