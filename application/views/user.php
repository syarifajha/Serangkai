<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>CV. LIMA SERANGKAI</title>
    <!-- MDB icon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/css_user/img/alngabari.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css_user/css/mdb.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css_user/css/style.css" />
  </head>
  <body>
    <!-- Start your project here-->
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg sticky-top bg-light shift mt-0 mt-0 mb-3 shadow-lg"
    >
      <div class="container">
        <a class="navbar-brand me-2" href="#">
          <img src="<?php echo base_url(); ?>assets/css_user/img/alngabari.png" height="60" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarButtonsExample"
          aria-controls="navbarButtonsExample"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarButtonsExample">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item" style="color: #000000">
              <span style="font-family: sans-serif"
                ><b>CV. LIMA SERANGKAI</b></span
              >
            </li>
          </ul>

          <div class="d-flex align-items-center">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#home-section"
                  style="font-family: sans-serif"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#about-section"
                  style="font-family: sans-serif"
                  >About</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#testimonial-section"
                  style="font-family: sans-serif"
                  >Testimonial</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#contact-section"
                  style="font-family: sans-serif"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- CONTAINER 1 -->
    <?php foreach($slide as $s) { ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="container-fluid ps-0 pe-0">
            <div
              id="carouselExampleControls"
              class="carousel slide"
              data-mdb-ride="carousel"
            >
              <div class="carousel-inner h-25">
                <div class="carousel-item item active">
                  <img src="<?php echo base_url('gambar_slide/').$s->foto?>" class="d-block w-100" alt="Wild Landscape"/>
    </div>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-mdb-target="#carouselExampleControls"
                data-mdb-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-mdb-target="#carouselExampleControls"
                data-mdb-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    <!-- CONTAINER 2 -->
    <?php foreach ($about as $abt) { ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mt-3">
          <div class="container">
            <div class="row">
              <div class="col-12 mt-5 mb-5">
                <div class="text-center">
                  <div
                    class="fs-1"
                    style="font-family: sans-serif; color: #000000"
                  >
                  <?php echo $abt->judul?>
                  </div>
                  <a
                    href="#home"
                    class="btn-home animated fadeInUp scrollto"
                  ></a>
                  <div id="home-section"></div>
                  <hr class="hr hr-blurry" />
                  <div>
                  <?php echo $abt->deskripsi?>
                  </div>
                </div>
              </div>
              <?php } ?>

              <!-- MAIN CONTENT #1 -->
              <?php foreach ($content1 as $c1) { ?>
              <div class="col-12 mt-5 mb-5">
                <div class="row">
                  <div class="col-7">
                    <div class="mt-0">
                      <div
                        class="fs-1 fw-bold text-center"
                        style="font-family: sans-serif; color: #000000"
                      >
                      <?php echo $c1->judul?>
                      </div>
                      <a href="#about"></a>
                      <div id="about-section"></div>
                      <hr class="hr hr-blurry" />
                      <div class="text-center">
                      <?php echo $c1->deskripsi?>
                      </div>
                    </div>
                  </div>
                  <div class="col-5">
                    <div
                      id="carouselExampleControls2"
                      class="carousel slide carousel-fade"
                      data-mdb-ride="carousel"
                    >
                      <div
                        class="carousel-inner rounded-6"
                        style="max-height: 300px"
                      >
                        <div class="carousel-item active bg-image hover-zoom">
                        <img src="<?php echo base_url('gambar_content1/').$c1->foto?>" class="d-block w-100" alt="Wild Landscape"/>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<?php } ?>
              <!-- MAIN CONTENT#2-->
              <?php foreach ($content2 as $c2) { ?>
              <div class="col-12 mt-5 mb-5">
                <div class="row">
                  <div class="col-5">
                    <div
                      id="carouselExampleControls3"
                      class="carousel slide carousel-fade"
                      data-mdb-ride="carousel"
                    >
                      <div
                        class="carousel-inner rounded-6"
                        style="max-height: 300px"
                      >
                        <div class="carousel-item active bg-image hover-zoom">
                        <img src="<?php echo base_url('gambar_content2/').$c2->foto?>" class="d-block w-100" alt="Wild Landscape"/>
                        </div>
                      </div>
                      <button
                        class="carousel-control-prev"
                        type="button"
                        data-mdb-target="#carouselExampleControls3"
                        data-mdb-slide="prev"
                      >
                        <span
                          class="carousel-control-prev-icon"
                          aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button
                        class="carousel-control-next"
                        type="button"
                        data-mdb-target="#carouselExampleControls3"
                        data-mdb-slide="next"
                      >
                        <span
                          class="carousel-control-next-icon"
                          aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="mt-0">
                      <div
                        class="fs-1 fw-bold text-center"
                        style="font-family: sans-serif; color: #000000"
                      >
                      <?php echo $c2->judul?>
                      </div>
                      <hr class="hr hr-blurry" />
                      <div class="text-center">
                      <?php echo $c2->deskripsi?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <!-- TESTIMONI -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mt-5 mb-1">
          <div class="text-center">
            <div class="fs-2" style="font-family: sans-serif; color: #000000">
              TESTIMONIAL
            </div>
            <a href="#testimonial"></a>
            <div id="testimonial-section"></div>
            <hr class="hr hr-blurry" />
            <div class="container">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-mdb-ride="carousel"
              >
                
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($testimonial as $st) { ?>
                      <div class="col">
                        <div class="card h-100">
                        <img src="<?php echo base_url('gambar_testimonial/').$st->foto?>" class="img-fluid card-img-top"
                            alt="Hollywood Sign on The Hill"/>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $st->judul?></h5>
                            <p class="card-text">
                            <?php echo $st->deskripsi?>
                            </p>
                          </div>
                        </div>
                      </div>
                      <?php } ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CONTAINER 4 -->
    <?php foreach ($youtube as $yt) { ?>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="text-center">
          <div class="fs-2" style="font-family: sans-serif; color: #000000">
            VIDEO
          </div>
          <hr class="hr hr-blurry" />
          <div class="ratio ratio-16x9">
            <iframe
              width="560"
              height="315"
              src="<?php echo $yt->link?>"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    <!-- ======= Reason Select Section ======= -->
    <div class="container-fluid">
  <div class="row">
    <div class="col-12 mt-1">
      <div class="container">
        <div class="row">
          <div class="col-12 mt-5 mb-1">
            <div class="text-center">
              <div
                class="fs-2"
                style="font-family: sans-serif; color: #000000"
              >
                REASON FOR CHOICE
              </div>
              <hr class="hr hr-blurry" />
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-3">
            <?php foreach ($alasan as $als) { ?>
              <div class="col mt-0">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $als->judul ?></h5>
                    <p class="card-text">
                      <?php echo $als->deskripsi ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

              <!-- CONTAINER 5 -->
              <?php foreach ($visimisi as $vm) { ?>
              <div class="container mt-5 mb-5">
                <div class="row">
                  <div class="text-center">
                    <div
                      class="fs-2"
                      style="font-family: sans-serif; color: #000000"
                    >
                    <?php echo $vm->judul?>
                    </div>
                    <hr class="hr hr-blurry" />
                    <div>
                    <?php echo $vm->deskripsi?>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>

              <!--contact-->
              <div class="container mt-5 mb-5">
                <div class="row">
                  <div class="text-center">
                    <div
                      class="fs-2"
                      style="font-family: sans-serif; color: #000000"
                    >
                      CONTACT
                    </div>
                    <a href="#contact"></a>
                    <div id="contact-section"></div>
                    <hr class="hr hr-blurry" />
                    <div>
                      <!-- Footer -->
                      <footer
                        class="text-center text-lg-start bg-light text-muted"
                      >
                        <!-- Section: Social media -->
                        <section
                          class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
                        >
                          <!-- Left -->
                          <div class="me-5 d-none d-lg-block">
                            <span
                              >Get connected with us on social networks:</span
                            >
                          </div>
                          <!-- Left -->

                          <!-- Right -->
                          <div>
                            <a href="" class="me-4 text-reset">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                              <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                              <i class="fab fa-google"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                              <i class="fab fa-instagram"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                              <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                              <i class="fab fa-github"></i>
                            </a>
                          </div>
                          <!-- Right -->
                        </section>
                        <!-- Section: Social media -->

                        <!-- Section: Links  -->
                        <section class="">
                          <div class="container text-center text-md-start mt-5">
                            <!-- Grid row -->
                            <div class="row mt-3">
                              <!-- Grid column -->
                              <div
                                class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"
                              >
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                  <i class="fas fa-gem me-3"></i>Company name
                                </h6>
                                <p>
                                  Lorem ipsum dolor sit amet consectetur
                                  adipisicing elit. Laudantium doloremque quod
                                  illum quasi atque natus deserunt ad
                                  reprehenderit reiciendis asperiores, mollitia
                                  dicta porro sint, a dolorem sequi veritatis
                                  in.
                                </p>
                              </div>
                              <!-- Grid column -->

                              <!-- Grid column -->
                              <div
                                class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"
                              >
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                  Products
                                </h6>
                                <p>
                                  <a href="#!" class="text-reset">Angular</a>
                                </p>
                                <p>
                                  <a href="#!" class="text-reset">React</a>
                                </p>
                                <p>
                                  <a href="#!" class="text-reset">Vue</a>
                                </p>
                                <p>
                                  <a href="#!" class="text-reset">Laravel</a>
                                </p>
                              </div>
                              <!-- Grid column -->

                              <!-- Grid column -->
                              <div
                                class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4"
                              >
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                  Useful links
                                </h6>
                                <p>
                                  <a href="#!" class="text-reset">Pricing</a>
                                </p>
                                <p>
                                  <a href="#!" class="text-reset">Settings</a>
                                </p>
                                <p>
                                  <a href="#!" class="text-reset">Orders</a>
                                </p>
                                <p>
                                  <a href="#!" class="text-reset">Help</a>
                                </p>
                              </div>
                              <!-- Grid column -->

                              <!-- Grid column -->
                              <div
                                class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4"
                              >
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                  Contact
                                </h6>
                                <p>
                                  <i class="fas fa-home me-3"></i> New York, NY
                                  10012, US
                                </p>
                                <p>
                                  <i class="fas fa-envelope me-3"></i>
                                  info@example.com
                                </p>
                                <p>
                                  <i class="fas fa-phone me-3"></i> + 01 234 567
                                  88
                                </p>
                                <p>
                                  <i class="fas fa-print me-3"></i> + 01 234 567
                                  89
                                </p>
                              </div>
                              <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                          </div>
                        </section>
                        <!-- Section: Links  -->

                        <!-- Copyright -->
                        <div
                          class="text-center p-4"
                          style="background-color: rgba(0, 0, 0, 0.05)"
                        >
                          © 2023 Copyright:
                          <a
                            class="text-reset fw-bold"
                            href="https://mdbootstrap.com/"
                            >CV. LIMA SERANGKAI</a
                          >
                        </div>
                        <!-- Copyright -->
                      </footer>
                      <!-- Footer -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
