<!DOCTYPE html>
<html lang="es">

<head>
    
    <?php 
    $title = "Clínica Estética Dental";
    include('partials/head.php'); 
    ?>
    
</head>

<body>

    <?php include('partials/header.php'); ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creamos sonrisas vibrantes para un</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Estilo de vida saludable</h1>
                            <!-- <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Extracciones Dentales</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Procedimientos sin dolor con tecnología de vanguarda</h1>
                            <!-- <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Procedimientos Avanzados</h3>
                        <p class="text-white mb-3">Contamos con la última tecnología para nuestros Procedimientos.</p>
                        <img class="img-fluid" src="img/anestesia.svg" alt="" width="80">
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Equipos de última generación</h3>
                        <p class="text-white mb-3">Todos los Equipos de nuestra Clínica son de vanguardia mundial.</p>
                        <img class="img-fluid" src="img/silla-dentista.svg" alt="" width="80">
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Profesionales Especializados</h3>
                        <p class="text-white">Nuestros Profesionales son Especializados en cada área de nuestros Servicios.</p>
                        <h2 class="text-white mb-0">+56 2 2879 3048 <br> +56 9 8302 8442</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- Nosotros Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="nosotros-odontodent" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Odontodent</h5>
                        <h1 class="display-5 mb-0">Por una Sonrisa Feliz</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Odontodent es una clínica dental Ubicada en San Bernardo</h4>
                    <p class="mb-4">Nuestro Compromiso es entregar un servicios de calidad a precios económicos y accesibles a el publico , con tratamientos garantizados y profesionales de buen nivel. buena calidad y facilidades de pago.</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Amplia Experiencia</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Infraestructura cómoda y acogedora</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Excelencia en Atención</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Facilidades de Pago</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/interior-odontodent.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nosotros End -->

    <!-- Urgencia Dental -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                <img class="img-fluid" src="img/foto-clinica.png" alt="">
            </div>
            <div class="col-lg-5 wow slideInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                <div class="section-title bg-light rounded h-100 p-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Programa tus horas</h5>
                    <h1 class="display-6 mb-3">Urgencias Odontológicas</h1>
                    <a href="https://wa.link/peu0rq" target="_blank" class="btn btn-primary py-3 px-5 mt-4 mb-4 wow zoomIn" data-wow-delay="0.6s">Escríbenos al WhatsApp</a>
                    <h4 class="position-relative d-inline-block text-primary text-uppercase">También puedes llamarnos <br><i class="fa fa-phone-alt me-2"></i> +56 2 2879 3048</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- URgencia Dental End -->

    <!-- Especialidades Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">Especialidades Odontodent</h1>
                        <p class="text-white">En nuestra Clínica Odontodent contamos con distintos servicios en especialidades como Ortodoncia, Endodoncia, extracciones, Cirugía Oral, Periodoncia, entre otras. Agenda una hora para presupuesto y valoración sin costo.</p>
                        <a class="btn btn-light px-5 py-2" href="tel:56228793048"><i class="bi bi-telephone-fill"></i> Agenda una hora </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <img class="img-fluid" src="img/fachada.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Especialidades End -->


    <!-- Servicios Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="servicios-odontodent" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/before.jpg" style="object-fit: cover;">
                        <img class="position-absolute w-100 h-100" src="img/after.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Servicios OdontoDent</h5>
                        <h1 class="display-5 mb-0">Ofrecemos la mejor calidad en servicios dentales</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <a href="endodoncia.php">
                                <div class="rounded-top overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/endodoncia-dental.png" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Endodoncia Dental</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <a href="estetica-dental.php">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/estetica-dental.png" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Estética Dental</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                    <a href="protesis-dentales.php">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/protesis-dental.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Prótesis Dentales</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                    <a href="periodoncia-dental.php">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/periodoncia-dental.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Periodoncia Dental</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                    <a href="incrustaciones-dentales.php">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/incrustaciones-dentales.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Incrustaciones Dentales</h5>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                    <a href="caries-dentales.php">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/caries-dentales.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Caries Dental</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                    <a href="coronas-dentales.php">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/coronas-dentales.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Coronas Dentales</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                    <a href="protesis-acrilicas-parcial-y-metalica-completa.php">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/protesis-acrilica.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Prótesis Acrílica Parcial, Metálica y Completa</h5>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                    <a href="protesis-invisibles.php">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/protesis-invisible.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Prótesis Invisible</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                    <a href="cirugia-oral-dental.php">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/cirugia-oral-dental.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Cirugía Oral Dental</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                    <a href="rayos-x-dentales.php">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/rayosx-dental.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Rayos X Dentales</h5>
                        </div>
                    </a>
                </div>
            </div>
            
           <!--  <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/service-3.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dental Bridges</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/service-4.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Teeth Whitening</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Servicios End -->


    <!-- Compromiso Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h1 class="display-5 text-white">Nuestro Compromiso </h1>
                        <p class="text-white mb-4">Es entregar un servicios de calidad a precios económicos y accesibles a el publico, con tratamientos garantizados y profesionales de buen nivel. <br> Buena calidad y facilidades de pago.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Compromiso End -->


    <!-- Contacto y Ubicacion Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="ubicacion-odontodent" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">¿Tienes algunda duda?</h5>
                            <h2 class="display-6 mb-4">Contacta con nosotros</h2>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Nuestra Sede</h5>
                                <span>Barros Arana 587, San Bernardo</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Correo</h5>
                                <span>cdentalodontodent@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-telephone fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Teléfono</h5>
                                <span>+56 2 2879 3048</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Celular</h5>
                                <span>+56 9 8302 84428</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.3863027143652!2d-70.69904!3d-33.595279999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d9449fc89a81%3A0xc493b74715855d7e!2sBarros%20Arana%20587%2C%208054298%20San%20Bernardo%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1672197319107!5m2!1ses!2scl"
                            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contacto y Ubicacion End -->


    <!-- Testimonios Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/avatar-4.png" alt="">
                            <p class="fs-5">excelente profesional ,muy económico y muy minucioso con su trabajo , 🙌🙌🙌🙌🙌 ,excelente persona y muy perfeccionista en lo que hace</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Lisetita Arzola Jara</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/avatar-5.png" alt="">
                            <p class="fs-5">Clinica muy muy buena EL DOCTOR te explica todo perfecto, el cepillado el tipo de pasta cepillo enjuague etc. Recomendada a todos mis amigos</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Carlos Alberty Rojas</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/avatar-6.png" alt="">
                            <p class="fs-5">El Dr. Gustavo es un EXCELENTE PROFESIONALl, explica todo claramente, minucioso en su trabajo, sumado a  PRECIOS ECONÓMICOS  al alcance de todos.  Desde la otra consulta en Barros Arana que nos atendemos con él.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Nubia Olguìn Cantillana</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/avatar-1.png" alt="">
                            <p class="fs-5">Muy buen ambiente y amabilidad. La gente es sumamente agradable. Nunca he tenido ningún tipo de problema.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Viciente Rodriguez</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/avatar-2.png" alt="">
                            <p class="fs-5">Excelente Servicio 100% recomendado</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Rafael Maya</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/avatar-3.png" alt="">
                            <p class="fs-5">Muy buena experiencia. Desde hace un año que me pusieron los implantes, a la hora de comer, es como si fuesen mios.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Carmen Crespo</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonios End -->

    

    <?php include('partials/footer.php'); ?>

    <?php include('partials/scripts.php'); ?>
    
</body>

</html>