<?php 
	require('conexion.php');
	//iniciamos la sesion se guarda en $Sesssion
	$Session = session_start();

	if (isset($Session["id_usuario"])) 
	{
		//Redirigimos una pagina
		header("Location: bienvenido.php"); //Si es valido esa sesion redirigeme a bienvenido.php
	}
	if (!empty($_POST)) //Si esta vacia _POST
	{
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$passwd = mysqli_real_escape_string($mysqli,$_POST['password']);
		//Para cachar los errores
		$error = '';
		//Investigar como cifrar la contraseña ***USAR HASH***

		//										tabla 	 campo usuario  formulario/campo password
		$sql = "SELECT id_usuario,id_tipo FROM usuarios WHERE nombre_usuario = '$usuario' AND password = '$passwd'";

		//Para que laa query se ejecute
		$result = $mysqli->query($sql);
		//Separar en filas nuestro resultado[numero]
		$rows = $result->num_rows;

		if ($rows>0) {
			//Separa
			$row = $result->fetch_assoc();
			echo "$row";
			$Session['id_usuario'] = $row['id_usuario'];
			$Session['tipo_usuario'] = $row['id_tipo'];

			header("Location: bienvenido.php");
		}
		else
		{
			$error = "Nombre o contraseña invalido";
		}
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/materialize.min.css">
</head>
<header>
  <nav class=" cyan lighten-1" >
    <div class="nav-wrapper">
      <img src="img/LogoSample_ByTailorBrands.jpg" class="brand-logo center" id="logo2" alt="logo">
    </div>
  </nav>
</header>
<body >
	<div class="row col s12 m12 l12 xl12" id="formulario">
		<div class="col s0 m0 l4 xl4"></div>
		<div class="col s12 m12 l4 xl4 ">
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		<div>
			<label> Usuario: </label>
			<input id="usuario" name="usuario" type="text">
		</div>
		<br>
		<div><label>Contraseña: </label>
			<input id="password" name="password" type="password">
		</div>
		<br>
		<div>
			<input class="right" name="login" value="Iniciar Sesión" type="submit">
		</div>
		<br>
	</form>
		</div>
		<div class="col s0 m0 l4 xl4"></div>
		<div class="row col s12 m12 l12 xl12">
		<div class="col s0 m0 l4 xl4"></div>
		<div class="col s12 m12 l4 xl4 center" >
			<a class="center" href="registro.php">Registrarse</a>
	<div style="font-size: 16px;color: #cc0000;">
		<?php echo isset($error)?utf8_decode($error):''; ?>
	</div>
		<h3>Inicia sesión o regístrate para poder comprar</h3>
		</div>
		
	</div>
	
</body>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</html>
