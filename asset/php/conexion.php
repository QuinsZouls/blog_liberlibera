<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog";
    $sql = "";
    $conexion = new mysqli($servername, $username, $password, $dbname);

	if ($conexion->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}
?>