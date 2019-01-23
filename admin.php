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

        session_start();
        
		if((isset($_COOKIE['admin']) && $_COOKIE['admin'] != '') || (isset($_SESSION['admin']) && $_SESSION['admin'] !='')) {
            echo '<nav class="navbar navbar-light bg-light">
            <button id="exportar" role="button" class="btn btn-sm btn-outline-success mr-auto text-success">Descargar Planilla</button>
                <a class="btn btn-sm btn-outline-danger ml-auto text-danger" role="button" href="logout.php">Cerrar Sesión</a>
            </nav>';

            // aquí va la lista de estudiantes que rindieron la encuesta
            $query = "SELECT * FROM alumnos WHERE voto=1";
            $result = mysqli_query($db, $query);

            echo '<table id="encuesta_table" class="table table-striped table-bordered table-hover table-sm" style="white-space: nowrap;">
                <thead>
                  <tr>
                    <th scope="col">Rut</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">p1</th>
                    <th scope="col">p2</th>
                    <th scope="col">p3</th>
                    <th scope="col">p4</th>
                    <th scope="col">p5</th>
                    <th scope="col">p6</th>
                    <th scope="col">p7</th>
                    <th scope="col">p8</th>
                    <th scope="col">p9</th>
                    <th scope="col">p10</th>
                    <th scope="col">p11</th>
                    <th scope="col">p12</th>
                    <th scope="col">p13</th>
                    <th scope="col">p14</th>
                    <th scope="col">p15</th>
                    <th scope="col">p16</th>
                    <th scope="col">p17</th>
                    <th scope="col">p18</th>
                    <th scope="col">p19</th>
                    <th scope="col">p20</th>
                    <th scope="col">p21</th>
                    <th scope="col">p22</th>
                    <th scope="col">p23</th>
                    <th scope="col">p24</th>
                    <th scope="col">p25</th>
                    <th scope="col">Sugerencia Calidad</th>
                    <th scope="col">Sugerencia Metodología</th>
                    <th scope="col">Otros Comentarios</th>
                  </tr>
                </thead>
                <tbody>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                    <td>'.$row["rut"].'</td>
                    <td>'.$row["nombre"].'</td>
                    <td>'.$row["carrera"].'</td>
                    <td>'.$row["p1"].'</td>
                    <td>'.$row["p2"].'</td>
                    <td>'.$row["p3"].'</td>
                    <td>'.$row["p4"].'</td>
                    <td>'.$row["p5"].'</td>
                    <td>'.$row["p6"].'</td>
                    <td>'.$row["p7"].'</td>
                    <td>'.$row["p8"].'</td>
                    <td>'.$row["p9"].'</td>
                    <td>'.$row["p10"].'</td>
                    <td>'.$row["p11"].'</td>
                    <td>'.$row["p12"].'</td>
                    <td>'.$row["p13"].'</td>
                    <td>'.$row["p14"].'</td>
                    <td>'.$row["p15"].'</td>
                    <td>'.$row["p16"].'</td>
                    <td>'.$row["p17"].'</td>
                    <td>'.$row["p18"].'</td>
                    <td>'.$row["p19"].'</td>
                    <td>'.$row["p20"].'</td>
                    <td>'.$row["p21"].'</td>
                    <td>'.$row["p22"].'</td>
                    <td>'.$row["p23"].'</td>
                    <td>'.$row["p24"].'</td>
                    <td>'.$row["p25"].'</td>
                    <td>'.$row["sugerencia_calidad"].'</td>
                    <td>'.$row["sugerencia_metodologia"].'</td>
                    <td>'.$row["otros_comentarios"].'</td>
                  </tr>';
            }

            echo '</tbody>
            </table>';

		} else {
            header("Location: login_admin.php");
        }
		?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="jquery.table2excel.js"></script>

    <script>
    $("#exportar").click(function(){
        $("#encuesta_table").table2excel({
            // exclude CSS class
            exclude: ".noExl",
            name: "Resultados por Alumno",
            filename: "Resultados Encuesta" //do not include extension
        }); 
    });
    </script>
  </body>
</html>

<?php
$mysqli->close();
?>