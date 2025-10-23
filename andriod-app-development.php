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
    <title>Andriod App Development </title>
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
    <section class="hero banner-a" id="hero" style="background-image: url('assets/img/innBanner.jpg');">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="inner-content">
                        <h1 class="head1 ani-a fade-right-a delay-1">Transform Your Business with UAE’s Premier <span>Android App Development</span> Partner
                        </h1>
                        <h4 class="ani-a fade-right-a delay-1">Start Your Chapter With Mobile App Development </h4>
                        <!-- <a href="#services" class="cta-button">Scroll to Explore</a> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/unnamed.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="robotHand">
            <img src="assets/img/hand.png" alt="">
        </div> -->
        <div class="mouse-container ani-a fade-in-a animated delay-2">
            <!-- Optionally wrap this in an 'a' tag to scroll down on click. -->
            <a href="#services" class="cta-button">
                <p class="p">Scroll to explore</p>
                <span class="mouse-outer">
                    <span class="mouse-wheel"></span>
                </span>
            </a>
        </div>
    </section>
    <!-- Welcome Section -->
    <section class="subscribe-section">
        <div class="container-fluid packagesContainer">

            <div class="row  d-flex align-items-center">

                <div class="col-lg-6 col-md-12">

                    <div class="subscribe-section-head ani-a fade-right-a delay-1 main-hd">


                        <h2 class="section-title">

                            <span style="color: white;" class="">Empowering Your Digital Journey with Custom Android Solutions</span>
                        </h2>
                        <p class="p">At Binary Design Hub, we don’t just build apps — we craft digital experiences. As a leading Android App Development Company in the UAE, we create innovative, user-focused mobile applications that elevate your brand, engage your audience, and drive business growth.</p>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12">

                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/andriod.png"></div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="whyus">
        <div class="innerwhyus text-center text-white">
            <div class="container-fluid">
                <div class="main-hd">
                    <h4 class="ani-a fade-in-a delay-1">WHY CHOOSE US</h4>
                    <h2 class="ani-a fade-up-a delay-1">Where Expertise Meets Excellence</h2>
                </div>
                <div class="whyTabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item ani-a fade-up-a delay-1" role="presentation">
                            <button class="nav-link active" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="true"><img class="mr-3" src="assets/img/experience.png" alt="experince icon">
                                <h5 class="tabHead">Experience</h5>
                            </button>
                        </li>
                        <li class="nav-item ani-a fade-up-a delay-2" role="presentation">
                            <button class="nav-link" id="innovation-tab" data-bs-toggle="tab" data-bs-target="#innovation" type="button" role="tab" aria-controls="innovation" aria-selected="false"><img class="mr-3" src="assets/img/innovation (1).png" height="110" alt="Generic placeholder image">
                                <h5 class="tabHead">Innovation</h5>
                            </button>
                        </li>
                        <li class="nav-item ani-a fade-up-a delay-3" role="presentation">
                            <button class="nav-link" id="client-tab" data-bs-toggle="tab" data-bs-target="#client" type="button" role="tab" aria-controls="client" aria-selected="false"><img class="mr-3" src="assets/img/client-centric.png" alt="client image">
                                <h5 class="tabHead">Client - Centric</h5>
                            </button>
                        </li>
                        <li class="nav-item ani-a fade-up-a delay-4" role="presentation">
                            <button class="nav-link" id="transparency-tab" data-bs-toggle="tab" data-bs-target="#transparency" type="button" role="tab" aria-controls="transparency" aria-selected="false"><img class="mr-3" src="assets/img/transparency.png" alt="Transparency image">
                                <h5 class="tabHead">Transparency</h5>
                            </button>
                        </li>
                        <li class="nav-item ani-a fade-up-a delay-5" role="presentation">
                            <button class="nav-link" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false"><img class="mr-3" src="assets/img/results-driven.png" alt="results image">
                                <h5 class="tabHead">Results Driven</h5>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                            <h5 class="tabHead">Proven Success with 200+ App Launches With a track record of over 200 successful Android app launches, we’ve empowered businesses to achieve their digital goals and captivate their users.
                            </h5>
                        </div>
                        <div class="tab-pane fade" id="innovation" role="tabpanel" aria-labelledby="innovation-tab">
                            <h5 class="tabHead">Consistently High Client Satisfaction We pride ourselves on a 95% client satisfaction rate, achieved through our commitment to understanding your vision and delivering mobile apps that exceed expectations.
                            </h5>
                        </div>
                        <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                            <h5 class="tabHead">8+ Years of Industry Expertise Our extensive experience in mobile app development means we know what works. We blend creativity with technology to deliver high-performing apps tailored to your brand.
                            </h5>
                        </div>
                        <div class="tab-pane fade" id="transparency" role="tabpanel" aria-labelledby="transparency-tab">
                            <h5 class="tabHead">Lightning-Fast App Performance Speed matters. Our Android apps load 50% faster than the industry average, ensuring a smooth, responsive user experience that keeps your audience engaged.
                            </h5>
                        </div>
                        <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                            <h5 class="tabHead">24/7 Support & Maintenance We offer round-the-clock support, ensuring your app remains up-to-date, secure, and fully functional at all times.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Services Section Heading -->
    <div class="main-hd">
        <h4 class="ani-a fade-down-a delay-1 animated">Android App Development Services</h4>
        <h2 class="ani-a fade-up-a animated">Build Powerful Android Apps That Engage & Delight Users!</h2>
    </div>

    <!-- Inner Services Section -->
    <section class="services-section">
        <div class="services-inner">

            <div class="left-section">
                <div class="content">
                    <h3>1. Custom Android App Development</h3>
                    <p>We develop tailor-made Android applications that align with your business goals. From initial concept to deployment, we create apps that are fast, reliable, and optimized for all Android devices.</p>
                </div>

                <div class="content">
                    <h3>2. UI/UX Design Excellence</h3>
                    <p>Our designers craft visually appealing and user-friendly interfaces. We focus on smooth navigation, interactive design, and engaging visuals to provide an excellent user experience.</p>
                </div>

                <div class="content">
                    <h3>3. Performance & Optimization</h3>
                    <p>We ensure your app performs flawlessly across devices. From speed optimization to efficient memory usage, our apps are built to handle high performance demands seamlessly.</p>
                </div>

                <div class="content">
                    <h3>4. Testing & Quality Assurance</h3>
                    <p>Our QA team rigorously tests every app on multiple Android devices and versions. This guarantees bug-free performance, smooth functionality, and readiness for the Google Play Store.</p>
                </div>

                <div class="content">
                    <h3>5. Maintenance & Updates</h3>
                    <p>We provide ongoing maintenance and updates to keep your Android app secure, compatible with new OS versions, and continuously improved for an optimal user experience.</p>
                </div>
            </div>

            <div class="right-section">
                
                <img src="assets/img/representation-user-experience-interface-design_23-2150169865.jpg" alt="Android App Mockup" class="mockup">
            
            </div>

        </div>
    </section>



    <!-- Portfolio Section -->
        <section class="portfolio-container">
            <div class="container-fluid">
                <div class="portfolio-content text-center main-hd">
                    <h2 class="ani-a fade-down-a animated">Our <span>Creative Portfolio</span></h2>
                    <h3 class="ani-a fade-up-a animated">Turning Ideas into Impactful Apps</h3>
                    <p class="text-white">We believe every app should be more than just functional — it should tell a story, solve problems, and create unforgettable user experiences. Our portfolio showcases diverse projects that blend sleek design, intuitive navigation, and powerful technology.
                        From AI-driven apps that personalize user interactions to eCommerce platforms that streamline shopping experiences, we build apps that spark connections and deliver measurable results.
                    </p>
                </div>
                <div class="filter-content-a ani-a fade-in-a delay-3">

                    <div class="filter-item-a all branding" style="display: block;">
                        <a href="assets/img/portfolio/app-1.png" data-fancybox="brand-gallery"><img src="assets/img/portfolio/app-1.png" width="100%" height="auto" alt=""></a>
                    </div>
                    <div class="filter-item-a all branding" style="display: block;">
                        <a href="assets/img/portfolio/app-2.png" data-fancybox="brand-gallery"><img src="assets/img/portfolio/app-2.png" width="100%" height="auto" alt=""></a>
                    </div>
                    <div class="filter-item-a all branding" style="display: block;">
                        <a href="assets/img/portfolio/app-3.png" data-fancybox="brand-gallery"><img src="assets/img/portfolio/app-3.png" width="100%" height="auto" alt=""></a>
                    </div>
                    <div class="filter-item-a all branding" style="display: block;">
                        <a href="assets/img/portfolio/app-4.png" data-fancybox="brand-gallery"><img src="assets/img/portfolio/app-4.png" width="100%" height="auto" alt=""></a>
                    </div>
                    <div class="filter-item-a all branding" style="display: block;">
                        <a href="assets/img/portfolio/app-5.png" data-fancybox="brand-gallery"><img src="assets/img/portfolio/app-5.png" width="100%" height="auto" alt=""></a>
                    </div>
                    <div class="filter-item-a all branding" style="display: block;">
                        <a href="assets/img/portfolio/app-6.png" data-fancybox="brand-gallery"><img src="assets/img/portfolio/app-6.png" width="100%" height="auto" alt=""></a>
                    </div>

                    <!-- <div class="filter-item-a all branding" style="display: block;">
                        <a href="assets/img/portfolio/b-7.png" data-fancybox="brand-gallery"><img src="assets/img/portfolio/b-7.png" width="100%" height="auto" alt=""></a>
                    </div>
                    <div class="filter-item-a all branding" style="display: block;">
                        <a href="assets/img/portfolio/b-8.png" data-fancybox="brand-gallery"><img src="assets/img/portfolio/b-8.png" width="100%" height="auto" alt=""></a>
                    </div>
                    <div class="filter-item-a all branding" style="display: block;">
                        <a href="assets/img/portfolio/b-9.png" data-fancybox="brand-gallery"><img src="assets/img/portfolio/b-9.png" width="100%" height="auto" alt=""></a>
                    </div> -->
                </div>
            </div>
        </section>

    <!-- Pricing Section -->
    <section class="pacakges">
        <div class="inner-packages">
            <div class="container-fluid packagesContainer">
                <div class="main-hd text-center">

                    <!-- <h4 class="small-head ani-a fade-in-a ">Choose Your </h4> -->

                    <h2 class="head2 ani-a fade-up-a delay-1">Flexible Packages Tailored to <span> Your Needs </span>

                    </h2>

                    <p class="p ani-a fade-up-a delay-2">Choose from a variety of pricing plans that suit businesses of all sizes. Whether you’re launching your first app or upgrading an existing one, we have a solution that fits your budget and goals.
                    </p>

                </div>
                <div class="packages-area ani-a fade-up-a delay-1">
                    <ul class="package-ul pricing-slider" id="pricing_slider">

                        <li class="package-item">

                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> BASIC PLAN </div>
                                <div class="content-title">Basic Membership</div>
                                <div class="pricing-price"><sup class="content-currency">$</sup><span class="content-price">199 </span><span class="content-duration">/ month</span></div>
                                <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p>
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i>5 Stock Photos</li>
                                    <li><i class="bi bi-check2-circle"></i>5 Page Website</li>
                                    <li><i class="bi bi-check2-circle"></i>3 Banner Design</li>
                                    <li><i class="bi bi-check2-circle"></i>1 jQuery Slider Banner</li>
                                    <li><i class="bi bi-check2-circle"></i>FREE Google Friendly Sitemap</li>
                                    <li><i class="bi bi-check2-circle"></i>Complete W3C Certified HTML</li>
                                    <li><i class="bi bi-check2-circle"></i>Facebook Page Design</li>
                                    <li><i class="bi bi-check2-circle"></i>Twitter Page Design</li>
                                    <li><i class="bi bi-check2-circle"></i>YouTube Page Design</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Unique Design Guarantee</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Satisfaction And Money Back Guarantee**</li>
                                    <li><i class="bi bi-check2-circle"></i>Mobile Responsive will be Additional $99*</li>
                                    <li><i class="bi bi-check2-circle"></i>CMS will be Additional $149*</li>
                                </ul>



                                <div class="content-button order-btn-sec">

                                    <!-- <a target="_blank" href="https://binarydesignhub.com/packages/product/custom-startup-website/" class="btn theme-btn btn-red openpopuporder">

                                    Get Started

                                    <i class="bi bi-arrow-right-short"></i>

                                </a> -->
                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Basic" data-price="$199.99">
                                        Get Started
                                        <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                </div>

                            </div>

                        </li>

                        <li class="package-item">
                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> PROFESSIONAL PLAN </div>
                                <div class="content-title">Professional Website</div>
                                <div class="pricing-price"><sup class="content-currency">$</sup><span class="content-price">$ 499</span><span class="content-duration">/ month</span>
                                </div>
                                <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p>
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i>10 Unique Pages Website</li>
                                    <li><i class="bi bi-check2-circle"></i>CMS / Admin Panel Support</li>
                                    <li><i class="bi bi-check2-circle"></i>Mobile Responsive</li>
                                    <li><i class="bi bi-check2-circle"></i>5 Stock images</li>
                                    <li><i class="bi bi-check2-circle"></i>3 Banner Designs</li>
                                    <li><i class="bi bi-check2-circle"></i>1 jQuery Slider Banner</li>
                                    <li><i class="bi bi-check2-circle"></i>FREE Google Friendly Sitemap</li>
                                    <li><i class="bi bi-check2-circle"></i>Complete W3C Certified HTML</li>
                                    <li><i class="bi bi-check2-circle"></i>Facebook Page Design</li>
                                    <li><i class="bi bi-check2-circle"></i>Twitter Page Design</li>
                                    <li><i class="bi bi-check2-circle"></i>YouTube Page Design</li>
                                    <li><i class="bi bi-check2-circle"></i>Complete Deployment</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Satisfaction And Money Back Guarantee**</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Unique Design Guarantee</li>
                                    <li><i class="bi bi-check2-circle"></i> Mobile Responsive will be Additional $99*</li>
                                </ul>



                                <div class="content-button order-btn-sec">

                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Startup" data-price="$449.99">

                                        Get Started

                                        <i class="bi bi-arrow-right-short"></i>

                                    </a>

                                </div>

                            </div>

                        </li>

                        <li class="package-item">

                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> ELITE PLAN </div>
                                <div class="content-title">Elite Website</div>
                                <div class="pricing-price"><sup class="content-currency">$</sup><span class="content-price">999</span><span class="content-duration">/ month</span>

                                </div>
                                <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p>
                                <ul class="content-desc">

                                    <li><i class="bi bi-check2-circle"></i> Upto 10 to 15 Unique Pages Website </li>

                                    <li><i class="bi bi-check2-circle"></i> Conceptual and Dynamic Website </li>

                                    <li><i class="bi bi-check2-circle"></i> Mobile Responsive </li>

                                    <li><i class="bi bi-check2-circle"></i> Online Reservation/Appointment Tool (Optional) </li>

                                    <li><i class="bi bi-check2-circle"></i> Online Payment Integration (Optional) </li>

                                    <li><i class="bi bi-check2-circle"></i> Custom Forms </li>

                                    <li><i class="bi bi-check2-circle"></i> Lead Capturing Forms (Optional) </li>

                                    <li><i class="bi bi-check2-circle"></i> Striking Hover Effects </li>

                                    <li><i class="bi bi-check2-circle"></i> Newsletter Subscription (Optional) </li>

                                    <li><i class="bi bi-check2-circle"></i> Newsfeed Integration </li>

                                    <li><i class="bi bi-check2-circle"></i> Social Media Integration </li>

                                    <li><i class="bi bi-check2-circle"></i> Search Engine Submission </li>

                                    <li><i class="bi bi-check2-circle"></i> 5 Stock Photos </li>

                                    <li><i class="bi bi-check2-circle"></i> 3 Unique Banner Design </li>

                                    <li><i class="bi bi-check2-circle"></i> 1 jQuery Slider Banner </li>

                                    <li><i class="bi bi-check2-circle"></i> Complete W3C Certified HTML </li>

                                    <li><i class="bi bi-check2-circle"></i>48 to 72 hours TAT</li>

                                    <li><i class="bi bi-check2-circle"></i>Facebook Page Design</li>

                                    <li><i class="bi bi-check2-circle"></i>Twitter Page Design</li>

                                    <li><i class="bi bi-check2-circle"></i>YouTube Page Design</li>

                                    <li><i class="bi bi-check2-circle"></i>Complete Deployment</li>

                                    <li><i class="bi bi-check2-circle"></i>100% Satisfaction Guarantee</li>

                                    <li><i class="bi bi-check2-circle"></i>100% Unique Design Guarantee</li>

                                    <li><i class="bi bi-check2-circle"></i>100% Money Back Guarantee *</li>

                                </ul>



                                <div class="content-button order-btn-sec">
                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Professional" data-price="$999.99">

                                        Get Started

                                        <i class="bi bi-arrow-right-short"></i>

                                    </a>

                                </div>

                            </div>

                        </li>

                        <li class="package-item">

                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> SILVER PLAN </div>
                                <div class="content-title">Silver Website</div>
                                <div class="pricing-price"><sup class="content-currency">$</sup><span class="content-price">1599</span><span class="content-duration">/ month</span>
                                </div>

                                <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p>
                                <ul class="content-desc">

                                    <li><i class="bi bi-check2-circle"></i>15 to 20 Pages Website </li>

                                    <li><i class="bi bi-check2-circle"></i>Custom Made, Interactive, Dynamic & High End Design</li>

                                    <li><i class="bi bi-check2-circle"></i>Custom WP</li>

                                    <li><i class="bi bi-check2-circle"></i>1 jQuery Slider Banner</li>

                                    <li><i class="bi bi-check2-circle"></i>Up to 10 Custom Made Banner Designs</li>

                                    <li><i class="bi bi-check2-circle"></i>10 Stock Images</li>

                                    <li><i class="bi bi-check2-circle"></i>Unlimited Revisions</li>

                                    <li><i class="bi bi-check2-circle"></i>Special Hoover Effects</li>

                                    <li><i class="bi bi-check2-circle"></i>Content Management System (CMS)</li>

                                    <li><i class="bi bi-check2-circle"></i>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>

                                    <li><i class="bi bi-check2-circle"></i>Online Payment Integration (Optional)</li>

                                    <li><i class="bi bi-check2-circle"></i>Multi Lingual (Optional)</li>

                                    <li><i class="bi bi-check2-circle"></i>Custom Dynamic Forms (Optional)</li>

                                    <li><i class="bi bi-check2-circle"></i>Signup Area (For Newsletters, Offers etc.)</li>

                                    <li><i class="bi bi-check2-circle"></i>Search Bar</li>

                                    <li><i class="bi bi-check2-circle"></i>Live Feeds of Social Networks integration (Optional)</li>

                                    <li><i class="bi bi-check2-circle"></i>Mobile Responsive</li>

                                    <li><i class="bi bi-check2-circle"></i>FREE 5 Years Domain Name</li>

                                    <li><i class="bi bi-check2-circle"></i>Free Google Friendly Sitemap</li>

                                    <li><i class="bi bi-check2-circle"></i>Search Engine Submission</li>

                                    <li><i class="bi bi-check2-circle"></i>Complete W3C Certified HTML</li>

                                    <li><i class="bi bi-check2-circle"></i>Industry Specified Team of Expert Designers and Developers</li>

                                    <li><i class="bi bi-check2-circle"></i>Complete Deployment</li>

                                    <li><i class="bi bi-check2-circle"></i>Dedicated Accounts Manager</li>

                                    <li><i class="bi bi-check2-circle"></i>Facebook Page Design</li>

                                    <li><i class="bi bi-check2-circle"></i>Twitter Page Design</li>

                                    <li><i class="bi bi-check2-circle"></i>YouTube Page Design</li>

                                    <li><i class="bi bi-check2-circle"></i>100% Ownership Rights</li>

                                    <li><i class="bi bi-check2-circle"></i>100% Satisfaction Guarantee</li>

                                    <li><i class="bi bi-check2-circle"></i>100% Unique Design Guarantee</li>
                                </ul>



                                <div class="content-button order-btn-sec">
                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Elite" data-price="$1599.99">
                                        Get Started
                                        <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                </div>

                            </div>

                        </li>

                        <li class="package-item">

                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> BUISNESS PLAN </div>
                                <div class="content-title">Business Website</div>
                                <div class="pricing-price"><sup class="content-currency">$</sup><span class="content-price">2,499</span><span class="content-duration">/ month</span> </div>
                                <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p>
                                <ul class="content-desc">


                                    <li><i class="bi bi-check2-circle"></i>Unlimited Pages Website</li>
                                    <li><i class="bi bi-check2-circle"></i>Custom Made, Interactive, Dynamic & High End Design</li>
                                    <li><i class="bi bi-check2-circle"></i>Custom WP (or) Custom PHP Development</li>
                                    <li><i class="bi bi-check2-circle"></i>1 jQuery Slider Banner</li>
                                    <li><i class="bi bi-check2-circle"></i>Up to 10 Custom Made Banner Designs</li>
                                    <li><i class="bi bi-check2-circle"></i>30 Seconds 2D Explainer Video</li>
                                    <li><i class="bi bi-check2-circle"></i>Voice - Over & Sound Effects</li>
                                    <li><i class="bi bi-check2-circle"></i>Professional Script Writing</li>
                                    <li><i class="bi bi-check2-circle"></i>Storyboard</li>
                                    <li><i class="bi bi-check2-circle"></i>10 Stock Images</li>
                                    <li><i class="bi bi-check2-circle"></i>Unlimited Revisions</li>
                                    <li><i class="bi bi-check2-circle"></i>Special Hoover Effects</li>
                                    <li><i class="bi bi-check2-circle"></i>Content Management System (CMS)</li>
                                    <li><i class="bi bi-check2-circle"></i>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
                                    <li><i class="bi bi-check2-circle"></i>Online Payment Integration (Optional)</li>
                                    <li><i class="bi bi-check2-circle"></i>Multi Lingual (Optional)</li>
                                    <li><i class="bi bi-check2-circle"></i>Custom Dynamic Forms (Optional)</li>
                                    <li><i class="bi bi-check2-circle"></i>Signup Area (For Newsletters, Offers etc.)</li>
                                    <li><i class="bi bi-check2-circle"></i>Search Bar</li>
                                    <li><i class="bi bi-check2-circle"></i>Live Feeds of Social Networks integration (Optional)</li>
                                    <li><i class="bi bi-check2-circle"></i>Mobile Responsive</li>
                                    <li><i class="bi bi-check2-circle"></i>SEO Meta Tags</li>
                                    <li><i class="bi bi-check2-circle"></i>Free Google Friendly Sitemap</li>
                                    <li><i class="bi bi-check2-circle"></i>Search Engine Submission</li>
                                    <li><i class="bi bi-check2-circle"></i>Complete W3C Certified HTML</li>
                                    <li><i class="bi bi-check2-circle"></i>Industry Specified Team of Expert Designers and Developers</li>
                                    <li><i class="bi bi-check2-circle"></i>Complete Deployment</li>
                                    <li><i class="bi bi-check2-circle"></i>Dedicated Accounts Manager</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Ownership Rights</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Unique Design Guarantee</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Satisfaction And Money Back Guarantee**</li>

                                </ul>





                                <div class="content-button order-btn-sec">
                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Corporate" data-price="$2499.99">
                                        Get Started
                                        <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                </div>

                            </div>

                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- Counter -->
    <section class="counter-two">
        <div class="container-fluid packagesContainer">
            <div class="row">
                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single ani-a fade-up-a delay-1">

                        <div class="counter-two__count count-box counter-box">

                            <h3 class="count-text counter-number" data-stop="12" data-speed="1500">

                                <span class="counter" data-number="12"></span>

                            </h3>

                            <span>k+</span>

                        </div>
                        <p class="counter-two__text"><strong>Apps Developed Worldwide
                            </strong></p>
                        <p class="counter-two__text">We’ve built a portfolio of over 10,000 unique apps, each tailored to meet specific business needs and user expectations.
                        </p>
                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single counter-two__single-2 ani-a fade-up-a delay-2">

                        <div class="counter-two__count count-box counter-box">

                            <h3 class="count-text counter-number" data-stop="9" data-speed="2000"><span class="counter" data-number="9"></span></h3>
                            <span>+</span>

                        </div>
                        <p class="counter-two__text"><strong> Years of Experience </strong></p>
                        <p class="counter-two__text">Nearly a decade of excellence in iOS app development — turning ideas into innovative mobile solutions.
                        </p>

                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single ani-a fade-up-a delay-3">

                        <div class="counter-two__count count-box counter-box">

                            <h3 class="count-text counter-number" data-stop="98" data-speed="2000"><span class="counter"

                                    data-number="98"></span>

                            </h3>

                            <span>%</span>

                        </div>
                        <p class="counter-two__text"><strong>Client Satisfaction Rate</strong></p>
                        <p class="counter-two__text"> A customer-first approach has earned us a high client retention rate and consistent positive feedback.
                        </p>

                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single counter-two__single-2 counter-two__single-4 ani-a fade-up-a delay-4" style="border:none;">

                        <div class="counter-two__count count-box">

                            <h3 class="count-text" data-stop="400" data-speed="1500"><span class="counter"

                                    data-number="400"></span></h3>
                            <span>+</span>
                        </div>

                        <p class="counter-two__text"><strong>Global Projects Delivered </strong></p>
                        <p class="counter-two__text">Our reach spans the globe, with 400+ successful projects crafted for businesses in various industries.
                        </p>


                    </div>

                </div>

                <!--Counter Two End-->

            </div>

        </div>

    </section>
    <section class="contact-one">
        <div class="container-fluid packagesContainer">
            <div class="main-hd">
                <h2 class="small-head ani-a fade-in-a ">Contact Us</h2>

                <h3 class="head2 ani-a fade-up-a delay-1">Let’s Build Your Next Android App</h3>
                <p class="p">Ready to transform your app idea into reality? Let’s collaborate and create an Android app that not only meets your business goals but also delights your users.

                </p>
                <p class="p"><strong>Contact Us Today</strong> — and kickstart your journey towards digital success! </p>
                <ul class="list-unstyled social_detail formSocial ani-a fade-left-a delay-1">

                    <li><a target="_blank" href="https://www.facebook.com/binarydesignhub"><i class="bi bi-facebook social-networks"></i></a></li>
                    <li><a target="_blank" href="https://www.twitter.com/binarydesignhub"><i class="bi bi-twitter social-networks"></i></a></li>
                    <li><a target="_blank" href="https://www.behance.net/binarydesignhub"><i class="bi bi-behance social-networks"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/binarydesignhub"><i class="bi bi-linkedin social-networks"></i></a></li>
                    <li><a target="_blank" href="https://maps.app.goo.gl/wVJUaBCNd4k2xvX27"><i class="bi bi-map social-networks"></i></a></li>

                </ul>
            </div>
            <div class="contact-one__form-box ani-a fade-in-a animated delay-1">

                <form action="#!" id="bannerForm" class="">

                    <div class="row">

                        <div class="col-xl-4 col-lg-4">

                            <div class="form-input">

                                <input type="text" name="name" id="name" class="inp-a" placeholder="Enter Your Name*" required />

                            </div>

                        </div>

                        <div class="col-xl-4 col-lg-4">

                            <div class="form-input">

                                <input type="email" name="email" id="email" class="inp-a" placeholder="Enter Your Email*" required />

                            </div>

                        </div>

                        <div class="col-xl-4 col-lg-4">

                            <div class="form-input">

                                <input type="tel" name="phone" id="phone" class="inp-a" placeholder="Enter Your Contact Number*" required />

                            </div>

                        </div>

                        <div class="col-xl-12 col-lg-12">

                            <div class="form-input">

                                <textarea name="message" id="message" class="inp-a" placeholder="Enter a brief description about your project*" required></textarea>

                            </div>

                        </div>

                        <div class="col-xl-12">

                            <div class="header-status" aria-hidden="true"></div>
                            <div class="form-btn ">
                                <button type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-yellow btn-submit btn-full theme-btn cta-btn btn-red">
                                    <span>LEAVE US A MESSAGE</span>
                                </button>

                            </div>

                        </div>

                    </div>

                </form>

                <div id="contactform-status"></div>

                <!-- <div class="result"></div> -->

            </div>
        </div>
    </section>
    <?php include "templates/testi-sec.php"; ?>
    <?php include "templates/footer.php" ?>

    <!-- Scripts Section -->
    <?php include "templates/global-scripts.php" ?>
</body>

</html>