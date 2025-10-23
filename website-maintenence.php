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
    <title>Website Maintenence</title>
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
                        <h1 class="head1 ani-a fade-right-a delay-1">Website <span>Maintenence</span></h1>
                        <h4 class="ani-a fade-right-a delay-1">At Binary Design Hub, we are your trusted partner for creating web experiences that are as unique as your brand. From concept to execution, we are dedicated to transforming your ideas into a powerful online presence.</h4>
                        <!-- <a href="#services" class="cta-button">Scroll to Explore</a> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/website maintanence.png"></div>
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
                            <h5 class="tabHead">With years of expertise across diverse industries, we bring a wealth of knowledge and insight to every project. Our seasoned professionals have successfully collaborated with clients worldwide, delivering impactful solutions tailored to their unique needs. From strategy to execution, our experience ensures exceptional results and unmatched quality, making us a partner you can trust to elevate your brand and business.</h5>
                        </div>
                        <div class="tab-pane fade" id="innovation" role="tabpanel" aria-labelledby="innovation-tab">
                            <h5 class="tabHead">With years of expertise across diverse industries, we bring a wealth of knowledge and insight to every project. Our seasoned professionals have successfully collaborated with clients worldwide, delivering impactful solutions tailored to their unique needs. From strategy to execution, our experience ensures exceptional results and unmatched quality, making us a partner you can trust to elevate your brand and business.</h5>
                        </div>
                        <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                            <h5 class="tabHead">With years of expertise across diverse industries, we bring a wealth of knowledge and insight to every project. Our seasoned professionals have successfully collaborated with clients worldwide, delivering impactful solutions tailored to their unique needs. From strategy to execution, our experience ensures exceptional results and unmatched quality, making us a partner you can trust to elevate your brand and business.</h5>
                        </div>
                        <div class="tab-pane fade" id="transparency" role="tabpanel" aria-labelledby="transparency-tab">
                            <h5 class="tabHead">With years of expertise across diverse industries, we bring a wealth of knowledge and insight to every project. Our seasoned professionals have successfully collaborated with clients worldwide, delivering impactful solutions tailored to their unique needs. From strategy to execution, our experience ensures exceptional results and unmatched quality, making us a partner you can trust to elevate your brand and business.</h5>
                        </div>
                        <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                            <h5 class="tabHead">With years of expertise across diverse industries, we bring a wealth of knowledge and insight to every project. Our seasoned professionals have successfully collaborated with clients worldwide, delivering impactful solutions tailored to their unique needs. From strategy to execution, our experience ensures exceptional results and unmatched quality, making us a partner you can trust to elevate your brand and business.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Inner Services Section HEading -->
    <div class="main-hd">
        <h4 class="ani-a fade-down-a delay-1 animated">Website Maintenence Services</h4>
        <h2 class="ani-a fade-up-a animated">Keeping Your Website Running Smoothly</h2>
    </div>

  <!-- Inner Services Section -->
    <section class="services-section">
        <div class="services-inner">

            <div class="left-section">
                <div class="content">
                    <h3>1. Custom Websites Built for Your Needs:</h3>
                    <p>We ditch the cookie-cutter approach! Our team collaborates closely with you to understand your unique goals and challenges. Then, we craft a custom website that perfectly aligns with your requirements, ensuring it delivers the functionality and user experience you need to succeed online.</p>
                </div>

                <div class="content">
                    <h3>2. Creative Design that Captivates:</h3>
                    <p>Our design isn't just about aesthetics; it's about creating a captivating user experience. Our expert designers will transform your ideas into stunning visuals and user-friendly layouts. The result? A website that not only functions flawlessly but also wows your visitors.</p>
                </div>

                <div class="content">
                    <h3>3. Responsive Design Your Website, Everywhere:</h3>
                    <p>The world has gone mobile! That's why we ensure your website adapts seamlessly to all devices, from desktops to tablets and smartphones. This responsive design approach guarantees an optimal user experience for your visitors, no matter how they access your website.</p>
                </div>

                <div class="content">
                    <h3>4. E-commerce Experts Building Your Online Store:</h3>
                    <p>Are you looking to sell online? We're your e-commerce website development specialists! We'll craft a custom e-commerce website tailored to your unique products and target audience. This includes features like secure payment gateways and intuitive shopping experiences to make online buying a breeze for your customers.</p>
                </div>

                <div class="content">
                    <h3>6. Built for Speed and Search Success:</h3>
                    <p>Our custom websites are built with two things in mind: speed and search engine optimization (SEO). We optimize your website to ensure it loads quickly, keeping visitors engaged. We also implement SEO best practices to help your website rank higher in search engine results pages (SERPs), driving organic traffic to your website.</p>
                </div>
            </div>

            <div class="right-section">

                <img src="assets/img/man-working-table_1048944-20710761.jpg" alt="Branding Mockup" class="mockup">

            </div>

        </div>
    </section>



    <!-- Portfolio Section -->
    <section class="portfolio-container">
        <div class="container-fluid">
            <div class="portfolio-content text-center">
                <h4 class="ani-a fade-down-a animated">Our <span>Creative Portfolio</span></h4>
                <h2 class="ani-a fade-up-a animated">Crafting Exceptional Digital Experiences</h2>
            </div>
            <div class="filter-content-a ani-a fade-in-a delay-3">

                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/website4.webp" data-fancybox="brand-gallery"><img src="assets/img/website4.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/website3.webp" data-fancybox="brand-gallery"><img src="assets/img/website3.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/website2.webp" data-fancybox="brand-gallery"><img src="assets/img/website2.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/wbesite1.webp" data-fancybox="brand-gallery"><img src="assets/img/wbesite1.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/website6.webp" data-fancybox="brand-gallery"><img src="assets/img/website6.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/website5.webp" data-fancybox="brand-gallery"><img src="assets/img/website5.webp" width="100%" height="auto" alt=""></a>
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

                    <h2 class="head2 ani-a fade-up-a delay-1">Flexible Solutions for

                        <span> Every Business</span>

                    </h2>

                    <p class="p ani-a fade-up-a delay-2">No matter the size of your project, we offer tailored solutions to suit your budget and goals. Choose from our flexible packages designed to provide maximum value and impact.
                    </p>

                </div>
                <div class="packages-area ani-a fade-up-a delay-1">
                    <ul class="package-ul pricing-slider" id="pricing_slider">

                        <li class="package-item">

                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> BASIC PLAN </div>
                                <div class="content-title">Basic Membership</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">499 </span><span class="content-duration"></span></div>
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
                                    <li><i class="bi bi-check2-circle"></i>Mobile Responsive will be Additional AED99*</li>
                                    <li><i class="bi bi-check2-circle"></i>CMS will be Additional AED149*</li>
                                </ul>



                                <div class="content-button order-btn-sec">

                                    <!-- <a target="_blank" href="https://binarydesignhub.com/packages/product/custom-startup-website/" class="btn theme-btn btn-red openpopuporder">

                                    Get Started

                                    <i class="bi bi-arrow-right-short"></i>

                                </a> -->
                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Basic" data-price="AED199.99">
                                        Get Started
                                        <!-- <i class="bi bi-arrow-right-short"></i> -->
                                    </a>
                                </div>

                            </div>

                        </li>

                        <li class="package-item">
                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> PROFESSIONAL PLAN </div>
                                <div class="content-title">Professional Website</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,499</span><span class="content-duration"></span>
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
                                    <li><i class="bi bi-check2-circle"></i> Mobile Responsive will be Additional AED99*</li>
                                </ul>



                                <div class="content-button order-btn-sec">

                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Startup" data-price="AED449.99">

                                        Get Started

                                        <!-- <i class="bi bi-arrow-right-short"></i> -->

                                    </a>

                                </div>

                            </div>

                        </li>

                        <li class="package-item">

                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> ELITE PLAN </div>
                                <div class="content-title">Elite Website</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,799</span><span class="content-duration"></span>

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
                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Professional" data-price="AED999.99">

                                        Get Started

                                        <!-- <i class="bi bi-arrow-right-short"></i> -->

                                    </a>

                                </div>

                            </div>

                        </li>

                        <li class="package-item">

                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> SILVER PLAN </div>
                                <div class="content-title">Silver Website</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">2,999</span><span class="content-duration"></span>
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
                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Elite" data-price="AED1599.99">
                                        Get Started
                                        <!-- <i class="bi bi-arrow-right-short"></i> -->
                                    </a>
                                </div>

                            </div>

                        </li>

                        <li class="package-item">

                            <div class="pricing-tables pricing-layout-3">
                                <div class="planTop"> BUISNESS PLAN </div>
                                <div class="content-title">Business Website</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">2,499</span><span class="content-duration"></span> </div>
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
                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Corporate" data-price="AED2499.99">
                                        Get Started
                                        <!-- <i class="bi bi-arrow-right-short"></i> -->
                                    </a>
                                </div>

                            </div>

                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>






    <?php include "templates/counter-section.php"; ?>
    <?php include "templates/contactForm.php"; ?>
    <?php include "templates/testi-sec.php"; ?>
    <?php include "templates/footer.php" ?>

    <!-- Scripts Section -->
    <?php include "templates/global-scripts.php" ?>
</body>

</html>