
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script src="https://kit.fontawesome.com/a076d05399.js">
    </script>
    <link rel="stylesheet" href="../css/Pengguna.css" />
    
    <script>
      function openSlideMenu(){
        document.getElementById('menu').style.width = '250px';
        document.getElementById('konten').style.marginLeft = '250px';
        document.getElementById('ok').style.opacity = '0';
        document.getElementById('no').style.opacity = '1';
      }
      function closeSlideMenu(){
        document.getElementById('menu').style.width = '0';
        document.getElementById('konten').style.marginLeft = '0';
        document.getElementById('no').style.opacity = '0';
        document.getElementById('ok').style.opacity = '1';
      }
    </script>
  </head>
  <body>
    <div id="konten">
      <span class="slide">
        <div class="header">
          <a href="#" onclick="openSlideMenu()">
            <i id="ok"class="fas fa-bars"></i>
          </a>
        </div>
      </span>
      <div id="menu" class="nav">
        <a href="#" class="close" onclick="closeSlideMenu()">
          <i id="no"class="fas fa-times"></i>
        </a>
        <ul class="menu">
          <li><a href="Pengguna.php?page=dashb" name="dashb">Dashboard</a></li>
          <li><a href="Pengguna.php?page=barang" name="barang">Obat</a></li>
          <li><a href="Pengguna.php?page=alat" name="alat">Alat Medis</a></li>
          <li><a href="../trans/index.php" name="transaksi">Transaksi</a></li>
          <li><a onclick="javascript: return confirm('Ingin Logout?');" href="../LOGIN/logout.php">Logout</a></li>
        </ul>
      </div>
        <div class="isi">
      <section>
    <div class="right_col" role="main">
      <?php

      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
        case 'barang':
          # code...
        
          include '../database/pegawai/obat/tampil.php';
          break;
        case 'transaksi':
            # code...
          include '../trans/index.php';
          break;
        case 'dashb':
              # code...
          include '../dashboard/dashboard.php';
          break;
        case 'alat':
          # code...
          include '../database/pegawai/alat/tampil.php';
          break;
        default:
              #code...
          include '../dashboard/dashboard.php';
          break;
        }
        ?>
        </div>
    </section>
      </div>
    </div>
  </body>
</html>