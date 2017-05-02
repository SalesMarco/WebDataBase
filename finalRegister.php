<?php 
include 'conexion.php';
function alert($text, $func){
	echo "<script type="text/javascript"> alert('$text'); $func(); </script>";
}
?>



<!DOCTYPE html>
<section class="clean" id="registro">
<h4 class="Frase">Registro de cuenta</h4>
<form method="post">
	
	<div class="row">
	</div>
	<div class="row">
	</div>
	<div class="row">
	</div>
	<div class="row">
	</div>
	<button type="submit" name="registrar" class="btn cyan darken-3 right">Registrar
	</button>
</form>
</section>

<?php
if(isset($_POST['registrar'])) {
	$id="";
	$nombre = $_POST['Nombre'[];
	$apellidoPaterno = $_POST['apellidoPaterno'];
	$apellidoMaterno = $_POST['apellidoMaterno'];
	$user = $_POST['user']	;
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$password = $_POST['password2'];

	if($nombre != '' && $correo != ''  ){
		if($password==$password2){
			$consulta=mysqli_query($conexion, "SELECT COUNT(id) FROM usuarios");
			if($row=mysqli_fetch_array($consulta)){
				$id=$row[0];
			}
		}
		mysqli_free_rsult($consulta);
		$id=dechex($id);
		$password=md5($password);

		registro=mysqli_query($conexion, "INSERT INTO registro(id, nombre, apellidoPaterno, apellidoMaterno, user, correo, password)
			VALUES ('$id', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'user', 'correo', 'password') ")
			od die(mysqli_error())
			);
		alert("registro exitoso", "null");

	}else{
		alert("las contras no coinciden", "registro");
	}
	else{
		alert("Hay campos vacios", "registro");
	}
	<?
}