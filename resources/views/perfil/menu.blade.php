<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>

	<!-- Estilos Globales -->
	<link href="{{asset('assets2/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets2/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /Estilos globales -->

	
	<script src="{{asset('assets2/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets2/js/vendor/notifications/noty.min.js')}}"></script>
	<script src="{{asset('assets2/js/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{asset('assets2/demo/pages/extra_noty.js')}}"></script>
</head>

<body>

	<div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
		<div class="container-fluid">
			<div class="d-flex d-lg-none me-2">
				<button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
					<i class="ph-list"></i>
				</button>
			</div>

			<div class="navbar-brand flex-1 flex-lg-0">
				<a href="index.html" class="d-inline-flex align-items-center">
					<img src="https://us.123rf.com/450wm/saiful007/saiful0071708/saiful007170800167/83305559-logotipo-de-la-letra-n-plantilla-de-concepto-de-dise%C3%B1o-de-logotipo-de-velocidad.jpg" alt="">
					
				</a>
			</div>

			

		

			<ul class="nav flex-row justify-content-end order-1 order-lg-2">
				

				<li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
					<a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
						<div class="container">
							<img src="http://evaluacion.test/assets2/images/users/face1.jpg" class="w-32px h-32px rounded-pill" alt="">
							
						</div>
						<span class="d-none d-lg-inline-block mx-lg-2" id="nom_user">---</span>
					</a>

					<div class="dropdown-menu dropdown-menu-end">
						
						<a href="{{ url('/login'); }}" class="dropdown-item">
							<i class="ph-sign-out me-2"></i>
							Salir
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>



	<!-- Pagina de contenido -->
	<div class="page-content">

		


	
		<div class="content-wrapper">

			
			<div class="content-inner">

				
				<div class="page-header page-header-light shadow">
					

					<div class="page-header-content d-lg-flex border-top">
						<div class="d-flex">
							<div class="breadcrumb py-2">
								<a href="#" id="text_bienvenida">---</a>
								<a href="#" id="text_email">--Email</a>
								
							</div>

							<a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a>
						</div>

					</div>
				</div>



                @yield('content')

			

			</div>
		

		</div>
		

	</div>
<!-- /pagina de contenido -->

    <script src="{{asset('op/perfil/menu.js')}}"></script>
	<script src="{{asset('op/perfil/perfil.js')}}"></script>
</body>

</html>