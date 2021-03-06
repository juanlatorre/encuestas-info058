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
			<a class="btn btn-sm btn-outline-secondary ml-auto" role="button" href="logout.php">Cerrar Sesión</a>
		</nav>
		<?php 
		include_once('config.php');

		session_start();

		if((isset($_COOKIE['alumno']) && $_COOKIE['alumno'] != '') || (isset($_SESSION['alumno']) && $_SESSION['alumno'] !='')) {
			null;
		} else {
			header("Location: index.php");
		}

		$rut = $_SESSION['alumno'];

		$query = "SELECT * FROM alumnos WHERE rut = '$rut'";
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);

		if (isset($_POST['encuesta'])) {
			$p1 = $_POST['p1-1']."/".$_POST['p1-2']."/".$_POST['p1-3'];
			$p2 = $_POST['p2'];
			$p3 = $_POST['p3'];
			$p4 = $_POST['p4'];
			$p5 = $_POST['p5'];
			$p6 = $_POST['p6'];
			$p7 = $_POST['p7'];
			$p8 = $_POST['p8'];
			$p9 = $_POST['p9'];
			$p10 = $_POST['p10'];
			$p11 = $_POST['p11'];
			$p12 = $_POST['p12'];
			$p13 = $_POST['p13'];
			$p14 = $_POST['p14'];
			$p15 = $_POST['p15'];
			$p16 = $_POST['p16'];
			$p17 = $_POST['p17'];
			$p18 = $_POST['p18'];
			$p19 = $_POST['p19'];
			$p20 = $_POST['p20'];
			$p21 = $_POST['p21'];
			$p22 = $_POST['p22'];
			$p23 = $_POST['p23'];
			$p24 = $_POST['p24'];
			$p25 = $_POST['p25'];
			$sugerencia_calidad = $_POST['sugerencia_calidad'];
			$sugerencia_metodologia = $_POST['sugerencia_metodologia'];
			$otros_comentarios = $_POST['otros_comentarios'];

			if($row['voto'] == "0") {
				$sql = "UPDATE alumnos SET voto='1', p1='$p1', p2='$p2', p3='$p3', p4='$p4', p5='$p5', p6='$p6', p7='$p7', p8='$p8', p9='$p9', p10='$p10', p11='$p11', p12='$p12', p13='$p13', p14='$p14', p15='$p15', p16='$p16', p17='$p17', p18='$p18', p19='$p19', p20='$p20',
				p21='$p21', p22='$p22', p23='$p23', p24='$p24', p25='$p25', sugerencia_calidad='$sugerencia_calidad', sugerencia_metodologia='$sugerencia_metodologia', otros_comentarios='$otros_comentarios' WHERE rut = '$rut'";

				if (mysqli_query($db, $sql)) {
					echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Gracias!</strong> Has llenado la encuesta correctamente, ya puedes cerrar esta ventana.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>';
				} else {
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Ups!</strong> No hemos podido guardar los datos.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>';
				}
			} else {
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Ups!</strong> Al parecer ya has llenado la encuesta, muchas gracias.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>';
			}

		}
		?>
		<div class="container pb-4">
			<h1 class="pt-4 pb-4">Encuesta LAMS INFO-058 <br><small class="text-success">Bienvenido, {{ nombre }}</small></h1>
			<form method="post" name="encuesta">
				<h5>I. Utilidad y satisfacción con los recursos proporcionados por la Universidad.</h5>
				<h6 class="pt-2"><u>Utilidad</u></h6>
				<p>1. Indique qué aplicaciones informáticas y plataformas de la Universidad Austral de Chile utiliza: Ordénelas por prioridad.<br>Ejemplo: Siveduc, InfoAlumnos, LAMS, entre otros.</p>
				<div class="form-row pb-4">
					<div class="col">
						<input type="text" class="form-control" id="p1-1" name="p1-1" placeholder="1" required>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="p1-2" name="p1-2" placeholder="2" required>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="p1-3" name="p1-3" placeholder="3" required>
					</div>					
					</div>
				
				<div class="form-group">
					<p>2. Indique qué problemas se ha encontrado al utilizar/poner en marcha alguno de estos recursos:</p>
					<textarea class="form-control" id="p2" name="p2" rows="3" required></textarea>
				</div>	
				
				<p>3. La utilidad general de los recursos informático que me han facilitado desde la Universidad es adecuada.</p>
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
				
				<p>4. Considero interesante y enriquecedor para mi aprendizaje que la Universidad siga proporcionando apoyos informáticos:</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p4" id="p4-1" value="1" required>
						<label class="form-check-label" for="p4-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p4" id="p4-2" value="2" required>
						<label class="form-check-label" for="p4-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p4" id="p4-3" value="3" required>
						<label class="form-check-label" for="p4-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p4" id="p4-4" value="4" required>
						<label class="form-check-label" for="p4-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p4" id="p4-5" value="5" required>
						<label class="form-check-label" for="p4-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<h6 class="pt-2"><u>Satisfacción</u></h6>
				
				<p>5. Considero que la plataforma LAMS es una herramienta que facilita el aprendizaje.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p5" id="p5-1" value="1" required>
						<label class="form-check-label" for="p5-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p5" id="p5-2" value="2" required>
						<label class="form-check-label" for="p5-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p5" id="p5-3" value="3" required>
						<label class="form-check-label" for="p5-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p5" id="p5-4" value="4" required>
						<label class="form-check-label" for="p5-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p5" id="p5-5" value="5" required>
						<label class="form-check-label" for="p5-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>6. Creo que la plataforma LAMS es una herramienta útil para mi aprendizaje.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p6" id="p6-1" value="1" required>
						<label class="form-check-label" for="p6-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p6" id="p6-2" value="2" required>
						<label class="form-check-label" for="p6-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p6" id="p6-3" value="3" required>
						<label class="form-check-label" for="p6-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p6" id="p6-4" value="4" required>
						<label class="form-check-label" for="p6-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p6" id="p6-5" value="5" required>
						<label class="form-check-label" for="p6-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>7. Utilizo la plataforma LAMS con frecuencia.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p7" id="p7-1" value="1" required>
						<label class="form-check-label" for="p7-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p7" id="p7-2" value="2" required>
						<label class="form-check-label" for="p7-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p7" id="p7-3" value="3" required>
						<label class="form-check-label" for="p7-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p7" id="p7-4" value="4" required>
						<label class="form-check-label" for="p7-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p7" id="p7-5" value="5" required>
						<label class="form-check-label" for="p7-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<div class="form-group">
					<p>8. Por favor, explique cuál es su satisfacción general con la plataforma LAMS o realice cualquier comentario que considere de interés con relación con esta plataforma. <span class="text-danger">(opcional)</span></p>
					<textarea class="form-control" id="p8" name="p8" rows="3"></textarea>
				</div>
				
				<h5>II. Evaluación de la calidad de la plataforma LAMS.</h5>
				
				<p>9. LAMS es una iniciativa educativa difícil de encontrar en otros cursos. </p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p9" id="p9-1" value="1" required>
						<label class="form-check-label" for="p9-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p9" id="p9-2" value="2" required>
						<label class="form-check-label" for="p9-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p9" id="p9-3" value="3" required>
						<label class="form-check-label" for="p9-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p9" id="p9-4" value="4" required>
						<label class="form-check-label" for="p9-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p9" id="p9-5" value="5" required>
						<label class="form-check-label" for="p9-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>10. Se considera LAMS un complemento eficaz y eficiente a los materiales disponibles en SIVEDUC.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p10" id="p10-1" value="1" required>
						<label class="form-check-label" for="p10-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p10" id="p10-2" value="2" required>
						<label class="form-check-label" for="p10-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p10" id="p10-3" value="3" required>
						<label class="form-check-label" for="p10-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p10" id="p10-4" value="4" required>
						<label class="form-check-label" for="p10-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p10" id="p10-5" value="5" required>
						<label class="form-check-label" for="p10-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>11. Se considera LAMS un complemento eficaz y eficiente a las clases teórico-práctico.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p11" id="p11-1" value="1" required>
						<label class="form-check-label" for="p11-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p11" id="p11-2" value="2" required>
						<label class="form-check-label" for="p11-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p11" id="p11-3" value="3" required>
						<label class="form-check-label" for="p11-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p11" id="p11-4" value="4" required>
						<label class="form-check-label" for="p11-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p11" id="p11-5" value="5" required>
						<label class="form-check-label" for="p11-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>12. El curso en LAMS es  atractivo: combinación de colores agradable, imágenes no sobrecargan la página, combinación equitativa de texto/imágenes, y da una impresión de credibilidad y fiabilidad.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p12" id="p12-1" value="1" required>
						<label class="form-check-label" for="p12-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p12" id="p12-2" value="2" required>
						<label class="form-check-label" for="p12-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p12" id="p12-3" value="3" required>
						<label class="form-check-label" for="p12-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p12" id="p12-4" value="4" required>
						<label class="form-check-label" for="p12-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p12" id="p12-5" value="5" required>
						<label class="form-check-label" for="p12-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>13. Es un curso interactivo, facilita la relación entre un usuario y la máquina, situando el control del desarrollo del curso en el estudiante.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p13" id="p13-1" value="1" required>
						<label class="form-check-label" for="p13-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p13" id="p13-2" value="2" required>
						<label class="form-check-label" for="p13-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p13" id="p13-3" value="3" required>
						<label class="form-check-label" for="p13-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p13" id="p13-4" value="4" required>
						<label class="form-check-label" for="p13-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p13" id="p13-5" value="5" required>
						<label class="form-check-label" for="p13-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<h5>III. Calidad de la Metodología.</h5>			
				
				<p>14. El curso en LAMS ofrece un programa actualizado: introducción, objetivos, actividades, etc.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p14" id="p14-1" value="1" required>
						<label class="form-check-label" for="p14-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p14" id="p14-2" value="2" required>
						<label class="form-check-label" for="p14-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p14" id="p14-3" value="3" required>
						<label class="form-check-label" for="p14-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p14" id="p14-4" value="4" required>
						<label class="form-check-label" for="p14-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p14" id="p14-5" value="5" required>
						<label class="form-check-label" for="p14-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>15. El curso en LAMS dispone de un desarrollo de contenidos exhaustivo (introducción, material, reforzamiento, desarrollo de problemas y evaluaciones).</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p15" id="p15-1" value="1" required>
						<label class="form-check-label" for="p15-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p15" id="p15-2" value="2" required>
						<label class="form-check-label" for="p15-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p15" id="p15-3" value="3" required>
						<label class="form-check-label" for="p15-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p15" id="p15-4" value="4" required>
						<label class="form-check-label" for="p15-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p15" id="p15-5" value="5" required>
						<label class="form-check-label" for="p15-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>16. Los contenidos son precisos y fiables, además de presentarse de forma comprensible.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p16" id="p16-1" value="1" required>
						<label class="form-check-label" for="p16-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p16" id="p16-2" value="2" required>
						<label class="form-check-label" for="p16-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p16" id="p16-3" value="3" required>
						<label class="form-check-label" for="p16-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p16" id="p16-4" value="4" required>
						<label class="form-check-label" for="p16-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p16" id="p16-5" value="5" required>
						<label class="form-check-label" for="p16-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>17. Los contenidos y la metodología utilizada me permitieron obtener nuevos conocimientos.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p17" id="p17-1" value="1" required>
						<label class="form-check-label" for="p17-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p17" id="p17-2" value="2" required>
						<label class="form-check-label" for="p17-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p17" id="p17-3" value="3" required>
						<label class="form-check-label" for="p17-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p17" id="p17-4" value="4" required>
						<label class="form-check-label" for="p17-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p17" id="p17-5" value="5" required>
						<label class="form-check-label" for="p17-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>18. Las actividades son variadas, atractivas y trascienden el uso de la memoria.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p18" id="p18-1" value="1" required>
						<label class="form-check-label" for="p18-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p18" id="p18-2" value="2" required>
						<label class="form-check-label" for="p18-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p18" id="p18-3" value="3" required>
						<label class="form-check-label" for="p18-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p18" id="p18-4" value="4" required>
						<label class="form-check-label" for="p18-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p18" id="p18-5" value="5" required>
						<label class="form-check-label" for="p18-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>19. Las actividades facilitan la comprensión y el razonamiento, convirtiendo los contenidos en algo activo y eficiente.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p19" id="p19-1" value="1" required>
						<label class="form-check-label" for="p19-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p19" id="p19-2" value="2" required>
						<label class="form-check-label" for="p19-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p19" id="p19-3" value="3" required>
						<label class="form-check-label" for="p19-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p19" id="p19-4" value="4" required>
						<label class="form-check-label" for="p19-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p19" id="p19-5" value="5" required>
						<label class="form-check-label" for="p19-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>20. Se utilizan actividades que facilitan la evaluación y se da la posibilidad de subir actividades a LAMS, se envía retroalimentación de forma precisa y clara, y se ofrecen exámenes interactivos de prueba.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p20" id="p20-1" value="1" required>
						<label class="form-check-label" for="p20-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p20" id="p20-2" value="2" required>
						<label class="form-check-label" for="p20-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p20" id="p20-3" value="3" required>
						<label class="form-check-label" for="p20-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p20" id="p20-4" value="4" required>
						<label class="form-check-label" for="p13-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p20" id="p20-5" value="5" required>
						<label class="form-check-label" for="p20-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>21. La metodología utilizada en LAMS mantiene el interés en el seguimiento del curso, es decir, motiva.. </p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p21" id="p21-1" value="1" required>
						<label class="form-check-label" for="p21-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p21" id="p21-2" value="2" required>
						<label class="form-check-label" for="p21-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p21" id="p21-3" value="3" required>
						<label class="form-check-label" for="p21-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p21" id="p21-4" value="4" required>
						<label class="form-check-label" for="p21-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p21" id="p21-5" value="5" required>
						<label class="form-check-label" for="p21-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>22. La metodología utilizada en LAMS mantiene el interés en el seguimiento del curso, es decir, motiva.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p22" id="p22-1" value="1" required>
						<label class="form-check-label" for="p22-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p22" id="p22-2" value="2" required>
						<label class="form-check-label" for="p22-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p22" id="p22-3" value="3" required>
						<label class="form-check-label" for="p22-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p22" id="p22-4" value="4" required>
						<label class="form-check-label" for="p22-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p22" id="p22-5" value="5" required>
						<label class="form-check-label" for="p22-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<h5>IV. Calidad Ténica.</h5>
				
				<p>23. El curso presenta distintos recursos de forma integrada y combinando diferentes tipos de información (actividades, vídeos, etc.).</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p23" id="p23-1" value="1" required>
						<label class="form-check-label" for="p23-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p23" id="p23-2" value="2" required>
						<label class="form-check-label" for="p23-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p23" id="p23-3" value="3" required>
						<label class="form-check-label" for="p23-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p23" id="p23-4" value="4" required>
						<label class="form-check-label" for="p23-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p23" id="p23-5" value="5" required>
						<label class="form-check-label" for="p23-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>24. La plataforma LAMS responde a las necesidades del estudiante.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p24" id="p24-1" value="1" required>
						<label class="form-check-label" for="p24-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p24" id="p24-2" value="2" required>
						<label class="form-check-label" for="p24-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p24" id="p24-3" value="3" required>
						<label class="form-check-label" for="p22-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p24" id="p24-4" value="4" required>
						<label class="form-check-label" for="p24-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p24" id="p24-5" value="5" required>
						<label class="form-check-label" for="p24-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<p>25. Los recursos en LAMS presentan contenidos actualizados y con adecuada estructuración y organización.</p>
				<div class="form-group text-center">
				<span class="mr-2">Muy en desacuerdo</span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p25" id="p25-1" value="1" required>
						<label class="form-check-label" for="p25-1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p25" id="p25-2" value="2" required>
						<label class="form-check-label" for="p25-2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p25" id="p25-3" value="3" required>
						<label class="form-check-label" for="p25-3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p25" id="p25-4" value="4" required>
						<label class="form-check-label" for="p25-4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="p25" id="p25-5" value="5" required>
						<label class="form-check-label" for="p25-5">5</label>
					</div>
					<span>Muy de acuerdo</span>
				</div>
				
				<h5>IV. Sugerencias para mejorar el curso virtual.</h5>
				
				<div class="form-group">
					<label for="sugerencia_calidad">Sugerencias para mejorar de la calidad general del curso en LAMS:</label>
					<textarea class="form-control" id="sugerencia_calidad" name="sugerencia_calidad" rows="3" required></textarea>
				</div>
					
				<div class="form-group">
					<label for="sugerencia_metodologia">Sugerencias para mejora la metodológica del curso:</label>
					<textarea class="form-control" id="sugerencia_metodologia" name="sugerencia_metodologia" rows="3" required></textarea>
				</div>
					
				<div class="form-group">
					<label for="otros_comentarios">Otros comentarios:</label>
					<textarea class="form-control" id="otros_comentarios" name="otros_comentarios" rows="3" required></textarea>
				</div>
				
				<div class="text-center">
					<button name="encuesta" type="submit" class="btn btn-info">Finalizar</button>
				</div>
			</form>	
			
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>