<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1", "root","" );
        mysqli_select_db($conexion,"adidas");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM adidas WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de Ropa</title>
  <link href="css/styles.css" rel="stylesheet" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
       
</head>
<body>

  <header >
    
  <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container px-4 px-lg-5">
                <img class="logo" src="https://www.tiendapincha.com/file/v148370129933010309/general/EDELP_logo_header.png" >
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li> 
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="listarencards.php">Productos</a></li>    
                        
                    </ul>
                    <form class="d-flex">
                        <button class="login" type="submit">

                          <a class= "login" href="login.html">Vendedores
                                                  </a>
                        </button>
                    </form>
                </div>
                
            </div>
        </nav>
  </header>

  <?php
  // 6) asignamos a diferentes variables los respectivos valores del array $datos.
  // este paso no es estrictamente necesario, pero es mas practico
  //para despues llamarlos solo con el nombre de la variable
  $tipo_prenda=$datos["tipo"];
  $marca=$datos["marca"];
  $talle=$datos["talle"];
  $precio=$datos["precio"];
  $imagen=$datos['imagen'];?>

  <!-- mostramos los datos de ese único producto
  lo meto en una card, pero se puede mostrar como quieran-->
  
 

  <div class="container">
    <div class="row">
      <div class="card w-50">
      
        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($imagen)?>" alt="..." />
         
        
        </div>
        <div class="card w-50">
        <h5 class="card-title"><?php echo $tipo_prenda;?></h5>
        <div class="card-body">
          <h5 class="card-text">Marca: <?php echo $marca;?></h5>
          <p class="card-text">Talle: <?php echo $talle?></p>
          <p class="card-text">$<?php echo $datos["precio"];?></p>
          
          <a href="<?php echo $reg['link']; ?>" class="btn btn-primary">Comprar</a>


</div>
      </div>
    </div>
  </div>

  <!-- Footer-->
  <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; RUGE</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


 



  
</body>
</html>
