

@php


@endphp

<!-- VARIABEL $data_menu dan $data_menu ada di controller method viewnya -->
<!DOCTYPE html>
<html>
<head>
	<title> SAIDIL APPS </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{url('')}}/asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('')}}/asset/css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="{{url('')}}/asset/css/animate-ui.css">
	<link rel="stylesheet" type="text/css" href="{{url('')}}/asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{url('')}}/asset/css/admin_basic.css">
	<link rel="stylesheet" type="text/css" href="{{url('')}}/asset/css/admin_panel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />


	<style type="text/css">
	.prime_header{
		position: absolute !important;
	}
	html{
		scroll-behavior: smooth;
	}
	.container_content > .row{
		margin-bottom: 100px;
	}
	.container_content .col_header{
		text-align: center;
	}
	.container_content .judul_content{
		margin-bottom: 20px;
		margin-top: 20px;
	}
	.slider{
		height: 300px;
	}
	.card{
		padding: 20px;
	}

	.footer {
		background-color: #000;
		color: #fff;
		padding: 20px 0;
	}

	.footer .container {
		width: 90%;
		max-width: 1200px;
		margin: 0 auto;
	}

	.footer-content {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}

	.footer-section {
		flex: 1;
		min-width: 200px;
		margin: 10px 0;
	}

	.footer-section h4 {
		font-size: 18px;
		margin-bottom: 10px;
		border-bottom: 2px solid #fff;
		display: inline-block;
	}

	.footer-section ul {
		list-style: none;
		padding: 0;
	}

	.footer-section ul li {
		margin-bottom: 5px;
	}

	.footer-section ul li a {
		color: #fff;
		text-decoration: none;
		transition: color 0.3s;
	}

	.footer-section ul li a:hover {
		color: #1e90ff;
	}

	.social-links li {
		display: inline-block;
		margin-right: 10px;
	}

	.social-links li a {
		display: flex;
		align-items: center;
	}

	.social-links li a i {
		margin-right: 5px;
	}

	.footer-bottom {
		text-align: center;
		margin-top: 20px;
		font-size: 14px;
		border-top: 1px solid #555;
		padding-top: 10px;
	}

</style>
</head>
<body class="warpoel_admin_basic">

	<script type="text/javascript" src="{{url('')}}/asset/js/sweetalert2.js"></script>
	@if ( session('flasher') )
	<script type="text/javascript">
		Swal.fire("{{session('flasher')}}"); 
	</script>
	@endif

	<header class="prime_header">
		<div class="container-fluid">
			<!-- Navigasi header row -->
			<div class="row">
				<a href="landing.php" class="logo_nav_header">
					<img src="{{url('')}}/asset/gam/logo.png">
				</a>
				<span class="mt-2 title_nav">
					Saidil Application 
				</span>
				{{-- <a style="cursor: pointer;" class="nav-link btn_sidebar" data-target-id-sidebar="#my_sidebar" id="select"><i class="fas fa-bars"></i></a> --}}
				<!-- End Of Btn Indicator Responsive -->
				<div class="col nav-left">
					<div class="form-row align-items-center">
						<label class="sr-only" for="inlineFormInputGroup">Username</label>
					</div>
				</div>
				<div class="nav-right" style="background:;display: flex;flex-direction: column;justify-content: center;">
					<div class="container-fluid" style="margin-top: -20px;">

						<div class="row justify-content-end text-right">
							@foreach ($data_menu as $key => $value)
							<a class="mr-4"  href="{{$value}}"> {{ $key }} </a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<!-- End Of Navigasi header row -->
		</div>
	</header>
	<section class="prime_body">
		<div class="container-fluid">
			<div class="row">

				<!-- CONTENT PRIME -->
				<div class="col content_prime pt-3">
					<div class="container-fluid container_content">

						{{-- Row Slider --}}
						<div class="row" id="slider">

							<div class="col-12">
								<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										@foreach ($data_slide as $url_slide)
										<div class="carousel-item slider">
											<img src="{{url('')}}/asset/gam/{{$url_slide}}" style="width: 100%;height: 100%" alt="...">
										</div>
										@endforeach


									</div>
									<button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</button>
									<button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</button>
								</div>
							</div>

						</div>
						{{-- End Of Row Slider --}}

						{{-- Row Fitur --}}
						<div class="row justify-content-center" id="fitur">
							<div class="col-12 col_header">
								<h2 class="judul_content"> Fitur Utama </h2 class="judul_content">
							</div>
							@foreach ( $data_fitur as $judul => $value )
							<div class="col-sm-4">
								<div class="card" style="width:100%">
									<h4 class="judul_content"> {{$judul}} </h4>
									<p>{{$value}} </p>
								</div>
							</div>
							@endforeach
						</div>
						{{-- End Of Row Fitur --}}

						{{-- Row Tentang --}}
						<style type="text/css">
						.tentang_img img{
							width: 100%;
							height: 300px;
						}
						.tentang_text{
							padding: 30px !important;
							padding-top: 0!important;
						}
					</style>
					<div class="row" id="tentang">
						<div class="col-sm-5 tentang_img">
							<img src="{{url('')}}/asset/gam/class_bg.jpg">
						</div>
						<div class="col-sm tentang_text">
							<h2 class="judul_content"> Tentang Aplikasi </h2>
							<p> Merupakan aplikasi yang mengatur data rekam medis dengan fitur adminnya </p>
						</div>
					</div>
					{{-- End Of Row Tentang --}}

					{{-- Row Contact --}}
					<div class="row justify-content-center" id="contact">
						<div class="col-sm-6 text-center" style="background: #ccc;padding: 20px;border-radius: 12px;">
							<p style="margin-bottom: 0;"> Ada yang ingin kamu tanyakan ?</p>
							<i class="fab fa-whatsapp" style="font-size: 40px;"></i>
							<a href="" class="btn btn-success"> Hubungi Kami </a>
						</div> 	
					</div>
					{{-- End Of Row Contact --}}


					{{-- Row FAQ --}}
					<div class="row justify-content-center" id="faq">
						<div class="col-12 col_header">
							<h2 class="judul_content"> FAQ </h2 class="judul_content">
						</div>
						@foreach ($data_faq as $judul => $value )
						<div class="col-sm-6 mb-3">
							<div class="card" style="width:100%">
								<h4 class="judul_content"> {{$judul}} </h4>
								<p>{{$value}} </p>
							</div>
						</div>
						@endforeach
					</div>
					{{-- End Of Row FAQ --}}




				</div>




			</div>
			<!-- ENd OF CONTENT PRIME -->

		</div>
		<!--  -->
	</section>



	
	<footer class="footer">
		<div class="container">
			<div class="footer-content">
				<style type="text/css">
				footer *{
					color: #fff !important;
				}
			</style>
			<div class="footer-section" style="color: #fff;">
				<h4>Saidil Apps</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="footer-section">
				<h4> Menu </h4>
				<ul>
					@foreach ($data_menu as $key => $value)
					<li><a href="{{$value}}">{{ $key }}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="footer-section">
				<h4>Social Media </h4>

				<ul>
					<li><a href="#home">Instagram</a></li>
					<li><a href="#about">Linkedin</a></li>

				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<p>&copy; 2025 Saidil Apps. All rights reserved.</p>
		</div>
	</div>
</footer>







<!-- Script plugin -->
<script type="text/javascript" src="{{url('')}}/asset/js/jquery.min.js"></script>
<script type="text/javascript" src="{{url('')}}/asset/js/jquery-ui.js"></script>
<script type="text/javascript" src="{{url('')}}/asset/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="{{url('')}}/asset/js/warpoel_admin_basic.js"></script>
<script type="text/javascript" src="{{url('')}}/asset/js/rumah_cerdas.js"></script>
<script type="text/javascript">
	$(function() {
		$('.slider').first().addClass('active');
	});
</script>




</body>
</html>

