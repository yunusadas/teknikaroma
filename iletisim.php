<?php
include 'header.php';
require 'langs/langs.php';
?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown"> <?php echo $lang["title"]; ?> </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#"><?php echo $lang["sublink_1"]; ?></a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#"><?php echo $lang["sublink_2"]; ?></a></li>
                    <li class="breadcrumb-item text-dark active"
                        aria-current="page"><?php echo $lang["sublink_3"]; ?> </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                 style="max-width: 500px;">
                <h1 class="display-5 mb-3"><?php echo $lang["title"]; ?></h1>
                <p><?php echo $lang["subtitle"]; ?></p>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white"><?php echo $lang["contact"]["title"]; ?></h5>
                        <p class="mb-5"><i
                                    class="fa fa-phone-alt me-3"></i><?php echo $lang["contact"]["call"]["phone"]; ?></p>
                        <h5 class="text-white"><?php echo $lang["contact"]["email"]["title"]; ?></h5>
                        <p class="mb-5"><i
                                    class="fa fa-envelope me-3"></i><?php echo $lang["contact"]["email"]["email"]; ?></p>
                        <h5 class="text-white"><?php echo $lang["address"]["title"]; ?></h5>
                        <p class="mb-5"><i
                                    class="fa fa-map-marker-alt me-3"></i><?php echo $lang["address"]["address"]; ?></p>
                        <h5 class="text-white"><?php echo $lang["takip"]; ?></h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                        class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name"
                                           placeholder="<?php echo $lang["placeholder_1"]; ?>">
                                    <label for="name"><?php echo $lang["placeholder_1"]; ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"
                                           placeholder="<?php echo $lang["placeholder_2"]; ?>">
                                    <label for="email"><?php echo $lang["placeholder_2"]; ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject"
                                           placeholder="<?php echo $lang["placeholder_3"]; ?>">
                                    <label for="subject"><?php echo $lang["placeholder_3"]; ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="<?php echo $lang["placeholder_4"]; ?>"
                                              id="message" style="height: 200px"></textarea>
                                    <label for="message"><?php echo $lang["placeholder_4"]; ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5"
                                        type="submit"><?php echo $lang["send"]; ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: 6px;">

        <iframe class="w-100" style="height: 450px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.5371949508617!2d28.804227075862297!3d41.079107971340726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caafd4f83fc64f%3A0x67bbdf8ce5f7eb0d!2sTeknik%20Aroma!5e0!3m2!1str!2str!4v1720533601981!5m2!1str!2str"
                  allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->
<?php include 'footer.php'; ?>