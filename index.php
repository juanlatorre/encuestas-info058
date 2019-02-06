<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">

		<title>Encuesta LAMS INFO-058</title>
  	</head>
	<body>
		<nav class="navbar navbar-light bg-light">
			<a class="btn btn-sm btn-outline-secondary ml-auto" role="button" href="login_admin.php">Administración</a>
		</nav>
		<?php
		include_once('config.php');
		$query = mysqli_query($db, "SELECT * FROM alumnos");

		session_start();

		if((isset($_COOKIE['alumno']) && $_COOKIE['alumno'] != '') || (isset($_SESSION['alumno']) && $_SESSION['alumno'] !='')) {
			header("Location: encuesta.php");
		} else {
			if (isset($_POST['login'])) {
				$rut 	 = $_POST['rut'];
				$clave 	 = $_POST['clave'];
	
				$query = "SELECT * FROM alumnos WHERE rut='$rut' and clave='$clave'";
				$result = mysqli_query($db, $query);
				$count = mysqli_num_rows($result);
	
				if ($count > 0) {
					$result = mysqli_fetch_assoc(mysqli_query($db, $query));
					$id = $result['rut'];
					$cookie_name = "alumno";
					$cookie_value = $id;
					// calculo de tiempo: 86400 = 1 día (86400*30 = 1 Mes)
					$expiry = time() + (3600);
					setcookie($cookie_name, $cookie_value, $expiry);
					session_start();
					$_SESSION['alumno'] = $id;
					echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					Ingreso correcto, te estamos redirigiendo a la encuesta...
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';
					header("Location: encuesta.php");
				} else {
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Ups!</strong> Revisa de nuevo tu rut o clave, si el problema persiste contáctate con un profesor.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';
				}
			}
		}
		?>
		<div class="container pb-4">
			<h1 class="pt-4">Bienvenidos</h1>
			<h5>Análisis del uso de la Plataforma LAMS en el curso INFO058 Programación, del segundo semestre del año académico 2018.</h5>
	
			<p>Antes de responder al cuestionario lea atentamente las siguientes instrucciones.</p>
	
			<p>El objetivo de este cuestionario es conocer su opinión acerca de la plataforma LAMS que se ha puesto a su disposición, como apoyo al curso INFO058 Programación. La primera parte del cuestionario recoge su opinión relativa a la satisfacción y utilidad y la segunda parte, tiene como objetivo evaluar la calidad de los recursos.</p>
			
			<p>
				Las preguntas abiertas pueden tener la extensión que considere necesaria.
			</p>
			
			<p>
				Cada una de las afirmaciones del cuestionario describen las mejores características que debe poseer un curso en línea.<br>
				<br>Marque la casilla correspondiente según la frecuencia o intensidad con la que se cumple esa afirmación. 
				<br>Responda de acuerdo con la siguiente escala:
			</p>
			
			<div class="pb-4">
			<div class="form-group text-center">
					<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">					
						<input class="form-check-input" type="radio" name="p3" id="p3-1" value="1" required>
						<label class="form-check-label" for="p3-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p3" id="p3-2" value="2" required>
						<label class="form-check-label" for="p3-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p3" id="p3-3" value="3" required>
						<label class="form-check-label" for="p3-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p3" id="p3-4" value="4" required>
						<label class="form-check-label" for="p3-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p3" id="p3-5" value="5" required>
						<label class="form-check-label" for="p3-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
			</div>
			
			<p>
				Se ruega responda a todos los ítem. No existen respuestas verdaderas o falsas. Puede realizar los comentarios que considere oportunos a las cuestiones planteadas.
			</p>
			
			<p>
				<strong><i>Le garantizo que se mantendrá el anonimato de quienes respondan y sus respuestas no tendrán ninguna influencia en la calificación final del curso. </i></strong>
			</p>
			
			<div class="text-center">
				<p>Para continuar con la encuesta, por favor ingresa tu rut y clave</p>
				<form class="form-inline justify-content-center" method="post" action="">
					<div class="form-group mb-2">
						<label for="rut" class="sr-only">Rut</label>
						<input type="text" class="form-control" id="rut" placeholder="12345678-9" name="rut">
					</div>
				  	<div class="form-group mx-sm-3 mb-2">
						<label for="clave" class="sr-only">Clave</label>
						<input type="password" class="form-control" id="clave" name="clave" placeholder="Clave">
				  	</div>
				  	<button type="submit" class="btn btn-info mb-2" name="login">Ingresar</button>
				</form>				
			</div>						
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

<?php
$mysqli->close();
?>