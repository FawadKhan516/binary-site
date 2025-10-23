<?php
$userIp = $_SERVER['REMOTE_ADDR'];
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// echo $url; // Outputs: Full URL

?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <?php include "templates/global-head.php"; ?>


</head>

<body>
  <!-- header Section -->

  <?php include "templates/header.php"; ?>

  <!-- Hero Section -->
  <section class="hero banner-a" id="hero">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="bg-video">
      <source src="assets/img/Untitled.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <div class="container-fluid">
      <div class="hero-content">
        <h1 class="head1 ani-a fade-right-a animated delay-1">
          Elevate Your Business with UAE’s
          <span>Top Custom Website Design Company</span>
        </h1>
        <h4 class="ani-a fade-up-a animated delay-1">
          Our web design agency delivers professional, custom websites that focus on your goals,
          offering innovative and user-friendly solutions
        </h4>
      </div>
    </div>

    <!-- <div class="robotHand ani-a fade-right-a delay-2">
    <img src="assets/img/hand.png" alt="robot hand">
  </div> -->

    <div class="mouse-container ani-a fade-in-a animated delay-2">
      <a href="#services" class="cta-button">
        <p class="p">Scroll To Explore</p>
        <span class="mouse-outer">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>
  </section>

  <!-- Welcome Section -->
  <section class="welcome">
    <div class="innerwelcome text-center text-white">
      <div class="container">
        <div class="main-hd">
          <h2 class="ani-a fade-down-a delay-1">Build Stunning</h2>
          <h3 class="ani-a fade-up-a delay-1">Custom Websites with UAE’s Leading Web Design Company</h3>
          <p class="p ani-a fade-in-a delay-2">Our web design agency creates professional, custom websites that drive your business forward, delivering seamless user experiences.
          </p>
        </div>
        <div class="features">
          <div class="feature ani-a fade-up-a delay-1">
            <img class="mr-3" src="assets/img/rocket.png" height="100" alt="Generic placeholder image">
            <div class="media-body">
              <h3>Over 200+ Successful Website Launches</h3>
              <p>We’ve helped over 200 businesses create custom websites that stand out and perform exceptionally.</p>
            </div>
          </div>
          <div class="feature ani-a fade-up-a delay-2">
            <img class="mr-3" src="assets\img\star.png" height="100" alt="Generic placeholder image">
            <div class="media-body">
              <h3>95% Client Satisfaction Rate</h3>
              <p>Our professional web design company boasts a 95% satisfaction rate by focusing on client needs and goals.</p>
            </div>
          </div>
          <div class="feature ani-a fade-up-a delay-3">
            <img class="mr-3" src="assets/img/trophy.png" height="100" alt="Generic placeholder image">
            <div class="media-body">
              <h3>8+ Years of Web Design Expertise</h3>
              <p>With over 8 years of experience, our team consistently delivers innovative and user-friendly solutions.</p>
            </div>
          </div>
          <div class="feature ani-a fade-up-a delay-4">
            <img class="mr-3" src="assets/img/flash.png" height="100" alt="Generic placeholder image">
            <div class="media-body">
              <h3>50% Faster Website Loading Speeds</h3>
              <p>Our custom website designs are optimized for speed, ensuring your site loads 50% faster than the average.</p>
            </div>
          </div>
          <div class="feature ani-a fade-up-a delay-4">
            <img class="mr-3" src="assets/img/headphone.png" height="100" alt="Generic placeholder image">
            <div class="media-body">
              <h3>Guaranteed 24/7 Support</h3>
              <p>We provide ongoing support, ensuring your website stays up-to-date and fully functional at all times.</p>
            </div>
          </div>
          <div class="feature ani-a fade-up-a delay-4">
            <img class="mr-3" src="assets/img/bar-chart.png" height="100" alt="Generic placeholder image">
            <div class="media-body">
              <h3> Enhanced SEO for Higher Rankings </h3>
              <p>Our websites are designed with built-in SEO optimization, increasing your chances of ranking higher in search engines.</p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="portfolio-container">
    <div class="container-fluid">
      <div class="portfolio-content main-hd">
        <h2 class="ani-a fade-down-a animated">Our <span>Creative Portfolio</span></h2>
        <h3 class="ani-a fade-up-a animated">Crafting Exceptional Digital Experiences</h3>
        <p class="ani-a fade-up-a animated text-white">
          We’ve helped businesses across industries build engaging, user-friendly websites. Our team combines creativity with functionality to deliver impactful results tailored to each client’s vision.

        </p>
      </div>
      <div class="portfolio-tab">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="mobile-app-tab" data-bs-toggle="tab" data-bs-target="#mobile" type="button" role="tab" aria-controls="mobile" aria-selected="true">Android</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website" type="button" role="tab" aria-controls="website" aria-selected="false" tabindex="-1">IOS</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="games-tab" data-bs-toggle="tab" data-bs-target="#games" type="button" role="tab" aria-controls="games" aria-selected="false" tabindex="-1">Games</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="cms-tab" data-bs-toggle="tab" data-bs-target="#cms" type="button" role="tab" aria-controls="cms" aria-selected="false" tabindex="-1">CMS</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nft-tab" data-bs-toggle="tab" data-bs-target="#nft" type="button" role="tab" aria-controls="nft" aria-selected="false" tabindex="-1">E-Commerce</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
            <div class="portfolio-slide-Box">
              <div class="portfolio-slider">
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-1.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-2.png" alt="">
                </div>
                <div class="portfolio-slide ">
                  <img src="assets/img/portfolio/app-3.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-4.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-5.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-6.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-7.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-8.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-9.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-10.png" alt="">
                </div>
              </div>
              <div class="iphone-frame">
                <img src="assets/img/iphone-frame.png" alt="iphone-image">
              </div>
              <div class="ellipse-frame">
                <img src="assets/img/ellipse.png" alt="iphone-image">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="website" role="tabpanel" aria-labelledby="website-tab">
            <div class="portfolio-slide-Box">
              <div class="portfolio-slider">
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-1.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-2.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-3.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-4.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-5.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-6.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-7.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-8.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-9.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/app-10.png" alt="">
                </div>
              </div>
              <div class="iphone-frame">
                <img src="assets/img/iphone-frame.png" alt="iphone-image">
              </div>
              <div class="ellipse-frame">
                <img src="assets/img/ellipse.png" alt="iphone-image">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="games" role="tabpanel" aria-labelledby="games-tab">
            <div class="portfolio-slide-Box">
              <div class="portfolio-slider">
                <div class="portfolio-slide">
                  <img src="assets\img\portfolio\Games-1.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Games-.2.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Games-.3.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Games-4.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Games-5.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Games-6.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Games-7.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Games-8.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Games-9.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Games-10.png" alt="">
                </div>
              </div>
              <div class="iphone-frame">
                <img src="assets/img/iphone-frame.png" alt="iphone-image">
              </div>
              <div class="ellipse-frame">
                <img src="assets/img/ellipse.png" alt="iphone-image">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="cms" role="tabpanel" aria-labelledby="cms-tab">
            <div class="portfolio-slide-Box">
              <div class="portfolio-slider">

                <div class="portfolio-slide">
                  <img src="assets/img/4.jpg" alt="">
                </div>

                <div class="portfolio-slide">
                  <img src="assets/img/3.jpg" alt="">
                </div>

                <div class="portfolio-slide">
                  <img src="assets/img/2.jpg" alt="">
                </div>

                <div class="portfolio-slide">
                  <img src="assets/img/1.jpg" alt="">
                </div>

                <div class="portfolio-slide">
                  <img src="assets/img/6.jpg" alt="">
                </div>

                <div class="portfolio-slide">
                  <img src="assets/img/5.jpg" alt="">
                </div>

              </div> <!-- ✅ portfolio-slider closed properly -->

              <div class="iphone-frame">
                <img src="assets/img/iphone-frame.png" alt="iphone-image">
              </div>

              <div class="ellipse-frame">
                <img src="assets/img/ellipse.png" alt="ellipse-image">
              </div>

            </div> <!-- ✅ portfolio-slide-Box closed properly -->
          </div> <!-- ✅ tab-pane closed properly -->


          <div class="tab-pane fade" id="nft" role="tabpanel" aria-labelledby="nft-tab">
            <div class="portfolio-slide-Box">
              <div class="portfolio-slider">
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Ecommerce 1.jpg" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Ecommerce-3.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Ecommerce-4.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Ecommerce-5.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Ecommerce-6.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Ecommerce-7.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Ecommerce-8.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Ecommerce-9.png" alt="">
                </div>
                <div class="portfolio-slide">
                  <img src="assets/img/portfolio/Ecommerce-10.png" alt="">
                </div>
              </div>
              <div class="iphone-frame">
                <img src="assets/img/iphone-frame.png" alt="iphone-image">
              </div>
              <div class="ellipse-frame">
                <img src="assets/img/ellipse.png" alt="iphone-image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Sec -->
  <section class="serv-sec">
    <div class="container-fluid">
      <div class="main-hd text-center">
        <h2 class="ani-a fade-down-a delay-1">Our Services</h2>
        <h3 class="ani-a fade-up-a delay-2">Crafting Tailored Digital Solutions for Every Business Need</h3>
        <p class="text-white">
          At Binary Design Hub, we transform your vision into engaging websites and intuitive apps through expert web design, development, and digital marketing strategies.

        </p>
      </div>
    </div>
    <section class="tekrevol-home-discovery  overflow-x-hidden ani-a fade-in-a delay-2">
      <div class="accordion width" id="accordionHorizontalExample">
        <div class="card">
          <div class="card-header active">iOS App Development<div class="svg-arrow-icon d-block d-lg-none"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.3408 27.4683C20.5911 27.7186 20.9094 27.8359 21.2266 27.8359C21.5437 27.8359 21.862 27.7186 22.1123 27.4683L31.0415 18.5391C31.5267 18.0539 31.5267 17.2528 31.0415 16.7676L22.1123 7.8384C21.6271 7.35322 20.826 7.35322 20.3408 7.8384C19.8557 8.32358 19.8557 9.12466 20.3408 9.60984L28.3844 17.6534L20.3408 25.6969C19.8557 26.1821 19.8557 26.9831 20.3408 27.4683Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
                <path d="M5.14821 18.9049H29.9059C30.5919 18.9049 31.1592 18.3376 31.1592 17.6516C31.1592 16.9657 30.5919 16.3983 29.9059 16.3983H5.14821C4.46223 16.3983 3.89492 16.9657 3.89492 17.6516C3.89492 18.3376 4.46223 18.9049 5.14821 18.9049Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
              </svg></div>
          </div>
          <div class="collapse show width">
            <div class="card-body">
              <div class="arrow-title">
                <div class="main-title"> iOS App Development </div>
                <a href="#" class="text-decoration-none arrow-new"><i class="bi bi-arrow-right-short"></i></a>
              </div>
              <div class="content-wrap">
                <div class="img-icon"><img src="assets/img/ios developement.jpg" alt="" class="big-tabImg"></div>
                <p>Our iOS apps are designed with precision and creativity, tailored to deliver smooth performance and a great user experience. Whether you need a business app or an e-commerce solution, we’ve got you covered.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ">Andriod App Development<div class="svg-arrow-icon d-block d-lg-none"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.3408 27.4683C20.5911 27.7186 20.9094 27.8359 21.2266 27.8359C21.5437 27.8359 21.862 27.7186 22.1123 27.4683L31.0415 18.5391C31.5267 18.0539 31.5267 17.2528 31.0415 16.7676L22.1123 7.8384C21.6271 7.35322 20.826 7.35322 20.3408 7.8384C19.8557 8.32358 19.8557 9.12466 20.3408 9.60984L28.3844 17.6534L20.3408 25.6969C19.8557 26.1821 19.8557 26.9831 20.3408 27.4683Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
                <path d="M5.14821 18.9049H29.9059C30.5919 18.9049 31.1592 18.3376 31.1592 17.6516C31.1592 16.9657 30.5919 16.3983 29.9059 16.3983H5.14821C4.46223 16.3983 3.89492 16.9657 3.89492 17.6516C3.89492 18.3376 4.46223 18.9049 5.14821 18.9049Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
              </svg></div>
          </div>
          <div class="collapse width">
            <div class="card-body">
              <div class="arrow-title">
                <div class="main-title">Android App Development</div>
                <a href="#" class="text-decoration-none arrow-new"><i class="bi bi-arrow-right-short"></i></a>
              </div>
              <div class="content-wrap">
                <div class="img-icon"><img src="assets/img/ios-big.png" alt="" class="big-tabImg"></div>
                <p>We develop intuitive Android apps that blend functionality with design, helping you reach a vast audience. Our custom solutions are built to perform and engage, no matter how complex the requirements.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ">Website Design<div class="svg-arrow-icon d-block d-lg-none"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.3408 27.4683C20.5911 27.7186 20.9094 27.8359 21.2266 27.8359C21.5437 27.8359 21.862 27.7186 22.1123 27.4683L31.0415 18.5391C31.5267 18.0539 31.5267 17.2528 31.0415 16.7676L22.1123 7.8384C21.6271 7.35322 20.826 7.35322 20.3408 7.8384C19.8557 8.32358 19.8557 9.12466 20.3408 9.60984L28.3844 17.6534L20.3408 25.6969C19.8557 26.1821 19.8557 26.9831 20.3408 27.4683Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
                <path d="M5.14821 18.9049H29.9059C30.5919 18.9049 31.1592 18.3376 31.1592 17.6516C31.1592 16.9657 30.5919 16.3983 29.9059 16.3983H5.14821C4.46223 16.3983 3.89492 16.9657 3.89492 17.6516C3.89492 18.3376 4.46223 18.9049 5.14821 18.9049Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
              </svg></div>
          </div>
          <div class="collapse width">
            <div class="card-body">
              <div class="arrow-title">
                <div class="main-title"> Website Design</div>
                <a href="#" class="text-decoration-none arrow-new"><i class="bi bi-arrow-right-short"></i></a>
              </div>
              <div class="content-wrap">
                <div class="img-icon"><img src="assets/img/website developemnt.jpg" alt="" class="big-tabImg"></div>
                <p>We craft visually captivating websites that reflect your brand’s personality. Our designs are user-centric, ensuring your audience enjoys a seamless experience whether they’re browsing on desktop or mobile.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ">Website Development<div class="svg-arrow-icon d-block d-lg-none"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.3408 27.4683C20.5911 27.7186 20.9094 27.8359 21.2266 27.8359C21.5437 27.8359 21.862 27.7186 22.1123 27.4683L31.0415 18.5391C31.5267 18.0539 31.5267 17.2528 31.0415 16.7676L22.1123 7.8384C21.6271 7.35322 20.826 7.35322 20.3408 7.8384C19.8557 8.32358 19.8557 9.12466 20.3408 9.60984L28.3844 17.6534L20.3408 25.6969C19.8557 26.1821 19.8557 26.9831 20.3408 27.4683Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
                <path d="M5.14821 18.9049H29.9059C30.5919 18.9049 31.1592 18.3376 31.1592 17.6516C31.1592 16.9657 30.5919 16.3983 29.9059 16.3983H5.14821C4.46223 16.3983 3.89492 16.9657 3.89492 17.6516C3.89492 18.3376 4.46223 18.9049 5.14821 18.9049Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
              </svg></div>
          </div>
          <div class="collapse width">
            <div class="card-body">
              <div class="arrow-title">
                <div class="main-title">Web Development</div>
                <a href="#" class="text-decoration-none arrow-new"><i class="bi bi-arrow-right-short"></i></a>
              </div>
              <div class="content-wrap">
                <div class="img-icon"><img src="assets/img/website developemnt.jpg" alt="" class="big-tabImg"></div>
                <p>From front-end to back-end, our web development team builds high-performing, secure websites that meet your business needs. We prioritize functionality and speed to keep visitors engaged and your site running smoothly.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ">Search Engine Optimizatin (SEO)<div class="svg-arrow-icon d-block d-lg-none"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.3408 27.4683C20.5911 27.7186 20.9094 27.8359 21.2266 27.8359C21.5437 27.8359 21.862 27.7186 22.1123 27.4683L31.0415 18.5391C31.5267 18.0539 31.5267 17.2528 31.0415 16.7676L22.1123 7.8384C21.6271 7.35322 20.826 7.35322 20.3408 7.8384C19.8557 8.32358 19.8557 9.12466 20.3408 9.60984L28.3844 17.6534L20.3408 25.6969C19.8557 26.1821 19.8557 26.9831 20.3408 27.4683Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
                <path d="M5.14821 18.9049H29.9059C30.5919 18.9049 31.1592 18.3376 31.1592 17.6516C31.1592 16.9657 30.5919 16.3983 29.9059 16.3983H5.14821C4.46223 16.3983 3.89492 16.9657 3.89492 17.6516C3.89492 18.3376 4.46223 18.9049 5.14821 18.9049Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
              </svg></div>
          </div>
          <div class="collapse width">
            <div class="card-body">
              <div class="arrow-title">
                <div class="main-title">SEO Services</div>
                <a href="#" class="text-decoration-none arrow-new"><i class="bi bi-arrow-right-short"></i></a>
              </div>
              <div class="content-wrap">
                <div class="img-icon"><img src="assets/img/seo optimization.jpg" alt="" class="big-tabImg"></div>
                <p>Boost your website’s visibility with our expert SEO services. We optimize content, structure, and performance to help your site rank higher, attracting more organic traffic and driving sustainable growth.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ">Social Media Marketing<div class="svg-arrow-icon d-block d-lg-none"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.3408 27.4683C20.5911 27.7186 20.9094 27.8359 21.2266 27.8359C21.5437 27.8359 21.862 27.7186 22.1123 27.4683L31.0415 18.5391C31.5267 18.0539 31.5267 17.2528 31.0415 16.7676L22.1123 7.8384C21.6271 7.35322 20.826 7.35322 20.3408 7.8384C19.8557 8.32358 19.8557 9.12466 20.3408 9.60984L28.3844 17.6534L20.3408 25.6969C19.8557 26.1821 19.8557 26.9831 20.3408 27.4683Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
                <path d="M5.14821 18.9049H29.9059C30.5919 18.9049 31.1592 18.3376 31.1592 17.6516C31.1592 16.9657 30.5919 16.3983 29.9059 16.3983H5.14821C4.46223 16.3983 3.89492 16.9657 3.89492 17.6516C3.89492 18.3376 4.46223 18.9049 5.14821 18.9049Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
              </svg></div>
          </div>
          <div class="collapse width">
            <div class="card-body">
              <div class="arrow-title">
                <div class="main-title"> Social Media Marketing </div>
                <a href="#" class="text-decoration-none arrow-new"><i class="bi bi-arrow-right-short"></i></a>
              </div>
              <div class="content-wrap">
                <div class="img-icon"><img src="assets/img/marketing.jpg" alt="" class="big-tabImg"></div>
                <p>We turn social platforms into powerful marketing channels. Through creative content and targeted strategies, we help you build a strong online community and convert followers into loyal customers.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ">Digital Marketing<div class="svg-arrow-icon d-block d-lg-none"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.3408 27.4683C20.5911 27.7186 20.9094 27.8359 21.2266 27.8359C21.5437 27.8359 21.862 27.7186 22.1123 27.4683L31.0415 18.5391C31.5267 18.0539 31.5267 17.2528 31.0415 16.7676L22.1123 7.8384C21.6271 7.35322 20.826 7.35322 20.3408 7.8384C19.8557 8.32358 19.8557 9.12466 20.3408 9.60984L28.3844 17.6534L20.3408 25.6969C19.8557 26.1821 19.8557 26.9831 20.3408 27.4683Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
                <path d="M5.14821 18.9049H29.9059C30.5919 18.9049 31.1592 18.3376 31.1592 17.6516C31.1592 16.9657 30.5919 16.3983 29.9059 16.3983H5.14821C4.46223 16.3983 3.89492 16.9657 3.89492 17.6516C3.89492 18.3376 4.46223 18.9049 5.14821 18.9049Z" fill="#494949" stroke="#494949" stroke-width="0.3"></path>
              </svg></div>
          </div>
          <div class="collapse width">
            <div class="card-body">
              <div class="arrow-title">
                <div class="main-title">Digital Marketing</div>
                <a href="#" class="text-decoration-none arrow-new"><i class="bi bi-arrow-right-short"></i></a>
              </div>
              <div class="content-wrap">
                <div class="img-icon"><img src="assets/img/digital marketing.jpg" alt="" class="big-tabImg"></div>
                <p>Our digital marketing strategies are crafted to engage, attract, and convert. Whether it’s PPC, content marketing, or email campaigns, we deliver results that grow your business in the digital space.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </section>
  <!-- Pricing Section -->
  <?php include "templates/home-pricing.php" ?>
  <?php include "templates/counter-section.php"; ?>
  <?php include "templates/contactForm.php"; ?>
  <?php include "templates/testi-sec.php"; ?>
  <?php include "templates/footer.php" ?>

  <!-- Scripts Section -->
  <?php include "templates/global-scripts.php" ?>
</body>

</html>