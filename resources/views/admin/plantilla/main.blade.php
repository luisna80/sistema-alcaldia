<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('titulo','default') .:Panel de Administracion</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('plantillas/bootflat-admin/dist/css/site.min.css')}}">
	


	</head>
	<body>
		@include('admin.plantilla.partes.menu')

		<section>
@include('admin.plantilla.partes.lado')
			@yield('content')
			@yield('nuevo')

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->

		
			
		</section>
<br><br>@include('admin.plantilla.partes.pie')
				<script 
		src="{{asset('plantillas/bootflat-admin/dist/js/site.min.js')}}">
			
		</script>


	</body>
</html>