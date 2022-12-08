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
        <link href="css/style.css" rel="stylesheet" type="text/css" />
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="listar.php">Productos</a></li>    
                        
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
    
    <button class="boton-listar" type="submit"><a href="index.php">Inicio</a></button>
    <button class="boton-listar" type="submit"><a href="listar.php">Listar ropa</a></button>
    <button class="boton-listar" type="submit"><a href="agregar.html">Agregar ropa</a></button>
    <h2>Lista RUGE</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>LINK</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>
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
    $consulta='SELECT * FROM adidas';

    // 3) Ejecutar la orden y obtenemos los registros
    $datos= mysqli_query($conexion, $consulta);

    /*nueva forma con foreach
    while ($reg=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
      foreach ($reg as $key => $value) {
        print ("<p>$key: $value</p>\n");
      };
    };*/

    // 4) Mostrar los datos del registro
     while ($reg=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['tipo']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px"></td>
        <td><?php echo $reg['link']; ?></td>
        <td><a href="modificar.php?id=<?php echo $reg['id'];?>">Editar</a></td>
        <td><a href="borrar.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
        </tr>
    <?php } ?>
  </table>

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
