<?php
include "header.php";
require "langs/langs.php";
?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown"><?php echo $lang["about_title"]; ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#"><?php echo $lang["aboutsublink_1"]; ?></a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#"><?php echo $lang["aboutsublink_2"]; ?></a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page"><?php echo $lang["aboutsublink_3"]; ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/about_us.png">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?php echo $lang["about_subtitle"]; ?></h1>
                    <p class="mb-4"><?php echo $lang["about_text"]; ?></p>
                    <p><i class="fa fa-check text-primary me-3"></i><?php echo $lang["about_future_1"]; ?></p>
                    <p><i class="fa fa-check text-primary me-3"></i><?php echo $lang["about_future_2"]; ?></p>
                    <p><i class="fa fa-check text-primary me-3"></i><?php echo $lang["about_future_3"]; ?></p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href=""><?php echo $lang["send"]; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3"><?php echo $lang["section_title_2"]; ?></h1>
                    <p class="text-white mb-0"><?php echo $lang["section_text_2"]; ?></p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href=""><?php echo $lang["visit"]; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                 style="max-width: 500px;">
                <h1 class="display-5 mb-3"><?php echo $lang["section_title_3"]; ?></h1>
                <p><?php echo $lang["section_title_3_text"];?></p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3"><?php echo $lang["service_1"];?></h4>
                        <p class="mb-4"><?php echo $lang["service_1_text"];?></p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href=""><?php echo $lang["read_more"];?></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                        <h4 class="mb-3"><?php echo $lang["service_2"];?></h4>
                        <p class="mb-4"><?php echo $lang["service_2_text"];?></p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href=""><?php echo $lang["read_more"];?></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                        <h4 class="mb-3"><?php echo $lang["service_3"];?></h4>
                        <p class="mb-4"><?php echo $lang["service_3_text"];?></p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href=""><?php echo $lang["read_more"];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

<?php include "footer.php"; ?>