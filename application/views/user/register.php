<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<!-- Akhir Fonts -->
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>application/views/user/register.css">
</head>
<body>

	<!-- Navbar -->
	
	<?php 
		$this->load->view('template/nav');
	 ?>

	<!-- Akhir Navbar -->

	<!-- Awal Form Login -->
	<div class="container">
		<div id="wrapper">
		<h1 class="h3 mb-3 font-weight-normal">Register</h1>
		<form action="<?php echo site_url('user/save')?>" method="post" class="form-signin">
			<div class="row">
				<div class="col-md-6 mb-3 form-group">
					<label for="Username" class="sr-only">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
				</div>
				<div class="col-md-6 mb-3 form-group">
					<label for="password" class="sr-only">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
				</div>
			</div>
			<div class="mb-3 form-group">
				<label for="phone" class="sr-only">Nomor Hp</label>
				<input type="number" name="phone" class="form-control" placeholder="Masukkan Nomor Hp Anda" required autofocus>
			</div>
			<div class="mb-3 form-group">
				<label for="addres" class="sr-only">Alamat</label>
				<textarea name="addres" class="form-control" rows="3" placeholder="Masukkan Alamat Anda"></textarea>
			</div>
			<hr class="mt-4 mb-4">
			<button class="btn btn-lg btn-primary btn-block masuk">Submit</button>
	

		</form>
	</div>
	</div>
	

	    <!-- Akhir Form Login -->
	
	
	<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/nas/js/jquery.min.js"></script>
			<script src="<?php echo base_url()?>assets/nas/js/browser.min.js"></script>
			<script src="<?php echo base_url()?>assets/nas/js/breakpoints.min.js"></script>
			<script src="<?php echo base_url()?>assets/nas/js/util.js"></script>
			<script src="<?php echo base_url()?>assets/nas/js/main.js"></script>

</body>
</html>