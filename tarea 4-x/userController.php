<?php  

include_once "config.php";
include_once "connectionController.php";



if (isset($_POST['action'])) {

			if ( $_POST['token'] == $_SESSION['token']) {

			$userController = new UserController();

			switch ($_POST['action']) {
				case 'add':


					$name = strip_tags($_POST['name']);
					$lastname = strip_tags($_POST['lastname']);
					$email = strip_tags($_POST['email']);
					$password = strip_tags($_POST['password']);


					
					$userController->store($name,$lastname,$email,$password);
				break; 
				case 'update':

					
					$name = strip_tags($_POST['name']);
					$lastname = strip_tags($_POST['lastname']);
					$email = strip_tags($_POST['email']);
					$password = strip_tags($_POST['password']);
					$id = strip_tags($_POST['id']);

					var_dump($_POST);
					
					$userController->update($name,$lastname,$email,$password,$id);
				

				break;
				case 'delete':

					$id = strip_tags($_POST['id']);
					echo json_encode($userController->delete($id));
					
				break; 
		}

	}
}



class UserController{

	function get(){
		
		$conn = connect();

		if(!$conn->connect_error){
			$query = "select * from users";

			$prepared_query = $conn->prepare($query);
		
			$prepared_query->execute();

			$results = $prepared_query->get_result();

			$users = $results->fetch_all(MYSQLI_ASSOC);

			return $users;

		}else{

			return array();
		}
	}


		public function store($name,$lastname,$email,$password){
			$conn = connect();
			if (!$conn->connect_error) {  

				if ($name!="" && $lastname!="" && $email!="" && $password!="") { 

					
					$query = "insert into users (name,lastname,email,password) values (?,?,?,?)";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('ssss',$name,$lastname,$email,$password);
					if ($prepared_query->execute()) {
						
						$_SESSION['status'] = 'success';
					
						$_SESSION['message'] = 'Registro guardado exitosamente.';

						header('Location: ' . $_SERVER['HTTP_REFERER']);						

					}else{
						
						$_SESSION['status'] = 'danger';
					 
						$_SESSION['message'] = 'ocurrio un error durante el proceso de guardado';

						header('Location: ' . $_SERVER['HTTP_REFERER']);
					}

				}else{

					$_SESSION['status'] = 'danger';
				
					$_SESSION['message'] = 'verifique la información del formulario';

					header('Location: ' . $_SERVER['HTTP_REFERER']);
				}

			}else{
				$_SESSION['status'] = 'danger';
		
				$_SESSION['message'] = 'verifique la conexión a la base de datos';

				header('Location: ' . $_SERVER['HTTP_REFERER']);
			}
		}

		public function update($name,$lastname,$email,$password,$id){
			$conn = connect();
			if (!$conn->connect_error) {  

				if ($name!="" && $lastname!="" && $email!="" && $password!="" && $id!="") { 

					
					$query = "update users set name = ?, lastname = ?, email = ?, password = ? where id = ?";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('ssssi',$name,$lastname,$email,$password,$id);
					if ($prepared_query->execute()) {
						
						$_SESSION['status'] = 'success';
					
						$_SESSION['message'] = 'Registro guardado exitosamente.';

						header('Location: ' . $_SERVER['HTTP_REFERER']);						

					}else{
						
						$_SESSION['status'] = 'danger';
					 
						$_SESSION['message'] = 'ocurrio un error durante el proceso de guardado';

						header('Location: ' . $_SERVER['HTTP_REFERER']);
					}

				}else{

					$_SESSION['status'] = 'danger';
				
					$_SESSION['message'] = 'verifique la información del formulario';

					header('Location: ' . $_SERVER['HTTP_REFERER']);
				}

			}else{
				$_SESSION['status'] = 'danger';
		
				$_SESSION['message'] = 'verifique la conexión a la base de datos';

				header('Location: ' . $_SERVER['HTTP_REFERER']);
			}
		}


	public function delete($id){
		$conn = connect();
		if (!$conn->connect_error) {

			if ($id!="") {

				$query = "delete from users where id = ?";
				$prepared_query = $conn->prepare($query);
				$prepared_query->bind_param('i',$id);
				if ($prepared_query->execute()) { 
					
					$respuesta = array(
					    "code" => 200,
					    'status' => 'success',
					    'message' => 'Registro eliminado exitosamente'
					);
					return $respuesta; 

				}else{ 

					$respuesta = array(
					    "code" => -200,
					    'status' => 'error',
					    'message' => 'ocurrio un error durante el proceso de borrado'
					);
					return $respuesta; 
				}

			}else{  

				$respuesta = array(
				    "code" => -200,
				    'status' => 'error',
				    'message' => 'verifique la información del formulario'
				);
				return $respuesta;
			}

		}else{ 

			$respuesta = array(
			    "code" => -200,
			    'status' => 'error',
			    'message' => 'verifique la conexión a la base de datos'
			);
			return $respuesta; 
		}
	}


}

?>


