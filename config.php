<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="root";
$dbname="encuesta";
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("Error conectando a la base de datos.");
mysqli_query($db, "SET NAMES 'utf8'");
mysqli_select_db($db, $dbname) or die (mysql_error());
?>