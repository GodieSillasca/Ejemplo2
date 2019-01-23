	<?php 
	session_start(); 
	include 'conexion.php'; 
	if(isset($_SESSION['carrito'])){ 
		if(isset($_GET['id'])){ 
			$arreglo=$_SESSION['carrito']; 
			$encontro=false; 
			$numero=0; 
			for($i=0;$i<count($arreglo);$i++){ 
				if($arreglo[$i]['Id']==$_GET['id']){ 
					$encontro=true; 
					$numero=$i; } 
			} 
			if($encontro==true){ 
				$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1; 
				$_SESSION['carrito']=$arreglo; 
			}else{ 
				$nombre=""; 
				$precio=0; 
				$imagen=""; 
				$re=mysqli_query($mysqli,"select * from productos where id=".$_GET['id'])or die (mysqli_error('keweaermano')); 
				while ($f=mysqli_fetch_array($re)) { 
					$nombre=$f['nombre']; 
					$precio=$f['precio']; 
					$imagen=$f['imagen']; 
				} 
				$datosNuevos=['Id'=>$_GET['id'], 
								'Nombre'=>$nombre, 
								'Precio'=>$precio, 
								'Imagen'=>$imagen,
								'Cantidad'=>1];
				array_push($arreglo, $datosNuevos); 
				$_SESSION['carrito']=$arreglo; } }
	}else{ 
		if(isset($_GET['id'])){
			$nombre=""; 
			$precio=0; 
			$imagen=""; 
			$re=mysqli_query($mysqli,"select * from productos where id=".$_GET['id']) or die (mysqli_error('keweaermano'));
			while ($f=mysqli_fetch_array($re)) { 
				$nombre=$f['nombre']; 
				$precio=$f['precio']; 
				$imagen=$f['imagen']; 
				} 
				$arreglo[]=['Id'=>$_GET['id'], 
								'Nombre'=>$nombre, 
								'Precio'=>$precio, 
								'Imagen'=>$imagen, 
								'Cantidad'=>1]; 
				$_SESSION['carrito']=$arreglo; } } ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Carrito de Compras</title>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript"  src="./js/scripts.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<header>
    <nav>
    <div class="nav-wrapper cyan lighten-1">
      <img src="img/LogoSample_ByTailorBrands.jpg" class="responsive-img brand-logo center" alt="Logo" id="logo3">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="carritodecompras.php">Carrito de compras</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="carritodecompras.php">Carrito de compras</a></li>
    <li><a href="contacto.html">Contacto</a></li>
  </ul>
          
  </header>
<body class="black">
<div class="container cyan lighten-1"> 
				<section>
			<?php 
			$total=0;
			if (isset($_SESSION['carrito'])) {
				$datos=$_SESSION['carrito'];
				$total=0;
				for ($i=0; $i < count($datos); $i++) { 
					?>
					<div class="producto">
					<center>
						<img src="./img/<?php echo $datos[$i]['Imagen'];?>" class="responsive-img"><br>
						<span ><?php echo $datos[$i]['Nombre'];?></span><br>
						<span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
						<span>Cantidad: 
							<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
							data-precio="<?php echo $datos[$i]['Precio'];?>"
							data-id="<?php echo $datos[$i]['Id'];?>"
							class="cantidad">
						</span><br>
						<span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
						
					</center>
				</div>
					<?php
					$total=($datos[$i]['Precio']*$datos[$i]['Cantidad'])+$total;
				}
			}else{
				echo "<center><h2>Carrito vacío!</h2></center>";
			}
			echo '<center><h2>Total: '.$total.'</h2></center>'
			?>	
			<center><a href="./bienvenido.php">Ver catálogo</a></center> 
		</section>
				 
<div class="row card-panel grey lighten-3">
  <p class="card-panel lime lighten-1"><a href="logout.php">Cerrar Sesion</a><a class="right" href="contacto.html">Contáctanos</a></p>
</div>
 <footer class="page-footer cyan lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Creadores</h5>
                <p class="grey-text text-lighten-4">Tienda diseñada y programada por Diego, Mario y Quique.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                
                <ul>
                  <!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/GodieSillasca" aria-label="Follow @GodieSillasca on GitHub">Follow @GodieSillasca</a>
                 <!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/lemcazares" aria-label="Follow @lemcazares on GitHub">Follow @lemcazares</a>
                  <!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/GockLdk" aria-label="Follow @GockLdk on GitHub">Follow @GockLdk</a>
                </ul>
              </div>
            </div>
          </div>
        </footer>
</body>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</html>


