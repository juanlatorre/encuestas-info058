<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">

		<title>Administración | Encuesta LAMS INFO-058</title>
  	</head>
	<body>
        <?php
		include_once('config.php');
		$query = mysqli_query($db, "SELECT * FROM alumnos");

        session_start();
        
		if((isset($_COOKIE['admin']) && $_COOKIE['admin'] != '') || (isset($_SESSION['admin']) && $_SESSION['admin'] !='')) {
			echo '<nav class="navbar navbar-light bg-light"><a class="btn btn-sm btn-outline-secondary ml-auto" role="button" href="logout.php">Cerrar Sesión</a></nav>';
		} else {
			if (isset($_POST['admin_login'])) {
                $rut = $_POST['rut'];
				$clave = $_POST['clave'];

                $query = "SELECT * FROM administradores WHERE rut='$rut' and clave='$clave'";
				$result = mysqli_query($db, $query);
                $count = mysqli_num_rows($result);
                
                if ($count > 0) {
					$result = mysqli_fetch_assoc(mysqli_query($db, $query));
					$id = $result['rut'];
					$cookie_name = "admin";
					$cookie_value = $id;
					// calculo de tiempo: 86400 = 1 día (86400*30 = 1 Mes)
					$expiry = time() + (3600);
					setcookie($cookie_name, $cookie_value, $expiry);
					session_start();
					$_SESSION['admin'] = $id;
					header("Location: admin.php");
				} else {
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Ups!</strong> Revisa de nuevo tu rut o clave, si el problema persiste contáctate con un profesor.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';
                }
			}
			
			echo '<div class="container" style="padding-left: 25%;padding-right: 25%;">
			<h2 class="pt-5">Ingreso a Administración</h2>
            <form class="pt-3" method="post" action="">
                <div class="form-group">
                    <input type="text" class="form-control" id="rut" placeholder="Rut" name="rut">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="clave" placeholder="Clave" name="clave">
                </div>
                <div class="text-center">
                    <button type="submit" name="admin_login" class="btn btn-info">Ingresar</button>
                </div>
			</form>
			</div>';
        }
		?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

<?php
$mysqli->close();
?>