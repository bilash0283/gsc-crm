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
                            <h1 class="mb-3">Find the best Instituition in UK</h1>
                            <div class="d-flex mt-5">
                                <input type="text" placeholder="Search Program......"
                                    class="input-group border-none rounded-pill px-2 mx-2 bg-transparent">
                                <a href="#about" class="btn-get-started text-white">Search</a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                            <img src="@/assets/frontend/src_gsc/image/l3/png/student-services-content-3.png"
                                class="img-fluid animated" alt="">
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
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-1.jpg" class="img-fluid rounded-3" alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-2.jpg" class="img-fluid rounded-3" alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-1.jpg" class="img-fluid rounded-3" alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-2.jpg" class="img-fluid rounded-3" alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-1.jpg" class="img-fluid rounded-3" alt="">
                        </div>
                        <div class="single-brand-logo aos-init aos-animate col-12 col-md-2 col-lg-2 rounded-3 p-4">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-2.jpg" class="img-fluid rounded-3" alt="">
                        </div>
                    </div>
                </div>
            </section><!-- /Clients Section -->

            <!-- simple icon section -->
            <section>
                <div class="container">
                    <h1 class="text-center fw-semibold">Why Study In USA</h1>
                    <div class="row mt-5">

                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-center p-2 ">
                            <div class="card" style="min-height: 300px;">
                                <div class="card-body">
                                    <div class="rounded-3 d-flex justify-content-center p-2"
                                        style="width:60px;height: 60px; background-color: #b8c8f1 !important;">
                                        <img src="@/assets/frontend/src_gsc/image/l1/png/usa-icon-1.png" alt="">
                                    </div>
                                    <h5 class="mt-4 mb-2 fw-semibold">More than 200 Universities</h5>
                                    <p class="text-muted blockquote mt-4">200+ Courses to Choose from</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-center p-2">
                            <div class="card" style="min-height: 300px;">
                                <div class="card-body">
                                    <div class="rounded-3 d-flex justify-content-center p-2"
                                        style="width:60px;height: 60px; background-color: #b8e8f1 !important;">
                                        <img src="@/assets/frontend/src_gsc/image/l1/png/canada-icon-4.png" alt="">
                                    </div>
                                    <h5 class="mt-4 mb-2 fw-semibold">Supportive Institutes</h5>
                                    <p class="text-muted blockquote mt-4">regular orientation programs, workshops and
                                        trainings</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-center p-2">
                            <div class="card" style="min-height: 300px;">
                                <div class="card-body">
                                    <div class="rounded-3 d-flex justify-content-center p-2"
                                        style="width:60px;height: 60px; background-color: #e0f1b8 !important;">
                                        <img src="@/assets/frontend/src_gsc/image/l1/png/uk-icons-3.png" alt="">
                                    </div>
                                    <h5 class="mt-4 mb-2 fw-semibold">Cultural diversity</h5>
                                    <p class="text-muted blockquote mt-4">50+ Different cultures, races and ethnicities
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-center p-2">
                            <div class="card" style="min-height: 300px;">
                                <div class="card-body">
                                    <div class="rounded-3 d-flex justify-content-center p-2"
                                        style="width:60px;height: 60px; background-color: #f1d4b8 !important;">
                                        <img src="@/assets/frontend/src_gsc/image/l1/png/uk-icons-4.png" alt="">
                                    </div>
                                    <h5 class="mt-4 mb-2 fw-semibold">Lively and vibrant campus life</h5>
                                    <p class="text-muted blockquote mt-4">100+ Clubs and Socities</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- simple icon section  -->

            <!-- image grid view  -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/usa-content-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6  d-flex flex-column justify-content-center align-items-center">
                            <div class="p-3">
                                <h1 class="fw-semibold">How to Apply for USA</h1>
                                <h5 class="my-4"><i class="bi bi-check2-circle text-success fw-semibold p-2"></i> Apply
                                    for
                                    Visa Online</h5>
                                <h5 class="my-4"><i class="bi bi-check2-circle text-success fw-semibold p-2"></i> Gather
                                    Passport</h5>
                                <h5 class="my-4"><i class="bi bi-check2-circle text-success fw-semibold p-2"></i>
                                    Non-immigrant Visa Application,</h5>
                                <h5 class="my-4"><i class="bi bi-check2-circle text-success fw-semibold p-2"></i>
                                    Certificate of elligibility for Non-immigrant</h5>
                                <h5 class="my-4"><i class="bi bi-check2-circle text-success fw-semibold p-2"></i>
                                    Embassy
                                    Interview</h5>

                                <button class="reg_btn_hover text-white mt-3" href="#">CONTACT US</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- image grid view  -->

            <!-- Pricing Section -->
            <section id="pricing" class="pricing section dark-background">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Featured Programs</h2>
                    <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
                </div><!-- End Section Title -->
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card h-100%">
                                <div class="card-body">
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-4.jpg" class="img-fluid rounded-3"
                                        alt="" style="width:100px;height: 100px;">

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
                                            Internship
                                            Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work
                                            Visa</span> <br>

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
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/canada-logo-1.jpg" class="img-fluid rounded-3"
                                        alt="" style="width:100px;height: 100px;">

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
                                            Internship
                                            Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work
                                            Visa</span> <br>

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
                                            Internship
                                            Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work
                                            Visa</span> <br>

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
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/usa-logo-1.jpg" class="img-fluid rounded-3"
                                        alt="" style="width:100px;height: 100px;">

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
                                            Internship
                                            Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work
                                            Visa</span> <br>

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
                                    <img src="@/assets/frontend/src_gsc/image/l1/png/uk-uni-3.jpg" class="img-fluid rounded-3"
                                        alt="" style="width:100px;height: 100px;">

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
                                            Internship
                                            Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work
                                            Visa</span> <br>

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
                                            Internship
                                            Opportunity</span><br>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-envelope"></i> Offer Letter</span>

                                        <span class="text-small bg-success py-1 px-2 rounded-2 text-white"
                                            style="font-size: 10px;"><i class="bi bi-backpack2-fill"></i> Post-Study
                                            Work
                                            Visa</span> <br>

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

            <!-- image grid view  -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <img src="@/assets/frontend/src_gsc/image/l1/png/usa-content-2.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6  d-flex flex-column justify-content-center align-items-center">
                            <div class="p-3">
                                <h5 class="my-4 text-primary">AWorried about job security in the competetive USA job
                                    market?</h5>
                                <h1 class="fw-semibold">USA has some of the <br> best job opportunities <br> for
                                    students</h1>
                                <h5 class="my-4">Gather
                                    Half the students who work during term time earn more than $100 a week - and some
                                    earn up to $20,000 a year</h5>

                                <button class="reg_btn_hover text-white mt-3" href="#">CONTACT US</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- image grid view  -->
        </main>

    </FrontendLayout>
</template>

<style scoped></style>
