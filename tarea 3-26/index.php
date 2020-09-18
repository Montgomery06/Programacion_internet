<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	<title>Clase</title>
	<style type="text/css">
		.super_div{
			width: 100%;
			height: 500px;
			background-color: #D5D8DC;
		}
		.mini_div{
			width: 30%;
			margin: 1%;
			border-radius: 5px;
			border-width: 1px;
			border-style: solid;
			border-color: black;
			height: 300px;
			float: left;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>

	<div class="super_div">
		<h1>Aquí no hay nada</h1>
		<center>
			<input type="text" style="width: 20%;height: 40px;" name="" id="edad" value="" placeholder="ingresa tu año de nacimiento">
			<br>
			<button id="ajax"> calcular mi edad </button>
		</center>
		<h1 id="edad_h1">  </h1>
	</div>

  

  	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
  	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript"> 
	$(document).ready(function(){


			$("#ajax").click(function(){
				$.ajax({ 
    				url : 'info.php', 
    				data:{ edad:edad.value },
    				type : 'POST', 
    				dataType : 'json',
    				success:function(r){
    					console.log(r);
    					$('#edad_h1').text(r.data.edad);
    				}
    			})
			})

	})
	</script>
</body>
</html>