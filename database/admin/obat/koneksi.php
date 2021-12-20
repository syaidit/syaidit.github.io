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


function hapusobat($Id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id = $Id");

	return mysqli_affected_rows($koneksi);
}

function editobat($data) {
		global $koneksi;
	$Id					= $data["id"];
	$nama_obat 			= htmlspecialchars($data["nama_obat"]);
	$fungsi 			= htmlspecialchars($data["fungsi"]);
	$diproduksi_oleh 	= htmlspecialchars($data["diproduksi_oleh"]);
	$expired			= htmlspecialchars($data["expired"]);
	$harga 				= htmlspecialchars($data["harga"]);
	$jenis 				= htmlspecialchars($data["jenis"]);
	$stok 				= htmlspecialchars($data["stok"]);
	$satuan 			= htmlspecialchars($data["satuan"]);

	$query = "UPDATE tb_produk SET
							nama_produk ='$nama_obat',
							fungsi ='$fungsi',
							diproduksi_oleh ='$diproduksi_oleh',
							expired ='$expired',
							harga ='$harga',
							jenis ='$jenis',
							stok ='$stok',
							satuan ='$satuan'
							WHERE id = $Id
								 ";
			mysqli_query($koneksi, $query);

			return mysqli_affected_rows($koneksi);
}

function tambahobat($data) {
	global $koneksi;
	$nama_obat 			= htmlspecialchars($data["nama_obat"]);
	$fungsi 			= htmlspecialchars($data["fungsi"]);
	$diproduksi_oleh 	= htmlspecialchars($data["diproduksi_oleh"]);
	$expired			= htmlspecialchars($data["expired"]);
	$harga 				= htmlspecialchars($data["harga"]);
	$jenis 				= htmlspecialchars($data["jenis"]);
	$stok 				= htmlspecialchars($data["stok"]);
	$satuan 			= htmlspecialchars($data["satuan"]);

	$query = "INSERT INTO tb_produk VALUES 
				('', '$nama_obat', '$fungsi', '$diproduksi_oleh', '$expired', '$harga', '$jenis', '$stok', '$satuan')

			";
			mysqli_query($koneksi, $query);

			return mysqli_affected_rows($koneksi);
}

 ?>