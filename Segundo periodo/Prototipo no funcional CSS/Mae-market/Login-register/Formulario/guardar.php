<?php

 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="datos";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al realizar la conexión");
 mysqli_select_db($con,$db)or die("Ocurrio un problema al intentar conectar con la base de datos");

 //recuperar las variables
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $correo=$_POST['correo'];
 $telefono1=$_POST['telefono1'];
 $mensaje=$_POST['mensaje'];

 //Sentencia de sql
 $sql="INSERT INTO datos VALUES('$nombre',
           '$apellido',
           '$correo',
           '$telefono1',
           '$mensaje')";

 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);

 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"<h1>Gracias por Contactaros</h1>Los datos se han guardado correctamente<a href='/BIR/Login-register/bir.php'><br><br>Volver</a>";
 }

?>