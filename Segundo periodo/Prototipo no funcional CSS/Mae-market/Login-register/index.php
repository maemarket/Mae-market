

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar sesión y Registro</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
	<link rel="shortcut icon" href="ICONS/favicon.png" />
	
</head>
<body>


	<main>
		
		<div class="contenedor__todo">
			
			<div class="caja__trasera">
				
				<div class="caja__trasera-login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>Inicia sesión para entrar a la página.</p>
					<button id="btn__iniciar-sesion">Iniciar sesión</button>
				</div>
				<div class="caja__trasera-register">
					<h3>¿Aún no tiene una cuenta?</h3>
					<p>Regístrate para que puedas iniciar sesión.</p>
					<button id="btn__registrarse">Regístrarse</button>
				</div>
			</div>
			<!--formulario de login y resgistro-->	
			<dir class="contenedor__login-register">
				<!--login-->
				<form action="php/login_usuario_be.php" method="POST" class="formulario__login">	
					<h2>Iniciar sesión </h2>
					<input type="email" placeholder="Correo Electronico" name="correo">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<center><button>Entrar</button></center>
					<br>
					<center><span><a href="/Mae-market/index.html">Volver</a></span></center>
				</form>	
				<!--resgistro-->
				<form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
					<h2>Regístrarse</h2>
					<input type="text" placeholder="Nombre Completo"  name="nombre_completo" >
					<input type="email" placeholder="Correo Electronico" name="correo" >
					<input type="text" placeholder="Nombre de Usuario" name="usuario" >
					<input type="password" placeholder="Contraseña" name="contrasena">
					<center><button>Regístrarse</button></center>
					<br>
					<center><span><a href="/Mae-market/index.html">Volver</a></span></center>
					</form>

					
			</dir>	
		</div>	
	</main>
	<script src="assets/js/script.js"></script>
</body>
</html>