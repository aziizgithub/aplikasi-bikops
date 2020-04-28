<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <title>Login V12</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/main.css">
<!--===============================================================================================-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bikops|Bimbingan Konseling Psikologi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/logo.jpg">
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

        <div class="header-area ">
            
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="<?php echo base_url();?>">
                                            <img src="<?php echo base_url();?>assets/img/logo.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a  href="<?php echo base_url();?>dashboard">Beranda</a></li>
                                                <li><a href="Courses.html">Konseling</a></li>
                                                <li><a href="#">Penanganan<i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Penanganan</a></li>
                                                        <li><a href="single-blog.html">single-blog</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Cari Pakar<i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="Event.html">Psikolog</a></li>
                                                        <li><a href="event_details.html">Psikiater</a></li>
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
</head>
<body>


    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-30">
                <form class="login100-form" action="<?php echo base_url('login');?>" method="post">
                    <div class="login100-form-avatar">
                        <img src="<?php echo base_url();?>/assets/images/login.png" alt="AVATAR">
                    </div>

                    <span class="login100-form-title p-t-20 p-b-45">
                        Login
                    </span>

                   
                    <div class="wrap-input100">
                         <?php echo $this->session->flashdata('message'); ?>
                    </div>
                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                        <input class="input100" type="text" name="nmuser" placeholder="Enter Username" value="<?= set_value('nmuser'); ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                        <small class="text-danger"><?php echo form_error('nmuser'); ?></small>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Enter Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <small class="text-danger"><?php echo form_error('password'); ?></small>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="text-center w-full p-t-25 p-b-230">

                        <a href="<?php echo base_url('register'); ?>" class="txt1">
                            Create an Account!
                        </a><br>
                        <a href="#" class="txt1">
                            Forgot Username / Password?
                        </a>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>/assets/js/mainn.js"></script>

</body>
</html>
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

<!-- jQuery-->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Bootsrap -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</body>

</html>