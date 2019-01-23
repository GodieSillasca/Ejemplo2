<?php 
session_start();
	//Como el import a ala base
require 'conexion.php';
	//Para seguridad multinivel, pero no funciona

$sql = "SELECT id_tipo,tipo FROM tipo_usuario";
$result = $mysqli->query($sql);
$bandera = false;

if (!empty($_POST))
{
	$nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
	$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
	$password = mysqli_real_escape_string($mysqli,$_POST['password']);
	//$tipo_usuario = mysqli_real_escape_string($mysqli,$_POST['tipo_usuario']);

	$error = '';
	$sqlUsuario = "SELECT id_usuario FROM usuarios WHERE nombre_usuario='$usuario'";
	$resultUsuario = $mysqli ->query($sqlUsuario);
	$rows = $resultUsuario->num_rows;

	if ($rows>0) 
	{
		$error = "El usuario ya existe!";
	}
	else
	{
		$sqlPersonal = "INSERT INTO personal (nombre) VALUES ('$nombre')";
			$resultPersonal = $mysqli->query($sqlPersonal); //Srive para ejecutar la Query o el insert en este caso
			$idPersonal = $mysqli->insert_id;

			$sqlUsuarios = "INSERT INTO usuarios(nombre_usuario,password,id_personal,id_tipo) VALUES ('$usuario','$password','$idPersonal','1')";
			$resultUsuarios = $mysqli->query($sqlUsuarios);
			$bandera=true;
		}
	}

	?>

	<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>Registro</title>
		
		<script>
			function validarNombre()
			{
				valor = document.getElementById("nombre").value;
				if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
					alert('Falta Llenar Nombre');
					return false;
				} else { return true;}
			}
			
			function validarUsuario()
			{
				valor = document.getElementById("usuario").value;
				if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
					alert('Falta Llenar Usuario');
					return false;
				} else { return true;}
			}
			
			function validarPassword()
			{
				valor = document.getElementById("password").value;
				if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
					alert('Falta Llenar la Password');
					return false;
				} else { 
					valor2 = document.getElementById("con_password").value;
					
					if(valor == valor2) { return true; }
					else { alert('Las contraseña no coinciden'); return false;}
				}
			}
			
			/*function validarTipoUsuario()
			{
				indice = document.getElementById("tipo_usuario").selectedIndex;
				if( indice == null || indice==0 ) {
					alert('Seleccione tipo de usuario');
					return false;
				} else { return true;}
			}*/
			
			function validar()
			{
				if(validarNombre() && validarUsuario() && validarPassword())
				{
					document.registro.submit();
				}
			}
		</script>
		<link rel="stylesheet" href="css/materialize.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<header>
			<nav>
			    <div class="nav-wrapper cyan lighten-1">
			      <img src="img/LogoSample_ByTailorBrands.jpg" class="responsive-img brand-logo center" alt="Logo" id="logo">
			      <ul id="nav-mobile" class="left hide-on-med-and-down">
			        <li><a href="index.php">Volver e iniciar sesión</a></li>
			        
			      </ul>
			    </div>
			  </nav>
		</header>

		<form id="registro" name="registro" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
			<div><label>Nombre:</label><input id="nombre" name="nombre" type="text" ></div>
			<br />
			
			<div><label>Usuario:</label><input id="usuario" name="usuario" type="text"></div>
			<br />
			
			<div><label>Password:</label><input id="password" name="password" type="password"></div>
			<br />
			
			<div><label>Confirmar Password:</label><input id="con_password" name="con_password" type="password"></div>
			<br />
			

			
			<div><input name="registar" type="button" value="Registrar" onClick="validar();"></div> 

		</form>
		
		<?php if($bandera) { ?>
			<h1>      Registro exitoso</h1>
		<?php }else{ ?>
			<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
			
		<?php } ?>
	</body>
	</html>