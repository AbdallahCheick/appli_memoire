<?php
define('TITLE', 'Accueil');
function strip_bad_chars($input)
{
    $output = preg_replace('/[^a-zA-Z0-9_-]/', '', $input);
    return $output;
}
?>
<!-- header start-->
<?php include 'navbar.php';

include 'navbar_body.php'; ?>
<!-- header end-->


<!-- Carousel Start -->
<div class="container-fluid px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/carousel-1.jpg" class="img-fluid" alt="First slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">Votre réussite notre réussite</h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInRight">Une plateforme de solution
                            informatique innovante
                        </h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">Au moins la moitié de ce qui sépare les
                            entrepreneurs qui réussissent de ceux qui ne réussisent pas est de la pire
                            persévérance.-steve jobs</p>.</p>
                        <a href="" class="me-2"><button type="button"
                                class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">En
                                savoir
                                Plus</button></a>
                        <a href="" class="ms-2"><button type="button"
                                class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contactez
                                nous</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="img-fluid" alt="Second slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">Meilleur Solution Informatique</h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInLeft">Une plateforme de qualité aux services
                            se la société !</h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">La Garantie de Faire Travailler des citoyens
                            engagés</p>
                        <a href="" class="me-2"><button type="button"
                                class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">En
                                savoir
                                Plus</button></a>
                        <a href="" class="ms-2"><button type="button"
                                class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contactez
                                Nous</button></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


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


<!-- About Start -->
<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="img/about-1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">A propos de l'entreprise</h5>
                <h1 class="mb-4">ENTFINC</h1>
                <p>Fondée en 2023, notre plateforme est née de la passion commune de notre équipe pour soutenir
                    l'innovation et l'esprit entrepreneurial. Face au besoin croissant de financement pour des projets
                    novateurs, nous avons voulu créer un espace où les rêveurs et les investisseurs se rencontrent.

                    Notre équipe diversifiée, alliant expertise en finance, technologie et entrepreneuriat, travaille
                    sans relâche pour offrir une plateforme sûre et transparente. Chaque membre partage un engagement
                    profond envers la réussite des projets et le soutien des créateurs.

                    Nous croyons fermement en l'innovation, la transparence et l'équité. Notre objectif est de fournir
                    un accès équitable au financement pour tous les types de projets, des startups prometteuses aux
                    initiatives établies, tout en offrant une expérience conviviale et sécurisée à nos utilisateurs.

                    Nous nous engageons à soutenir activement les entrepreneurs en mettant en avant leur créativité.
                    Nous croyons au pouvoir de la communauté pour catalyser le changement et c'est pourquoi nous mettons
                    l'accent sur des projets qui ont un impact positif sur la société.

                    À ce jour, notre plateforme a permis le financement de plus de 500 projets, générant des
                    opportunités et des emplois dans divers secteurs. Chaque projet financé représente un pas de plus
                    vers notre objectif de catalyser l'innovation et l'entrepreneuriat.
                </p>

                <!--<a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">Plus de details</a>-->
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid services py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Nos Services</h5>
            <h1>Le services fournis par notre entreprise</h1>
        </div>
        <div class="row g-5 services-inner">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".3s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Incription et Pilotage</h4>
                            <p class="mb-4">Dans le processus d'inscription,les utiisateurs ont accès à un compte
                                utilisateur.
                                En tant que membres,ils bénéficient d'un tableau de bord pour gérer,modifier leur
                                informations.
                                Rejoignez-nous pour un pilotage intuitif devotre votre parcours.</p>

                            <!--<a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Vir Plus</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".5s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Soumission projets</h4>
                            <p class="mb-4">En soumettant votre projet, vous partagez votre vision unique et votre votre
                                ambition grace
                                à la description du projet.Les investisseurs auront l'opportunité de soutenir activement
                                nos utilisateurs et avant tout s'entrenir avec de experts.Rejognez-nous pour etre
                                unacteur
                                clé dans cetteaventure faconnant un mpact positif</p>
                            <!--<a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Vir Plus</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".7s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Support et Suivi</h4>
                            <p class="mb-4">Notre servce de support est là pour repondreà vos préoccupations et vous
                                suivre tout au long
                                de la procédure ave l' appui de nos experts.Restez informez des étapes clés et
                                avancement de votre
                                projet.Rejoignez-nous pour une expérience ou le support clent et suivi deviennent des
                                élements
                                essentielles.</p>

                            <!--<a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Voir Plus</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".3s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3" u>Processus Financement</h4>
                            <p class="mb-4">Après que le projet soit approuvé par nos experts, ils seront soumis sur
                                notre platorme par differents
                                investisseurs.l'investsseur interessé sera automatiquement mis en contact ave
                                l'innovateur.</p>
                            <!--<a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Voir Plus</a>-->
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Services End -->


<!-- Project Start -->
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Nos Projets récents</h5>
            <h1>Nos projets récemment achevés</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/project-1.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Web design</h4>
                                <p class="m-0 text-white">Web Analysis</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/project-2.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Cyber Security</h4>
                                <p class="m-0 text-white">Cyber Security Core</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/project-3.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Mobile Info</h4>
                                <p class="m-0 text-white">Upcomming Phone</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/project-4.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Web Development</h4>
                                <p class="m-0 text-white">Web Analysis</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/project-5.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Digital Marketing</h4>
                                <p class="m-0 text-white">Marketing Analysis</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/project-6.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">keyword Research</h4>
                                <p class="m-0 text-white">keyword Analysis</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Blog Start -->
<div class="container-fluid blog py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Notre Blog</h5>
            <h1>Nos dernier blogs</h1>
        </div>
        <div class="row g-5 justify-content-center">
            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                        style="top: -28px; right: 20px;">Web Design</span>
                    <div class="blog-btn d-flex justify-content-between position-relative px-3"
                        style="margin-top: -75px;">
                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                            <a href="" class="btn text-white">Read More</a>
                        </div>
                        <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                            <div class="blog-icon-1">
                                <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                            </div>
                            <div class="blog-icon-2">
                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                        <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3"
                            alt="">
                        <h5 class="">By Daniel Martin</h5>
                        <span class="text-secondary">24 March 2023</span>
                        <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                            Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                    </div>
                    <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                        <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324
                                Share</small></a>
                        <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5
                                Comments</small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                        style="top: -28px; right: 20px;">Development</span>
                    <div class="blog-btn d-flex justify-content-between position-relative px-3"
                        style="margin-top: -75px;">
                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                            <a href="" class="btn text-white ">Read More</a>
                        </div>
                        <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                            <div class="blog-icon-1">
                                <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                            </div>
                            <div class="blog-icon-2">
                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                        <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3"
                            alt="">
                        <h5 class="">By Daniel Martin</h5>
                        <span class="text-secondary">23 April 2023</span>
                        <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                            Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                    </div>
                    <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                        <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324
                                Share</small></a>
                        <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5
                                Comments</small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                        style="top: -28px; right: 20px;">Mobile App</span>
                    <div class="blog-btn d-flex justify-content-between position-relative px-3"
                        style="margin-top: -75px;">
                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                            <a href="" class="btn text-white ">Read More</a>
                        </div>
                        <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                            <div class="blog-icon-1">
                                <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                            </div>
                            <div class="blog-icon-2">
                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                        <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3"
                            alt="">
                        <h5 class="">By Daniel Martin</h5>
                        <span class="text-secondary">30 jan 2023</span>
                        <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                            Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                    </div>
                    <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                        <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324
                                Share</small></a>
                        <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5
                                Comments</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->





<!-- Contact Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary"></h5>
            <h1 class="mb-3">Contact </h1>
            <p class="mb-2">. <a href="https://htmlcodex.com/contact-form"></a></p>
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
                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">Cocody Danga,
                                Derrière la cité Rouge</a>
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
                            <h4 class="text-primary">Appelez-nous</h4>
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
                            <a class="h5" href="mailto:entfinc²@example.com" target="_blank">info@entfinc.com</a>
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
                            <input type="text" class="form-control border-0 py-3" placeholder="Nom">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control border-0 py-3" placeholder="Email">
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
                                message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Footer start-->
<?php include 'footer.php'; ?>
<!-- Footer end-->