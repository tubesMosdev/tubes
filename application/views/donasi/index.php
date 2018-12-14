<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donasi</title>
	
	<!-- My Fonts -->
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Akhir Fonts -->
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>application/views/disaster/style.css">
	<!-- Akhir My Css -->

</head>
<body>	
			<!-- Navbar -->
	
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
		  <a class="navbar-brand" href="#">DONASIKU</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav ml-auto">
		      <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="<?php echo site_url('donasi/index')?>">Donasi</a>
		      <a class="nav-item nav-link" href="<?php echo site_url('disaster/about')?>">About</a>
		      <a href="<?php echo site_url('user/index')?>" class="nav-item btn btn-primary tombol" href="#">Join Us</a>
		    </div>
		  </div>
		</div>
	</nav>

	<!-- Akhir Navbar -->

		<br><br>


		
		<div class="container">
			<h1>Bayi Kembar Yatim Piatu Tanpa Kerabat</h1><br>
			<dic class="row">
				<div class="col-8" style="background-color: ">
					<div class="card-img-top img-responsive" style="width: 18rem;">
						  <img src="<?php echo base_url()?>assets/img/bayi.jpg" alt="" class="img-responsive"><br><br>
						  <h5>Bayir Kembar Asal Jogja ini Ditemukan dekat tong sampah</h5><br><br>
							


					</div>
				</div>

				<div class="col-4" style="background-color: ">
					<h2 class="text-center">Bantuan Terkumpul</h2>
					<h4>Pangan</h4>
					<div class="progress">
					  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="30"></div>
					</div>
					<h4>Sembako</h4>
					<div class="progress">
					  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="30"></div>
					</div>
					<h4>Pakaian</h4>
					<div class="progress">
					  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="30"></div>
					</div>
					<h4>Obat-obatan</h4>
					<div class="progress">
					  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="30"></div>
					</div> <br>



					<?php echo anchor(site_url('donasi/doDonasi'),'Mulai Donasi', 'class="btn btn-primary"'); ?>


				</div>
			</dic>
		</div>
		
			<script src="<?php echo base_url()?>assets/libs/js/jquery-3.3.1.min.js"></script>
			<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>	
	

</body>
</html>