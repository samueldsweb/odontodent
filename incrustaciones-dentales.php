<!DOCTYPE html>
<html lang="es">

<head>

    <?php 
    $title = "Incrustaciones Dentales";
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
                    <img class="img-fluid" src="img/incrustaciones-dentales.png" style="object-fit: cover;">
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Servicios Odontodent</h5>
                        <h1 class="display-5 mb-0"><?php echo $title ?></h1>
                    </div>
                    <div class="row">
                        <p>Las incrustaciones dentales son una restauración dental conservadora que se realiza cuando el paciente requiere  máxima estética o cuando hay un daño extenso en la estructura dental y como alternativa a la corona dental.</p>
                        <p>Una incrustación dental  es un empaste pero realizado en el laboratorio. La incrustación dental encaja en el diente como una pieza de un puzle reproduciendo con precisión la anatomía perdida del diente.</p>
                        <p>Por las características estéticas y propiedades mecánicas las incrustaciones dentales son el tratamiento de elección en ciertas situaciones.</p>
                        <p>Gracias a la biocompatibilidad, propiedades ópticas, estabilidad de color y buena resistencia mecánica, las incrustaciones dentales son un avance en odontología estética conservadora reemplazando medianas a grandes reconstrucciones e incluso coronas dentales cuando el diente tiene suficiente estructura dental remanente, evitando eliminar estructura dental innecesaria como en su caso requieren las coronas dentales.</p>
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