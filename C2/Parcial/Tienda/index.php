<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parcial</title>
    <link rel="icon" href="assets/favicon.ico">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="Logo" /></a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#page-top">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portafolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Encabezado -->
    <header class="masthead">
        <div class="container" id="#services">
            <div class="masthead-subheading">Parcial Segundo Corte</div>
            <div class="masthead-heading text-uppercase">Tienda Ventas en PHP</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Servicios</a>
        </div>
    </header>
    <!-- Grid de Portafolio -->
    <?php
    include_once '../Ingreso tienda/php/Conexion.php';
    $consultarProductos = "SELECT * FROM Producto";
    $resultadoProductos = $conectar->query($consultarProductos) or die(mysqli_error($conectar));
    ?>
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portafolio</h2>
                <h3 class="section-subheading text-muted">Elige el producto de tu elección.</h3>
            </div>
            <div class="row">
                <?php while ($producto = $resultadoProductos->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Producto del portafolio -->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $producto['id']; ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img" width="100%" height="250px" src="<?php echo '../Ingreso tienda/Imagenes_recibidas/' . $producto['imagen']; ?>" alt="Imagen del producto" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $producto['nombre_producto']; ?></div>
                                <div class="portfolio-caption-subheading text-muted">$<?php echo $producto['valor']; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Modales de Portafolio -->
    <?php
    include_once '../Ingreso tienda/php/Conexion.php';
    $consultarProductos = "SELECT * FROM Producto";
    $resultadoProductos = $conectar->query($consultarProductos) or die(mysqli_error($conectar));

    while ($producto = $resultadoProductos->fetch_assoc()) {
    ?>
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $producto['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detalles del producto -->
                                    <h2 class="text-uppercase"><?php echo $producto['nombre_producto']; ?></h2>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo '../Ingreso tienda/Imagenes_recibidas/' . $producto['imagen']; ?>" alt="Imagen del producto" />
                                    <p>Descripción: <?php echo $producto['descripcion']; ?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Tipo:</strong>
                                            <?php echo $producto['tipo_producto']; ?>
                                        </li>
                                        <li>
                                            <strong>Valor:</strong>
                                            $<?php echo $producto['valor']; ?>
                                        </li>
                                    </ul>
                                    <?php echo "<a href='php/compra.php?id=" . $producto['id'] . "'>"?><button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">Agregar al carrito</button><?php echo "</a>";?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>