<?php 

$mysqli = new mysqli("localhost", "root", "root", "clase");

 
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{

	if($_POST['action'] == "add"){
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$year=$_POST['year'];

     $sql = "INSERT INTO user (email,password,year) VALUES ('$email','$password','$year')";
 
     if (mysqli_query($mysqli, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
     }
}



$mysqli->close();

?>