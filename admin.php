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
  <title>Halaman Admin</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

    <!-- cdnchartsjs -->
     <link href="plugins/chartist/dist/chartist.min.css" rel="stylesheet" />
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <link href="plugins/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

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
	



			  <!-- canvaschart -->
        <div class="row" >
          <div class="offset-sm-2 col-sm-8">
            <canvas id="mychart" width="100px" height="45px"></canvas>
            </div>
        </div>
        
<!-- koneksichart -->
<?php
 $con = mysqli_connect("localhost","root","","db_siiak");
 require_once 'oop/class_halamanutama.php';
?>

<!-- scriptchart -->
        <script>
var ctx = document.getElementById("mychart");

var datas = {
  labels: ['Kendaraan Bermotor','Furnitur','Elektronik'],
  datasets: [{
    label: 'Data A',
    data: [<?php
              $query = "SELECT SUM(jumlah) as totalkb FROM crudkb";
              $halamanUtama->diagramKB($query);
          ?>,
          <?php
          $query = "SELECT SUM(jumlah) as totalfurnitur FROM crudfurnitur";
          $halamanUtama->diagramfurnitur($query);
      ?>,
      <?php
      $query = "SELECT SUM(jumlah) as totalelektronik FROM crudelektronik";
      $halamanUtama->diagramelektronik($query);
  ?>],
    backgroundColor: [
      "#FF6384",
      "#4BC0C0",
      "#FFCE56",
      "#E7E9ED",
      "#36A2EB"
    ],
  }, ]
};

var options = {
  responsive: true,
  hover: {
    mode: 'label',
  },
  tooltips: {
    enabled: true,
    callbacks: {
      
    }

  }
};


var chr = new Chart(ctx, {
  data: datas,
  type: 'pie',
  options: options,
});

</script>




<footer>
<div
         class="text-center p-3"
         style="background-color: #003366;
                position:fixed;
                bottom: 0;
                width:100%;
                color:white; "
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
   