<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <title>Registrasi Bikops</title>
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
                                                <li><a href="<?php echo base_url();?>konseling">Konseling</a></li>
                                                
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
                <form class="login100-form validate-form" action="<?php echo base_url('register/register'); ?>" method="post">
                    <div class="login100-form-avatar">
                        <img src="<?php echo base_url();?>/assets/images/login.png" alt="AVATAR">
                    </div>

                    <span class="login100-form-title p-t-20 p-b-45">
                        Registrasi
                    </span>

                    <div class="wrap-input100 validate-input m-b-10"">
                        <input class="input100" type="text" placeholder="Nama Pengguna" name="nama" value="<?= set_value('nama'); ?>">
                        <span class="focus-input100"></span>
                        </span>
                    </div>
                    <small class="text-danger"><?php echo form_error('nama'); ?></small>
                    <div class="wrap-input100 validate-input m-b-10"">
                        <input class="input100" type="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <span class="focus-input100"></span>
                    </div>

                    <small style="font-size: 1px"class="text-danger"><?php echo form_error('email'); ?></small>
                    <div class="wrap-input100 validate-input m-b-10">
                            <input  class="input100" type="password" name="password1" placeholder="Password" >
                            <span class="focus-input100"></span>
                        </div>
                        <small class="text-danger"><?php echo form_error('password1'); ?></small>
                    <div class="wrap-input100 validate-input m-b-10">
                        <input class="input100" type="password" name="password" placeholder="Konfirmasi Password">
                        <span class="focus-input100"></span>
                    </div>
                    <small class="text-danger"><?php echo form_error('password'); ?></small>
                     <div class="wrap-input100 validate-input m-b-10">
                        <select class="input100" name="jk" value="<?= set_value('jk'); ?>">
                            <option value="-" >--Pilih Jenis Kelamin--</option>
                            <option value="L" >Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <small class="text-danger"><?php echo form_error('jk'); ?></small>
                    <div class="wrap-input100 validate-input m-b-10" >
                        <input class="input100" min="1" max="999" type="number" name="umur" placeholder="Umur" value="<?= set_value('umur'); ?>">
                        <span class="focus-input100"></span>
                    </div>
                    <small class="text-danger"><?php echo form_error('umur'); ?></small>
                    <div class="wrap-input100 validate-input m-b-10" >
                         <select class="input100" name="kota" value="<?= set_value('kota'); ?>">
                            <option value="-" >--Pilih Kota--</option>
                            <option value="Bandar Lampung" >Bandar Lampung</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Kalimantan">Kalimantan</option>
                        </select>
                    </div>
                    <small class="text-danger"><?php echo form_error('kota'); ?></small>
                     <div class="wrap-input100 validate-input m-b-10" ">
                        <input class="input100" type="text" name="nohp" placeholder="No Hp" value="<?= set_value('nohp'); ?>">
                        <span class="focus-input100"></span>
                    </div>
                    <small class="text-danger"><?php echo form_error('nohp'); ?></small>
                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn" action="submit">
                            Registrasi
                        </button>
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

</body>

</html>