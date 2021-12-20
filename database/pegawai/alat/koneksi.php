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
?>