<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
</script>

<template>
    <FrontendLayout>
        <main class="main">
            <!-- Hero Section -->
            <section id="hero" class="hero section dark-background">

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                            data-aos="zoom-out">
                            <h1><strong>Find the most promising Study Destinations!</strong></h1>
                            <p>For over 30 years, Global Study Contacts (part of Contacts International) has been the
                                ‘home’
                                of overseas
                                university applications, assisting self-funded students
                                through the entire university application process.</p>
                            <div class="d-flex">
                                <input type="text" placeholder="Search Program......"
                                    class="input-group border-none rounded-pill px-2 mx-2 bg-transparent">
                                <a href="#about" class="btn-get-started text-white">Search</a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                            <img src="@/assets/frontend/img/hero-img.png" class="img-fluid animated" alt="">
                        </div>
                    </div>
                </div>

            </section><!-- /Hero Section -->

            <!-- Clients Section -->
            <section id="clients" class="clients section bg-dark py-5">
                <div class="container" data-aos="zoom-in">
                    <h2 class=" pt-5 text-white text-center">Get recruited by the top Universities in UK</h2>
                    <div class="row p-4">
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-1.jpg" class="img-fluid rounded-3"
                                alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-2.jpg" class="img-fluid rounded-3"
                                alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-1.jpg" class="img-fluid rounded-3"
                                alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-2.jpg" class="img-fluid rounded-3"
                                alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-1.jpg" class="img-fluid rounded-3"
                                alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-2.jpg" class="img-fluid rounded-3"
                                alt="">
                        </div>
                    </div>
                </div>
            </section><!-- /Clients Section -->


            <!-- Services Section -->
            <section id="services" class="services section light-background py-5">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2><strong>We provide Services to four groups</strong></h2>
                    <p>Leveraging our 30years of contacts we specialise in connecting the right people at the right time
                    </p>
                </div><!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative rounded-3">
                                <a href="https://gsc.co.com/apply-agent/portal/index.php" class="stretched-link">
                                    <div class="icon">
                                        <img src="@/assets/frontend/src_gsc/image/svg/icon_1_q6v9fb.svg"
                                            class="img-fluid p-4" alt="">
                                    </div>
                                    <h4 class="text-center" style="color:#37517e;">Students</h4>
                                    <p class="text-center fw-light" style="color:#37517e;">20,000 Enrolled</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative rounded-3">
                                <a href="https://gsc.co.com/apply-agent/portal/index.php" class="stretched-link">
                                    <div class="icon">
                                        <img src="@/assets/frontend/src_gsc/image/svg/icon_2_x3hthy.svg"
                                            class="img-fluid p-4" alt="">
                                    </div>
                                    <h4 class="text-center" style="color:#37517e;">Institutes</h4>
                                    <p class="text-center fw-light" style="color:#37517e;">200+ Affiliations</p>
                                </a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative rounded-3">
                                <a href="https://gsc.co.com/apply-agent/portal/index.php" class="stretched-link">
                                    <div class="icon">
                                        <img src="@/assets/frontend/src_gsc/image/svg/icon_3_boelcg.svg"
                                            class="img-fluid p-4" alt="">
                                    </div>
                                    <h4 class="text-center" style="color:#37517e;">Agents</h4>
                                    <p class="text-center fw-light" style="color:#37517e;">100+ in Network</p>
                                </a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative rounded-3">
                                <a href="https://gsc.co.com/apply-agent/portal/index.php" class="stretched-link">
                                    <div class="icon">
                                        <img src="@/assets/frontend/src_gsc/image/svg/iconv_5_kl6l6s.svg"
                                            class="img-fluid p-4" alt="">
                                    </div>
                                    <h4 class="text-center" style="color:#37517e;">Service Provider</h4>
                                    <p class="text-center fw-light" style="color:#37517e;">20+ Industries</p>
                                </a>
                            </div>
                        </div><!-- End Service Item -->

                    </div>
                </div>

            </section><!-- /Services Section -->


            <!-- Why Us Section -->
            <section id="why-us" class="section why-us light-background py-5" data-builder="section">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                                <h1 class="py-4"><strong>Why Choose <br>
                                        Global Study Contacts</strong></h1>

                            </div>

                            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                                <div class="faq-item faq-active">

                                    <h3><span><i class="bi bi-bookmark-star-fill"></i></span>34 years of Un-detered
                                        Service
                                    </h3>
                                    <div class="faq-content">
                                        <p>Global Study Contacts (part of Contacts International) has been working
                                            tirelessly for the past 34
                                            years to ensure placement of students in the right countries</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item">
                                    <h3><span><i class="bi bi-search-heart-fill"></i></span> Student First Policy</h3>
                                    <div class="faq-content">
                                        <p>Our philosophy is that the student comes first. Our counselors work hard to
                                            ensure that they help
                                            students make an informed decision about their study choices.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item">
                                    <h3><span><i class="bi bi-clipboard-data-fill"></i></span> Free Consultancy</h3>
                                    <div class="faq-content">
                                        <p>You only pay when we have succeeded in securing your Student Visa</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                            </div>

                        </div>

                        <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                            <img src="@/assets/frontend/img/why-us.png" class="img-fluid rounded-3" alt=""
                                data-aos="zoom-in" data-aos-delay="100">
                        </div>
                    </div>

                </div>

            </section><!-- /Why Us Section -->


            <!-- Pricing Section -->
            <section id="pricing" class="pricing section dark-background">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2><strong>Featured Programs</strong></h2>
                    <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
                </div><!-- End Section Title -->
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card h-100%">
                                <div class="card-body">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-4.jpg"
                                        class="img-fluid rounded-3" alt="" style="width:100px;height: 100px;">

                                    <div class="pt-4">
                                        <h5 class="py-2">Ulster University</h5>
                                        <span class="text-small bg-info py-1 px-2 rounded-2 text-white text-uppercase"
                                            style="font-size: 10px;"><i class="bi bi-geo-alt-fill mr-2 "></i> UK</span>

                                        <span class="text-small bg-danger py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i> Ranking
                                            3.9/5</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-currency-dollar mr-2"></i> Average
                                            Annual Fee: $14k-19k</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-bank"></i> Accomodation</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i>
                                            Internship Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work Visa</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-pc-display"></i> Work While
                                            Studying</span> <br>

                                        <button class="btn btn-info text-white mt-4">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card h-100%">
                                <div class="card-body">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/canada-logo-1.jpg"
                                        class="img-fluid rounded-3" alt="" style="width:100px;height: 100px;">

                                    <div class="pt-4">
                                        <h5 class="py-2">Trent University</h5>
                                        <span class="text-small bg-info py-1 px-2 rounded-2 text-white text-uppercase"
                                            style="font-size: 10px;"><i class="bi bi-geo-alt-fill mr-2 "></i>
                                            CANADA</span>

                                        <span class="text-small bg-danger py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i> Ranking
                                            3.9/5</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-currency-dollar mr-2"></i> Average
                                            Annual Fee: $14k-19k</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-bank"></i> Accomodation</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i>
                                            Internship Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work Visa</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-pc-display"></i> Work While
                                            Studying</span> <br>

                                        <button class="btn btn-info text-white mt-4">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card h-100%">
                                <div class="card-body">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/australia-logo-1.jpg"
                                        class="img-fluid rounded-3" alt="" style="width:100px;height: 100px;">

                                    <div class="pt-4">
                                        <h5 class="py-2">Tafe Gold Coast</h5>
                                        <span class="text-small bg-info py-1 px-2 rounded-2 text-white text-uppercase"
                                            style="font-size: 10px;"><i class="bi bi-geo-alt-fill mr-2 "></i>
                                            Australia</span>

                                        <span class="text-small bg-danger py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i> Ranking
                                            3.9/5</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-currency-dollar mr-2"></i> Average
                                            Annual Fee: $14k-19k</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-bank"></i> Accomodation</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i>
                                            Internship Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work Visa</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-pc-display"></i> Work While
                                            Studying</span> <br>

                                        <button class="btn btn-info text-white mt-4">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->
                    </div>
                    <div class="row gy-4 mt-4">
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card h-100%">
                                <div class="card-body">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/usa-logo-1.jpg"
                                        class="img-fluid rounded-3" alt="" style="width:100px;height: 100px;">

                                    <div class="pt-4">
                                        <h5 class="py-2">Ulster University</h5>
                                        <span class="text-small bg-info py-1 px-2 rounded-2 text-white text-uppercase"
                                            style="font-size: 10px;"><i class="bi bi-geo-alt-fill mr-2"></i> usa</span>

                                        <span class="text-small bg-danger py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i> Ranking
                                            3.9/5</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-currency-dollar mr-2"></i> Average
                                            Annual Fee: $14k-19k</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-bank"></i> Accomodation</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i>
                                            Internship Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work Visa</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-pc-display"></i> Work While
                                            Studying</span> <br>

                                        <button class="btn btn-info text-white mt-4">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card h-100%">
                                <div class="card-body">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-3.jpg"
                                        class="img-fluid rounded-3" alt="" style="width:100px;height: 100px;">

                                    <div class="pt-4">
                                        <h5 class="py-2">University of Creative Arts</h5>
                                        <span class="text-small bg-info py-1 px-2 rounded-2 text-white text-uppercase"
                                            style="font-size: 10px;"><i class="bi bi-geo-alt-fill mr-2"></i> UK</span>

                                        <span class="text-small bg-danger py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i> Ranking
                                            3.9/5</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-currency-dollar mr-2"></i> Average
                                            Annual Fee: $14k-19k</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-bank"></i> Accomodation</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i>
                                            Internship Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work Visa</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-pc-display"></i> Work While
                                            Studying</span> <br>

                                        <button class="btn btn-info text-white mt-4">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card h-100%">
                                <div class="card-body">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/east-china-uni.jpg"
                                        class="img-fluid rounded-3" alt="" style="width:100px;height: 100px;">

                                    <div class="pt-4">
                                        <h5 class="py-2">East China University of Science & Technology</h5>
                                        <span class="text-small bg-info py-1 px-2 rounded-2 text-white text-uppercase"
                                            style="font-size: 10px;"><i class="bi bi-geo-alt-fill mr-2"></i>
                                            chaina</span>

                                        <span class="text-small bg-danger py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i> Ranking
                                            3.9/5</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-currency-dollar mr-2"></i> Average
                                            Annual Fee: $14k-19k</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-bank"></i> Accomodation</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-briefcase-fill mr-2"></i>
                                            Internship Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work Visa</span> <br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-pc-display"></i> Work While
                                            Studying</span> <br>

                                        <button class="btn btn-info text-white mt-4">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->
                    </div>
                </div>
            </section><!-- /Pricing Section -->


            <!-- grid img section  -->
            <section id="#">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="mx-auto text-start">
                                <p class="">Looking for an experienced consultant to help you find the right Study
                                    Destination?</p>
                                <h1 class="py-2"><strong>Resettle in your dream country with the best
                                        Scholarships</strong>
                                </h1>
                                <p class="pb-4">Global Study Contacts Specialize in Education Consultancy, Visa
                                    Processing,
                                    Job
                                    Scouting and Everything you need to start your new academic life</p>

                                <a href="https://gsc.co.com/apply-agent/portal/" >
                                    <button class=" reg_btn_hover text-white">CONTACT US</button>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row my-2">
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/australia-logo-1.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/australia-logo-2.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/australia-logo-3.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/canada-logo-1.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/canada-logo-2.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/canada-logo-3.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/canada-logo-4.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/canada-logo-5.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/usa-logo-1.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/usa-logo-2.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/usa-logo-3.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="col-lg-3 p-2 pt-lg-0">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/usa-logo-4.jpg"
                                        class="img-fluid rounded-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- grid img section  -->

        </main>
    </FrontendLayout>
</template>
