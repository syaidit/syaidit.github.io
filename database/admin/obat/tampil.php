<?php
require 'koneksi.php';

?>
<html>
<head>
	<title>Data Obat</title>
	<link rel="stylesheet" type="text/css" href="../css/boot 5/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top:20px"> 
<center><font size="6">Data Obat</font></center>
	<div class="card mt-3">
  <div class="card-body">
  	  <a href="../database/admin/obat/tambah.php" name=""><button class="btn btn-dark right">Tambah Data Obat</button></a>
<table class="table table-bordered table-stripped" >
	<tr>
		<th class="text-center">Id</th>
		<th class="text-center">Nama Produk</th>
		<th class="text-center">Fungsi</th>
		<th class="text-center">Diproduksi oleh</th>
		<th class="text-center">Expired</th>
		<th class="text-center">Harga</th>
		<th class="text-center">Jenis</th>
		<th class="text-center">Stok</th>
		<th class="text-center">Satuan</th>
		<th class="text-center">Opsi</th>
	</tr>
					<?php 
		$data_pegawai = mysqli_query($koneksi,"SELECT * FROM tb_produk WHERE jenis = 'Obat'");
		$nomor = $halaman_awal = 1;
		while($row = mysqli_fetch_array($data_pegawai)){
					?>
		<tr>
			<td><?=$nomor++;?></td>
			<td><?=$row["nama_produk"]; ?></td>		
			<td><?=$row["fungsi"]; ?></td>		
			<td><?=$row["diproduksi_oleh"]; ?></td>		
			<td><?=$row["expired"]; ?></td>			
			<td><?=$row["harga"]; ?></td>			
			<td><?=$row["jenis"]; ?></td>			
			<td><?=$row["stok"]; ?></td>			
			<td><?=$row["satuan"]; ?></td>
			<td>
				<a href="../database/admin/obat/edit.php?id=<?= $row['id'];?>" class="btn btn-secondary btn-sm">Edit</a> 
  				<a href="../database/admin/obat/hapus.php?id=<?=$row['id'];?>" 
            	onclick="return confirm('yakin mau hapus???')" class="btn btn-danger btn-sm"> Hapus </a>
			</td>			
		</tr>
	<?php } ; ?>

</table>
</body>
</html>