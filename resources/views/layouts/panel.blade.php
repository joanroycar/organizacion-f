<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edupit - Education and Online Courses Responsive HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="venobox/venobox.css" />
    <link rel="stylesheet" type="text/css" href="/css/plugin_theme_css.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    <!-- modernizr js -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <div class="em40_header_area_main">
        <!-- HEADER TOP AREA -->
        <div class="edupit-header-top   ">
            @include('layouts.header.topArea')
        </div>




        <div class="tx_top2_relative">
            <div class="">
                <div class="tx_relative_m">
                    <div class="">
                        <div class="mainmenu_width_tx  ">
                            <div
                                class="edupit-main-menu hidden-xs hidden-sm transprent-menu heading_style_17 witr_h_h2">
                                <div class="trp_nav_area hmenu_box_style container">
                                    <div class="container">
                                        <div class="row logo-left">
                                            <div class="col-md-3 col-sm-3 col-xs-4">
                                                <div class="logo">
                                                    <a class="main_sticky_main_l" href="index.html" title="Edupit">
                                                        <img src="/images/logo.png" alt="Edupit">
                                                    </a>
                                                    <a class="main_sticky_l" href="index.html" title="Edupit">
                                                        <img src="/images/logo.png" alt="Edupit">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-8">
                                                <nav class="edupit_menu">
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="#">Inicio</a>
                                                            {{-- <ul class="sub-menu">
                                                                <li><a href="index.html">Home One</a></li>
                                                                <li><a href="index-2.html">Home Two</a></li>
                                                                <li><a href="index-3.html">Landing Page</a></li>
                                                            </ul> --}}
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Nosotros</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="about.html">Sobre Nosotros</a></li>
                                                                <li><a href="about-2.html">Equipo de Trabajo</a></li>
                                                                {{-- <li><a href="about-3.html">About Style 03</a></li> --}}
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Servicios</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="courses.html">Cursos</a></li>
                                                                {{-- <li><a href="instructor-registration.html">Cursos
                                                                        </a></li> --}}
                                                                <li><a href="student-registration.html">Asesorias
                                                                        </a></li>
                                                                <li><a href="dashboard.html">Desarrollo de Proyectos</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="">
                                                            <a href="#">Proyectos</a>
                                                            {{-- <ul class="sub-menu">
                                                                <li><a href="academics.html">Academics</a></li>
                                                                <li class="menu-item-has-children">
                                                                    <a href="#">Admission</a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="admission.html">Admission</a></li>
                                                                        <li><a href="tuition-fees.html">Tuition &
                                                                                Fees</a></li>
                                                                        <li><a href="how-to-apply.html">How to Apply</a>
                                                                        </li>
                                                                        <li><a href="schedule-tour.html">Schedule a
                                                                                Tour</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item-has-children">
                                                                    <a href="#">Elements</a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item-has-children">
                                                                            <a href="#">Portfolio</a>
                                                                            <ul class="sub-menu">
                                                                                <li><a
                                                                                        href="portfolio.html">Portfolio</a>
                                                                                </li>
                                                                                <li><a href="portfolio-2column.html">Portfolio
                                                                                        2Column</a></li>
                                                                                <li><a href="portfolio-3column.html">Portfolio
                                                                                        3Column</a></li>
                                                                                <li><a href="portfolio-4column.html">Portfolio
                                                                                        4Column</a></li>
                                                                                <li><a
                                                                                        href="portfolio-2column-gutter.html">Portfolio
                                                                                        2Column Gutter</a></li>
                                                                                <li><a
                                                                                        href="portfolio-3column-gutter.html">Portfolio
                                                                                        3Column Gutter</a></li>
                                                                                <li><a
                                                                                        href="portfolio-4column-gutter.html">Portfolio
                                                                                        4Column Gutter</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="feature.html">Feature</a></li>
                                                                        <li><a href="our-clients.html">Our Clients</a>
                                                                        </li>
                                                                        <li><a href="service.html">Service</a></li>
                                                                        <li><a href="advance-tab.html">Advance Tab</a>
                                                                        </li>
                                                                        <li><a href="image-box.html">Image Box</a></li>
                                                                        <li><a href="call-to-action.html">Call To
                                                                                Action</a></li>
                                                                        <li><a href="our-process.html">Our Process</a>
                                                                        </li>
                                                                        <li><a href="progress-bar.html">Progress
                                                                                Bar</a></li>
                                                                        <li><a href="alert.html">Alert</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item-has-children">
                                                                    <a href="#">Service Style</a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="service.style.html">Service
                                                                                Style</a></li>
                                                                        <li><a href="service-2.html">Service Style
                                                                                02</a></li>
                                                                        <li><a href="service-3.html">Service Style
                                                                                03</a></li>
                                                                        <li><a href="service-details.html">Service
                                                                                Details</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item-has-children">
                                                                    <a href="#">Team</a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="Team.html">Team</a></li>
                                                                        <li><a href="team-details.html">Team
                                                                                Details</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                                                <li><a href="why-choose-us.html">Why Choose Us</a></li>
                                                                <li><a href="countdown.html">Countdown</a></li>
                                                                <li><a href="counter.html">Counter</a></li>
                                                                <li class="menu-item-has-children">
                                                                    <a href="#">Case Study</a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="case-study.html">Case Study</a>
                                                                        </li>
                                                                        <li><a href="case-study-details.html">Case
                                                                                Study Details</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="faq.html">FAQ’S</a></li>
                                                            </ul> --}}
                                                        </li>
                                                        {{-- <li class="menu-item-has-children">
                                                            <a href="#">Blog</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="blog.html">Blog</a></li>
                                                                <li><a href="blog-left-sidebar.html">Blog Left
                                                                        Sidebar</a></li>
                                                                <li><a href="blog-right-sidebar.html">Blog Right
                                                                        Sidebar</a></li>
                                                                <li><a href="blog-left-2column.html">Blog Left
                                                                        2Column</a></li>
                                                                <li><a href="blog-right-2column.html">Blog Right
                                                                        2Column</a></li>
                                                            </ul>
                                                        </li> --}}
                                                        {{-- <li class="">
                                                            <a href="#">Contactanos</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="contact.html">Contact</a></li>
                                                                <li><a href="contact-2.html">Contact Style 02</a></li>
                                                                <li><a href="contact-3.html">Contact Style 03</a></li>
                                                                <li><a href="contact-4.html">Contact Style 04</a></li>
                                                                <li><a href="contact-5.html">Contact Style 05</a></li>
                                                            </ul>
                                                        </li> --}}
                                                    </ul>
                                                    <div class="donate-btn-header">
                                                        <a class="dtbtn" href="#">Contáctanos</a>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- MOBILE MENU Logo AREA -->
    <div class="mobile_logo_area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mobile_menu_logo text-center">
                        <a href="index.html" title="edupit">
                            <img src="/images/logo2.png" alt="edupit">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MOBILE MENU AREA -->
    <div class="home-2 mbm hidden-md hidden-lg  header_area main-menu-area">
        <div class="menu_area mobile-menu">
            <nav class="edupit_menu">
                <ul class="sub-menu">
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                            <li><a href="index-3.html">Landing Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="about-2.html">About Style 02</a></li>
                            <li><a href="about-3.html">About Style 03</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Courses</a>
                        <ul class="sub-menu">
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="instructor-registration.html">Instructor Registration</a></li>
                            <li><a href="student-registration.html">Student Registration</a></li>
                            <li><a href="dashboard.html">Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Academics</a>
                        <ul class="sub-menu">
                            <li><a href="academics.html">Academics</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Admission</a>
                                <ul class="sub-menu">
                                    <li><a href="admission.html">Admission</a></li>
                                    <li><a href="tuition-fees.html">Tuition & Fees</a></li>
                                    <li><a href="how-to-apply.html">How to Apply</a></li>
                                    <li><a href="schedule-tour.html">Schedule a Tour</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Elements</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-2column.html">Portfolio 2Column</a></li>
                                            <li><a href="portfolio-3column.html">Portfolio 3Column</a></li>
                                            <li><a href="portfolio-4column.html">Portfolio 4Column</a></li>
                                            <li><a href="portfolio-2column-gutter.html">Portfolio 2Column Gutter</a>
                                            </li>
                                            <li><a href="portfolio-3column-gutter.html">Portfolio 3Column Gutter</a>
                                            </li>
                                            <li><a href="portfolio-4column-gutter.html">Portfolio 4Column Gutter</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="feature.html">Feature</a></li>
                                    <li><a href="our-clients.html">Our Clients</a></li>
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="advance-tab.html">Advance Tab</a></li>
                                    <li><a href="image-box.html">Image Box</a></li>
                                    <li><a href="call-to-action.html">Call To Action</a></li>
                                    <li><a href="our-process.html">Our Process</a></li>
                                    <li><a href="progress-bar.html">Progress Bar</a></li>
                                    <li><a href="alert.html">Alert</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Service Style</a>
                                <ul class="sub-menu">
                                    <li><a href="service.style.html">Service Style</a></li>
                                    <li><a href="service-2.html">Service Style 02</a></li>
                                    <li><a href="service-3.html">Service Style 03</a></li>
                                    <li><a href="service-details.html">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Team</a>
                                <ul class="sub-menu">
                                    <li><a href="Team.html">Team</a></li>
                                    <li><a href="team-details.html">Team Details</a></li>
                                </ul>
                            </li>
                            <li><a href="pricing-plan.html">Pricing Plan</a></li>
                            <li><a href="why-choose-us.html">Why Choose Us</a></li>
                            <li><a href="countdown.html">Countdown</a></li>
                            <li><a href="counter.html">Counter</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Case Study</a>
                                <ul class="sub-menu">
                                    <li><a href="case-study.html">Case Study</a></li>
                                    <li><a href="case-study-details.html">Case Study Details</a></li>
                                </ul>
                            </li>
                            <li><a href="faq.html">FAQ’S</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-left-2column.html">Blog Left 2Column</a></li>
                            <li><a href="blog-right-2column.html">Blog Right 2Column</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Contact</a>
                        <ul class="sub-menu">
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contact-2.html">Contact Style 02</a></li>
                            <li><a href="contact-3.html">Contact Style 03</a></li>
                            <li><a href="contact-4.html">Contact Style 04</a></li>
                            <li><a href="contact-5.html">Contact Style 05</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END MOBILE MENU AREA  -->




    @yield('content')

    {{-- <footer></footer> --}}

    @include('layouts.footer.index')

    <!-- Include All JS -->
    <script src="/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.nivo.slider.pack.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="venobox/venobox.min.js"></script>
    <script src="/js/jquery.appear.js"></script>
    <script src="/js/jquery.knob.js"></script>
    <script src="/js/BeerSlider.js"></script>
    <script src="/js/theme-pluginjs.js"></script>
    <script src="/js/jquery.meanmenu.js"></script>
    <script src="/js/ajax-mail.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
