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
	.card{
		padding: 20px;
		height: auto;
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

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-sm-6 mt-5">
				<div class="card" style="width:100%">
					<form action="{{ url('login_auth') }}" method="post">
						@csrf <!-- Menambahkan token CSRF -->

						<h1 class="mb-4"> Login Form </h1>
						<div class="form-group">
							<label> User : </label>
							<input class="form-control" type="text" name="user">
						</div>
						<div class="form-group">
							<label> Password : </label>
							<input class="form-control" type="password" name="password">
						</div>

						<div class="form-group">
							<button class="btn btn-primary form-control" name="submit"> Login </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	






	<!-- Script plugin -->
	<script type="text/javascript" src="{{url('')}}/asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{url('')}}/asset/js/jquery-ui.js"></script>
	<script type="text/javascript" src="{{url('')}}/asset/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="{{url('')}}/asset/js/warpoel_admin_basic.js"></script>
	<script type="text/javascript" src="{{url('')}}/asset/js/rumah_cerdas.js"></script>


	

</body>
</html>

