<?php
$connect = mysqli_connect("localhost:3306","root","","project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Kolkata');
?>