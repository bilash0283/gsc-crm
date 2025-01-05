<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
</script>

<template>
    <FrontendLayout>
        <main class="main">
            <!-- Call To Action Section -->
            <section id="call-to-action" class="call-to-action dark-background" style="margin-top: 98px;">
                <img src="@/assets/frontend/src_gsc/image/l3/event.jpg" alt="">
                <div class="container">
                    <div class="row" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-xl-9 text-center text-xl-center mx-auto">
                            <h1 class="text-white display-5 fw-semibold"><strong>GSC Events in 2025</strong></h1>
                            <p class="text-white">World’s Unique Educational Experience</p>
                            <div class="col-xl-3 cta-btn-container text-center mx-auto">
                                <button href=""
                                    class="border-none  fw-semibold reg_btn_hover text-white p-2 m-3">REGISTATION</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Call To Action Section -->

            <!-- business model  -->
            <section id="b2b_section">
                <div class="container">
                    <h1 class="text-uppercase text-center"><strong>our business model</strong></h1>
                    <div class="row  text-center pt-4">
                        <div class="col-md-4">
                            <i class="bi bi-people fs-3 py-3 px-4 border border-2 border-info rounded-circle"></i>
                            <h5 class="my-3"><strong>B2B</strong></h5>
                        </div>
                        <div class="col-md-4 py-2">
                            <i class="bi bi-globe fs-3 py-3 px-4 border border-2 border-info rounded-circle"></i>
                            <h5 class="my-3"><strong>B2C</strong></h5>
                        </div>
                        <div class="col-md-4">
                            <i class="bi bi-bullseye fs-3 py-3 px-4 border border-2 border-info rounded-circle"></i>
                            <h5 class="my-3"><strong>School Visits</strong></h5>
                        </div>
                    </div>
                </div>
            </section>
            <!-- business model  -->

            <!-- our previous events -->
            <section class="previous_event">
                <div class="container">
                    <h1 class="text-center"><strong>Our Previous Events</strong></h1>
                    <div class="row pt-5">
                        <div class="col-md-4 p-2">
                            <img src="@/assets/frontend/src_gsc/image/l3/event.jpg" class="rounded-3 img-fluid" alt="">
                        </div>
                        <div class="col-md-4 p-2">
                            <img src="@/assets/frontend/src_gsc/image/l3/event.jpg" class="rounded-3 img-fluid" alt="">
                        </div>
                        <div class="col-md-4 p-2">
                            <img src="@/assets/frontend/src_gsc/image/l3/event.jpg" class="rounded-3 img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 p-2">
                            <img src="@/assets/frontend/src_gsc/image/l3/event.jpg" class="rounded-3 img-fluid" alt="">
                        </div>
                        <div class="col-md-4 p-2">
                            <img src="@/assets/frontend/src_gsc/image/l3/event.jpg" class="rounded-3 img-fluid" alt="">
                        </div>
                        <div class="col-md-4 p-2">
                            <img src="@/assets/frontend/src_gsc/image/l3/event.jpg" class="rounded-3 img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- our previous events -->

            <!-- Call To Action Section -->
            <section id="call-to-action" class="call-to-action">
                <img src="@/assets/frontend/src_gsc/image/l3/overley_img.jpg" alt="">
                <div class="container">
                    <div class="row" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-xl-12 text-white mx-auto">
                            <h1 class="text-white"><strong>Register to GSC Events in 2025:</strong></h1>
                            <p class="text-white">Fill in the registration form to express your interest in GSC events
                                planned for 2025. GSC Team will contact you shortly.</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control my-1 " id="name" name="name"
                                                placeholder="Full Name">
                                        </div>
                                        <div>
                                            <label for="eamil">E-mail</label>
                                            <input type="email" class="form-control my-1 " id="email" name="eamil"
                                                placeholder="Enter E-mail">
                                        </div>
                                        <div>
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control my-1 " id="phone" name="phone"
                                                placeholder="Phone Number">
                                        </div>
                                        <div>
                                            <label for="Institute">Institute</label>
                                            <input type="text" class="form-control my-1 " id="Institute"
                                                name="Institute" placeholder="Institute Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <label for="Institute_type">Institute Type</label>
                                            <select name="Institute_type" id="Institute_type" class="form-control my-1">
                                                <option value="">--Please choose an option--</option>
                                                <option
                                                    value="Educational institution (university, college, school, etc.)">
                                                    Educational institution (university, college, school, etc.)</option>
                                                <option value="Student recruitment agency">Student recruitment agency
                                                </option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control my-1 " id="country" name="country"
                                                placeholder="Country Name">
                                        </div>
                                        <div>
                                            <label for="destinations">Choose your destinations</label>
                                            <select name="destinations" id="destinations" class="form-control">
                                                <option value="">--Select your Destinations--</option>
                                                <option value="USA">USA</option>
                                                <option value="UK">UK</option>
                                                <option value="CANADA">CANADA</option>
                                                <option value="AUSTRALIA">AUSTRALIA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control" placeholder="Message"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="reg_btn_hover text-white my-3" name="btn">Send <i
                                        class="bi bi-send-plus"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </section><!-- /Call To Action Section -->
        </main>
    </FrontendLayout>
</template>

<style scoped></style>
