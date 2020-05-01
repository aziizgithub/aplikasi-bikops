<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bikops|Bimbingan Konseling Psikologi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/PSY.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    
                                </div>
                                <div class="text_wrap">
                                    <p><a href="<?php echo base_url('client/profile');?>"> <i class="ti-user"></i> Profile</a> <a href="<?php echo base_url();?>login/logout">Logout</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="<?php echo base_url();?>assets/img/logo.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a  href="<?php echo base_url();?>dashboard">Beranda</a></li>
                                                <li><a href="<?php echo base_url();?>konseling">Konseling</a></li>
                                                <li><a href="">Cari Pakar<i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo base_url();?>psikolog">Psikolog</a></li>
                                                        <li><a href="<?php echo base_url();?>psikiater">Psikiater</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Tentang Kami</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
  
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Psikolog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- popular_program_area_start  -->
    <div class="popular_program_area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">
                           
                            
                        </div>
                    </nav>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        
                       <?php foreach ($anak as $keys ): ?>
                           
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="<?php echo base_url();?>/assets/img/program/3.png" alt="">
                                </div>
                                <div class="program__content">
                                   
                                    <h4><?php echo $keys["nmpsig"];?></h4>

                                    <ul>
                                        <?php foreach ($anakk as $key ): ?>
                                        <li class="pt-3 pb-3">- <?php echo $key["nmcase"];?></li>
                                        <?php endforeach ?>
                                     
                                    </ul>
                                    <a href="<?= base_url('konseling/pilihpsik');?>/<?php echo $keys["idpsig"];?>/Anak-Anak" class="boxed-btn5">Pilih Psikolog</a>

                                </div>
                            </div>
                        </div>
                       <?php endforeach ?>
                    </div>
                </div>


                <!--<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="<?php echo base_url();?>/assets/img/program/1.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Chemical engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Pilih Psikolog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="<?php echo base_url();?>/assets/img/program/3.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Mechanical engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Pilih Psikolog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="<?php echo base_url();?>/assets/img/program/2.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Bio engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Pilih Psikolog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div> -->
                <!--< div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="<?php echo base_url();?>/assets/img/program/3.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Chemical engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Pilih Psikolog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="<?php echo base_url();?>/assets/img/program/2.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Mechanical engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Pilih Psikolog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="<?php echo base_url();?>/assets/img/program/1.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Bio engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Pilih Psikolog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div> -->
                <!--< div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="<?php echo base_url();?>/assets/img/program/2.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Chemical engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Pilih Psikolog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="<?php echo base_url();?>/assets/img/program/1.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Mechanical engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Pilih Psikolog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="<?php echo base_url();?>/assets/img/program/3.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Bio engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Pilih Psikolog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div> -->
            </div>

            
        </div>
    </div>
    <!-- popular_program_area_end -->



    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">
                        <div class="col-md-7">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="twitter.com">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                About Us
                            </h3>
                            <ul>
                                <li><a href="#">Online Learning</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Press Center</a></li>
                                <li><a href="#">Become an Instructor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Campus
                            </h3>
                            <ul>
                                <li><a href="#">Our Plans</a></li>
                                <li><a href="#">Free Trial</a></li>
                                <li><a href="#">Academic Solutions</a></li>
                                <li><a href="#">Business Solutions</a></li>
                                <li><a href="#">Government Solutions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Study
                            </h3>
                            <ul>
                                <li><a href="#">Admissions Policy</a></li>
                                <li><a href="#">Getting Started</a></li>
                                <li><a href="#">Visa Information</a></li>
                                <li><a href="#">Tuition Calculator</a></li>
                                <li><a href="#">Request Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Support
                            </h3>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">System Requirements</a></li>
                                <li><a href="#">Register Activation Key</a></li>
                                <li><a href="#">Site feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->


    <!-- JS here -->
    <script src="<?php echo base_url();?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/ajax-form.js"></script>
    <script src="<?php echo base_url();?>/assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/scrollIt.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/nice-select.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>/assets/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="<?php echo base_url();?>/assets/js/contact.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.form.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/mail-script.js"></script>

    <script src="<?php echo base_url();?>/assets/js/main.js"></script>

</body>

</html>