<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "multiuser";

$koneksi = mysqli_connect($server,$user,$pass,$database) or die(mysqli_error($koneksi));


?>
<html>
<head>
	<title>Penjualan</title>
	<link rel="stylesheet" type="text/css" href="../css/boot 5/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top:20px"> 
<center><font size="6">Penjualan</font></center>
	<div class="card mt-3">
  <div class="card-body">
  	<br>
  	<form method="post">
	  	<table>
	  		<tr>
	  			<td>Dari Tanggal</td>
	  			<td><input type="date" name="dari" required="required"></td>
	  			<td>Sampai Tanggal</td>
	  			<td><input type="date" name="sampai" required="required"></td>
	  			<td><input type="submit" class="btn btn-primary" name="filter" value="Filter"></td>
	  		</tr>
	  	</table>
  </form>
  	<br>
<table class="table table-bordered table-stripped" >

	<tr>
		<th class="text-center">No</th>
		<th class="text-center">Nama Barang</th>
		<th class="text-center">Harga</th>
		<th class="text-center">Jumlah</th>
		<th class="text-center">Total</th>
		<th class="text-center">Tanggal</th>
	</tr>
	<?php $i = 1; 
	if(isset($_POST['filter'])) {
		$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari']);
		$sampai = mysqli_real_escape_string($koneksi, $_POST['sampai']);
		$barang = mysqli_query($koneksi, "SELECT * FROM bk WHERE tanggal BETWEEN '$dari_tgl' AND '$sampai'");
	} else {
		$barang = mysqli_query($koneksi, "SELECT * FROM bk");
	}
		while ($row = mysqli_fetch_array($barang)) {
	  ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><?=$row["nama_barang"]; ?></td>		
			<td><?=$row["harga"]; ?></td>		
			<td><?=$row["jumlah"]; ?></td>		
			<td><?=$row["total"]; ?></td>			
			<td><?=$row["tanggal"]; ?></td>					
		</tr>
	<?php } ?>
</table>
</body>
</html>