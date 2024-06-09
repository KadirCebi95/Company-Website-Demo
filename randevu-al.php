<?php require_once 'header.php'?>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper ">
        <div class="parallax" data-parallax-image="assets/img/about/about-banner.jpg"></div>
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Randevu Al</h1>
                <div class="breadcumb-menu-wrap">
                    <i class="far fa-home-lg"></i>
                    <ul class="breadcumb-menu">
                        <li><a href="home.php">Home</a></li>
                        <li class="active">Randevu Al</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Appointment Form Area 
    ==============================-->
    <section class="appointment-wrapper space">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xl-12 mb-40 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                    <form action="#" class="form-wrap1 shadow-none mb-0" data-bg-color="#f3f6f7">
                        <div class="form-title-box bg-title" data-bg-src="assets/img/bg/bg-shape-9.jpg">
                            <div class="row justify-content-between align-items-center">
                                <div class="col">
                                    <h2 class="h4 mb-2 text-white">Randevu Alın</h2>
                                </div>
                                <div class="col-auto d-none d-sm-block">
                                    <a href="tel:+905059356439" class="ripple-icon style2"><i class="fas fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-box">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <select class="form-select style3">
                                        <option hidden disabled selected>Hizmet Seçiniz</option>
                                        <option>Sünnet</option>
                                        <option>İnguinal herni kasık fıtığı</option>
                                        <option>İnmemiş testis</option>
                                        <option>Hipospadias</option>
                                        <option>Lazar ile pilonidal sinüs (kıl dönmesi)</option>
                                        <option>Laparoscopic Cerrahiler</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <select class="form-select style3">
                                        <option hidden disabled selected>Doktor Seçiniz</option>
                                        <option>Dr. Murat Çakar</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control  style3" placeholder="Adınız..">
                                    <i class="fal small fa-user"></i>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control  style3" placeholder="Email Adresiniz">
                                    <i class="fal small fa-envelope"></i>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="number" class="form-control  style3" placeholder="Telefon Numaranız">
                                    <i class="fal small fa-phone"></i>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="dateTime-pick form-control  style3" placeholder="Tarih & Saat Seçiniz">
                                    <i class="fal small fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-12 text-center">
                                    <button type="submit" class="vs-btn style2">Randevu Al<i class="far fa-calendar-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'footer.php'?>