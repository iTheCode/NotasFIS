<html ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Esta web está siendo sieñada para el uso de las Notas de la Facultad de Ingenierí de Sistemas - UNICA">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notas FIS</title>
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="app/libraries/angular.min.js"></script>
	<script type="text/javascript" src="app/libraries/angular-ui-router.min.js"></script>
	<script type="text/javascript" src="app/app.js"></script>
	<script type="text/javascript" src="app/controllers/home.controller.js"></script>
	<script type="text/javascript" src="app/controllers/login.controller.js"></script>
	<script type="text/javascript" src="app/controllers/upload.controller.js"></script>
</head>
<style>
	.demo-card-wide.mdl-card {
		width: 512px;
	}
	.demo-card-wide > .mdl-card__title {
		color: #fff;
		height: 176px;
		background: url('http://www.infoalemania.com/imagenes/estudiantes-estudios.jpg') center / cover;
	}
	.demo-card-wide > .mdl-card__menu {
		color: #fff;
	}
</style>
<body>
	<!-- Inicia la Cabecera -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
			<div class="mdl-layout--large-screen-only mdl-layout__header-row">
			</div>
			<div class="mdl-layout--large-screen-only mdl-layout__header-row">
				<h3>Facultad de Ingeniería de Sistemas - UNICA</h3>
			</div>
			<div class="mdl-layout--large-screen-only mdl-layout__header-row">
			</div>
		</header>
		<main class="mdl-layout__content">
			<div class="page-content" >
				<br>
				<div class="demo-card-wide mdl-card mdl-shadow--2dp" style="position:absolute;left:30%;">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">Acceder a Tus Notas</h2>
					</div>
					<div class="mdl-card__supporting-text">
						Tus calificaciones son el reflejo de tu esfuerzo, estudia y sé más.
					</div>
					
					<div class="mdl-card__actions mdl-card--border">
						<div style="text-align: center;">
							<!-- Here the partials -->
							<div class="main-view-container" ui-view></div>
							<!-- End of partials -->
						</div>
						<div class="mdl-card__menu" style="color:white;">
							<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								<i class="material-icons">share</i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</main>

	</div>
	<!-- Finaliza la Cabecera -->
</body>
</html>