<?php
	include "userController.php";

	$userController = new UserController();

	$usuarios = $userController->get();

	echo json_encode($usuarios);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	  <link href="/css/fontawesome.css" rel="stylesheet">
  	  <link href="/css/brands.css" rel="stylesheet">
      <link href="/css/solid.css" rel="stylesheet">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Enlace</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="buscar" placeholder="buscar" aria-label="buscar">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">buscar</button>
		    </form>
		  </div>
		</nav>

		<nav aria-label="breadcrumb">
	    	<ol class="breadcrumb">
	   		 <li class="breadcrumb-item active" aria-current="page">Home</li>
	  		</ol>
		</nav>

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="add()">
 			 Unirse
		</button>


		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Formulario de registro</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div> 
		      <form action="user" method="Post" onsubmit="return validateRegister()" id="usuario" name="usuario">
		      <div class="modal-body">

		      	<label for="basic-url">Nombre</label>
		      	<div class="input-group mb-3"> 
				  <div class="input-group-prepend"> 
				    <span class="input-group-text" id="basic-addon1">
				    	<i class="fas fa-user"></i>
				    </span>
				  </div>
				  <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required="">
				</div>

				<label for="basic-url">Apellido</label>
		      	<div class="input-group mb-3"> 
				  <div class="input-group-prepend"> 
				    <span class="input-group-text" id="basic-addon2">				    	
				    	<i class="fas fa-user"></i>
				</span>
				  </div>
				  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellido" aria-label="Lastname" aria-describedby="basic-addon2" required="">
				</div>

				<label for="basic-url">Correo</label>
		      	<div class="input-group mb-3"> 
				  <div class="input-group-prepend"> 
				    <span class="input-group-text" id="basic-addon3"><i class="fas fa-envelope"></i></span>
				  </div>
				  <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon3" required="">
				</div>
	
				<label for="basic-url">Contraseña</label>
		      	<div class="input-group mb-3"> 
				  <div class="input-group-prepend"> 
				    <span class="input-group-text" id="basic-addon4"><i class="fas fa-lock"></i></span>
				  </div>
				  <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon4" required="">
				</div>

				<label for="basic-url">Repetir contraseña</label>
		      	<div class="input-group mb-3"> 
				  <div class="input-group-prepend"> 
				    <span class="input-group-text" id="basic-addon5"><i class="fas fa-lock"></i></span>
				  </div>
				  <input type="password" class="form-control" id="password2" name="password2" placeholder="Password" aria-label="Password" aria-describedby="basic-addon5" required="">
				</div>



				<div class="modal-footer">
					 <input type="hidden" name="token" id="token" value="<?= $_SESSION['token'] ?>">
					 <input type="hidden" name="action" id="action" value="add">
					 <input type="hidden" name="id" id="id"  value="">
       				 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    			    <button type="submit" class="btn btn-primary">Guardar</button>
     			 </div>
		      </div>
		      	</form>
		    </div>
		</div>

	</div>

	
	<!--
	<div class="container"> 
	


		<div class="row">
			<div class="col-sm-4">
				
				<h2>Titulo</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href=""> Leer mas </a>
			</div>

			<div class="col-sm-4">
				<h2>Titulo</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href=""> Leer mas </a>
			</div>

			<div class="col-sm-4">
				<h2>Titulo</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href=""> Leer mas </a>
			</div>
		</div>

			<div class="row mt-2">
				<div class="card deck">
				<div class="card mb-3" class="col-sm-4" style="max-width: 540px;">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="dado.png" class="card-img" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Card title</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
				

				<div class="card mb-3" class="col-sm-4" style="max-width: 540px;">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="dado.png" class="card-img" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Card title</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="card mb-3" class="col-sm-4" style="max-width: 540px;">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="dado.png" class="card-img" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Card title</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>

					</div>
				  </div>
				</div>
			</div>
	</div>
-->

	<div class="container">
		<div class="row mt-2">
		<div class="col-sm">
		<table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Status</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
                <?php if (isset($usuarios) && count($usuarios)>0): ?>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['name'] ?></td>
                    <td><?= $usuario['lastname'] ?></td>
                    <td><?= $usuario['status'] ?></td>
                    <td>


                     
                   
                        <button type="button" onclick="edit('<?= $usuario['name'] ?>','<?= $usuario['lastname'] ?>','<?= $usuario['email'] ?>','<?= $usuario['password'] ?>','<?= $usuario['status'] ?>', <?= $usuario['id'] ?>)" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                          Editar
                        </button>

                        <button type="button" class="btn btn-info" onclick="remove(<?= $usuario['id'] ?>,this)" >Eliminar</button>
                      
                    </td> 
                </tr>  
                <?php endforeach ?> 
                <?php endif ?> 
              </tr>  
            </tbody>
            <tfoot>
              <tr>
                 <th>Nombre</th>
                <th>Apellido</th>
                <th>Status</th>
                <th>Acción</th>
              </tr>
            </tfoot>
          </table>

		</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function add(){
			$('.modal-title').text('Añadir usuario');

			var action = document.getElementById('action') 
		    action.value = 'add';

		    document.getElementById("usuario").reset();

		}

		function edit(name1,lastname1,email1,password1,id1){
			$('.modal-title').text('Editar usuario');

			    var formulario = document.usuario; 
			    formulario.name.value = name1;
			    formulario.lastname.value = lastname1;
			    formulario.email.value = email1; 
			    formulario.id.value = id1;
			   
			    var action = document.getElementById('action') 
			    action.value = 'update';
		}


		function validateRegister(){
		    var password = document.getElementById('password').value
		    var password2  = document.getElementById('password2').value
		    if(password!=password2){
		      swal("Las contraseñas no coinciden", " ", "error");
		      $('#password').addClass('is-invalid');
		      $('#password2').addClass('is-invalid');	      
		      return false;
    		}else{
    			 
    			return true;
    		}  
    
  		}

  		function remove(id1,target)
		  {
		    swal({
		      title: "¿Desea eliminar el registro?",
		      text: "Una vez eliminado, no podrá recuperar el reigstro",
		      icon: "warning",
		      buttons: true,
		      dangerMode: true,
		    })
		    .then((willDelete) => {
		      if (willDelete) { 

		        $.ajax({ 
		          url : 'user', 
		          data : { action : 'delete',id:id1,token:"<?= $_SESSION['token'] ?>"}, 
		          type : 'POST', 
		          dataType : 'json', 
		          success : function(respuesta) {
		            if (respuesta.code>0) {
		              //$(target).parent().parent().parent().parent().parent().remove();
		              swal(respuesta.message, { icon: "success", });
		            }else{
		              swal(respuesta.message, { icon: "error", }); 
		            }
		          }, 
		          error : function(xhr, status) {
		            console.log(xhr)
		            console.log(status)
		              swal(respuesta.message, { icon: "error", }); 
		          }
		        }); 

		      } else {
		        swal("","El registro no se ha eliminado","error");
		      }
		    });
		    console.log(id1)
		  }
		
	</script>

</body>
</html>