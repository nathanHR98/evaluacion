<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Evaluación</title>

	<!-- Estilos globales -->
	<link href="{{asset('assets2/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets2/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /Estilos globales -->


	<script src="{{asset('assets2/js/vendor/notifications/noty.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{asset('assets2/demo/pages/extra_noty.js')}}"></script>
</head>

<body>

	
	<div class="navbar navbar-dark navbar-static py-2">
		<div class="container-fluid">
			<div class="navbar-brand">
				<a href="index.html" class="d-inline-flex align-items-center">
					<img src="https://us.123rf.com/450wm/saiful007/saiful0071708/saiful007170800167/83305559-logotipo-de-la-letra-n-plantilla-de-concepto-de-dise%C3%B1o-de-logotipo-de-velocidad.jpg" alt="">
					
				</a>
			</div>

			<div class="d-flex justify-content-end align-items-center ms-auto">
				<ul class="navbar-nav flex-row">
				
					<li class="nav-item">
						<a href="{{ url('/registrarse'); }}" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-user-circle-plus"></i>
							<span class="d-none d-md-inline-block ms-2">Register</span>
						</div>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>



	<!-- Pagina de contenido -->
	<div class="page-content">

	
		<div class="content-wrapper">

		
			<div class="content-inner">

			
				<div class="content d-flex justify-content-center align-items-center">

				
					<form class="login-form" >
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="https://us.123rf.com/450wm/saiful007/saiful0071708/saiful007170800167/83305559-logotipo-de-la-letra-n-plantilla-de-concepto-de-dise%C3%B1o-de-logotipo-de-velocidad.jpg" class="h-48px" alt="">
									</div>
									<h5 class="mb-0">Login</h5>
									
								</div>

								<div class="mb-3">
									<label class="form-label">Email</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="email" class="form-control" placeholder="Ingresar email" id="email_login">
										<div class="form-control-feedback-icon">
											<i class="ph-envelope-open text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Contraseña</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" class="form-control" placeholder="•••••••••••" id="pass_login">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<button type="button" class="btn btn-success w-100" id="ingreso_sistema">Ingresar</button>
								</div>


							</div>
						</div>
					</form>
				

				</div>
			



	
	
	</div>
	<!-- /pagina de contenido -->


    <script src="{{asset('op/login/login.js')}}"></script>
</body>

</html>
