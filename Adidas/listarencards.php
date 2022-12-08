<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tienda Pincha</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
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

  <section class="py-5">
        <div> <h2 class="categorias" >PRODUCTOS</h2> </div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                  <?php
                  // 1) Conexion
                  $conexion=mysqli_connect("127.0.0.1", "root","" );
        mysqli_select_db($conexion,"adidas");

                  // 2) Preparar la orden SQL
                  // Sintaxis SQL SELECT
                  // SELECT * FROM nombre_tabla
                  // => Selecciona todos los campos de la siguiente tabla
                  // SELECT campos_tabla FROM nombre_tabla
                  // => Selecciona los siguientes campos de la siguiente tabla
                  $consulta="SELECT*FROM adidas";

                  // 3) Ejecutar la orden y obtenemos los registros
                  $datos= mysqli_query($conexion, $consulta);

                  //  recorro todos los registros y genero una CARD PARA CADA UNA
                  
                  while ($reg = mysqli_fetch_array($datos)) {?>
                    
                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm">
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="nombreCamiseta"><?php  echo $reg['tipo'] ?></h5> 
                                    <!-- Product price-->
                                  <h2 class="precio">$<?php echo $reg['precio']; ?></h2>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-white">

                            <!--boton con link de pago que cargué en la base de datos-->
                                <div class="text-center"> <?php echo $reg['link']; ?></div>
                               <br>
                                <!--boton que me lleva a la pagina del producto-->
                                <div class="">
                                  <a href="productos.php?id=<?php echo $reg['id'];?>"> <button class="verProducto" type="button" name="button">Ver producto</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                  <?php } ?>

                </div>
            </div>
        </section>
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
