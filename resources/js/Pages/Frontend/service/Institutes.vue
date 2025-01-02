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
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
              <h1>Bring Diversity to your Campus</h1>
              <p>Operating in 50+ Countries Global Study Contacts helps institutes diversify their campus with qualified
                students from all around the world</p>
              <div class="d-flex">
                <input type="submit" name="btn" value="Partner With Us" class="reg_btn_hover text-white">
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
              <img src="@/assets/frontend/src_gsc/image/l3/png/uni-hero.jpg" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
      </section><!-- /Hero Section -->

      <!-- simple icon section -->
      <section>
        <div class="container">
          <h1 class="text-center fw-semibold">Our Efficient <br> Student Recruitment <br>Process</h1>
          <div class="row mt-5">
            <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center ">
              <div class="rounded-3 d-flex justify-content-center align-items-center"
                style="width:90px;height: 90px; background-color: #1250ec !important;">
                <img src="@/assets/frontend/src_gsc/image/l1/png/usa-icon-1.png" alt="">
              </div>
              <h4 class="mt-4 mb-2">Document Verification</h4>
              <p>We do thorough check of every academic document of the student</p>
            </div>

            <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center ">
              <div class="rounded-3 d-flex justify-content-center align-items-center"
                style="width:90px;height: 90px; background-color: #10cb39 !important;">
                <img src="@/assets/frontend/src_gsc/image/l1/png/usa-icon-4.png" alt="">
              </div>
              <h4 class="mt-4 mb-2">Applicant Matching</h4>
              <p>Our recruitment process only sends applications who are qualified to study in your school</p>
            </div>

            <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center ">
              <div class="rounded-3 d-flex justify-content-center align-items-center"
                style="width:90px;height: 90px; background-color: #f7770f !important;">
                <img src="@/assets/frontend/src_gsc/image/l1/png/uk-icons-3.png" alt="">
              </div>
              <h4 class="mt-4 mb-2">Global Outreach programs</h4>
              <p>Our Marketing channels will help you get your schools name out among the biggest student circles</p>
            </div>
          </div>
        </div>
      </section>
      <!-- simple icon section  -->

      <!-- our global contacts  -->
      <section style="background-color: #F4F4F9;">
        <div class="container">
          <h1 class="text-center">Featured Programs</h1>
          <p class="text-center">Choose from among 1500+ Programs and 200+ Universities</p>
          <div class="row mt-5">

            <div class="col-xl-4">
              <div class="card m-2">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <img src="@/assets/frontend/src_gsc/image/svg/Africa.jpg" class="img-fluid" alt=""
                      style="width:100px; height: 100px;">
                    <div>
                      <p>Africa</p>
                      <h4>20+ Agents</h4>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-5">
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Somalia
                    </small>
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Zambia
                    </small>
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Egypt
                    </small>
                    <i class="bi bi-bookmark-fill text-info " style="font-size: 28px;"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card m-2">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <img src="@/assets/frontend/src_gsc/image/svg/south_asia.jpg" class="img-fluid " alt=""
                      style="width:100px; height: 100px;">
                    <div>
                      <p>South Asia</p>
                      <h4>100+ Agents</h4>
                    </div>
                  </div>
                  <div class="grid gird-col justify-content-between align-items-center mt-5">
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> India
                    </small>
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Bangladesh
                    </small>
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Pakistan
                    </small>
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Bhutan
                    </small>
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Mayanmar
                    </small>
                    <i class="bi bi-bookmark-fill text-info " style="font-size: 28px;"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card m-2">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <img src="@/assets/frontend/src_gsc/image/svg/south-america.jpg" class="img-fluid" alt=""
                      style="width:100px; height: 100px;">
                    <div>
                      <p>South America</p>
                      <h4>40+ Agents</h4>
                    </div>
                  </div>
                  <div class="grid gird-col justify-content-between align-items-center mt-5">
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Argentina
                    </small>
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Brazil
                    </small>
                    <small class="bg-info px-2 py-1 rounded-1 text-primary m-2 text-small" style="font-size: 12px;"><i
                        class="bi bi-geo-alt-fill"></i> Uruguay
                    </small>
                    <i class="bi bi-bookmark-fill text-info " style="font-size: 28px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- our global contacts  -->

      <!-- image grid view  -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6  d-flex flex-column justify-content-center align-items-center">
              <div class="p-3">
                <h1>Over 200+ Universities recruit from <br>
                  Global Study Contacts</h1>
                <p class="my-4">Universities from 15+ Countries have reached their annual intake goals after joining
                  hands with GSC</p>
                <a href="" class="text-info">LEARN MORE <i class="bi bi-arrow-right-short fw-semibold"></i></a>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Gallery -->
              <!-- <div class="row p-3">
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                            </div>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                            </div>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                            </div>
                        </div> -->
              <!-- Gallery -->
              <img src="@/assets/frontend/src_gsc/image/l3/DEDE.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </section>
      <!-- image grid view  -->

    </main>
  </FrontendLayout>
</template>

<style scoped></style>
