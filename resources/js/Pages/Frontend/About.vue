<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
</script>

<template>
    <FrontendLayout>
        <main class="main">
            <!-- Contact Section -->
            <section id="contact" class="contact section my-5">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contacts</h2>
                    <p>We'd love to hear from you! Please feel free to reach out with any questions or feedback.</p>
                </div><!-- End Section Title -->
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-5">
                            <div class="info-wrap">
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h3>Address</h3>
                                        <p>House no.-54/A(3rd Floor), Road-132, Gulshan-1, Dhaka-1212</p>
                                    </div>
                                </div><!-- End Info Item -->
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone flex-shrink-0"></i>
                                    <div>
                                        <h3>Call Us</h3>
                                        <p>+880 1990-225993</p>
                                    </div>
                                </div><!-- End Info Item -->
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h3>Email Us</h3>
                                        <p>info@ci-gsc.com</p>
                                    </div>
                                </div><!-- End Info Item -->
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.1052145802178!2d90.41496727397119!3d23.781224487594848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b88fc4ea7a57%3A0xdd2167088c032fc8!2sGlobal%20Study%20Contacts%20(GSC)%20%2C%20Contacts%20International!5e1!3m2!1sen!2sbd!4v1734850780335!5m2!1sen!2sbd"
                                    frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <label for="name-field" class="pb-2">Your Name</label>
                                        <input type="text" name="name" id="name-field" class="form-control" required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email-field" class="pb-2">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="subject-field" class="pb-2">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="message-field" class="pb-2">Message</label>
                                        <textarea class="form-control" name="message" rows="10" id="message-field"
                                            required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                        <button type="submit">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>
            </section><!-- /Contact Section -->
        </main>
    </FrontendLayout>
</template>

<style scoped></style>
