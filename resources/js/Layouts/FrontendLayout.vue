<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { usePage, Link } from "@inertiajs/vue3";
import "@/assets/frontend/css/main.css";
import "@/assets/frontend/vendor/bootstrap/css/bootstrap.min.css";
import "@/assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css";
// import "@/assets/frontend/vendor/aos/aos.css";
import "@/assets/frontend/vendor/glightbox/css/glightbox.min.css";
import "@/assets/frontend/vendor/swiper/swiper-bundle.min.css";

const isScrolled = ref(false);
const isLoading = ref(true);


const { url } = usePage();

onMounted(() => {
    const loadingTimeout = setTimeout(() => {
        isLoading.value = false;
    }, 500);

    window.addEventListener('load', () => {
        isLoading.value = false;
        clearTimeout(loadingTimeout);
    });

    onBeforeUnmount(() => {
        window.removeEventListener('load', () => {
            isLoading.value = false;
            clearTimeout(loadingTimeout);
        });
    });
});

const toggleScrolled = () => {
    const header = document.querySelector('#header');
    if (
        !header.classList.contains('scroll-up-sticky') &&
        !header.classList.contains('sticky-top') &&
        !header.classList.contains('fixed-top')
    ) return;
    isScrolled.value = window.scrollY > 100;
};

onMounted(() => {
    window.addEventListener('scroll', toggleScrolled);
    toggleScrolled();
});

onBeforeUnmount(() => {
    window.removeEventListener('scroll', toggleScrolled);
});

</script>

<template>
    <div :class="['index-page', { scrolled: isScrolled }]">
        <header id="header" class="header d-flex align-items-center fixed-top p-0">
            <div class="container-fluid container-xl position-relative d-flex align-items-center">

                <Link href="/" class="logo d-flex align-items-center me-auto">
                <img src="@/assets/frontend/src_gsc/favicon2.png" alt="">
                </Link>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li>
                            <Link href="/" class="fw-semibold text-uppercase" :class="url === '/' && 'active'">Home
                            </Link>
                        </li>
                        <li class="dropdown"><a href="#"><span class="fw-semibold text-uppercase">Services</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li>
                                    <Link href="/student" class="fw-semibold text-uppercase"
                                        :class="url === '/student' && 'active'">STUDENTS</Link>
                                </li>
                                <li>
                                    <Link href="/institute" class="fw-semibold text-uppercase"
                                        :class="url === '/institute' && 'active'">INSTITUTES</Link>
                                </li>
                                <li><a href="/agent" :class="url === '/agent' && 'active'"
                                        class="fw-semibold text-uppercase">AGENTS</a></li>
                                <li>
                                    <Link href="/service-providers" class="fw-semibold text-uppercase"
                                        :class="url === '/service-providers' && 'active'">Service Providers</Link>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span class="fw-semibold text-uppercase">Study
                                    Destinations</span>
                                <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li>
                                    <Link href="/usa" class="fw-semibold text-uppercase"
                                        :class="url === '/usa' && 'active'">USA</Link>
                                </li>
                                <li>
                                    <Link href="/usa" class="fw-semibold text-uppercase"
                                        :class="url === '/usa' && 'active'">UK</Link>
                                </li>
                                <li>
                                    <Link href="/usa" class="fw-semibold text-uppercase"
                                        :class="url === '/usa' && 'active'">CANADA</Link>
                                </li>
                                <li>
                                    <Link href="/usa" class="fw-semibold text-uppercase"
                                        :class="url === '/usa' && 'active'">AUSTRALIA</Link>
                                </li>
                                <li>
                                    <Link href="/usa" class="fw-semibold text-uppercase"
                                        :class="url === '/usa' && 'active'">EUROPE</Link>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <Link href="/about" class="fw-semibold text-uppercase"
                                :class="url === '/about' && 'active'">
                            About US</Link>
                        </li>
                        <li class="dropdown"><a href="#" class="fw-semibold text-uppercase"><span>Resources</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li>
                                    <Link href="/" class="fw-semibold text-uppercase" :class="url === '/' && 'active'">
                                    Student Guide</Link>
                                </li>
                                <li>
                                    <Link href="/" class="fw-semibold text-uppercase" :class="url === '/' && 'active'">
                                    Scholarship</Link>
                                </li>
                                <li>
                                    <Link href="/" class="fw-semibold text-uppercase" :class="url === '/' && 'active'">
                                    Study Abroad FAQ</Link>
                                </li>
                                <li>
                                    <Link href="/" class="fw-semibold text-uppercase" :class="url === '/' && 'active'">
                                    SOP IELTS GRE</Link>
                                </li>
                                <li>
                                    <Link href="/" class="fw-semibold text-uppercase" :class="url === '/' && 'active'">
                                    Agents Training</Link>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <Link href="/event" class="fw-semibold text-uppercase"
                                :class="url === '/event' && 'active'">
                            EVENT</Link>
                        </li>
                        <!-- <li><Link href="/sign-up" class="fw-semibold text-uppercase" :class="url=== '/sign-up' && 'active'">Sign Up</Link></li> -->
                        <li><a href="https://gsc.co.com/apply-agent/portal/index.php"
                                class="fw-semibold text-uppercase">
                                Register / login</a></li>
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list" :class="mobileNavActive ? 'bi-x' : 'bi-list'"
                        ref="mobileNavToggleBtn"></i>
                    <!--                <button class="mobile-nav-toggle" ref="mobileNavToggleBtn">-->
                    <!--                    <i :class="mobileNavActive ? 'bi-x' : 'bi-list'"></i>-->
                    <!--                </button>-->
                </nav>
            </div>
        </header>
        <slot />
        <footer id="footer" class="footer">
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <h2><strong>Subscribe to our Newsletter</strong></h2>

                            <p>Get all the latest updates, announcements, and special offers directly to your inbox!</p>
                            <form action="forms/newsletter.php" method="post" class="php-email-form">
                                <div class="newsletter-form"><input type="email" placeholder="example@gmail.com"
                                        name="email"><input type="submit" value="Subscribe">
                                </div>
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6 text-start">
                            <h2><strong>Most comprehensive Education Consultancy Agency</strong></h2>
                        </div>
                        <div class="col-lg-6">
                            <form action="" method="" class="php-email-form">
                                <!-- <button class=" border-none fw-semibold reg_btn "><a
                                        href="https://gsc.co.com/apply-agent/portal/index.php">LOGIN</a></button>
                                <button class=" border-none text-white fw-semibold reg_btn_hover p-2 m-3"><a
                                        href="https://gsc.co.com/apply-agent/portal/index.php"
                                        class="text-white">REGISTATION</a>
                                </button> -->

                                <a href="https://gsc.co.com/apply-agent/portal/index.php"><small class=" border-none fw-semibold reg_btn py-2 px-5 ">LOGIN</small></a>
                                <a href="https://gsc.co.com/apply-agent/portal/index.php"><small class=" border-none text-white fw-semibold reg_btn_hover py-3 px-4 m-3">REGISTATION</small></a>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="d-flex align-items-center">
                            <img src="@/assets/frontend/src_gsc/favicon2.png" alt="" class="img-fluid"
                                style="width:120px;height: 120px;">
                        </a>
                        <div class="footer-contact pt-3">
                            <p><strong>Contact us at</strong></p>
                            <strong class="text-info">info@ci-gsc.com</strong><br>
                            <strong href="#">House no.-54/A(3rd Floor), Road-132,
                                Gulshan-1, Dhaka-1212</strong>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Countries</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i>
                                <Link href="/usa" class="text-uppercase" :class="url === '/usa' && 'active'">USA</Link>
                            </li>
                            <li><i class="bi bi-chevron-right"></i>
                                <Link href="/usa" class="text-uppercase" :class="url === '/usa' && 'active'">UK</Link>
                            </li>
                            <li><i class="bi bi-chevron-right"></i>
                                <Link href="/usa" class="text-uppercase" :class="url === '/usa' && 'active'">CANADA
                                </Link>
                            </li>
                            <li><i class="bi bi-chevron-right"></i>
                                <Link href="/usa" class="text-uppercase" :class="url === '/usa' && 'active'">Australia
                                </Link>
                            </li>
                            <li><i class="bi bi-chevron-right"></i>
                                <Link href="/usa" class="text-uppercase" :class="url === '/usa' && 'active'">Europe
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i>
                                <Link href="/student" class="text-uppercase" :class="url === '/student' && 'active'">
                                STUDENTS</Link>
                            </li>
                            <li><i class="bi bi-chevron-right"></i>
                                <Link href="/institute" class="text-uppercase"
                                    :class="url === '/institute' && 'active'">
                                Institutes</Link>
                            </li>
                            <li><i class="bi bi-chevron-right"></i>
                                <Link href="/agent" class="text-uppercase" :class="url === '/agent' && 'active'">Agents
                                </Link>
                            </li>
                            <li><i class="bi bi-chevron-right"></i>
                                <Link href="/service-providers" class="text-uppercase"
                                    :class="url === '/service-providers' && 'active'">Service Providers</Link>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <h4>Follow Us</h4>
                        <p>Dhaka 249,Moghbazar Chourasta,1st Floor, Dhaka-1217,Bangladesh. Mob:+880 1715-482363</p>
                        <div class="social-links d-flex">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <a v-if="isScrolled" href="#" id="scroll-top"
            class="scroll-top d-flex align-items-center justify-content-center active"><i
                class="bi bi-arrow-up-short"></i></a>
        <div v-if="isLoading" id="preloader"></div>
    </div>
</template>

<style scoped></style>
