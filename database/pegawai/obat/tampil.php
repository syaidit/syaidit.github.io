<?php
require '../koneksi/koneksi.php';

$obat = query("SELECT * FROM tb_produk WHERE jenis = 'Obat' ");

?>
<html>
<head>
	<title>Data apoteker</title>
	<link rel="stylesheet" type="text/css" href="../css/boot 5/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top:20px"> 
<center><font size="6">Data Obat</font></center>
	<div class="card mt-3">
  <div class="card-body">
<table class="table table-bordered table-stripped" >

	<tr>
		<th class="text-center">Id</th>
		<th class="text-center">Nama</th>
		<th class="text-center">Diproduksi oleh</th>
		<th class="text-center">Expired</th>
		<th class="text-center">Harga</th>
		<th class="text-center">Jenis</th>
		<th class="text-center">Stok</th>
		<th class="text-center">Satuan</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $obat as $row ) : ?>
		<tr>
			<td><?= $i ?></td>
			<td><?=$row["nama_produk"]; ?></td>				
			<td><?=$row["diproduksi_oleh"]; ?></td>		
			<td><?=$row["expired"]; ?></td>			
			<td><?=$row["harga"]; ?></td>			
			<td><?=$row["jenis"]; ?></td>			
			<td><?=$row["stok"]; ?></td>			
			<td><?=$row["satuan"]; ?></td>			
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

</table>
</body>
</html>