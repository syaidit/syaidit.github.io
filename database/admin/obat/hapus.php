<?php 
require 'koneksi.php';

$Id = $_GET["id"];

if( hapusobat($Id) > 0 ) {

       echo "<script>
              alert('hapus data suksess!!');
              document.location='../../../utama/Admin.php?page=masuk';
          </script>";
}else{
       echo "<script>
              alert('hapus data gagal!!');
              document.location='../../../utama/Admin.php?page=masuk';
          </script>";
}



 ?>