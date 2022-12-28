<!DOCTYPE html>
<html lang="es">

<head>

    <?php 
    $title = "Ortodoncia";
    include('partials/head.php'); 
    ?>

</head>

<body>

    <?php include('partials/header.php'); ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Servicios de <?php echo $title ?></h1>
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
                    <img class="img-fluid" src="img/ortodoncia-dental.png" style="object-fit: cover;">
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Servicios Odontodent</h5>
                        <h1 class="display-5 mb-0"><?php echo $title ?></h1>
                    </div>
                    <div class="row">
                        <p>Tratamiento que consiste en corregir los defectos y las irregularidades de posición de los dientes, basa su tratamiento en la colocación de los dientes de manera correcta, las alteraciones de la boca y mandíbula así como, las formas de las arcadas dentarias para la perfecta masticación y que de este modo, se produzca un orden entre la boca y la cara, tanto para el bienestar de salud de la persona como para un fin puramente estético y funcional.</p>
                        <p>Es un tratamiento lento que debe acudir una vez al mes ( si no sientes ninguna anomalías antes), para el cuidado de la boca (limpieza, pasta dental, cepillado correcto y limpieza de las encías) ya que todos estos cuidados previenen otras enfermedades derivadas a mal uso del cuidado de la boca y de sus piezas dentarias.</p>
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