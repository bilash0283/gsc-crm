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
                        <h1><strong>Resettle Onto Your Dream Study Destination</strong></h1>
                        <p>Global Study Contacts Specialize in Education Consultancy, Visa Processing, Part-time Job
                            Scouting, PR and Everything you need to start your new life</p>
                        <div class="d-flex">
                            <input type="text" placeholder="Search Program......"
                                class="input-group border-none rounded-pill px-2 mx-2 bg-transparent">
                            <a href="#about" class="btn-get-started text-white">Search</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="@/assets/frontend/src_gsc/image/l3/png/student-hero.jpg" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- simple icon section -->
        <section>
            <div class="container">
                <h1 class="text-center fw-semibold"><strong>Easy steps to <br> get recruited by your <br> desired University</strong></h1>
                <div class="row mt-5">
                    <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-3 d-flex justify-content-center align-items-center"
                            style="width:90px;height: 90px; background-color: #f8c546 !important;">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/usa-icon-1.png" alt="">
                        </div>
                        <h4 class="mt-4 mb-2 fw-semibold">Check Elligibility</h4>
                        <p>Check which schools match your GPA</p>
                    </div>

                    <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-3 d-flex justify-content-center align-items-center"
                            style="width:90px;height: 90px; background-color: #f8c546 !important;">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/usa-icon-4.png" alt="">
                        </div>
                        <h4 class="mt-4 mb-2 fw-semibold">Select Desired Institute</h4>
                        <p>Find the University that fits your academic goals</p>
                    </div>

                    <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-3 d-flex justify-content-center align-items-center"
                            style="width:90px;height: 90px; background-color: #f8c546 !important;">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-icons-3.png" alt="">
                        </div>
                        <h4 class="mt-4 mb-2 fw-semibold">Apply on GSC</h4>
                        <p>Receive Expert Guidance</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- simple icon section  -->

        <!-- university list card  -->
        <section style="background-color: #F4F4F9;">
            <div class="container">
                <h1 class="text-center fw-semibold"><strong>Featured Programs</strong></h1>
                <p class="text-center">Choose from among 1500+ Programs and 200+ Universities</p>

                <div class="row mt-5">
                    <div class="col-xl-4">
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="@/assets/frontend/src_gsc/image/l2/jpg/gallery-img1.jpg" class="img-fluid rounded-2"
                                        alt="" style="width:100px; height: 100px;">
                                    <h4 style="margin-left: 20px;">University of Canada West</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-5">
                                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small"
                                        style="font-size: 12px;"><i class="bi bi-geo-alt-fill"></i> Canada</small>
                                    <p class="bg-info px-2 py-1 rounded-1 text-danger m-2" style="font-size: 12px;"><i
                                            class="bi bi-briefcase"></i> 80K-90K</p>
                                    <i class="bi bi-bookmark-fill text-info " style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="@/assets/frontend/src_gsc/image/l2/jpg/gallery-img2.jpg" class="img-fluid rounded-2"
                                        alt="" style="width:100px; height: 100px;">
                                    <h4 style="margin-left: 20px;">European University of Cyprus</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-5">
                                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small"
                                        style="font-size: 12px;"><i class="bi bi-geo-alt-fill"></i> Cyprus</small>
                                    <p class="bg-info px-2 py-1 rounded-1 text-danger m-2" style="font-size: 12px;"><i
                                            class="bi bi-briefcase"></i> 80K-90K</p>
                                    <i class="bi bi-bookmark text-info " style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="@/assets/frontend/src_gsc/image/l2/jpg/gallery-img4.jpg" class="img-fluid rounded-2"
                                        alt="" style="width:100px; height: 100px;">
                                    <h4 style="margin-left: 20px;">Wichita State University</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-5">
                                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small"
                                        style="font-size: 12px;"><i class="bi bi-geo-alt-fill"></i> Cyprus</small>
                                    <p class="bg-info px-2 py-1 rounded-1 text-danger m-2" style="font-size: 12px;"><i
                                            class="bi bi-briefcase"></i> 80K-90K</p>
                                    <i class="bi bi-bookmark text-info " style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-xl-4">
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="@/assets/frontend/src_gsc/image/l2/jpg/gallery-img7.jpg" class="img-fluid rounded-2"
                                        alt="" style="width:100px; height: 100px;">
                                    <h4 style="margin-left: 20px;">Royel Business Collage</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-5">
                                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small"
                                        style="font-size: 12px;"><i class="bi bi-geo-alt-fill"></i> UK</small>
                                    <p class="bg-info px-2 py-1 rounded-1 text-danger m-2" style="font-size: 12px;"><i
                                            class="bi bi-briefcase"></i> 80K-90K</p>
                                    <i class="bi bi-bookmark text-info " style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="@/assets/frontend/src_gsc/image/l2/jpg/gallery-img8.jpg" class="img-fluid rounded-2"
                                        alt="" style="width:100px; height: 100px;">
                                    <h4 style="margin-left: 20px;">Risbey University Collage</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-5">
                                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small"
                                        style="font-size: 12px;"><i class="bi bi-geo-alt-fill"></i> USA</small>
                                    <p class="bg-info px-2 py-1 rounded-1 text-danger m-2" style="font-size: 12px;"><i
                                            class="bi bi-briefcase"></i> 80K-90K</p>
                                    <i class="bi bi-bookmark text-info " style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="@/assets/frontend/src_gsc/image/l2/jpg/gallery-img9.jpg" class="img-fluid rounded-2"
                                        alt="" style="width:100px; height: 100px;">
                                    <h4 style="margin-left: 20px;">Wichita State University</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-5">
                                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small"
                                        style="font-size: 12px;"><i class="bi bi-geo-alt-fill"></i> Cyprus</small>
                                    <p class="bg-info px-2 py-1 rounded-1 text-danger m-2" style="font-size: 12px;"><i
                                            class="bi bi-briefcase"></i> 80K-90K</p>
                                    <i class="bi bi-bookmark text-info " style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- university list card  -->

        <!-- image grid view  -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6  d-flex flex-column justify-content-center align-items-center">
                        <div class="p-3">
                            <h1 class="fw-semibold"><strong>University Applications made easy</strong></h1>
                            <p>Our agents will help you fill up university forms, apply for visa and secure a part-time job before your departure</p>
                            <a href="" class="text-info" style="font-size: 17px;">contact Us <i class="bi bi-arrow-right-short fw-semibold"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Gallery -->
                        <div class="row p-3">
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                <img src="@/assets/frontend/src_gsc/image/l1/png/usa-content-2.png"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                                <img src="@/assets/frontend/src_gsc/image/l1/png/usa-content-1.png"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                            </div>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <img src="@/assets/frontend/src_gsc/image/l3/png/content-2-img2.png"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />
                                <img src="@/assets/frontend/src_gsc/image/l3/png/student-services-content-1.jpg"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                            </div>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <img src="@/assets/frontend/src_gsc/image/l3/png/hero-image-3.jpg"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                                <img src="@/assets/frontend/src_gsc/image/l3/png/content-2-img2.png"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                            </div>
                        </div>
                        <!-- Gallery -->
                    </div>
                </div>
            </div>
        </section>
        <!-- image grid view  -->

    </main>

    </FrontendLayout>
</template>

<style scoped></style>
