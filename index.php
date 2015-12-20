<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="description" content="Esta web está siendo sieñada para el uso de las Notas de la Facultad de Ingenierí de Sistemas - UNICA">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Notas FIS</title>
		<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
		<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
					        <form action="#">
							   <div class="mdl-textfield mdl-js-textfield">
							    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
							    <label class="mdl-textfield__label" for="sample2">Ingresa tu Código Universitario</label>
							    <span class="mdl-textfield__error">Debes ingresar Números!</span>
							  </div>
							  <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
							    <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
							      <i class="material-icons">search</i>
							    </label>
							    <div class="mdl-textfield__expandable-holder">
							      <input class="mdl-textfield__input" type="text" id="sample6">
							      <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
							    </div>
							  </div>
							  <br>
							  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">Acceder</button>
							</form>
				        	<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="margin: 0 auto;text-align: left;">
							  <thead>
							    <tr>
							      <th><i class="material-icons">search</i></th>
							      <th class="mdl-data-table__cell--non-numeric">Nombre de Alumno</th>
							      <th>Ciclo</th>
							      <th>Código</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td>
									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
									  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
									</label>
							      </td>
							      <td class="mdl-data-table__cell--non-numeric">Luis Uculmana Lara</td>
							      <td>II</td>
							      <td>20143406</td>
							    </tr>
							    <tr>
							      <td>
									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
									  <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
									</label>
							      </td>
							      <td class="mdl-data-table__cell--non-numeric">Luis Uculmana Lara</td>
							      <td>II</td>
							      <td>20143406</td>
							    </tr>
							    <tr>
							      <td>
									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
									  <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
									</label>
							      </td>
							      <td class="mdl-data-table__cell--non-numeric">Luis Uculmana Lara</td>
							      <td>II</td>
							      <td>20143406</td>
							    </tr>
							  </tbody>
							</table>
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