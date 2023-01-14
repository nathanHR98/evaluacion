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



	<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets2/js/vendor/notifications/noty.min.js')}}"></script>
	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{asset('assets2/demo/pages/extra_noty.js')}}"></script>
</head>

<body>


	<div class="navbar navbar-dark navbar-static py-2">
		<div class="container-fluid">
			<div class="navbar-brand">
				<a href="index.html" class="d-inline-flex align-items-center">
					<img src="https://demo.interface.club/limitless/demo/template/assets/images/logo_icon.svg" alt="">
					<img src="https://demo.interface.club/limitless/demo/template/assets/images/logo_text_light.svg" class="d-none d-sm-inline-block h-16px ms-3" alt="">
				</a>
			</div>

			<div class="d-flex justify-content-end align-items-center ms-auto">
				<ul class="navbar-nav flex-row">
				
					<li class="nav-item">
						<a href="{{ url('/login'); }}" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-user-circle"></i>
							<span class="d-none d-md-inline-block ms-2">Login</span>
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
										<img src="https://demo.interface.club/limitless/demo/template/assets/images/logo_icon.svg" class="h-48px" alt="">
									</div>
									<h5 class="mb-0">Crear Cuenta</h5>
									
								</div>

								<div class="text-center text-muted content-divider mb-3">
									<span class="px-2">Todos los datos son obligatorios</span>
								</div>

								<div class="mb-3">
									<label class="form-label">Nombre</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="text" class="form-control" placeholder="Ingresar nombre" id="nom_reg">
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
									
								</div>
                                <div class="mb-3">
									<label class="form-label">Email</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="email" class="form-control" placeholder="Ingresar email" id="email_reg">
										<div class="form-control-feedback-icon">
											<i class="ph-envelope-open text-muted"></i>
										</div>
									</div>
									
								</div>

								<div class="mb-3">
									<label class="form-label">Contraseña</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" class="form-control" placeholder="•••••••••••" id="pass_reg">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>
                                <div class="mb-3">
									<label class="form-label">Verificar Contraseña</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" class="form-control" placeholder="•••••••••••" id="veri_pass_reg">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>

								<button type="button" class="btn btn-teal w-100" id="registrar_usuario">Registrarse</button>
							</div>
						</div>
					</form>
				

				</div>
			



			</div>
			

		</div>
	

	</div>
	<!-- /pagina de contenido -->


	
    <script src="{{asset('op/register/register.js')}}"></script>
</body>
</html>
