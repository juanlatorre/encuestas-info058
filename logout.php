<?php
session_start();
$res = setcookie('usuario', '', time() - 3600);
$res = setcookie('admin', '', time() - 3600);
session_destroy();
header("Location: /encuestas-info058");
exit();
?>