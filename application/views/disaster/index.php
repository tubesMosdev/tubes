<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Beranda</title>
	
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Akhir Fonts -->
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>application/views/disaster/style.css">

	<!-- Akhir My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/nas/css/main.css"">
</head>
<body>

	

	
	<!-- Navbar -->

	<div>
		<?php 
		$this->load->view('template/nav');
	 ?>
	
	</div>

	<!-- Akhir Navbar -->

	<!-- Slider -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: ">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo base_url()?>assets/images/sawah.png" class="card-img-top rounded-0">
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Donasi</h5>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia qui quasi, eligendi reiciendis, molestias obcaecati voluptatibus laboriosam ex, libero totam distinctio voluptatum nemo, explicabo ut. Voluptatibus doloremque nulla consequuntur, nemo.</p>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url()?>assets/images/sawah.png" class="card-img-top rounded-0">
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Donasi</h5>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia qui quasi, eligendi reiciendis, molestias obcaecati voluptatibus laboriosam ex, libero totam distinctio voluptatum nemo, explicabo ut. Voluptatibus doloremque nulla consequuntur, nemo.</p>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url()?>assets/images/sawah.png" class="card-img-top rounded-0">
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Donasi</h5>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia qui quasi, eligendi reiciendis, molestias obcaecati voluptatibus laboriosam ex, libero totam distinctio voluptatum nemo, explicabo ut. Voluptatibus doloremque nulla consequuntur, nemo.</p>
		  </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<!-- Akhir Slider -->

	<!-- Card -->

	<div class="album py-5">
		<div class="container">
			<div class="row">
				<?php for($i=0; $i<3; $i++):?>
					<?php if (array_key_exists($i, $disaster)): ?>
						<?php $d = $disaster[$i]?>
						<div class="col-md-4">
							<a href="<?php echo site_url('donasi/index')?>" style="color: #000; text-decoration: none; ">
								<div class="card mb-4 shadow-sm">
								<!-- <img class="card-img-top" src="<?php echo base_url().'assets/images/'.$d->file_name?>" alt="" height="300px"> -->
								<img src="<?php echo base_url()?>assets/images/gunung.jpg" class="img-fluid">
								<div class="card-body">
									<h5 class="card-text">
										<?php echo $d->title?>
									</h5>
									<p class="card-text">
										<?php echo $d->description?>
									</p>
									<div class="d-flex justify-content-between align-items-center footer">
										<i class="fa fa-user"><?php echo $d->nn?></i>								
										<small class="text-muted"><?php echo $d->created_at?></small>
									</div>
								</div>
							</div>

							</a>
							
						</div>
					<?php endif ?>
				<?php endfor ?>
			</div>
		</div>
	</div>
	
	<!-- Akhir Card -->
	
	<!-- Card 2 -->
	
	<div class="album">
		<div class="container">
			<div class="row">
				<?php for($i=3; $i<count($disaster); $i++): 
					$d = $disaster[$i];
				?>
				<div class="col-md-3">
					<div class="card mb-4 shadow-sm">
						<img src="<?php echo base_url()?>assets/images/gunung.jpg" class="img-fluid">
							<div class="card-body">
								<div class="caption">
									<h6 class="card-text">
									<?php echo $d->title?>
									</h6>
									<p class="card-text">
									<?php echo $d->description?>
									</p>
								</div>
								<div class="d-flex justify-content-between align-items-center footer">
									<i class="fa fa-user"><?php echo $d->nn?></i>
									<small class="text-muted"></small>
							</div>
						</div>
					</div>
				</div>
				<?php endfor ?>
			</div>
		</div>
	</div>
		<div class="container-fluid text-center">
			<p>
				<a href="#" class="btn btn-primary my-2">Lihat Lainnya</a>
			</p>
		</div>
	
	<?php 
		$this->load->view('template/footer');
	 ?>
	
	<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>