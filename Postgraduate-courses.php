<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>client-website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Nowshera Virka Gujranwala, Pakistan</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+923 061366464</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href="https://www.facebook.com/share/g6s1aRQqi6TqogCF/?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href="https://www.instagram.com/dreamwayeducational.11?igsh=MWJvbzg5djZsbjdyMw=="><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


    <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h5 class="m-0 text-primary"><img src="img/dreamway.png" style="width: 100px; height: 73px;"></img></h5>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <!--Home page  -->
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <!--STUDY ABROAD page  -->
                <div class="nav-item dropdown">
                    <a href="countrys.php" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">STUDY ABROAD</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="Study-in-USA.php" class="dropdown-item">Study in USA</a>
                        <a href="Study-in-UK.php" class="dropdown-item">Study in UK</a>
                        <a href="Study-in-south-cypress.php" class="dropdown-item">Study in south cypress</a>
                        <a href="Study-in-Malaysia.php" class="dropdown-item">Study in Malaysia</a>
                        <a href="Study-in-Kyrgyzstan.php" class="dropdown-item">Study in  kyrgystan</a>
                        <a href="Study-in-Dubai.php" class="dropdown-item">Study in Dubai</a>
                        <a href="Study-in-Australia.php" class="dropdown-item">Study in Australia</a>
                        <a href="Study-in-Canada.php" class="dropdown-item">Study in Canada</a>
                        <a href="Study-in-Finland.php" class="dropdown-item">Study in Finland</a>
                    </div>
                </div>
                <!-- Courses page -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Course</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="Foundation-courses.php" class="dropdown-item">Foundation Courses</a>
                        <a href="Undergraduate-couses.php" class="dropdown-item">Undergraduate Courses</a>
                        <a href="Postgraduate-courses.php" class="dropdown-item">Postgraduate Courses</a>
                        <a href="Diploma.php" class="dropdown-item">Diploma</a>
                        <a href="course-registration-from.php" class="dropdown-item">Apply Now</a>
                    </div>
                </div>
                <!-- UNIVERSITIES page -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">UNIVERSITIES</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="list-of-USA-uni.php" class="dropdown-item">USA</a>
                        <a href="list-of-UK-uni.php" class="dropdown-item">UK</a>
                        <a href="List-of-south-cypress.php" class="dropdown-item">South cypress</a>
                        <a href="list-of-Malaysia-uni.php" class="dropdown-item">Malaysia</a>
                        <a href="List-of-kyrgyzstan-uni.php" class="dropdown-item">kyrgystan</a>
                        <a href="List-of-Dubai-uni.php" class="dropdown-item">Dubai</a>
                        <a href="List-of-Australia-uni.php" class="dropdown-item">Australia</a>
                        <a href="List-of-Canada-uni.php" class="dropdown-item">Canada</a>
                        <a href="List-of-Finland-uni.php" class="dropdown-item">Finland</a>
                    </div>
                </div>
                <!-- Service page -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="student-services.php" class="dropdown-item">Student Services</a>
                        <a href="Pre-Departure.php" class="dropdown-item">Pre Departure and After Arrival</a>
                        <a href="Student-Visa.php" class="dropdown-item">Student Visa</a>
                        <a href="Employment-Permit.php" class="dropdown-item">Employment Permit</a>
                    </div>
                </div>

                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <?php
            if (isset($_SESSION['user_id'])) {
                echo '<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Account</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>';
            } else {
                echo '<a href="login.php" class="nav-item nav-link">Login/Sign Up</a>';
            }
            ?>
            <a href="course-registration-from.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Apply Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    
    
    
    
    <!-- up and down icon -->
    <a id="totop" href="#top"  class="top-visible">
        <i class="themestek-liviza-icon-angle-up">
            
        </i>
        
    </a>
    <!-- end up and down icon -->
    <!-- whatsapp button -->
<div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-3_1 ht_ctc_animation no-animations" id="ht-ctc-chat" style="position: fixed; bottom: 15px; left: 15px; cursor: pointer;z-index: 99999999;">
    <div class="ht_ctc_style ht_ctc_chat_style">
        <style id="ht-ctc-s3">
            .ht-ctc .ctc_s_3_1:hover svg stop{stop-color:#25D366;}.ht-ctc .ctc_s_3_1:hover .ht_ctc_padding,.ht-ctc .ctc_s_3_1:hover .ctc_cta_stick{background-color:#25D366 !important;box-shadow:0px 0px 11px rgba(0,0,0,.5);}
        </style>
    <div title="WhatsApp us" style="display:flex;justify-content:center;align-items:center; " class="ctc_s_3_1 ctc_s3_1 ctc_nb" data-nb_top="-4px" data-nb_right="-4px">
        <p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta " style="padding: 0px 16px; line-height: 1.6; ; background-color: #25d366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; ">WhatsApp us</p>
        <div class="ctc-analytics ht_ctc_padding" style="background-color: #25D366; padding: 14px; border-radius: 50%; box-shadow: 0px 0px 11px rgba(0,0,0,.5);">
            <a href="https://chat.whatsapp.com/IHwHYv0stCE5H92uAakRfW"><svg style="pointer-events:none; display:block; height:40px; width:40px;" width="40px" height="40px" viewBox="0 0 1219.547 1225.016">
                <path style="fill: #E0E0E0;" fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"></path>
                <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                    <stop id="s3_1_offset_1" offset="0" stop-color="#25D366"></stop>
                    <stop id="s3_1_offset_2" offset="1" stop-color="#25D366"></stop>
                </linearGradient>
                <path style="fill: url(#htwaicona-chat);" fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"></path>
                <a href="https://chat.whatsapp.com/BebT2tJL916HxHvUEpKFwq"><image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"></image></a>
                <path fill-rule="evenodd" clip-rule="evenodd" style="fill: #FFF;" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"></path>
                <path style="fill: #FFFFFF;" fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"></path>
            </svg></a>   </div>
    </div>
    </div>
</div>
     <!-- end whatsapp button -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Postgraduate Courses</h1>
        </div>
    </div>
    <!-- Page Header End -->

<!--start Foundation Courses -->
<div id="content-inner" class="site-content-inner ">
    <div id="primary" class="content-area  container">
        <main id="main" class="site-main">
            <article id="post-14026" class="post-14026 page type-page status-publish hentry">
                <header class="single-entry-header themestek-hide">
                    <h1 class="entry-title">Postgraduate Courses</h1>	
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <style>/*! elementor - v3.14.0 - 18-06-2023 */.elementor-toggle{text-align:left}.elementor-toggle .elementor-tab-title{font-weight:700;line-height:1;margin:0;padding:15px;border-bottom:1px solid #d5d8dc;cursor:pointer;outline:none}.elementor-toggle .elementor-tab-title .elementor-toggle-icon{display:inline-block;width:1em}.elementor-toggle .elementor-tab-title .elementor-toggle-icon svg{-webkit-margin-start:-5px;margin-inline-start:-5px;width:1em;height:1em}.elementor-toggle .elementor-tab-title .elementor-toggle-icon.elementor-toggle-icon-right{float:right;text-align:right}.elementor-toggle .elementor-tab-title .elementor-toggle-icon.elementor-toggle-icon-left{float:left;text-align:left}.elementor-toggle .elementor-tab-title .elementor-toggle-icon .elementor-toggle-icon-closed{display:block}.elementor-toggle .elementor-tab-title .elementor-toggle-icon .elementor-toggle-icon-opened{display:none}.elementor-toggle .elementor-tab-title.elementor-active{border-bottom:none}.elementor-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon-closed{display:none}.elementor-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon-opened{display:block}.elementor-toggle .elementor-tab-content{padding:15px;border-bottom:1px solid #d5d8dc;display:none}@media (max-width:767px){.elementor-toggle .elementor-tab-title{padding:12px}.elementor-toggle .elementor-tab-content{padding:12px 10px}}.e-con-inner>.elementor-widget-toggle,.e-con>.elementor-widget-toggle{width:var(--container-widget-width);--flex-grow:var(--container-widget-flex-grow)}</style>
                    <p><a tabindex="0">MBA</a></p>
                    <p>Banking and Finance&nbsp;MBA<br>Banking and Law&nbsp;MBA<br>Chartered Banker&nbsp;MBA<br>Environmental Management&nbsp;MBA<br>Finance&nbsp;MBA<br>Information Management&nbsp;MBA<br>International Business&nbsp;MBA<br>International Marketing&nbsp;MBA<br>Islamic Banking and Finance&nbsp;MBA<br>Law and Management&nbsp;MBAManagement&nbsp;MBA</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong></p>
                    <p><a tabindex="0">Electronic Engineering and computer systems</a></p>
                    <p>Broadband and Optical Communications MSc<br>Electronic Engineering MSc<br>Electronic Engineering MRes<br>Microwave photonics: Waveform Generation and Applications PhD<br>Nanotechnology and Microfabrication MSc<br>Relational Design MScRes</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong></p>
                    <p><a tabindex="0">Criminology and Criminal Justice</a></p>
                    <p>Comparative Criminology and Criminal Justice MA/PGDip/PGCert<br>Criminology and Law MA<br>Criminology and Sociology MA/PGDip/PGCert<br>Criminology, Criminal Justice, Social Policy, Sociology MARes</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Computer Science</a></p>
                    <p>Advanced Visualization, Virtual Environments and Computer Animation MRes</p>
                    <p>Computer Science MSc</p>
                    <p>Computer Science with Visualisation MSc</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Management</a></p>
                    <p>Chartered Banker MBA</p>
                    <p>Conservation and Land Management MSc</p>
                    <p>Environmental and Business Management MSc</p>
                    <p>Environmental Management MBA</p>
                    <p>Forestry and Environmental Management degrees (TRANSFOR-M) MSc</p>
                    <p>Information Management MBA</p>
                    <p>International Media and Management MSc</p>
                    <p>Investment Management MSc</p>
                    <p>Law and Management MBA</p>
                    <p>Management MBA</p>
                    <p>Management and Finance MSc</p>
                    <p>Sustainable Forest and Nature Management (SUFONAMA) (Erasmus Mundus course) MSc</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Accounting, Banking and Finance</a></p>
                    <p>ACCA Qualification Professional Development</p>
                    <p>Accounting MSc</p>
                    <p>Accounting and Banking MSc</p>
                    <p>Accounting and Finance MSc</p>
                    <p>Accounting, Banking, Economics, Finance, Management Studies and Marketing PhD/MPhil</p>
                    <p>Banking and Finance MBA</p>
                    <p>Banking and Finance MSc</p>
                    <p>Banking and Finance (Chartered Banker) MSc</p>
                    <p>Banking and Finance (Chartered Banker) MA</p>
                    <p>Banking and Law MBA</p>
                    <p>Banking and Law MA</p>
                    <p>Chartered Banker MBA</p>
                    <p>Finance MSc</p>
                    <p>Finance MBA</p>
                    <p>Investment Management MSc</p>
                    <p>Islamic Banking and Finance MSc</p>
                    <p>Islamic Banking and Finance MBA</p>
                    <p>Law and Banking LLM</p>
                    <p>Management and Finance MSc</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">English Language and Linguistics</a><br>Applied Linguistics for TEFL MA<br>Bilingualism MA<br>Language Acquisition and Development MSc<br>Linguistics MA<br>Arthurian Literature MA/PGDip<br>Creative Writing MA/PGDip<br>English Literature MA/PGDip<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Forestry</a><br>Agroforestry MSc<br>Environmental Forestry MSc<br>Forestry MSc by Distance Learning<br>Forestry and Environmental Management degrees (TRANSFOR-M) MSc<br>Sustainable Forest and Nature Management (SUFONAMA) (Erasmus Mundus course) MSc<br>Sustainable Tropical Forestry (SUTROFOR) (Erasmus Mundus course) MSc<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">LAW</a></p>
                    <p>Banking and Law MBA</p>
                    <p>Banking and Law MA<br>Criminology and Law MA<br>International Commercial and Business Law LLM<br>International Criminal Law and International Human Rights Law LLM<br>International Intellectual Property Law LLM<br>International Law LLM<br>Law LLM<br>Law LLM Res<br>Law PhD/MPhil<br>Law and Banking LLM<br>Law and Criminology LLM<br>Law and Management MBA<br>Law of the Sea LLM<br>LLB (2-Year Law Conversion Course for Graduates) LLB<br>Maritime Law LLM<br>Procurement Law, Strategy and Practice by Distance Learning LLM<br>Public Procurement Law and Strategy LLM</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Medical Sciences</a></p>
                    <p>Clinical Sciences MSc/PGDip/PGCert<br>Genomics and Precision Medicine MSc/PGDip/PGCert<br>Medical Education Practice PGCert<br>Medical Molecular Biology with Genetics MSc/PGDip/PGCert<br>Molecular Medicine MRes<br>Physician Associate Studies MSc</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Sports Science</a></p>
                    <p>Applied Sport and Exercise Physiology MSc<br>Applied Sport Science MSc<br>Exercise Rehabilitation MSc<br>Sport and Exercise Physiology MRes/PGCert<br>Sport and Exercise Psychology MRes/PGCert<br>Sport and Exercise Psychology (BPS Accredited) MSc<br>Sport and Exercise Sciences MRes/PGCert</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Ocean Scienes</a></p>
                    <p>Applied Marine Geoscience MSc<br>Marine Biology MSc<br>Marine Environmental Protection MSc<br>Marine Renewable Energy MSc<br>Ocean Sciences MSc by Research<br>Physical Oceanography MSc</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Childhood and Youth Studies</a></p>
                    <p>Applied Marine Geoscience MSc<br>Marine Biology MSc<br>Marine Environmental Protection MSc<br>Marine Renewable Energy MSc<br>Ocean Sciences MSc by Research<br>Physical Oceanography MSc</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">MA</a></p>
                    <p>Banking and Finance&nbsp;MA<br>Banking and Law&nbsp;MA<br>Business and Marketing&nbsp;MA<br>Business with Consumer Psychology&nbsp;MA<br>Finance&nbsp;MA<br>Islamic Banking and Finance&nbsp;MA<br>Management and Finance&nbsp;MA</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong></p>
                    <p><a tabindex="0">Education</a><br>Education Doctorate Programme EdD<br>Education Studies (Full-time) MA/PGDip/PGCert<br>Educational Leadership EdD<br>PGCE Primary with QTS (3-11) [Wales and beyond through the CaBan partnership] PGCE Primary leading to the award of Qualified Teacher Status (Wales &amp; beyond through the CaBan partnership)<br>PGCE Secondary – Biology PGCE Secondary leading to the award of Qualified Teacher Status (Wales &amp; beyond through the CaBan partnership)<br>PGCE Secondary – Chemistry PGCE Secondary leading to the award of Qualified Teacher Status (Wales &amp; beyond through the CaBan partnership)<br>PGCE Secondary – Design &amp; Technology PGCE Secondary leading to the award of Qualified Teacher Status (Wales &amp; beyond through the CaBan partnership)<br>PGCE Secondary – Geography PGCE Secondary leading to the award of Qualified Teacher Status (Wales &amp; beyond through the CaBan partnership)<br>PGCE Secondary – Mathematics PGCE Secondary leading to the award of Qualified Teacher Status (Wales &amp; beyond through the CaBan partnership)<br>PGCE Secondary – Outdoor Activities PGCE Secondary leading to the award of Qualified Teacher Status (Wales &amp; beyond through the CaBan partnership)<br>PGCE Secondary – Physical Education PGCE Secondary leading to the award of Qualified Teacher Status (Wales &amp; beyond through the CaBan partnership)<br>PGCE Secondary – Physics PGCE Secondary leading to the award of Qualified Teacher Status (Wales &amp; beyond through the CaBan partnership)<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Conservation and Environmental Sciences</a></p>
                    <p>Agriculture and Environment MRes</p>
                    <p>Agroforestry MSc</p>
                    <p>Conservation and Land Management MSc</p>
                    <p>Environmental and Business Management MSc</p>
                    <p>Environmental Forestry MSc</p>
                    <p>Environmental Management MBA</p>
                    <p>Environmental Sciences MSc by Research</p>
                    <p>Food Security in the Changing Environment MSc by Distance Learning</p>
                    <p>Forestry and Environmental Management degrees (TRANSFOR-M) MSc</p>
                    <p>Sustainable Forest and Nature Management (SUFONAMA) (Erasmus Mundus course) MSc</p>
                    <p>Sustainable Tropical Forestry (SUTROFOR) (Erasmus Mundus course) MSc</p>
                    <p>Tropical Forestry MSc by Distance Learning</p>
                    <p>Tropical Forestry (International Commonwealth Scholarship) MSc by Distance Learning</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong></p>
                    <p>&nbsp;<br><a tabindex="0">Business Studies and Marketing</a></p>
                    <p>Business and Marketing MA</p>
                    <p>Business with Consumer Psychology MSc</p>
                    <p>Business with Consumer Psychology MA</p>
                    <p>Consumer Psychology with Business MSc/PGDip/PGCert</p>
                    <p>Consumer Psychology with Business MA/PGDip/PGCert</p>
                    <p>International Business MBA</p>
                    <p>International Commercial and Business Law LLM</p>
                    <p>International Marketing MBA</p>
                    <p><strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">MSc</a><br>Accounting&nbsp;MSc<br>Accounting and Banking&nbsp;MSc<br>Accounting and Finance&nbsp;MSc<br>Banking and Finance&nbsp;MSc<br>Business with Consumer Psychology&nbsp;MSc<br>Finance&nbsp;MSc<br>International Banking&nbsp;MSc<br>International Finance&nbsp;MSc<br>International Media Management&nbsp;MSc<br>Investment Management&nbsp;MSc<br>Islamic Banking and Finance&nbsp;MSc<br>Management and Finance&nbsp;MSc<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Film Studies</a><br>Film Studies MRes<br>Filmmaking: Concept to Screen MA<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Nursing, Midwifery, Health and Care Sciences</a><br>Acute Medical Care PGCert<br>Acute Surgical Care PGCert<br>Adult Nursing PGDip<br>Advanced Clinical Practice MSc/PGDip/PGCert<br>Advanced Clinical Practice (AHP) MSc/PGDip/PGCert<br>Advanced Healthcare Practice MSc/PGDip/PGCert<br>Advanced HEMS Practice MSc/PGDip/PGCert<br>Ageing and Dementia Studies Masters by Research<br>Ageing and Dementia Studies Professional Doctorate<br>Applied Health Research MSc/PGDip/PGCert<br>Chronic Disease Graduate Certificate<br>Contraception / Associated Health PGCert<br>Critical Care PGCert<br>Dementia Studies MSc/PGDip/PGCert<br>Diabetes Care and Management PGCert<br>Emergency Practitioner Graduate Certificate<br>General Practice Nursing Graduate Certificate<br>Health Economics Masters by Research<br>Leading Quality Improvement MSc/PGDip/PGCert<br>Legal and Ethical Concepts in Healthcare and Social Care PGCert<br>Mental Health PGCert<br>Mental Health Practice MSc/PGDip/PGCert<br>Midwifery Studies MSc/PGDip/PGCert<br>Non-surgical Aesthetic Medicine MSc/PGDip/PGCert<br>Optimising Breastfeeding PGCert<br>Optimising Childbirth PGCert<br>Palliative Care Practice PGCert<br>Physiotherapy PGDip<br>Prudent Healthcare PGCert<br>Public Health and Health Promotion (1 year, full-time / 2 years, part-time) MSc/PGDip/PGCert<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Media Studies</a><br>International Media and Management MSc<br>Media MRes<br>Professional Writing, Film, Media, New Media, Journalism, Creative Studies, Drama, Professional Writing PhD/MPhil Practice-Led Research<br>Professional Writing, Film, Media, New Media, Journalism, Creative Studies, Drama, Professional Writing PhD/MPhil<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Music</a><br>Composition and Sonic Art MMus/PGDip<br>Music MA/PGDip/PGCert<br>Music MPhil<br>Music MA by Research<br>Music MMus by Research<br>Music with Education MA/PGDip/PGCert<br>Performance MMus/PGDip<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Psychology</a><br>Applied Behaviour Analysis MSc/PGDip/PGCert<br>Applied Marketing Science MSc/PGDip/PGCert<br>Business with Consumer Psychology MA<br>Business with Consumer Psychology MSc<br>Clinical and Health Psychology MSc/PGDip/PGCert<br>Clinical Psychology DClinPsy<br>Consumer Psychology with Business MA/PGDip/PGCert<br>Consumer Psychology with Business MSc/PGDip/PGCert<br>Counselling MSc/PGDip/PGCert<br>Mindfulness-Based Approaches (3 years) MA/MSc<br>Mindfulness-Based Approaches (5 years) MA/MSc<br>Neuroimaging MSc/PGDip/PGCert<br>Positive Behaviour Support MSc/PGDip/PGCert<br>Principles of Clinical Neuropsychology MSc/PGDip/PGCert<br>Psychological Research MSc/PGDip/PGCert<br>Psychology MA/PGDip/PGCert<br>Psychology MRes/PGCert<br>Psychology MSc/PGDip/PGCert<br>Sport and Exercise Psychology MRes/PGCert<br>Sport and Exercise Psychology (BPS Accredited) MSc<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br><a tabindex="0">Analytical Chemistry MSc/PGDip</a><br>&nbsp;<strong><a style="color: #0067da;" href="course-registration-from.php">APPLY NOW</a></strong><br>
                    </p><!-- apply now -->
                    <div class="themestek-row wpb_row vc_row-fluid vc_rtl-columns-reverse themestek-total-col-1 themestek-zindex-0 vc_row container                 themestek-bgimage-position-center_center"></div>
                    <div class="themestek-column wpb_column vc_column_container vc_col-sm-12 themestek-zindex-0">
                        <div class="vc_column-inner  ">
                            <div class="wpb_wrapper">
                                <div class="themestek-vc_btn3-container themestek-vc_btn3-center "><a class="themestek-vc_general themestek-vc_btn3 themestek-vc_btn3-size-lg themestek-vc_btn3-shape-rounded themestek-vc_btn3-style-modern themestek-vc_btn3-weight-yes themestek-vc_btn3-block themestek-vc_btn3-icon-right themestek-vc_btn3-color-default btn btn-primary rounded-pill py-3 px-5 mt-3" href="course-registration-from.php" title="" target="_blank"><span>APPLY NOW <i class="themestek-vc_btn3-icon themifyicon ti-arrow-right"></i></span></a></div>		
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <!-- apply now -->
                    </div><!-- entry content -->      
            </article><!-- #post-## -->
        </main><!-- #main .site-main -->
    </div><!-- #primary .content-area -->
</div>
<!-- end foundation courses  -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Nowshera Virka Gujranwala, Pakistan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+92 3061366464</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>dreamwayeducationalconsultant<br>@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.facebook.com/share/g6s1aRQqi6TqogCF/?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.instagram.com/dreamwayeducational.11?igsh=MWJvbzg5djZsbjdyMw=="><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="student-services.php">Student Services</a>
                    <a class="btn btn-link" href="Pre-departure.php">Pre Depature and After Arrival</a>
                    <a class="btn btn-link" href="Student-Visa.php">Student Visa</a>
                    <a class="btn btn-link" href="Employment-Permit.php">Employee Permit</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="countrys.php">Countrys</a>
                    <a class="btn btn-link" href="contact.php">Support</a>
                    <a class="btn btn-link" href="course-registration-from.php">Apply Now</a>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Study Abroad</h5>
                    <a href="Study-in-USA.php" class="btn btn-link">Study in USA</a>
                    <a href="Study-in-UK.php" class="btn btn-link">Study in UK</a>
                    <a href="Study-in-south-cypress.php" class="btn btn-link">Study in south cypress</a>
                    <a href="Study-in-Malaysia.php" class="btn btn-link">Study in Malaysia</a>
                    <a href="Study-in-Kyrgyzstan.php" class="btn btn-link">Study in  kyrgystan</a>
                    <a href="Study-in-Dubai.php" class="btn btn-link">Study in Dubai</a>
                    <a href="Study-in-Australia.php" class="btn btn-link">Study in Australia</a>
                    <a href="Study-in-Canada.php" class="btn btn-link">Study in Canada</a>
                    <a href="Study-in-Finland.php" class="btn btn-link">Study in Finland</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">Designed By Baqir Ali developer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>