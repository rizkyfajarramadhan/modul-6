<?php
    session_start();
    include("function.php");
    echo check_login();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tugas Praktikum</title>
	<style type="text/css">
		h1{
			font-family: Arial, Helvetica, sans-serif;
		}
		body{
			background-color:aqua;
		}
	</style>
  </head>
  <body>
	<center>
		<h1>Welcome</h1>
		<h2>TO OUR WEB</h2>
		<h3><a href="#">Edit Profil</a></h3>
		<h3><a href="#">Logout</a></h3>
	</center>
  </body>
</html>