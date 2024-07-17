
<?php
require 'langs/langs.php';
include 'header.php';?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">404 Error</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">404 Error</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4"><?php echo $tr["page_error"]; ?></h1>
                    <p class="mb-4"><?php echo $tr["page_error_text"]; ?></p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href=""><?php echo $tr["go_home"]; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        
<?php include 'footer.php';?>