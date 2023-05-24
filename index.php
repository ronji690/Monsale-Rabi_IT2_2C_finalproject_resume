<!DOCTYPE html>
<html lang="en">

<?php  
$file = simplexml_load_file("files/monsale_IT2_2C_resu'me.xml");
foreach($file->profile as $rows) {
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $rows->title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/ProfilePic1.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php"><?php echo $rows->name; ?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.snapchat.com/add/ronjimonsale" class="twitter"><i class="bx bxl-snapchat"></i></a>
          <a href="https://www.facebook.com/Ronjiii" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/_ronjicakes/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.tiktok.com/@_ronj1" class="tiktok"><i class="bx bxl-tiktok"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1><?php echo $rows->name; ?></h1>
      <p>I'm a <span class="typed" data-typed-items="Networking Enthusiast, Developer, Drummer, Basketball Player"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p><?php echo $rows->about; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/ProfilePic1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Networking Enthusiast &amp; Designer.</h3>
            <p class="fst-italic">
              <?php echo $rows->about1; ?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $rows->birthday; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $rows->phone; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span><?php echo $rows->address; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $rows->age; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $rows->email; ?></span></li>
                </ul>
              </div>
            </div>
            <p>
              <?php echo $rows->about2; ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p><?php echo $rows->skill; ?></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p><?php echo $rows->resume; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4><?php echo $rows->name; ?></h4>
              <p><em><?php echo $rows->resume1; ?></em></p>
              <ul>
                <li><?php echo $rows->address; ?></li>
                <li><?php echo $rows->phone; ?></li>
                <li><?php echo $rows->email; ?></li>
              </ul>
            </div>

            <h3 class="resume-title">Education.</h3>
                <div class="resume-item">
                  <h4>Elementary</h4>
                  <h5>2006 - 2012</h5>
                  <p><em>Lupac-Tabigue Elementary School</em></p>
                </div>
                <div class="resume-item">
                  <h4>High School</h4>
                  <h5>2012 - 2016</h5>
                  <p><em>Marinduque National High School</em></p>
                </div>
                <div class="resume-item">
                  <h4>Senior High School</h4>
                  <h5>2016 - 2018</h5>
                  <p><em>Marinduque National High School</em></p>
                </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Awards and Achievements</h3>
                <div class="resume-item">
                  <h4>Honor Student</h4>
                  <h5>Grade 7 - Grade 12</h5>
                  <p><em>Marinduque National High School</em></p>
                </div>
                <div class="resume-item">
                  <h4>Poster Making Champion</h4>
                  <h5>Grade 12</h5>
                  <p><em>Marinduque National High School</em></p>
                </div>
                <div class="resume-item">
                  <h4>Best in Troubleshooting</h4>
                  <h5>Grade 12</h5>
                  <p><em>Marinduque National High School</em></p>
                </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-projects">Projects</li>
              <li data-filter=".filter-ads">Advertisement</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfoliopics.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfoliopics.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Singnoto"><i class="bx bx-plus"></i></a>
                <a href="singnoto.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pythonquiz.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/pythonquiz.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Quizlation"><i class="bx bx-plus"></i></a>
                <a href="Quizlation.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/funiooooo.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/funiooooo.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Funio"><i class="bx bx-plus"></i></a>
                <a href="Funio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ads">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/LYN.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/LYN.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lynx Tech Ads"><i class="bx bx-plus"></i></a>
                <a href="Lynxads.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ads">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/commercial.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/commercial.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Commercial Ads"><i class="bx bx-plus"></i></a>
                <a href="Commercialads.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p><?php echo $rows->service; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-camera-fill"></i></div>
            <h4 class="title"><a href="#">Video &amp; Photo Manipulation</a></h4>
            <p class="description"><?php echo $rows->vid; ?></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-tools"></i></div>
            <h4 class="title"><a href="#">Computer Supports</a></h4>
            <p class="description"><?php echo $rows->comsupp; ?></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-terminal"></i></div>
            <h4 class="title"><a href="#">Software Developer</a></h4>
            <p class="description"><?php echo $rows->softdev; ?></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-shield-lock"></i></div>
            <h4 class="title"><a href="#">Data security analyst</a></h4>
            <p class="description"><?php echo $rows->datalyst; ?></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-phone"></i></div>
            <h4 class="title"><a href="#">Mobile application developer</a></h4>
            <p class="description"><?php echo $rows->andrdev; ?></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-pencil-square"></i></div>
            <h4 class="title"><a href="#">UX Designer</a></h4>
            <p class="description"><?php echo $rows->ux; ?></p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item" data-aos="fade-up">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      <?php echo $rows->testimonial; ?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/kiale.jpg" class="testimonial-img" alt="">
                    <h3>kiale M. Rabi</h3>
                    <h4>Ceo &amp; Founder</h4>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      <?php echo $rows->testimonial1; ?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/bill.jpg" class="testimonial-img" alt="">
                    <h3>Bill Gates</h3>
                    <h4>Analyst</h4>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      <?php echo $rows->testimonial2; ?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/mark.jpg" class="testimonial-img" alt="">
                    <h3>Mark Zuckerberg</h3>
                    <h4>Designer</h4>
                  </div>
                </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php echo $rows->address; ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $rows->email; ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php echo $rows->phone; ?></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15521.576266361457!2d121.8448739!3d13.449789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1652703767234!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Thank you! Your message has been sent.</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright &copy; 2023 <strong><span>Resu'me</span></strong>
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php 
}
?>