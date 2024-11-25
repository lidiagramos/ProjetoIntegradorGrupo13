<?php
	error_reporting(0);
	$server = "localhost";
	$db = "sistema_petshop2024";
	$user = "root";
	$passwd = "vertrigo";
	
	$connect = mysql_connect($server, $user, $passwd);
	$connect = mysql_select_db("$db",$connect);
	
	if(!$connect) { echo mysql_error(); exit;}
	
?>