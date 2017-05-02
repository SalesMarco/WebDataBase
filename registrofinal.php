<?php
  include ("conexionRegistro.php");

  if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
  isset($_POST['apellidoPaterno']) && !empty($_POST['apellidoPaterno']) &&
  isset($_POST['apellidoMaterno']) && !empty($_POST['apellidoMaterno']) &&
  isset($_POST['user']) && !empty($_POST['user']) &&
  isset($_POST['correo']) && !empty($_POST['correo']) &&
  isset($_POST['password']) && !empty($_POST['password']) &&
  isset($_POST['password2']) && !empty($_POST['password2']) &&
  $_POST['password'] == $_POST['password2'])
  {
    $con = mysql_connect($host, $user, $pw)
    or die("Problemas al conectar el server");

    mysql_select_db($db, $con)
    or die("Problemas con la conexion a la base de datos");

    mysql_query("INSERT INTO registro (nombre, apellidoPaterno, apellidoMaterno, user, correo, password)
    VALUES('$_POST[nombre]', '$_POST[apellidoPaterno]', '$_POST[apellidoMaterno]', '$_POST[user]',
    '$_POST[correo]', '$_POST[password]')", $con);

    echo "Datos Inseetados<br>";
    echo "Nombre: ".$_POST['nombre']."<br>";
    echo "Apellido paterno: ".$_POST['apellidoPaterno']."<br>";
    echo "Apellido Materno: ".$_POST['apellidoMaterno']."<br>";
    echo "Usuario: ".$_POST['user']."<br>";
    echo "Correo Electronico: ".$_POST['correo']."<br>";
    echo "Contraseña: ".$_POST['password']."<br>";
  }else{
    echo "Las contraseñas no coinciden o los datos fueron erroneos";
  }

 ?>
