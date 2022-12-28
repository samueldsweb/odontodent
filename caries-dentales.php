<!DOCTYPE html>
<html lang="es">

<head>

    <?php 
    $title = "Caries Dentales";
    include('partials/head.php'); 
    ?>

</head>

<body>

    <?php include('partials/header.php'); ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Servicios de Limpienza de <?php echo $title ?></h1>
                <a href="index.php" class="h4 text-white">Inicio</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="javascript:void(0)" class="h4 text-white"><?php echo $title ?></a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <img class="img-fluid" src="img/caries-dentales.png" style="object-fit: cover;">
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Servicios Odontodent</h5>
                        <h1 class="display-5 mb-0"><?php echo $title ?></h1>
                    </div>
                    <div class="row">
                        <p>La caries dental es un trastorno común, que le sigue en frecuencia al resfriado común. Suele aparecer en los niños y en los adultos jóvenes, pero puede afectar a cualquier persona. Es una causa común de pérdida de los dientes en las personas más jóvenes.</p>
                        <p>Las bacterias se encuentran normalmente en la boca. Estas bacterias convierten los alimentos, especialmente los azúcares y almidones, en ácidos. Las bacterias, el ácido, los pedazos de comida y la saliva se combinan en la boca para formar una sustancia pegajosa llamada placa que se adhiere a los dientes. Es más común en los molares posteriores, justo encima de la línea de la encía en todos los dientes y en los bordes de las obturaciones.</p>
                        <p>La placa que no se elimina de los dientes se convierte en una sustancia llamada sarro o cálculo. La placa y el sarro irritan las encías, produciendo gingivitis y periodontitis.</p>
                        <p class="mb-0"><strong>Prevención:</strong></p>
                        <p>La higiene oral es necesaria para prevenir las caries y consiste en la limpieza regular profesional (cada 6 meses), cepillarse por lo menos dos veces al día y usar la seda dental al menos una vez al día. Se pueden tomar radiografías cada año para detectar posible desarrollo de caries en áreas de alto riesgo en la boca.</p>
                        <p>Los alimentos masticables y pegajosos, como frutas deshidratadas y caramelos, conviene comerlos como parte de una comida en lugar de refrigerio. De ser posible, cepíllese los dientes o enjuáguese la boca con agua luego de ingerir estos alimentos. Reduzca los refrigerios, los cuales generan un suministro continuo de ácidos en la boca. Evite el consumo de bebidas azucaradas o chupar caramelos y mentas de forma frecuente.</p>
                        <p>También se recomienda el fluoruro tópico para proteger la superficie de los dientes, lo cual puede incluir una pasta dental o un enjuague bucal. Muchos odontólogos incluyen la aplicación de soluciones tópicas de fluoruro (aplicadas a un área localizada de la dientes) como parte de las consultas de rutina.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <?php include('partials/consultas-sin-espera.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    

    <?php include('partials/footer.php'); ?>

    <?php include('partials/scripts.php'); ?>
    
</body>

</html>