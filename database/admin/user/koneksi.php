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
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $koneksi;
	$nama 			= htmlspecialchars($data["nama"]);
	$alamat 		= htmlspecialchars($data["alamat"]);
	$tempat 		= htmlspecialchars($data["tempat"]);
	$tanggal_lahir	= htmlspecialchars($data["tanggal_lahir"]);
	$jenis_kelamin 	= htmlspecialchars($data["jenis_kelamin"]);
	$username 		= htmlspecialchars($data["username"]);
	$password 		= htmlspecialchars($data["password"]);
	$level 			= htmlspecialchars($data["level"]);

	$query = "INSERT INTO apoteker VALUES 
				('', '$nama', '$alamat', '$tempat', '$tanggal_lahir', '$jenis_kelamin', '$username', '$password', '$level')

			";
			mysqli_query($koneksi, $query);

			return mysqli_affected_rows($koneksi);
}

function hapus($Id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM apoteker WHERE Id = $Id");

	return mysqli_affected_rows($koneksi);
}

function edit($data) {
		global $koneksi;
	$Id				= $data["Id"];
	$nama 			= htmlspecialchars($data["nama"]);
	$alamat 		= htmlspecialchars($data["alamat"]);
	$tempat 		= htmlspecialchars($data["tempat"]);
	$tanggal_lahir	= htmlspecialchars($data["tanggal_lahir"]);
	$jenis_kelamin 	= htmlspecialchars($data["jenis_kelamin"]);
	$username 		= htmlspecialchars($data["username"]);
	$password 		= htmlspecialchars($data["password"]);
	$level 			= htmlspecialchars($data["level"]);

	$query = "UPDATE apoteker SET
							nama ='$nama',
							alamat ='$alamat',
							tempat ='$tempat',
							tanggal_lahir ='$tanggal_lahir',
							jenis_kelamin ='$jenis_kelamin',
							username ='$username',
							password ='$password',
							level ='$level'
							WHERE Id = $Id
								 ";
			mysqli_query($koneksi, $query);

			return mysqli_affected_rows($koneksi);
}

?>