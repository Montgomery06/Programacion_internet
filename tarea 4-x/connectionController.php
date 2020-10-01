<?php 
	define("HOST", "localhost");
	define("USER", "root");
	define("PASSWORD", "root");
	define("BD", "crud");


	function connect(){
		$conn = new mysqli(HOST,USER,PASSWORD,BD);
		if( $conn){
		     return $conn;
		}	
		return null;
    }

?>