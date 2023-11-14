@include('layouts.header')
<link href="assets/css/bootstrap.css">
<link href="assets/js/javascriptfile1.js">
<link href="assets/js/jquaryfile.js">
<!-- /.main-header -->
<section class="slider-one">

    <div class="thm-owl__carousel owl-carousel owl-theme" data-owl-options='{
				"loop": true,
				"autoplay": true,
				"autoplayTimeOut": 1000,
				"items": 1,
				"margin": 0,
				"animateIn": "fadeout",
				"animateOut": "slideOutDown",
				"nav": true,
				"dots": false,
				"navText": ["<span class=\"fa fa-arrow-left\"></span>","<span class=\"fa fa-arrow-right\"></span>"]
			}'>
        <div class="item">
            <div class="slider-one__item">
                <div class="slider-one__image" style="width: 100%; height: 100%;object-fit: fill;">
                    <video autoplay loop muted style="width: 100%; height: 100%;object-fit: fill;">
                        <source src="banners1.mp4" type="video/mp4">
                        <!-- If you have alternative video formats, add them as additional <source> tags -->
                    </video>
                </div>
                <!-- /.slider-one__image -->

                <div class="container" >


                    <h1 class="s1_heading" style="font-family:'Raleway', sans-serif;color: rgb(23, 49, 82);font-weight:700;"> Jobs in Petrochemical and<br> Gas & oil industries</h1>
                    <!-- /.slider-one__text -->
                    <h2 class="s1_sliderone" style="z-index: 10; font-family: 'Raleway',sans-serif; visibility: visible;color: rgb(23, 49, 82);
                     
                 "> View jobs in Oil & Gas - Projects Executed -<br> <br> Manpower supplied</h2>
                    <!-- /.slider-one__title -->

                    <div class="slider-one__btns">
                        <a href="{{url('jobs')}}" class="thm-btn thm-btn--three " style="background-color:#173152;">
                            <span style="color: white;">
                                View Jobs
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- second slider start  -->
        <div class="item">
            <div class="slider-one__item">
                <div class="slider-one__image" style="width: 100%; height: 100%;object-fit: fill;">
                    <video autoplay loop muted style="width: 100%; height: 100%;object-fit: fill;">
                        <source src="videos/cons.mp4" type="video/mp4">
                        <!-- If you have alternative video formats, add them as additional <source> tags -->
                    </video>
                </div>
                <!-- /.slider-one__image -->

                <div class="container" >


                    <h1 class="s1_heading" style="font-family:'Raleway', sans-serif;color: rgb(23, 49, 82);font-weight:700;">Civil<br>Construction</h1>
                    <!-- /.slider-one__text -->
                    <h2 class="s1_sliderone" style="z-index: 10; font-family: 'Raleway',sans-serif; visibility: visible;color: rgb(23, 49, 82);
                     
                 "> View jobs in Civil Construction sectors - Projects Executed -<br> <br> Manpower supplied</h2>
                    <!-- /.slider-one__title -->

                    <div class="slider-one__btns">
                        <a href="{{url('jobs')}}" class="thm-btn thm-btn--three " style="background-color:#173152;">
                            <span style="color: white;">
                                View Jobs
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </a>
                        <!-- /.thm-btn slider-one__btn -->
                       
                        <!-- /.thm-btn slider-one__btn -->
                    </div>
                    <!-- /.slider-one__btns -->
                </div>
            </div>
        </div>

        <!-- end second slider -->

        <!-- third slider start -->
        <div class="item">
            <div class="slider-one__item">
                <div class="slider-one__image" style="width: 100%; height: 100%;object-fit: fill;">
                    <video autoplay loop muted style="width: 100%; height: 100%;object-fit: fill;">
                        <source src="videos/medical.mp4" type="video/mp4">
                        <!-- If you have alternative video formats, add them as additional <source> tags -->
                    </video>
                </div>
                <!-- /.slider-one__image -->

                <div class="container" >


                    <h1 class="s1_heading" style="font-family:'Raleway', sans-serif;color: rgb(23, 49, 82);font-weight:700;"> Jobs in Medical<br>Sectors</h1>
                    <!-- /.slider-one__text -->
                    <h2 class="s1_sliderone" style="z-index: 10; font-family: 'Raleway',sans-serif; visibility: visible;color: rgb(23, 49, 82);
                     
                 ">  View jobs in Medical sectors - Projects Executed -<br> <br> Manpower supplied</h2>
                    <!-- /.slider-one__title -->

                    <div class="slider-one__btns">
                        <a href="{{url('jobs')}}" class="thm-btn thm-btn--three " style="background-color:#173152;">
                            <span style="color: white;">
                                View Jobs
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end third slider -->
 <div class="item">
            <div class="slider-one__item">
                <div class="slider-one__image" style="width: 100%; height: 120%;object-fit: fill;">
                    <video autoplay loop muted style="width: 100%; height: 120%;object-fit: fill;">
                        <source src="videos/agri.mp4" type="video/mp4">
                        <!-- If you have alternative video formats, add them as additional <source> tags -->
                    </video>
                </div>
                <!-- /.slider-one__image -->

                <div class="container" >


                    <h1 class="s1_heading" style="font-family:'Raleway', sans-serif;color: rgb(23, 49, 82);font-weight:700;"> Jobs in Agriculture <br>sectors</h1>
                    <h2 class="s1_sliderone" style="z-index: 10; font-family: 'Raleway',sans-serif; visibility: visible;color: rgb(23, 49, 82);color: black;
                     
                     "> View jobs in Agriculture sector - Projects Executed -<br> <br> Manpower supplied</h2>
                        
                    <!-- /.slider-one__text -->
                    <!-- /.slider-one__title -->
                       
                    <div class="slider-one__btns">
                        <a href="{{url('jobs')}}" class="thm-btn thm-btn--three " style="background-color:#173152;">
                            <span style="color: white;">
                                View Jobs
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end forth slider -->
         <div class="item">
            <div class="slider-one__item">
                <div class="slider-one__image" style="width: 100%; height: 100%;object-fit: fill;">
                    <video autoplay loop muted style="width: 100%; height: 100%;object-fit: fill;">
                        <source src="videos/security.mp4" type="video/mp4">
                        <!-- If you have alternative video formats, add them as additional <source> tags -->
                    </video>
                </div>
                <!-- /.slider-one__image -->

                <div class="container" >


                    <h1 class="s1_heading" style="font-family:'Raleway', sans-serif;color: rgb(23, 49, 82);font-weight:700;">Jobs in Security services<br> Sector</h1>
                    <!-- /.slider-one__text -->
                    <h2 class="s1_sliderone" style="z-index: 10; font-family: 'Raleway',sans-serif; visibility: visible;color: rgb(23, 49, 82);
                     
                 "> View jobs in sucurity Services sector - Projects Executed -<br> <br> Manpower supplied</h2>
                    <!-- /.slider-one__title -->

                    <div class="slider-one__btns">
                        <a href="{{url('jobs')}}" class="thm-btn thm-btn--three " style="background-color:#173152;">
                            <span style="color: white;">
                                View Jobs
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end fith slider -->
         <div class="item">
            <div class="slider-one__item">
                <div class="slider-one__image" style="width: 100%; height: 100%;object-fit: fill;">
                    <video autoplay loop muted style="width: 100%; height: 100%;object-fit: fill;">
                        <source src="videos/it.mp4" type="video/mp4">
                        <!-- If you have alternative video formats, add them as additional <source> tags -->
                    </video>
                </div>
                <!-- /.slider-one__image -->

                <div class="container" >


                    <h1 class="s1_heading" style="font-family:'Raleway', sans-serif;color: rgb(23, 49, 82);font-weight:700;"> Jobs in Information Technology<br>Sectors</h1>
                    <!-- /.slider-one__text -->
                    <h2 class="s1_sliderone" style="z-index: 10; font-family: 'Raleway',sans-serif; visibility: visible;color: rgb(23, 49, 82);
                     
                 "> View jobs in information technologies Sector - Projects Executed -<br> <br> Manpower supplied</h2>
                    <!-- /.slider-one__title -->

                    <div class="slider-one__btns">
                        <a href="{{url('jobs')}}" class="thm-btn thm-btn--three " style="background-color:#173152;">
                            <span style="color: white;">
                                View Jobs
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sixth slider -->
        
    </div>

</section>
<!-- end of job card  -->
<section>
    <br><br>
    <div class="container">
        <div class="row  justify-content-center section2_looking_job1" style="height: 50vh;">
            <div class="col-md-3  section2_looking_job">
                <div class="card-client">
                    <div class="user-picture">
                        <img src="job.png" >
                    </div>
                    <h1 class="name-client">Looking for Job
                       
                    </h1>
                    <div class="social-media">
                    <a href="{{'jobs'}}" class="btn_apply_now" style="color: #fff;">
                            Apply now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3  section2_looking_job">
                <div class="card-client">
                    <div class="user-picture">
                        <img src="card/employees.png"  >
                    </div>
                    <h1 class="name-client"> Looking For Employess
                       
                    </h1>
                    <div class="social-media">
                        <a href="{{url('contact')}}" class="btn_apply_now" style="color: #fff;">
                            Contact us
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery("#carousel").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: 20,
        /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 2
            },

            1024: {
                items: 3
            },

            1366: {
                items: 3
            }
        }
    });
</script>



<!-- /.about-five -->
<section class="service-five" >
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-md-12 col-lg-6 text-center">
                <div class="service-three__image" style="    position: relative;
                            top: 18%;
                          ">
                    <img src="assets/images/Transarabian.png" style="height:60%; width:60%;" alt="">
                    <div class="service-three__image__caption text-start">
                        <h3 class="count-box service-three__image__caption__count">
                            <span class="count-text" data-stop="50" data-speed="1400"></span>
                        </h3>
                        <!-- /.count-box -->
                        <p class="service-three__image__caption__text">Years Of Experience
                        </p>
                    </div>
                    <!-- /.service-three__image__caption -->
                    <div class="">
                        <i class="flaticon-tick"></i>
                        <span></span>
                    </div>
                    <!-- /.service-three__image__check -->
                </div>
                <!-- /.service-three__image -->
            </div>
            <!-- /.col-md-12 col-lg-6 -->
            <div class="col-md-12 col-lg-6">
                <div class="service-five__content">
                    <div class="sec-title text-start">
                        <p class="sec-title__tagline" style="color: #173152;">About Us</p>
                        <!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title" style="color: #173152;">Trans Arabian Travel & Trade</h3>
                        <!-- /.sec-title__title -->
                    </div>
                    <!-- /.sec-title -->
                    <div class="service-five__text" style="color: #173152;">We are a trusted name in the TManpower Export Business
                        because of our spotless track
                        record in recruiting professionals and
                        workers in the fields of Petro-chemical,
                        Agriculture, Medical Services, Civil
                        Construction, Administration,
                        Information Technology, Publi c
                        Utilities and the Hospitality Business
                        for the Gulf, Middle East, Central Asian
                        States, West Indies, and African
                        countries. Additionally we are also the
                        approved Manpower Promoters in
                        Pakistan for the Consolidated
                        Contractors International Company
                        SAL, Athens, Greece, since 1974..
                        <a href="{{url('/about')}}" class="thm-btn about-six__card__btn">
                            <span>
                                View More
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                    <!-- /.service-five__list list-unstyled -->
                </div>
                <!-- /.service-five__content -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section>
    <div class="container">
    <div class="slider-container">
        <div class="row slider-wrapper">
            <div>
                <h4 style="color: #173152;">Industries we caters to</h4>
                <h1 style="color: #173152;font-weight: 600;letter-spacing: 3px;">Effective,Experienced and <br>Expert Staffing Solutions</h>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/civil.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Civil Construction</h3>
                        <p class="text-muted mt-3 mb-0 ">Bridging Nations, Building Futures in the Civil Construction Industry...</p>
                        <div class="mt-3">
                            <a href="{{url('civil_contruction')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <rect width="20" height="15" x="2" y="3" class="uim-tertiary" rx="3"></rect>
                                <path class="uim-primary" d="M16,21H8a.99992.99992,0,0,1-.832-1.55469l4-6a1.03785,1.03785,0,0,1,1.66406,0l4,6A.99992.99992,0,0,1,16,21Z"></path>
                            </svg></span>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/petro.png">

                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Petrochemical </h3>
                        <p class="text-muted mt-3 mb-0"> Fuelling Petrochemical Industry Growth through Global Workforce Solutions...</p>
                        <div class="mt-3">
                            <a href="{{url('Petrochemical')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" width="1em">
                                <path class="uim-quaternary" d="M15,2c-3.3772,0.00142-6.27155,2.41462-6.88025,5.73651c2.90693-1.59074,6.553-0.52375,8.14374,2.38317c0.98206,1.79462,0.98206,3.96594,0,5.76057c3.8013-0.69634,6.31837-4.3424,5.62202-8.14369C21.27662,4.41261,18.37925,1.99872,15,2z"></path>
                                <circle cx="7" cy="17" r="5" class="uim-primary"></circle>
                                <path class="uim-tertiary" d="M11,7c-3.08339,0.00031-5.66461,2.33759-5.97,5.40582c2.5358-1.08949,5.47469,0.08297,6.56418,2.61877c0.54113,1.25947,0.54113,2.68593,0,3.94541c3.29729-0.32786,5.7045-3.26663,5.37664-6.56392C16.66569,9.33735,14.08386,6.99972,11,7z"></path>
                            </svg></span>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/medi.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Medical Services</h3>
                        <p class="text-muted mt-3 mb-0"> Empowering Global Careers for 50 Years - Your Trusted Partner in Medical Services...</p>
                        <div class="mt-3">
                            <a href="{{url('Medical_Services')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-quaternary" d="M6,23H2a.99974.99974,0,0,1-1-1V16a.99974.99974,0,0,1,1-1H6a.99974.99974,0,0,1,1,1v6A.99974.99974,0,0,1,6,23Z"></path>
                                <path class="uim-tertiary" d="M14,23H10a.99974.99974,0,0,1-1-1V10a.99974.99974,0,0,1,1-1h4a.99974.99974,0,0,1,1,1V22A.99974.99974,0,0,1,14,23Z"></path>
                                <path class="uim-primary" d="M22,23H18a.99974.99974,0,0,1-1-1V2a.99974.99974,0,0,1,1-1h4a.99974.99974,0,0,1,1,1V22A.99974.99974,0,0,1,22,23Z"></path>
                            </svg></span>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2" style="display: none;">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/agri.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Agriculture</h3>
                        <p class="text-muted mt-3 mb-0">Transforming Agriculture for a Sustainable Future - 50 Years of Expertise in Agricultural Solutions...</p>
                        <div class="mt-3">
                            <a href="{{url('Agriculture')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-tertiary" d="M20 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.02883 1.02883 0 0 1 19.29 9.29a1.04667 1.04667 0 0 1 1.41992 0 1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 20 11zM19 6.5a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 19 6.5zM20 4a.98979.98979 0 0 1-.91992-1.37988A1.02883 1.02883 0 0 1 19.29 2.29a1.04669 1.04669 0 0 1 1.41992 0 1.02883 1.02883 0 0 1 .21.33008A.98919.98919 0 0 1 20.71 3.71a1.16044 1.16044 0 0 1-.33008.21A.9994.9994 0 0 1 20 4zM7.03027 6.24023a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 8 7H8A.99122.99122 0 0 1 7.03027 6.24023zm4-1a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 12 6h0A1.00294 1.00294 0 0 1 11.03027 5.24023zm4-1a.99816.99816 0 0 1 .7295-1.21h0a1.00272 1.00272 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 16 5h0A.99122.99122 0 0 1 15.03027 4.24023zM4 8A.99042.99042 0 0 1 3 7a.83154.83154 0 0 1 .08008-.37988A1.02883 1.02883 0 0 1 3.29 6.29 1.04669 1.04669 0 0 1 4.71 6.29a1.02883 1.02883 0 0 1 .21.33008A.99013.99013 0 0 1 4 8zM4 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.14718 1.14718 0 0 1 3.29 9.29 1.04667 1.04667 0 0 1 4.71 9.29a1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 4 11zM15 10a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 15 10zm-4 0a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 11 10zM7 10A1.0032 1.0032 0 0 1 8 9H8a1.0032 1.0032 0 0 1 1 1H9a1.0032 1.0032 0 0 1-1 1H8A1.0032 1.0032 0 0 1 7 10z"></path>
                                <polygon class="uim-primary" points="20 14 20 21 4 17 4 14 20 14"></polygon>
                                <path class="uim-primary" d="M20,22a.97427.97427,0,0,1-.24219-.03027l-16-4A.99961.99961,0,0,1,3,17V14a.99943.99943,0,0,1,1-1H20a.99943.99943,0,0,1,1,1v7a1.0005,1.0005,0,0,1-1,1ZM5,16.21875l14,3.5V15H5Z"></path>
                            </svg></span>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2" style="display: none;">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/security.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Security</h3>
                        <p class="text-muted mt-3 mb-0">Safeguarding Lives and Assets with Unparalleled Security Solutions ...</p>
                        <div class="mt-3">
                            <a href="{{url('Security')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-quaternary" d="M12,22a.99974.99974,0,0,1-1-1V3a1,1,0,0,1,2,0V21A.99974.99974,0,0,1,12,22Z"></path>
                                <polygon class="uim-primary" points="21 12 16 7 16 17 21 12"></polygon>
                                <path class="uim-primary" d="M16,18a1,1,0,0,1-1-1V7a.99991.99991,0,0,1,1.707-.707l5,5a.99962.99962,0,0,1,0,1.41406l-5,5A.99893.99893,0,0,1,16,18Zm1-8.58594v5.17188L19.58594,12Z"></path>
                                <path class="uim-tertiary" d="M3 13a.99075.99075 0 0 1-.92041-1.37988A1.14883 1.14883 0 0 1 2.29 11.29a1.04669 1.04669 0 0 1 1.41992 0 1.03724 1.03724 0 0 1 .21.33008A.83792.83792 0 0 1 4 12a.99042.99042 0 0 1-1 1zM4.79 15.21a1.00761 1.00761 0 0 1 0-1.41992h0a1.00671 1.00671 0 0 1 1.41992 0h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 15.21zM8 18a.99183.99183 0 0 1-.71-.29 1.16213 1.16213 0 0 1-.21045-.33008A.99906.99906 0 0 1 7 17a1.05 1.05 0 0 1 .29-.71 1.0387 1.0387 0 0 1 1.08984-.21 1.15384 1.15384 0 0 1 .33008.21A1.05232 1.05232 0 0 1 9 17a.9994.9994 0 0 1-.08008.37988 1.17124 1.17124 0 0 1-.21.33008A.99183.99183 0 0 1 8 18zM7 13.66992a.996.996 0 0 1 1-1H8a.99632.99632 0 0 1 1 1H9a1.00319 1.00319 0 0 1-1 1H8A1.00288 1.00288 0 0 1 7 13.66992zm0-3.33984a1.00288 1.00288 0 0 1 1-1H8a1.00319 1.00319 0 0 1 1 1H9a.99693.99693 0 0 1-1 1H8A.99663.99663 0 0 1 7 10.33008zM8 8a.99075.99075 0 0 1-.92041-1.37988A1.03011 1.03011 0 0 1 7.29 6.29a.98544.98544 0 0 1 1.62988.33008A.99013.99013 0 0 1 8 8zM4.79 10.21A1.00761 1.00761 0 0 1 4.79 8.79h0A1.00671 1.00671 0 0 1 6.21 8.79h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 10.21z"></path>
                            </svg></span>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2" style="display: none;">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/it.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Information Technology</h3>
                        <p class="text-muted mt-3 mb-0">Empowering Innovation through Cutting-Edge IT Solutions - Your Reliable Partner for ...</p>
                        <div class="mt-3">
                            <a href="{{url('Information_Technology')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path>
                                <path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path>
                            </svg></span>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2" style="display: none;">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/public.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Public Utilities </h3>
                        <p class="text-muted mt-3 mb-0">Powering Communities with Essential Public Utilities - Enhancing Quality of Life through...</p>
                        <div class="mt-3">
                            <a href="{{url('public_Utilities')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path>
                                <path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path>
                            </svg></span>
                    </div>
                </div>
            </div>      
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2" style="display: none;">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/hos.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Hospitality</h3>
                        <p class="text-muted mt-3 mb-0">Elevating Hospitality Experiences with Unmatched Service - Where Memorable Moments ...</p>
                        <div class="mt-3">
                            <a href="{{url('Hospitality')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path>
                                <path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path>
                            </svg></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2" style="display: none;">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/log.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Logistics</h3>
                        <p class="text-muted mt-3 mb-0">Efficiency in Motion - Streamlining Logistics Solutions for Seamless Operations...</p>
                        <div class="mt-3">
                            <a href="{{url('Logistics')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path>
                                <path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path>
                            </svg></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2" style="display: none;">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/admin.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Administration</h3>
                        <p class="text-muted mt-3 mb-0">Simplify, Streamline, Succeed - Expert Administration Solutions for Efficient Operations...</p>
                        <div class="mt-3">
                            <a href="{{url('Administration')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path>
                                <path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path>
                            </svg></span>
                    </div>
                </div>
            </div>
            <!-- 11 -->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2" style="display: none;">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/it.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Information Technology</h3>
                        <p class="text-muted mt-3 mb-0">Empowering Innovation through Cutting-Edge IT Solutions - Your Reliable Partner for ...</p>
                        <div class="mt-3">
                            <a href="{{url('Information_Technology')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path>
                                <path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path>
                            </svg></span>
                    </div>
                </div>
            </div>
            <!-- 12  -->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 industry-card slider-item2" style="display: none;">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="">
                        <img src="indus/security.png">
                    </div>
                    <div class="content mt-4">
                        <h3 class="title" style="color:#173152;text-align: center;font-weight: 600;">Security</h3>
                        <p class="text-muted mt-3 mb-0">Safeguarding Lives and Assets with Unparalleled Security Solutions ...</p>
                        <div class="mt-3">
                            <a href="{{url('Security')}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                <path class="uim-quaternary" d="M12,22a.99974.99974,0,0,1-1-1V3a1,1,0,0,1,2,0V21A.99974.99974,0,0,1,12,22Z"></path>
                                <polygon class="uim-primary" points="21 12 16 7 16 17 21 12"></polygon>
                                <path class="uim-primary" d="M16,18a1,1,0,0,1-1-1V7a.99991.99991,0,0,1,1.707-.707l5,5a.99962.99962,0,0,1,0,1.41406l-5,5A.99893.99893,0,0,1,16,18Zm1-8.58594v5.17188L19.58594,12Z"></path>
                                <path class="uim-tertiary" d="M3 13a.99075.99075 0 0 1-.92041-1.37988A1.14883 1.14883 0 0 1 2.29 11.29a1.04669 1.04669 0 0 1 1.41992 0 1.03724 1.03724 0 0 1 .21.33008A.83792.83792 0 0 1 4 12a.99042.99042 0 0 1-1 1zM4.79 15.21a1.00761 1.00761 0 0 1 0-1.41992h0a1.00671 1.00671 0 0 1 1.41992 0h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 15.21zM8 18a.99183.99183 0 0 1-.71-.29 1.16213 1.16213 0 0 1-.21045-.33008A.99906.99906 0 0 1 7 17a1.05 1.05 0 0 1 .29-.71 1.0387 1.0387 0 0 1 1.08984-.21 1.15384 1.15384 0 0 1 .33008.21A1.05232 1.05232 0 0 1 9 17a.9994.9994 0 0 1-.08008.37988 1.17124 1.17124 0 0 1-.21.33008A.99183.99183 0 0 1 8 18zM7 13.66992a.996.996 0 0 1 1-1H8a.99632.99632 0 0 1 1 1H9a1.00319 1.00319 0 0 1-1 1H8A1.00288 1.00288 0 0 1 7 13.66992zm0-3.33984a1.00288 1.00288 0 0 1 1-1H8a1.00319 1.00319 0 0 1 1 1H9a.99693.99693 0 0 1-1 1H8A.99663.99663 0 0 1 7 10.33008zM8 8a.99075.99075 0 0 1-.92041-1.37988A1.03011 1.03011 0 0 1 7.29 6.29a.98544.98544 0 0 1 1.62988.33008A.99013.99013 0 0 1 8 8zM4.79 10.21A1.00761 1.00761 0 0 1 4.79 8.79h0A1.00671 1.00671 0 0 1 6.21 8.79h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 10.21z"></path>
                            </svg></span>
                    </div>
                </div>
            </div>
            <!-- end  -->
        </div>
        <br>
        <div class="slider-nav">
  <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
  <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
</div>

    </div>
    </div>
</section>

<section class="service-five">

    
</section>

<section class="service-section">
  <div class="container">
    <div class="section-title" style="background: none;text-align: center;">
      <h2 class="card-title" style="color: #173152;text-align: center;background: none;"> Our Services</h1>
    </div>
    <div class="slider-container">
      <div class="row slider-wrapper">
        <div class="col-lg-4 col-md-6 industry-card1 slider-item1">
          <div class="service-card">
            <div class="sb-icon">
              <div class="sb-img-icon"><img src="newservises/setting.png" alt=""></div>
            </div>
            <h3 class="card-heading">TA Technical Institute</h3>
            <p> Our expert team of trainers and assessors provide customized training programs,..</p>
            <a href="{{url('recruiter')}}" class="readmore">READ MORE</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 industry-card1 slider-item1">
          <div class="service-card">
            <div class="sb-icon">
              <div class="sb-img-icon"><img src="newservises/trade.png" alt=""></div>
            </div>
            <h3 class="card-heading">TA Trading and contracting</h3>
            <p>Recruitment agencies and employers look for Traders who not only have an excellent academic record...</p>
            <a href="{{url('trading_contrading')}}" class="readmore">READ MORE</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 industry-card1 slider-item1">
          <div class="service-card">
            <div class="sb-icon">
              <div class="sb-img-icon"><img src="newservises/group.png" alt=""></div>
            </div>
            <h3 class="card-heading">International & local Recruiter</h3>
            <p>In today's interconnected world, the success of businesses heavily relies on their ability to tap into global talent pools..</p>
            <a href="{{url('international_recruiter')}}" class="readmore">READ MORE</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 industry-card1 slider-item1">
          <div class="service-card">
            <div class="sb-icon">
              <div class="sb-img-icon"><img src="newservises/analysis.png" alt=""></div>
            </div>
            <h3 class="card-heading">Technical Training and Testing</h3>
            <p>In the dynamic world of financial markets, Trans Arabian has emerged as a leading company with 50 years..</p>
            <a href="{{url('trading_testing')}}" class="readmore">READ MORE</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 industry-card1 slider-item1">
          <div class="service-card">
            <div class="sb-icon">
              <div class="sb-img-icon"><img src="newservises/salary.png" alt=""></div>
            </div>
            <h3 class="card-heading">Visa and Payroll services</h3>
            <p>Trans Arabian understands that obtaining the necessary visas for international employees can be a daunting and time-consuming ..</p>
            <a href="{{url('visa_payroll')}}" class="readmore">READ MORE</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 industry-card1 slider-item1">
          <div class="service-card">
            <div class="sb-icon">
              <div class="sb-img-icon"><img src="newservises/transportation.png" alt=""></div>
            </div>
            <h3 class="card-heading">Logistic and global mobility</h3>
            <p>Within the ever-expanding global landscape, Trans Arabian has established itself as a trailblazer in the realm of travel logistics ...</p>
            <a href="{{url('logistic_mobility')}}" class="readmore">READ MORE</a>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-nav">
  <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
  <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
</div>
  </div>
</section>
<style>
    .companies_logo_align img {
        height: 60px;
    
    }
</style>
<!-- servises end -->
<section class="companies">
    <div class="container" style="padding-top: 20vh;" id="our_client">
        <h2 class="mb100" style="font-family: 'Montserrat', sans-serif;font-weight: 600;font-size: 44px;color:#173152;text-align: center;">Our <span style="font-family: 'Montserrat', sans-serif;font-weight: 600;font-size: 44px;color:#173152;">Clients</span></h2>
        <div id="client-carousel" class="carousel slide" data-ride="carousel" style="margin-top: 8vh;">
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 companies_logo_align">
                            <img src="https://www.el-seif.com.sa/assets/upload/166263383521.png" alt="Client Logo 1" class="img-fluid">

                        </div>
                        <div class="col-md-3 col-sm-6 companies_logo_align">
                            <img src="company/icms.png" alt="Client Logo 2" class="img-fluid">

                        </div>
                        <div class="col-md-3 col-sm-6 companies_logo_align">
                            <img src="company/bam.jpeg" alt="Client Logo 3" class="img-fluid">

                        </div>

                        <div class="col-md-3 col-sm-6 companies_logo_align">
                            <img src="company/acec1.png" alt="Client Logo 3" width="140" class="img-fluid">

                        </div>


                        <!-- Add more client logos here -->
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">

                        <div class="col-md-2 col-sm-6 companies_logo_align">
                            <img src="company/kbr.png" alt="Client Logo 4" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 companies_logo_align">
                            <img src="company/ccc.png" width="100" alt="Client Logo 5" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 companies_logo_align">
                            <img src="company/albarak.png" alt="Client Logo 6" width="100" height="100" class="img-fluid">

                        </div>

                        <div class="col-md-2 col-sm-6 companies_logo_align">
                            <img src="company/esom.jpeg" alt="Client Logo 6" width="100" height="130" class="img-fluid">

                        </div>

                        <div class="col-md-2 col-sm-6 companies_logo_align">
                            <img src="company/vinci1.png" alt="Client Logo 6" class="img-fluid">

                        </div>

                        <!-- Add more client logos here -->
                    </div>
                </div>
            </div>
            <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#client-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#client-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color: black;">Next</span>
        </a>
    </div>
    </div>
    <br>

</section>
<style>
    .country
    {
        padding: 2vh;
    }
</style>

<section class="companies" style="margin-top: 10vh;">
    <div class="container" style="margin-top: 3vh;">
        <h2 class="mb100" style="font-family: 'Montserrat', sans-serif;font-weight: 600;font-size: 44px;color:#173152;text-align:center;">Countries <span style="font-family: 'Montserrat', sans-serif;font-weight: 600;font-size: 44px;color:#173152;">We Serve</span></h2>
        <div id="client-carousel" class="carousel slide" data-ride="carousel" style="margin-top: 8vh;">
            <div class="carousel-inner">
                <div class="countries_janda">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 country" >
                            <img src="country/england.webp" alt="Client Logo 1" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/japan.webp" alt="Client Logo 2" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/uae.webp" alt="Client Logo 3" class="img-fluid">

                        </div>

                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/qatar.webp" alt="Client Logo 3" class="img-fluid">

                        </div>

                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/jordan.webp" alt="Client Logo 3" class="img-fluid">

                        </div>

                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/kazakhstan.webp" alt="Client Logo 6" class="img-fluid">

                        </div>
                        <!-- Add more client logos here -->
                    </div>
                </div><br>
                <div class="countries_janda">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/korea.webp" alt="Client Logo 4" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/qatar.webp" alt="Client Logo 5" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/saudi.webp" alt="Client Logo 6" class="img-fluid">

                        </div>

                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/uae.webp" alt="Client Logo 6" class="img-fluid">

                        </div>

                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/yameen.jpg" alt="Client Logo 6" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/azerbaijan.webp" alt="Client Logo 6" class="img-fluid">

                        </div>

                        <!-- Add more client logos here -->
                    </div>
                </div><br>
                <!-- Add more carousel items as needed -->
                <div class="countries_janda">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/garenda.webp" alt="Client Logo 4" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/turk.webp" alt="Client Logo 5" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/Guinea.webp" alt="Client Logo 6" class="img-fluid">

                        </div>

                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/Mozam.webp" alt="Client Logo 6" class="img-fluid">

                        </div>

                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/Papua.webp" alt="Client Logo 6" class="img-fluid">

                        </div>
                        <div class="col-md-2 col-sm-6 country">
                            <img src="country/uzbek.webp" alt="Client Logo 6" class="img-fluid">

                        </div>

                        <!-- Add more client logos here -->
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#client-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#client-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color: black;">Next</span>
            </a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</section>
<br>
<br>
<br>
<br>


<!-- /.container -->
@include('layouts.footer')
<!-- js for industries  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var itemsToShow = 3;
        var $sliderItems = $('.slider-item2');
        var currentIndex = 0;

        function showItems() {
            var endIndex = currentIndex + itemsToShow;
            $sliderItems.hide().slice(currentIndex, endIndex).show();
        }

        function updateSlider(direction) {
            if (direction === 'next') {
                if (currentIndex + itemsToShow < $sliderItems.length) {
                    currentIndex += itemsToShow;
                }
            } else if (direction === 'prev') {
                if (currentIndex - itemsToShow >= 0) {
                    currentIndex -= itemsToShow;
                }
            }

            showItems();
        }

        showItems();

        // Button click event listeners
        $('.next-btn').on('click', function() {
            updateSlider('next');
        });

        $('.prev-btn').on('click', function() {
            updateSlider('prev');
        });
    });
</script>
<!-- servises js or jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    var $sliderItems = $('.slider-item1');
    var currentIndex = 0;
    var itemsToShow = 3;

    function showItems() {
      $sliderItems.hide().slice(currentIndex, currentIndex + itemsToShow).show();
    }

    function updateSlider(direction) {
      if (direction === 'next') {
        currentIndex += itemsToShow;
        if (currentIndex + itemsToShow > $sliderItems.length) {
          currentIndex = 0;
        }
      } else if (direction === 'prev') {
        currentIndex -= itemsToShow;
        if (currentIndex < 0) {
          currentIndex = $sliderItems.length - itemsToShow;
        }
      }

      showItems();
    }

    showItems();

    // Button click event listeners
    $('.next-btn').on('click', function() {
      updateSlider('next');
    });

    $('.prev-btn').on('click', function() {
      updateSlider('prev');
    });
  });
</script>
<!-- user login authintication -->
