<!DOCTYPE html>
<html>
@include('partials.header')
<body id="page-top" data-spy="scroll" data-target=".navbar">

<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navegacion</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->
            <!-- logo -->
            <div class="navbar-brand">
                <a href="{{ route('home') }}" >
                    {{-- <img src="images/logo.png" alt=""> --}}
                    <img src="images/php-logo-bigger.png" width="" height="30px" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ route('home') }}" >Inicio</a>
                    </li>
                    {{-- <li><a href="{{ route('nosotros') }}">Nosotros</a></li>  --}}
                    <li><a href="{{ route('servicios') }}">Servicios</a></li>
                    {{-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </div>
                    </li> --}}
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <li><a href="{{ route('curriculum')}}">Curriculum</a><li>
                    <li><a href="{{ route('contactos') }}">Contacto</a></li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<div class="columns-block container">
<div class="left-col-block blocks">
    <header class="header theiaStickySidebar">
        <div class="profile-img wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
            <img src="{{ asset('images/curriculum/img-profile.jpg')}}" class="img-responsive" alt=""/>
        </div>
        <div class="content wow fadeInDown">
            <h1>Cristian Hurtado</h1>
            <span class="lead">Programador Web</span>

            <div class="about-text">
                <p>Credibly embrace visionary internal or "organic" sources and business benefits. Collaboratively integrate efficient portals rather than customized customer service. Assertively deliver frictionless services via leveraged interfaces. Conveniently evisculate accurate sources and process-centric expertise.</p>
                <p>Energistically fabricate customized imperatives through cooperative catalysts for change.</p>
            </div>
            <!--<ul class="social-icon">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul> -->
        </div>
    </header>
    <!-- .header-->
</div>
<!-- .left-col-block -->
<div class="right-col-block blocks">
<div class="theiaStickySidebar">
@include('curriculum.partials.experience')
<!-- .expertise-wrapper -->

<!-- Abilities -->
@include('curriculum.partials.abilities')
<!-- End Abilities -->
<section class="section-wrapper section-experience gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Experiencia</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <small>Julio 2018 - Actual</small>
                    <h3>Programador PHP & Lider de Proyecto.</h3>
                    <h4>Evolution | Especialistas en Factor Humano.</h4>

                    <p>Ciudad de Mexico & Alvaro Obregón</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>Enero 2016 - Junio 2018</small>
                    <h3>Programador Web PHP.</h3>
                    <h4>Mega Travel Agency.</h4>

                    <p>Ciudad de Mexico & Cuauhtemoc</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>Diciembre 2015 - Enero 2016</small>
                    <h3>Programador PHP</h3>
                    <h4>Educatión And Travel Group</h4>

                    <p>Ciudad de Mexico & Alvaro Obregón</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>Noviembre 2004 - Enero 2015</small>
                    <h3>Sistemas</h3>
                    <h4>Maguen David A.C.</h4>

                    <p>Ciudad de Mexico & Cuajimalpa</p>
                </div>
                <!-- .experience-item -->
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<!-- .section-experience -->

@include('curriculum.partials.education')
<!-- .section-education -->

@include('curriculum.partials.interest')
<!-- .section-publications -->

@include('curriculum.partials.portfolio')
<!-- .portfolio -->

<section class="section-contact section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Contacto</h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <address>
                    <strong>Dirección</strong><br>
                    Heroes de Churubusco #3-12<br>
                    Tacubaya,Ciudad de Mexico, C.P. 11870
                </address>
                <address>
                    <strong>Telefono Local</strong><br>
                    + 55 2614 9507
                </address>
                <address>
                    <strong>Telefono Celular</strong><br>
                    + 044 55 8677 6864
                </address>
                <address>
                    <strong>Email</strong><br>
                    <a href="mailto:#">cristianjavaprogrammer@gmail.com</a>
                </address>
            </div>
        </div>
        <!--.row**********************************
                        Contacto       
        ***************************************-->
        @include('curriculum.partials.contact')
    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->

<footer class="footer">
    <div class="copyright-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copytext">&copy; All rights reserved | Design By: <a href="https://developerlaravel.com">Cristian Hurtado</a></div>
                </div>
            </div>
            <!--.row-->
        </div>
        <!-- .container-fluid -->
    </div>
    <!-- .copyright-section -->
</footer>
<!-- .footer -->
</div>
<!-- Sticky -->
</div>
<!-- .right-col-block -->
</div>
<!-- .columns-block -->
</div>
<!-- #main-wrapper -->



<!-- Bootstrap -->
<!--<script src="js/bootstrap.min.js"></script>
<script src="js/theia-sticky-sidebar.js"></script>
<script src="js/scripts.js"></script>
//jquery
<script src="js/jquery-2.1.4.min.js"></script>-->
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/scripts.js')}}"></script>
</body>
</html>