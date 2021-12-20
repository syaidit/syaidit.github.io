<?php 
require 'koneksi.php';

$Id = $_GET["Id"];

if( hapus($Id) > 0 ) {

       echo "<script>
              alert('hapus data suksess!!');
              document.location='../../../utama/Admin.php?page=pengguna';
          </script>";
}else{
       echo "<script>
              alert('hapus data gagal!!');
              document.location='../../../utama/Admin.php?page=pengguna';
          </script>";
}



 ?>