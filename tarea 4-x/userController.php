<?php  

include_once "config.php";
include_once "connectionController.php";

class UserController{

	function get(){

		$conn = connect();
		if(!$conn->connect_error){
			$query = "select * from users";

			$prepared_query = $conn->prepare($query);

			$results = $prepared_query->get_result();

			$users = $results->fetch_all(MYSQLI_ASSOC);
			return $users;

		}else{

			return array();
		}
	}
}

?>


