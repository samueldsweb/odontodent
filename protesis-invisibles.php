<!DOCTYPE html>
<html lang="es">

<head>

    <?php 
    $title = "Prótesis Invisibles";
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
                    <img class="img-fluid" src="img/protesis-invisible.png" style="object-fit: cover;">
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Servicios Odontodent</h5>
                        <h1 class="display-5 mb-0"><?php echo $title ?> - Valplast</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Es un material con una base de Nylon, altamente flexible, que nos permite realizar prótesis unilaterales y bilaterales con una estética superior eliminando así el uso de ganchos o retenedores metálicos. Por sus características físicas nos permite realizar prótesis ligeras, resistentes y flexibles que proporcionan comodidad, funcionalidad y estética.</p>
                        </div>    
                        <div class="col-md-6">
                            <p class="mb-0"><strong>Características del Valplast:</strong></p>
                            <ul>
                                <li>Excelente Memoria</li>
                                <li>Irrompible</li>
                                <li>Durabilidad</li>
                                <li>Peso Ligero</li>
                                <li>Estático</li>
                                <li>Confortable</li>
                                <li>Hipoalergénico</li>
                                <li>Retardador del deterioro del hueso</li>
                                <li>No se deteriora al contacto con fluidos y bacterias</li>
                                <li>No tóxico, absorción de agua mínima</li>
                                <li>Traslúcido</li>
                                <li>Apariencia (buena mimetización)</li>
                                <li>Flexibilidad</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0"><strong>Beneficios para el Paciente:</strong></p>
                            <ul>
                                <li>Provee una increíble función amortiguadora</li>
                                <li>Es confortable cuando están comiendo o descansando</li>
                                <li>No necesita de ningún tipo de preparación en los dientes naturales</li>
                                <li>Es económico a largo plazo ya que no se fractura</li>
                                <li>parciales removibles existentes</li>
                                <li>En caso de añadidos, es reparable</li>
                                <li>Conserva la integridad dentaria</li>
                                <li>Retarda el deterioro óseo</li>
                            </ul>
                            <p class="mb-0"><strong>Contraindicaciones del Valplast</strong></p>
                            <ul>
                                <li>Epilépticos</li>
                                <li>Con pérdida de peso</li>
                                <li>Con pliegues marcados</li>
                                <li>Con higiene oral pobre</li>
                                <li>Cuidado del Paciente</li>
                            </ul>
                        </div>
                        
                        
                        <p>Como cualquier prótesis removible, el paciente tiene que ser instruido a seguir normas de higiene para mantener la apariencia y limpieza de su restauración Valplast. La prótesis tiene que ser sumergida en agua por las noches al menos tres veces por semana en un buen limpiador de dentaduras, O, el paciente puede sumergir el caso en un limpiador fuerte diariamente por espacio de 10 a 15 minutos. El caso tiene que ser lavado y cepillado antes de reinsertarse en la boca.cuando el facultativo aconseje para las revisiones periódicas.</p>
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