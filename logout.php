<?php
session_start();
$res = setcookie('alumno', '', time() - 3600);
$res2 = setcookie('admin', '', time() - 3600);
session_destroy();
header("Location: /encuestas-info058");
exit();
?>