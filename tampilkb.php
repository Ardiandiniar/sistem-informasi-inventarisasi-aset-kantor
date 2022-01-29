<?php

  session_start();
  if($_SESSION['status']!="login")
  {
    header("location:login.php?peringatan=silahkanlogindulu");
  }

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">
  <link rel="icon" type="image/png" sizes="16x16" href="images/si-iak-icon.png" />
  <title>kendaraan Bermotor</title>

  <!-- Favicon -->
  
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  

</head>

<body id="top">

<?php

if($_SESSION['hak_akses'] == 'User'){
?>
  <header>

    <nav class="navbar navbar-expand-lg navigation" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo-text.png" width="200px"class="img-fluid">
          </a>

          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icofont-navigation-menu"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarmain">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <a class="nav-link" href="index.php">Halaman Utama</a>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
            <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li> -->

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aset <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown02">
              <li><a class="dropdown-item" href="kelolabarangaset.php">Kelola Barang Aset</a></li>
              <li><a class="dropdown-item" href="tampilkb.php">Kendaraan Bermotor</a></li>
              <li><a class="dropdown-item" href="tampilfurnitur.php">Furnitur</a></li>
              <li><a class="dropdown-item" href="tampilelektronik.php">Elektronik</a></li>
            </ul>
            </li>

            

          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-abelledby="dropdown05">
              <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

              <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
            </ul>
            </li> -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cetak Laporan<i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown02">
              
              <li><a class="dropdown-item" target="_blank" href="cetak_kendaraanbermotor.php">Cetak Kendaraan Bermotor</a></li>
              <li><a class="dropdown-item" target="_blank" href="cetak_furnitur.php">Cetak Furnitur</a></li>
              <li><a class="dropdown-item" target="_blank" href="cetak_elektronik.php">Cetak Elektronik</a></li>
            </ul>
    </li>
          <li class="nav-item"><a class="nav-link" target="_blank" href="panduan.php">Panduan</a></li>
        
          <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="bantuan.php">Bantuan</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
        </ul>
        </div>
      </div>
    </nav>
      <div class="header-top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <ul class="top-bar-info list-inline-item pl-0 mb-0">
              
              <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Kecamatan Kedung Waringin</li>
            </ul>
          </div>
          <!-- <div class="col-lg-6">
            <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
              <a href="" >
                <span>Kecamatan Kedung Waringin </span>
                
              </a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </header>
<?php 
}

else if($_SESSION['hak_akses'] == 'admin'){
?>
  <header>

    <nav class="navbar navbar-expand-lg navigation" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
            <img src="images/logo-text.png" width="200px" alt="" class="img-fluid">
          </a>

          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icofont-navigation-menu"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarmain">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <a class="nav-link" href="admin.php">Halaman Utama</a>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
            <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li> -->

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aset <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown02">
              
              <li><a class="dropdown-item" href="tampilkb.php">Kendaraan Bermotor</a></li>
              <li><a class="dropdown-item" href="tampilfurnitur.php">Furnitur</a></li>
              <li><a class="dropdown-item" href="tampilelektronik.php">Elektronik</a></li>
            </ul>
            </li>

            

          
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cetak Laporan<i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown02">
              
              <li><a class="dropdown-item" target="_blank" href="cetak_kendaraanbermotor.php">Cetak Kendaraan Bermotor</a></li>
              <li><a class="dropdown-item" target="_blank" href="cetak_furnitur.php">Cetak Furnitur</a></li>
              <li><a class="dropdown-item" target="_blank" href="cetak_elektronik.php">Cetak Elektronik</a></li>
            </ul>
              </li>
        
          <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
        </ul>
        </div>
      </div>
    </nav>
      <div class="header-top-bar" >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <ul class="top-bar-info list-inline-item pl-0 mb-0">
              
              <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Kecamatan Kedung Waringin</li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
  </header>
<?php
}
?>


<br>

	<?php 
      
        $tgl=date('Y-m-d');
        if(isset($_POST['simpan'])){
          
          $merk = $_POST['merk'];
          $no_mesin = $_POST['no_mesin'];
          $status = $_POST['status'];
          $th_beli = $_POST['th_beli'];
          $jumlah = $_POST['jumlah'];
          $stn_hrg = $_POST['stn_hrg'];
          $no_brg = $_POST['no_barang'];

              if($no_brg=='' || $merk=='' || $no_mesin=='' || $status=='' || $th_beli=='' || $jumlah=='' || $stn_hrg=='' )
              {
                echo '<script>
                alert("Data belum lengkap");
                </script>';
              }
             
              else{

                $total = $jumlah * $stn_hrg;
              
                require_once 'oop/koneksi.php';
                $query1="SELECT * FROM kba_kb where no_brg = '$no_brg'";
                $query = $con->prepare($query1);
                $query->execute();
               

                while($row = $query->fetch(PDO::FETCH_ASSOC))
                  {

                    $model = $row['model'];
                    $idmodel = $row['id'];
                   
                  }
                  
                  require_once 'oop/class_kendaraanbermotor.php';
                  $aset->InsertKB($idmodel,$no_brg, $model, $merk, $no_mesin, $status, $tgl, $th_beli, $jumlah, $stn_hrg,$total);
 
                    echo '<script>
                    alert("Data berhasil ditambahkan");
                    </script>' ;
                  
                }
                
              } 
        
        
        
        ?>

 <div class="w3-container">
              <?php 
              if($_SESSION['hak_akses']=='User'){
                ?>
                <button onclick="document.getElementById('tambahKB').style.display='block'" class="w3-button w3-blue w3-right">Tambah Data</button>
                  <?php
              }
?>
<div id="tambahKB" class="w3-modal " style="margin-left:0px ">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('tambahKB').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2>Tambah Data</h2>
    </header>
    <div class="w3-container">
      
    
           
            <form class="w3-container" method="POST" >
              
                 
                <label class="w3-text-brown"><b>Model</b></label>

                <select class="form-select" name="no_barang" onchange="kodebarang()" id="idkdbrg" aria-label="Default select example">
                  <option selected disabled>Pilih Model</option>
                  <?php
                    require_once 'oop/class_kelolabarangaset.php';
                    $query="SELECT * FROM kba_kb ORDER BY id ASC";
                    $kba_kb->Tampilkendaraanbermotor($query);
                  ?>
                </select>
               
                <p>      
                <label class="w3-text-brown"><b>Merk</b></label>
                <input class="w3-input w3-border w3-sand" name="merk" type="text"></p>
                
                <p>      
                <label class="w3-text-brown"><b>No Mesin</b></label>
                <input class="w3-input w3-border w3-sand" name="no_mesin" type="text"></p>
                
                <p>      
                <label class="w3-text-brown"><b>Status</b></label>
                <input class="w3-input w3-border w3-sand" name="status" type="text"></p>
                
                <p>      
                <label class="w3-text-brown"><b>Tahun Beli</b></label>
                <input class="w3-input w3-border w3-sand" name="th_beli" type="date"></p>
                
                <p>      
                <label class="w3-text-brown"><b>Jumlah</b></label>
                <input class="w3-input w3-border w3-sand" name="jumlah" type="text"></p>
                <p>      
                <label class="w3-text-brown"><b>Satuan Harga</b></label>
                <input class="w3-input w3-border w3-sand" name="stn_hrg" type="text"></p>
                
              
                <p>
                <button type="submit" name="simpan" class="w3-btn w3-brown">Simpan</button></p>
              </form>
            </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    function kodebarang(){
        var id = $("#idkdbrg").val(); 
        $.ajax({
          url : 'autocod1e.php',
          data : 'id='+id,
        }).success(function (data){
          alert('tesssssss');
          // var json = data,
          // obj = JSON.parse(json);
          // $('#kd_brg').val(obj.no_brg); 
        });
      }
</script>
              
            </div>
    
   
  </div>
</div>
<h3 style="margin-left: 30px">Data Kendaraan Bermotor</h3>
<div class="row">
<div class="col-lg-6 mt-sm-2 mb-lg-5" style="margin-left: 60px">

      <!-- //queryprint -->
      <?php
      if(isset($_POST['print'])){
        $tahun = $_POST['tahun'];
        echo "<script>
            window.location='cetak_kendaraanbermotor.php?tahun=$tahun';
        </script>";
      }
      
      ?>
      <form action="" method="post" target="_blank">
  <select class="form-select" name="tahun" onchange="kodebarang()" id="idkdbrg" aria-label="Default select example">
    <option selected disabled>Pilih Tahun</option>
    <?php
      require_once 'oop/class_kelolabarangaset.php';
      $query="SELECT DISTINCT(YEAR (th_beli)) AS tahun FROM `crudkb` ORDER BY tahun";
      $kba_kb->Tampiltahunkendaraanbermotor($query);
    ?>
  </select>
  <button type="submit" name="print" class='btn btn-primary bi bi-printer'></button>
  </form>
 
  
    <table id="productSizes" class="table table-hover">
  <tr>
  <th>NO BARANG</th>
  <th>MODEL</th>
  <th>MERK</th>
  <th>NO MESIN</th>
  <th>STATUS</th>
  <th>TANGGAL INPUT</th>
  <th>TAHUN BELI</th>
  <th>JUMLAH</th>
  <th>SATUAN HARGA</th>
  <th>TOTAL HARGA</th>
  <?php
  if($_SESSION['hak_akses'] == 'User'){
    ?>
    <th colspan="2">AKSI</th>
    <?php
  }
?>
</tr>

<?php 
  require_once 'oop/class_kendaraanbermotor.php';
  $query = "SELECT * FROM crudkb ORDER BY th_beli DESC";
  
  if($_SESSION['hak_akses'] == 'User'){
    $aset->TampilKB($query);
  }
  else if($_SESSION['hak_akses'] == 'admin'){
      $aset->TampiladminKB($query);
 
  }
  ?>
</table>
</div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
<!-- <script>
    $(document).on('click', '.btn_deleteKB', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "oop/class_kendaraanbermotor.php ",
        data: {id:id},
        success: function() {
            $('.data').load("data.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
  </script> -->


</footer> 


</body>

<footer>
	<div
         class="text-center p-3"
         style="background-color: #003366;
         color:white;"
         >
      © 2021 Copyright: Ardian Mulya Diniar & Muhamad Adzriel Akbar
      
    </div>
</footer>
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

   

  </body>
  </html>
   