<?php
require 'koneksi.php';

$alat = query("SELECT * FROM tb_produk WHERE jenis = 'alat' ");

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
<table class="table table-bordered table-stripped" >

	<tr>
		<th class="text-center">Id</th>
		<th class="text-center">Nama Alat</th>
		<th class="text-center">Stok</th>
		<th class="text-center">Satuan</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $alat as $row ) : ?>
		<tr>
			<td><?= $i ?></td>
			<td><?=$row["nama_produk"]; ?></td>		
			<td><?=$row["stok"]; ?></td>		
			<td><?=$row["satuan"]; ?></td>					
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

</table>
</body>
</html>