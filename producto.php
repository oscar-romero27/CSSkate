<?php
    if(!isset($_GET['id'])){
        echo '<script>';  
        echo 'window.location.href="productos.php";';
        echo '</script>';
    }  
?>
<!doctype html>
<html lang="es">

<head>
    <?php include "head.php"; ?>

</head>

<body onload="setcanvas()">


    <?php include "navbar.php" ?>
    <?php include "buscador.php" ?>
    <?php include "getProductos.php" ?>


    <main class="container p-0">
        <!-- Contenido de los productos -->

        <section id="instructors" class="p-5 ">
            <section class="container bg-light ">
                <section class="row">

                <?php 
                    getProducto( $_GET['id'] );
                ?>

                </section>
                <h1 class="mt-5 ms-3 text-black">Productos relacionados:</h3>

                    <section id="relacionados" class="row g-4 pb-2">
                   <?php getRelacionados(); ?>
            
                    </section>
            </section>
        </section>


    </main>
    <?php include "footer.php" ?>


</body>

</html>