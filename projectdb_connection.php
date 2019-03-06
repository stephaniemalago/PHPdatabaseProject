<?php
//set up connection to polldb database

//define connection parameters
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "project_db";

//use PDO (PHP Data Objects)API
//use  exception handling mode (try{}-catch{})
 try{
 	//define connection object
 	$dbConn  = new PDO("mysql:host =$serverName;dbname=$dbName",$userName,$password);
 	
 	//define error mode
 	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 	
 	//provide user feedback for successful Cconnection
 	//print "Connected to $dbName database successfully!";
 	
 	
 }
 
 catch(PDOException $ex){
 	//report error if connection failed
 	print $ex->getMessage();
 	
 }

?>