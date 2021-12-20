<?php 
require 'koneksi.php';

$Id = $_GET["id"];

if( hapusalat($Id) > 0 ) {

       echo "<script>
              alert('hapus data alat suksess!!');
              document.location='../../../utama/Admin.php?page=alat';
          </script>";
}else{
       echo "<script>
              alert('hapus data alat gagal!!');
              document.location='../../../utama/Admin.php?page=alat';
          </script>";
}



 ?>