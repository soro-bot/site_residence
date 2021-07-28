<?php
	$user="root";
	$pass="root";
	try
	{
		$connect=new PDO("mysql:host=localhost;dbname=e-adresse;charset=utf8",$user,$pass);
	}
	catch(Exception $e)
	{
		die("ERREUR ??? : ".$e->getMessage());
	}
?>