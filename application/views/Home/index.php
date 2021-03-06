<!DOCTYPE HTML>

<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/nas/css/main.css"">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	</head>
	<body class="is-preload">

		<?php 
			$this->load->view('template/nav');
		 ?>
		

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Donate</h1>
					<p>Donasikan Hartamu di Dunia<br />
					 
						<i>”Seorang mukmin terhadap mukmin lainnya seumpama bangunan saling mengokohkan satu dengan yang lain. (Kemudian Rasulullah SAW merapatkan jari-jari tangan beliau).” (HR. Muttafaq Alaih)</i></p>
				</div>
				<!-- <video autoplay loop muted playsinline src="images/banner.mp4"></video> -->
				<!-- <img src="<?php echo base_url()?>assets/img/sawah.png" alt="" style="width="1263"> -->
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Keunggulan Perusahaan Kami</h2>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3>Feugiat consequat</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Ante sem integer</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-floppy-o"><span class="label">Icon</span></a>
									<h3>Ipsum consequat</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-line-chart"><span class="label">Icon</span></a>
									<h3>Interdum gravida</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
									<h3>Distribusi Cepat</h3>
								</header>
								<p>Perusahaan kami memproses pengiriman barang dengan cepat setelah donatur mengirimkan donasinya</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-qrcode"><span class="label">Icon</span></a>
									<h3>Accumsan viverra</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					
				</div>
			</section>

		<!-- Testimonials -->
			<section class="wrapper" id="about">
				<div class="inner">
					<header class="special">
						<h2>About US</h2>
						<p>Donate Merupakan sebuah website yang membantu masyarakat dalam memberi bantuan atau Donasi kepada masyarakat lainya yang sedang terkena musibah</p>
					</header>
					<div class="testimonials"> 
						<section>
							<div class="content">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur consequatur repellendus distinctio, itaque molestias est! At, sequi, qui. Repudiandae, natus?</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="<?php echo base_url()?>assets/images/nas.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Syamil</strong> <span>Programmer - MosDev Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum vel nam deserunt voluptatum fuga sunt non, ipsa nemo sint saepe..</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="<?php echo base_url()?>assets/images/nas.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Nasution</strong> <span>Programmer - MosDev Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolor nam, repudiandae esse porro enim dignissimos modi vitae eveniet doloribus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="<?php echo base_url()?>assets/images/nas.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Alif</strong> <span>Programmer - MosDev Inc.</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>
			<?php 
				$this->load->view('template/footer');
			 ?>
	</body>
</html>
