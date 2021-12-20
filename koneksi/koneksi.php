<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "multiuser";

$koneksi = mysqli_connect($server,$user,$pass,$database) or die(mysqli_error($koneksi));

function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while($row = @mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function cari($input) {
$query = "SELECT * FROM obat WHERE nama_obat='$input'
			";
			return query($query);

}

function editobat($data) {
		global $koneksi;
	$Id					= $data["Id"];
	$nama_obat 			= htmlspecialchars($data["nama_obat"]);
	$fungsi 			= htmlspecialchars($data["fungsi"]);
	$diproduksi_oleh 	= htmlspecialchars($data["diproduksi_oleh"]);
	$expired			= htmlspecialchars($data["expired"]);
	$harga 				= htmlspecialchars($data["harga"]);
	$jenis 				= htmlspecialchars($data["jenis"]);
	$stok 				= htmlspecialchars($data["stok"]);
	$satuan 			= htmlspecialchars($data["satuan"]);

	$query = "UPDATE obat SET
							nama_obat ='$nama_obat',
							fungsi ='$fungsi',
							diproduksi_oleh ='$diproduksi_oleh',
							expired ='$expired',
							harga ='$harga',
							jenis ='$jenis',
							stok ='$stok',
							satuan ='$satuan'
							WHERE Id = $Id
								 ";
			mysqli_query($koneksi, $query);

			return mysqli_affected_rows($koneksi);
}

function penjualan($data) {
	global $koneksi;
	$nama_barang 		= htmlspecialchars($data["nama"]);
	$harga 				= htmlspecialchars($data["harga"]);
	$jumlah 			= htmlspecialchars($data["jumlah"]);
	$total 				= htmlspecialchars($data["total"]);
	$tanggal 			= date("Y-m-d H:i:s");

	$query = "INSERT INTO bk VALUES 
				('', '$nama_barang', '$harga', '$jumlah', '$total','$tanggal')

			";
			mysqli_query($koneksi, $query);

			return mysqli_affected_rows($koneksi);
}

?>