<!DOCTYPE html>
<html lang="es">

<head>

    <?php 
    $title = "Cirugía Oral Dental";
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
                    <img class="img-fluid" src="img/cirugia-oral-dental.png" style="object-fit: cover;">
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Servicios Odontodent</h5>
                        <h1 class="display-5 mb-0"><?php echo $title ?></h1>
                    </div>
                    <div class="row">
                        <p>La cirugía oral, permite ayudar al paciente en diferentes situaciones; la principal: la exodoncia o eliminación de piezas dentales. Hoy en día la cirugía de terceros molares (muelas del juicio), es un acto quirúrgico común, ya que la utilización de frenillos o aparatos de ortodoncia, casi siempre va indicado de la exodoncias de los tercero molares.</p>
                        <p>Por otra parte, la cirugía ayuda en casos de dientes en posiciones anómalas, que deben ser retirados para no causar daño a los dientes vitales, o para permitir el movimiento con ortodoncia.</p>
                        <p>La cirugía, también ayuda en casos que se presentan lesiones tumorales, quistes, lesiones de la mucosa, entre otras, que con la ayuda de la patología se puede establecer un protocolo para abordar la lesión de la mejor manera y permitir al paciente su recuperación.</p>
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