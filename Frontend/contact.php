<!-- header start-->
<?php include 'navbar.php'; ?>
<!-- header end-->


<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Nous contacter</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Fact Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">99</h1>
                    <h5 class="text-white mt-1">Staff</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">25</h1>
                    <h5 class="text-white mt-1">Nos clients</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">120</h1>
                    <h5 class="text-white mt-1">Projets financés</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">5</h1>
                    <h5 class="text-white mt-1">Projets en cours</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Contact Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary"></h5>
            <h1 class="mb-3">Contact</h1>

        </div>
        <div class="contact-detail position-relative p-5">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Adresse</h4>
                            <a href="https://maps.app.goo.gl/UkSfkNdV2RQwtekTA" target="_blank" class="h5">Cocody Danga
                                ,
                                Derrière la Cité Rouge</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Appelez-Nous</h4>
                            <a class="h5" href="tel:+0123456789" target="_blank">+225 0142366655</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email</h4>
                            <a class="h5" href="mailto:info@example.com" target="_blank">info@entfinc.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="p-5 h-100 rounded contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.5206744985862!2d-4.008328126199385!3d5.337176935813799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb9fb2979889%3A0x342b5e655d7e27b1!2sLABTIC!5e0!3m2!1sfr!2sci!4v1701877379444!5m2!1sfr!2sci"
                            width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="p-5 rounded contact-form">
                        <div class="mb-4">
                            <input type="text" class="form-control border-0 py-3" placeholder=" Nom">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control border-0 py-3" placeholder=" Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control border-0 py-3" placeholder="Projet">
                        </div>
                        <div class="mb-4">
                            <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="text-start">
                            <button class="btn bg-primary text-white py-3 px-5" type="button">Envoyer un
                                Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- header start-->
<?php include 'footer.php'; ?>
<!-- header end-->