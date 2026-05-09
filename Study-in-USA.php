<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Study in USA</h1>
        </div>
    </div>
    <!-- Page Header End -->
    
    <!-- start USA -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/images1.jfif" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/images4.jfif" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s"              style="background-color: whitesmoke; color: #000; font-family:          sans-serif; font-size: medium;">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Study in USA</p>
                    <h4 style="text-align:left;" class="themestek-custom-heading ">Study in United States</h4>
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p>The USA is home to some of the topmost international universities. Studying here can empower students with academic prowess, making them distinguished from their peers with similar backgrounds.</p>
                            <p>The top universities provide highly accredited professors, advanced technology and research facilities. International students planning to study in the USA can look forward to the American campus lifestyle. They are much like small student towns mixed with socialising and learning new skills under the same roof. Whichever part of America you choose for higher studies, you’ll generally find the company of Americans to be positively curious, friendly and humorous.</p>
                            <p>If you wish to get started with the USA student visa process, Expert Education can assist you with your academic goals and requirements.&nbsp;Connect with our friendly team&nbsp;to help you grow and learn in a better study environment.</p>
                        </div>
                    </div>
			        <h4 style="text-align:left;" class="themestek-custom-heading ">Universities and courses available</h4>

	                <div class="wpb_single_image wpb_content_element vc_align_left">
		
		                <figure class="wpb_wrapper vc_figure">
			                <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" src="img/USA-Education.jpg" class="vc_single_image-img attachment-full" style=" width: 100%;height: 100%; display: block;" alt="">
                            </div>
		                </figure>
	                </div>

	                <div class="wpb_text_column wpb_content_element ">
		                <div class="wpb_wrapper">
			                <p>American culture has influenced the world with its trendy style of fashion, music and movies. Most students have grown fond of its vibrant and active lifestyle, making it the most sought after study destination. It’s not just about burying yourself in books but appreciating life outside the classroom as well, and that’s what you’ll get while pursuing academic goals in the US.</p>
                            <p>However, several processes are involved during college application, making it look overwhelmingly tiresome for international students. That’s why Expert Education is here to guide and help you prepare the documentations and applications required to study in the US.</p>
		                </div>
	                </div>

	                <div class="wpb_text_column wpb_content_element ">
		                <div class="wpb_wrapper">
			                <p>Some of the universities and courses you can look forward to, for studying in the US:
                            </p>
                        </div>
	                </div>

	                <div class="wpb_text_column wpb_content_element ">
		                <div class="wpb_wrapper">
			                <p><strong>Universities</strong></p>
                                <ol>
                                    <li>National University</li>
                                    <li>International University</li>
                                    <li>Northwood University</li>
                                    <li>Strayer University</li>
                                    <li>University of Southern California</li>
                                    <li>Pursue University</li>
                                    <li>New York University</li>
                                    <li>Michigan State University</li>
                                    <li>Boston University</li>
                                    <li>Ohio State University</li>
                                </ol>
                            <p><strong>Popular courses&nbsp;</strong></p>
                                <ol>
                                    <li>Computer Science &amp; Information Technology</li>
                                    <li>Engineering</li>
                                    <li>Medicine</li>
                                    <li>Business Management</li>
                                    <li>Social Science</li>
                                    <li>Computer Science</li>
                                    <li>Life Science</li>
                                    <li>Liberal Arts</li>
                                    <li>Biotechnology</li>
                                    <li>Architecture</li>
                                </ol>
                            <p>There’s a vast list of programs you can still choose to study in the US. There are student mentoring programs, free shuttle services and team sports that you will find easy to integrate into your campus life.</p>
                            <p>Some universities also have personalised health centres, career advisory services and accommodation officers.</p>
                            <p>The professors, too, are more than helpful when you need academic help. They are often available to speak with students after class, give expert advice and offload any worries about the course.</p>
                        </div>
	                </div>

                    <h4 style="text-align:left;" class="themestek-custom-heading ">Fee, Scholarship, Cost of Living</h4>
                    <div class="wpb_single_image wpb_content_element vc_align_left">
		
		                <figure class="wpb_wrapper vc_figure">
			                <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" src="img/usa.jpg" class="vc_single_image-img attachment-full" style=" width: 100%;height: 100%; display: block;" alt="">
                            </div>
		                </figure>
	                </div>
                    <h4 style="text-align:left;" class="themestek-custom-heading ">A world of possibilities</h4>

                    <div class="wpb_wrapper">
                        <p>Understanding the difference in&nbsp;<b>cost of studying in the US</b>&nbsp;can help you decide where you want to go. Public colleges charge between $35,000 and $45,000, while private colleges charge from $50,000 to $75,000 annually. However, most colleges don’t have a standardised government fee system as it depends on the college and the course selected.</p>
                        <p><b>Cost of undergraduate degrees in the US</b></p>
                        <ul>
                            <li><b>Public university</b>: $25,000-$35,000 per year</li>
                        </ul>
                        <ul>
                            <li><b>Private college</b>: $30,000-$45,000 per year</li>
                        </ul>
                        <p>Sometimes even higher: $50,000-$55,000 per year</p>
                        <ul>
                            <li><b>Community colleges</b>: $2,500-$3,000 per year</li>
                        </ul>
                        <p>Community colleges usually provide award certificates and associate degrees. They do not offer a bachelor’s degree because community colleges offer two-year courses, whereas universities offer four-year undergraduate courses. However, you can use the associate’s degree to qualify for the first half of your bachelor’s degree and later apply for a master’s degree.</p>
                        <p><b>Cost of a postgraduate degree in the US</b></p>
                        <ul>
                            <li>Public university: $20,000-$35,000 per year</li>
                        </ul>
                        <ul>
                            <li>Private college: $35,000-$50,000 per year</li>
                        </ul>
                    </div>
                    <h4 style="text-align:left;" class="themestek-custom-heading ">Scholarship to study in the US<br>
                    </h4>
                
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p>When it concerns studying in the US,&nbsp;<b>getting a scholarship</b>&nbsp;can prove significantly helpful for international students. It’s crucial to know that scholarships are competitive and take time for approval.&nbsp;You will find it easier to apply for a scholarship with professional help from Expert Education.</p>
                            <p>Students with good grades and who are athletically inclined are likely to get scholarships. Additionally, scholarships are available for art, dance and music.</p>
                            <p>There are multiple funding opportunities that you can make use of, to name a few:</p>
                            <ul>
                                <li>Fulbright Foreign Student Program</li>
                            </ul>
                            <ul>
                                <li>QS Undergraduate Scholarship</li>
                            </ul>
                            <ul>
                                <li>QS Leadership Scholarship</li>
                            </ul>
                            <ul>
                                <li>QS Leadership Scholarship for Excellence</li>
                            </ul>
                            <ul>
                                <li>Golden Key Graduate Scholar Award</li>
                            </ul>
                            <ul>
                                <li>IEFA Non-Government Scholarship</li>
                            </ul>
                        </div>
                    </div>
                    <h4 style="text-align:left;" class="themestek-custom-heading ">States Skilled Journey Visa</h4>
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p>The&nbsp;<b>cost of living in the US</b>&nbsp;can differ from location to location, and it’s vital to secure savings related to&nbsp;<b>primary and daily needs</b>. From emergencies to groceries, clothes, water, electricity, internet, books and study material, among other essentials, an international student must consider an approximate living cost of $10,000 to $12,000 per year in the US.</p>
                            <p>Although most colleges offer&nbsp;<b>on-campus residence</b>&nbsp;to international students, commonly called the ‘dorm room’ or dormitory. Students usually share a room with two to three other students with facilities like the internet, electricity, water, etc. The cost of campus accommodation ranges between $5000-$8000 per year.</p>
                            <p>Alternatives are&nbsp;<b>non-campus residences</b>, where the cost might be significantly higher. The usual charge ranges from $6,000 to $15,000 per year based on the location and apartment chosen.</p>
                            <p>When it comes to&nbsp;<b>travelling</b>, you can avail vehicle rental facilities, or public transport like cabs, trains, and buses. The cost of transportation can depend on where you are staying. However, to share an estimate, you would be spending approximately $30-$50 per month on a bus and train pass.&nbsp;For total transportation facilities, expect an average of $100-$300 per month depending on your budget, frequency and type of transport used.</p>
                
                        </div>
                    </div>
                    
                    <h4 style="text-align:left;" class="themestek-custom-heading ">Admission Process</h4>
                    <div class="wpb_single_image wpb_content_element vc_align_left">
                        <figure class="wpb_wrapper vc_figure">
                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" src="img/usa-aro.jpg" class="vc_single_image-img attachment-full" style=" width: 100%;height: 100%; display: block;" alt="">
                            </div>
                        </figure>
                    </div>
                    
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p>Planning ahead of time and collecting all necessary information can help you succeed in getting admission to the university of your choice. American universities do not believe in a one-track academic focus. They want their students to go beyond the book, which is what they also expect from international students. It’s not just about what you’ll do once you’ve joined the university, but how you’ve performed academically and personally in the past few years.</p>
                            <p>Therefore, the applicant’s past academic record is checked over the last four years of their schooling, including extracurricular activities, leadership positions and personal characteristics.American colleges and universities include different types of applications.&nbsp;It depends upon the students’ preferences and which admission cycle they want to choose. Here are some of the application deadline processes that may differ between college and university.</p>
                            <ul>
                                <li><b>Early Decision</b>&nbsp;– The early decision application deadline is about ten months before the commencement of a course. However, the deadline is usually set between the 1st and 15th of November. This timeframe helps improve the applicant’s chances of earning acceptance at some universities.&nbsp;You are required to halt all other applications once you get accepted at a specific college.</li>
                            </ul>
                            <ul>
                                <li><b>Early Action</b>&nbsp;– The early action deadline allows you to send in your college application early. However, unlike the early decision deadlines, it is not binding. You may apply to multiple colleges under early action application. Thus, you can expect an early response after you apply at the chosen college. Early action deadlines are generally set between the 1st and 15th of November.</li>
                            </ul>
                            <ul>
                                <li><b>Common Application</b>&nbsp;– The common application allows you to apply online to multiple colleges, more than 900 US universities, to be precise. The application process starts on 1st August with a deadline that ends in January, at least seven months before starting at the university. Sometimes, the deadline extends till March.</li>
                            </ul>
                            <ul>
                                <li><b>Regular Application</b>&nbsp;– The regular application process for admission is based on the deadlines set by the universities. The applicant can apply to multiple institutions within the timeframe set by the universities, acceptance of which is notified between 1st January and 1st March.</li>
                            </ul>
                            <p>There are more application deadlines other than the above that also depend on the course you have selected and whether you are studying at a college or university. For instance, the deadline applications for some colleges may include early action deadlines, rolling admission deadlines and so on. Similarly, for an undergraduate degree, some universities will typically offer either early admission or a regular admission process. You can get in touch with our team to know more.</p>
                            <p>Also, when choosing the right institute for you, consider the following aspects that might influence your decision.</p>
                            <ul>
                                <li>Talk to the admissions representatives, college or university tour guides and faculty</li>
                                <li>Reach out to a few existing university students to understand their experience</li>
                                <li>Take a virtual campus tour, if possible</li>
                                <li>If possible, attend a class or two and familiarise yourself with the teaching style</li>
                                <li>Check the college activities and recent issues in the student newspaper</li>
                            </ul>
                            <p>These are a few factors you can consider while selecting a university of your choice.</p>
                            <p>Another critical factor is that an international student must have student health insurance to gain admission to a US college or university. Depending on the institution and the health insurance package, you can expect to pay $30-$140 for health insurance per month. This package applies to students under 25 years of age.</p>
                            <p>Our&nbsp;team of experts&nbsp;can also help you decide while selecting an institute based on all these requirements and more.</p>
                        </div>
                    </div>
                    <h4 style="text-align:left;" class="themestek-custom-heading ">Study &amp; Beyond – Life in the US</h4>
                    <div class="wpb_single_image wpb_content_element vc_align_left">
                        <figure class="wpb_wrapper vc_figure">
                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" src="img/Living-in-usa.jpg" class="vc_single_image-img attachment-full" style=" width: 100%;height: 100%; display: block;" alt="">
                            </div>
                        </figure>
                    </div>
                    <h4 style="text-align:left;" class="themestek-custom-heading ">A great place to call home</h4>
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p>Prepare to experience a cross-section of the States where you’ll meet Americans and at least 20 other races. You’ll soon get used to the new way of living, developing a sense of individualism.</p>
                            <p>Americans, in general, are extremely friendly and helpful, which makes it easier for newcomers to settle in comfortably.</p>
                            <p>Being the third-largest country globally, America is home to some of the most amazing heritage-rich sites like the Grand Canyon National Park, the Great Smoky Mountains National Park, Times Square, the Statue of Liberty, and more. You can take a solo trip to the world-class cities along the Eastern Seaboard, the West Coast, the Southwest and the Hawaiian Islands. There’s so much adventure from its rich history, fun and glamour that will forever remain with you.</p>
                            <p>Every holiday is a proper celebration in the US where traditions, grooming and home decorations define the seasons. These celebrations are the best way to get involved in your new community.</p>
                            <p>It’s a place you can call home while you nurture your growth towards a brighter career. Are you planning to apply for a student visa in the USA? Allow us to connect with you and&nbsp;get started with the US student visa application&nbsp;and process. We’ll assist you with all there is to do and know before stepping into the land of dreams.</p>
                
                        </div>
                    </div>
                    <h2 class="fusion-responsive-typography-calculated" align="JUSTIFY" data-fontsize="32" data-lineheight="41.92px">For Apply in USA Contact us</h2>
                    <!-- apply now -->
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
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
     <!-- end USA -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Certification</p>
                <h1>Membership & Certification</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-card" src="img/ontario-tech-university.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Ontario Tech</h5>
                            <p class="text-primary">University</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://web.facebook.com/groups/UOITUndergraduates/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://twitter.com/ontariotech_u?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/ontariotechu/?hl=en"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-card" src="img/university-of-houston.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Houston</h5>
                            <p class="text-primary">University</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://web.facebook.com/UniversityOfHouston/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://twitter.com/UHouston?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/universityofhouston/?hl=en"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-card" src="img/segi-university.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Segi</h5>
                            <p class="text-primary">University</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://web.facebook.com/SEGiMalaysia/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://twitter.com/segi_uc?lang=en"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/segiedu/?hl=en"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-card" src="img/download.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Toronto</h5>
                            <p class="text-primary">University</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://web.facebook.com/universitytoronto/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://twitter.com/uoft"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/uoft/?hl=en"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


 <!-- Testimonial Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Testimonials</p>
            <h1>knows About Our Client Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>I would like to thank Dream Way Educational Consultant and the team for helping me to get my student visa for Malaysia. It was undoubtedly a great experience and I receive my offer letter in just 2 days.</p>
                    <h5 class="mb-1">Javeria Ashraf</h5>
                    <span class="fst-italic">Malaysia</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>I had an Excellent experience! Got my visa without much efforts from my side. Dream Way Educational Consultant took care of it all. Very friendly behavior, very much accessible and were spontaneous in responding to my queries.</p>
                    <h5 class="mb-1">Ali Hassan</h5>
                    <span class="fst-italic">United Kingdom</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>It was a wonderful experience from the Dream Way Educational Consultant, they helped me a lot on my study program in Australia. Dream Way give me the right counseling, helped me to select a great university, and on my visa process.</p>
                    <h5 class="mb-1">Shoaib Murad</h5>
                    <span class="fst-italic">Australia</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->




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
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
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