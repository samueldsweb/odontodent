<!DOCTYPE html>
<html lang="es">

<head>

    <?php 
    $title = "Periodoncia Dental";
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
                    <img class="img-fluid" src="img/periodoncia-dental.png" style="object-fit: cover;">
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Servicios Odontodent</h5>
                        <h1 class="display-5 mb-0"><?php echo $title ?></h1>
                    </div>
                    <div class="row">
                        <p>Periodoncia se refiere al tratamiento de todos los problemas de las encías y el hueso que sostiene los dientes. Cada diente está enclavado en el hueso, unido fuertemente por una serie de estructuras que garantizan su fortaleza y correcto funcionamiento.</p>
                        <p>En ocasiones, las estructuras que rodean y soportan al diente (encías y hueso), se ven afectadas de forma importante. Esto desencadena un proceso degenerativo continuo, que progresa lentamente, hasta llegar a un estado avanzado en el que el diente se mueve en exceso y se termina “cayendo”.</p>
                        <p>Antes de que esto suceda, los dientes van pasando por varias etapas bien definidas, desde una afectación leve hasta estados avanzados de perdida dentaria. Este proceso se denomina periodontitis, y es conocido vulgarmente como “piorrea”.</p>
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