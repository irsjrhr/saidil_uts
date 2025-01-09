@php
$menu_activity = [];
$menu = [];
@endphp

<!-- VARIABEL $menu dan $menu_activy ada di controller method viewnya -->
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
	.container_content > .row{
		margin-bottom: 30px;
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
				<a style="cursor: pointer;" class="nav-link btn_sidebar" data-target-id-sidebar="#my_sidebar" id="select"><i class="fas fa-bars"></i></a>
				<!-- End Of Btn Indicator Responsive -->
				<div class="col nav-left">
					<div class="form-row align-items-center">
						<label class="sr-only" for="inlineFormInputGroup">Username</label>
					</div>
				</div>
				<div class="nav-right" style="display: none;">
					<ul class="nav justify-content-end">
						<!-- Nav Responsive -->
						<li class="nav-item nav_responsive">
							<!-- Akan muncul saat responsive mode mobile -->
							<a style="cursor: pointer;" class="nav-link toggle_responsive" id="select"><i class="fas fa-chevron-down"></i></a>
							<!-- Menu Responsive -->
							<ul class="nav justify-content-end container_menu">
								<button class="btn btn-default btn_close" style="z-index: 9999999;font-weight: normal;">
									<i class="fas fa-times"></i>
								</button>
								<li class="nav-item">
									<div class="dropdown">
										<a class="btn btn-default dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
											Activity
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#"></a>
											@foreach ($menu_activity as $key => $menu1) {?>
											<a class="dropdown-item" href="{{$menu1['link']}}"> <?=$menu1['menu']  ?></a>
											@endforeach
											
										</div>
									</div>
								</li>
								@foreach ($menu as $key => $data_row)
								<li class="nav-item">
									<a class="nav-link active" href="{{$data_row['link']}}"> <?=$data_row['menu'] ?> </a>
								</li>
								@endforeach
							</ul>
						</li>
						<!-- End Of Nav Responsive -->
						<!-- Dropdown Account -->
						<li class="nav-item user_profile dropdown_item drop_account ml-3">
							<a class="nav-link mt-2" href="#" style="padding: 0"> <i class="fas fa-user"></i> </a>
							<div class="yt_dropdown">
								<ul class="nav flex-column">
									<li class="nav-item header">
										<div class="container-fluid">
											<div class="row">
												<img src="{{url('')}}/asset/gam/user.png" class="rounded-circle user_profile">
												<div class="col">
													<span class="user"> Username </span>
													<span class="email"> email@gmail.com 
													</span>
												</div>
											</div>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="login.php">
											<div class="container-fluid">
												<div class="row">
													<i class="fas fa-sign-in-alt"></i>
													<span> Login  </span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- End Of Dropdown Account -->
					</ul>
				</div>
			</div>
			<!-- End Of Navigasi header row -->
		</div>
	</header>
	<section class="prime_body">
		<div class="container-fluid">
			<div class="row">
				<!-- CONTENT SIDEBAR - LEFT -->
				<div class="content_sidebar left" id="my_sidebar">
					<div class="warpoel_nav_sidebar">
						<!-- Tombol responsive, hanya saat di tampilan mobile device -->
						<button class="btn btn-default btn_sidebar close_sidebar" style="z-index: 9999999;">
							<i class="fas fa-times"></i>
						</button>
						<ul class="nav flex-column">
							<li class="nav-item sidebar_menu">
								<div class="container-fluid">
									<div class="row menu_sidebar">
										<div class="col-1 logo">
											<i class="fas fa-home"></i>
										</div>
										<div class="col text_link" style="padding;">  
											<a href="{{url('list')}}">
												Data Rekam
											</a>
										</div>
									</div>
									<div class="row menu_sidebar">
										<div class="col-1 logo">
											<i class="fas fa-coffee"></i>
										</div>
										<div class="col text_link" style="padding;">  
											<a href="{{url('logout')}}">
												Logout
											</a>
										</div>
									</div>
								</div>
							</li>

							
						</ul>
					</div>
				</div>
				<!-- END OF CONTENT SIDEBAR - LEFT -->	

				<!-- CONTENT PRIME -->
				<div class="col content_prime pt-3">
					<div class="container-fluid container_content">

						<div class="row">
							<div class="col-sm-12">
								<h1> Dashboard </h1>
							</div>
							<div class="col-sm-4 box_stat">
								<h6> Jumlah Data </h6>
								<h2> {{count($data_rekam)}} </h2>
								<h2 class="icon">
									<i class="fas fa-info"> </i>
								</h2>
							</div>
						</div>

						<div class="row row_nav">
							<div class="col-12">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#modal_tambah">
									Tambah Data
									<span> <i class="fas fa-plus"></i> </span>
								</button>
							</div>
						</div>

						<div class="row row_table">
							<div class="col-12">	
								<table class="table text-center">
									<tr style="color: #fff;background: #ccc;">
										<td> Action </td>
										<th> Id Pasien</th>
										<th> Nama Pasien </th>
										<th> Diagnosa </th>
										<th> Dokter  </th>
										<th> Waktu </th>
									</tr>

									@foreach ($data_rekam as $row_rekam)
									<tr>
										<td>
											<div class="dropdown">
												<a class="btn btn-default dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
													<i class="fas fa-config"></i>
												</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="{{ url('/hapus?id_pasien='.$row_rekam['id_pasien']) }}"> Hapus </a>
													<a class="dropdown-item" href="{{ url('/?action=update&id_pasien='.$row_rekam['id_pasien']) }}"> Update </a>
												</div>
											</div>
										</td>
										<td> {{ $row_rekam['id_pasien'] }} </td>
										<td> {{ $row_rekam['nama_pasien'] }} </td>
										<td> {{ $row_rekam['diagnosa'] }} </td>
										<td> {{ $row_rekam['dokter'] }} </td>
										<td> {{ $row_rekam['waktu'] }} </td>
									</tr>

									@endforeach

								</table>
							</div>
						</div>

					</div>
				</div>
				<!-- END OF CONTENT PRIME -->
				<script type="text/javascript" src="{{url('')}}/asset/js/rumah_cerdas.js"></script>

			</div>
		</div>
		<!--  -->
	</section>



	<!-- Modal Tambah -->
	<div class="modal fade" id="modal_tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Tambah Data </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row" id="row_profile">
							<div class="col-sm-12">
								<form action="{{ url('tambah') }}" method="post">
									@csrf <!-- Menambahkan token CSRF -->
									<div class="form-group">
										<label> Nama Pasien : </label>
										<input type="text" class="form-control" name="nama_pasien">
									</div>
									<div class="form-group">
										<label> Diagnosa : </label>
										<input type="text" class="form-control" name="diagnosa">
									</div>
									<div class="form-group">
										<label> Dokter : </label>
										<input type="text" class="form-control" name="dokter">
									</div>


									<div class="form-group">
										<label> Waktu Kunjungan : </label>
										<input type="date" class="form-control" name="waktu_kunjungan">
									</div>

									<div class="col-12 text-right">
										<button type="submit" name="submit" class="btn btn-success">
											Tambah
										</button>
									</div>
								</form>


							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Modal update - Kondisi -->






	<!-- Script plugin -->
	<script type="text/javascript" src="{{url('')}}/asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{url('')}}/asset/js/jquery-ui.js"></script>
	<script type="text/javascript" src="{{url('')}}/asset/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="{{url('')}}/asset/js/warpoel_admin_basic.js"></script>
	<script type="text/javascript" src="{{url('')}}/asset/js/rumah_cerdas.js"></script>


	@if (!empty($row_update))
	<div class="modal fade" id="modal_update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Update Data </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row" id="row_profile">
							<div class="col-sm-12">
								<form action="{{ url('update?id_pasien='.$row_update['id_pasien']) }}" method="post">
									@csrf <!-- Menambahkan token CSRF -->
									<input type="hidden" name="">
									<div class="form-group">
										<label> Nama Pasien : </label>
										<input type="text" class="form-control" name="nama_pasien" value="{{ $row_update['nama_pasien'] }}">
									</div>
									<div class="form-group">
										<label> Diagnosa : </label>
										<input type="text" class="form-control" name="diagnosa" value="{{ $row_update['diagnosa'] }}">
									</div>
									<div class="form-group">
										<label> Dokter : </label>
										<input type="text" class="form-control" name="dokter" value="{{ $row_update['dokter'] }}">
									</div>

									<div class="form-group">
										<label> Waktu Kunjungan : </label>
										<input type="date" class="form-control" name="waktu_kunjungan" value="{{ $row_update['waktu_kunjungan'] }}">
									</div>


									<div class="col-12 text-right">
										<button type="submit" name="submit" class="btn btn-success">
											Update Data
										</button>
									</div>
								</form>


							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(function() {
			$('#modal_update').modal('show');
		});
	</script>
	@endif
	<!-- End Of Modal update - Kondisi -->

</body>
</html>

