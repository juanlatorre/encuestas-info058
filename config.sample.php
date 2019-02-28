<?php
$dbhost="YOUR_DB_HOST";
$dbuser="YOUR_DB_USER";
$dbpass="YOUR_DB_PASS";
$dbname="encuesta";
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("Error conectando a la base de datos.");
mysqli_query($db, "SET NAMES 'utf8'");
mysqli_select_db($db, $dbname) or die (mysql_error());
?>