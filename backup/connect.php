<?php
	// $db_host	= 'sql306.epizy.com';
	// $username = 'epiz_22151032';
	// $password = 'GSCL12';
	// $db_name = 'epiz_22151032_grayscale';
	
	$db_host = 'localhost';
	$username = 'root';
	$password = '';
    $db_name = 'grayscale';
	
	// $con = mysqli_connect($db_host, $username, $password) or die ("Gagal Terkoneksi");
	// mysqli_select_db($con, $db_name) or die ("Database Error");
	
	$con = mysqli_connect($db_host, $username, $password) or die ("Gagal Terkoneksi");
    mysqli_select_db($con, $db_name) or die ("Database Error");
?>