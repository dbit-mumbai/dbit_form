<?php

	$servername = "localhost" ;
	$username   = "root" ;
	$password   = "" ;
	$db ="db3";
	// Create connection
	$con = new mysqli($servername, $username, $password,$db);
	
	//Check connection
	if ($con -> connect_error)
	{
		die ("Connection failed : ". $con -> connect_error);
	}
	
	echo "Connected sucessfully <br>";
	
?>