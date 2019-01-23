<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>De todo</title>
  <!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<header>


</header>
<body class="black">
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
  <div class="container cyan lighten-1">


    <!-- A partir de aquí empieza lo shidoooo -->

    <div class="row">
     <div class="col s12 m12 l4 xl4">
       <?php 

       include 'conexion.php';
       $re=mysqli_query($mysqli,"select * from productos where id=7") or die (mysqli_error('keweaermano'));
       $f=mysqli_fetch_array($re);
       ?>  
       <div class="card">
        <div class="card-image">
          <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
          <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
        </div>
        <div class="card-action">
          <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l4 xl4">
      <?php 

      include 'conexion.php';
      $re=mysqli_query($mysqli,"select * from productos where id=8") or die (mysqli_error('keweaermano'));
      $f=mysqli_fetch_array($re);
      ?>  
      <div class="card">
        <div class="card-image">
          <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
          <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
        </div>
        <div class="card-action">
          <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l4 xl4">
      <?php 

      include 'conexion.php';
      $re=mysqli_query($mysqli,"select * from productos where id=9") or die (mysqli_error('keweaermano'));
      $f=mysqli_fetch_array($re);
      ?>  
      <div class="card">
        <div class="card-image">
          <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
          <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
        </div>
        <div class="card-action">
          <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
        </div>
      </div>
    </div>
  </div>
  <!---->
  <div class="row">
   <div class="col s12 m12 l4 xl4">
    <?php 

    include 'conexion.php';
    $re=mysqli_query($mysqli,"select * from productos where id=10") or die (mysqli_error('keweaermano'));
    $f=mysqli_fetch_array($re);
    ?>  
    <div class="card">
      <div class="card-image">
        <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
        <span class="card-title"></span>
      </div>
      <div class="card-content">
        <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
      </div>
      <div class="card-action">
        <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
      </div>
    </div>
  </div>
  <div class="col s12 m12 l4 xl4">
    <?php 

    include 'conexion.php';
    $re=mysqli_query($mysqli,"select * from productos where id=11") or die (mysqli_error('keweaermano'));
    $f=mysqli_fetch_array($re);
    ?>  
    <div class="card">
      <div class="card-image">
        <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
        <span class="card-title"></span>
      </div>
      <div class="card-content">
        <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
      </div>
      <div class="card-action">
        <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
      </div>
    </div>
  </div>
  <div class="col m4">
    <?php 

    include 'conexion.php';
    $re=mysqli_query($mysqli,"select * from productos where id=12") or die (mysqli_error('keweaermano'));
    $f=mysqli_fetch_array($re);
    ?>  
    <div class="card">
      <div class="card-image">
        <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
        <span class="card-title"></span>
      </div>
      <div class="card-content">
        <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
      </div>
      <div class="card-action">
        <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
 <div class="col s12 m12 l4 xl4">
  <?php 

  include 'conexion.php';
  $re=mysqli_query($mysqli,"select * from productos where id=13") or die (mysqli_error('keweaermano'));
  $f=mysqli_fetch_array($re);
  ?>  
  <div class="card">
    <div class="card-image">
      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
      <span class="card-title"></span>
    </div>
    <div class="card-content">
      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
    </div>
    <div class="card-action">
      <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
    </div>
  </div>
</div>
<div class="col s12 m12 l4 xl4">
  <?php 

  include 'conexion.php';
  $re=mysqli_query($mysqli,"select * from productos where id=14") or die (mysqli_error('keweaermano'));
  $f=mysqli_fetch_array($re);
  ?>  
  <div class="card">
    <div class="card-image">
      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
      <span class="card-title"></span>
    </div>
    <div class="card-content">
      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
    </div>
    <div class="card-action">
      <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
    </div>
  </div>
</div>
<div class="col s12 m12 l4 xl4">
  <?php 

  include 'conexion.php';
  $re=mysqli_query($mysqli,"select * from productos where id=15") or die (mysqli_error('keweaermano'));
  $f=mysqli_fetch_array($re);
  ?>  
  <div class="card">
    <div class="card-image">
      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
      <span class="card-title"></span>
    </div>
    <div class="card-content">
      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
    </div>
    <div class="card-action">
      <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
    </div>
  </div>
</div>
</div>

<div class="row">
 <div class="col s12 m12 l4 xl4">
  <?php 

  include 'conexion.php';
  $re=mysqli_query($mysqli,"select * from productos where id=16") or die (mysqli_error('keweaermano'));
  $f=mysqli_fetch_array($re);
  ?>  
  <div class="card">
    <div class="card-image">
      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
      <span class="card-title"></span>
    </div>
    <div class="card-content">
      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
    </div>
    <div class="card-action">
      <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
    </div>
  </div>
</div>
<div class="col s12 m12 l4 xl4">
  <?php 

  include 'conexion.php';
  $re=mysqli_query($mysqli,"select * from productos where id=17") or die (mysqli_error('keweaermano'));
  $f=mysqli_fetch_array($re);
  ?>  
  <div class="card">
    <div class="card-image">
      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
      <span class="card-title"></span>
    </div>
    <div class="card-content">
      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
    </div>
    <div class="card-action">
      <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
    </div>
  </div>
</div>
<div class="col s12 m12 l4 xl4">
  <?php 

  include 'conexion.php';
  $re=mysqli_query($mysqli,"select * from productos where id=18") or die (mysqli_error('keweaermano'));
  $f=mysqli_fetch_array($re);
  ?>  
  <div class="card">
    <div class="card-image">
      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
      <span class="card-title"></span>
    </div>
    <div class="card-content">
      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
    </div>
    <div class="card-action">
      <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
    </div>
  </div>
</div>
</div>

<div class="row">
 <div class="col s12 m12 l4 xl4">
  <?php 

  include 'conexion.php';
  $re=mysqli_query($mysqli,"select * from productos where id=19") or die (mysqli_error('keweaermano'));
  $f=mysqli_fetch_array($re);
  ?>  
  <div class="card">
    <div class="card-image">
      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
      <span class="card-title"></span>
    </div>
    <div class="card-content">
      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
    </div>
    <div class="card-action">
      <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
    </div>
  </div>
</div>
<div class="col s12 m12 l4 xl4">
  <?php 

  include 'conexion.php';
  $re=mysqli_query($mysqli,"select * from productos where id=20") or die (mysqli_error('keweaermano'));
  $f=mysqli_fetch_array($re);
  ?>  
  <div class="card">
    <div class="card-image">
      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
      <span class="card-title"></span>
    </div>
    <div class="card-content">
      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
    </div>
    <div class="card-action">
      <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
    </div>
  </div>
</div>
<div class="col s12 m12 l4 xl4">
  <?php 

  include 'conexion.php';
  $re=mysqli_query($mysqli,"select * from productos where id=21") or die (mysqli_error('keweaermano'));
  $f=mysqli_fetch_array($re);
  ?>  
  <div class="card">
    <div class="card-image">
      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
      <span class="card-title"></span>
    </div>
    <div class="card-content">
      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
    </div>
    <div class="card-action">
      <a href="detalles.php?id=<?php echo $f['id'];?>">Detalles del producto</a>
    </div>
  </div>
</div>
</div>
<div class="row card-panel grey lighten-3">
  <p class="card-panel lime lighten-1"><a href="logout.php">Cerrar Sesion</a></p>
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


