<?php
session_start();
error_reporting(0);
session_destroy();
unset($_SESSION['project_stream']);
header("Location:index.php");
?>
