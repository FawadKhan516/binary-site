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
    <title>Shopify Development</title>
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
                        <h1 class="head1 ani-a fade-right-a delay-1">Shopify
                            <span>Development</span>
                        </h1>
                        <h4 class="ani-a fade-right-a delay-1">Get introduced to the best shopify web development for a successful start to the online business.</h4>
                        <!-- <a href="#services" class="cta-button">Scroll to Explore</a> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/shopify hero right.png"></div>
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
        <h4 class="ani-a fade-down-a delay-1 animated">Shopify Development Services</h4>
        <h2 class="ani-a fade-up-a animated">Crafting Seamless Shopify Experiences</h2>
    </div>

  <!-- Inner Services Section -->
    <section class="services-section">
        <div class="services-inner">

            <div class="left-section">
                <div class="content">
                    <h3>1. Custom Shopify Stores Built for Your Brand :</h3>
                    <p>We don't just build Shopify stores – we create custom online experiences that perfectly reflect your brand and business goals. Every detail, from design to functionality, is meticulously crafted to bring your vision to life and deliver an exceptional user experience.</p>
                </div>

                <div class="content">
                    <h3>2. Finding the Perfect Theme & Making Your Brand Shine:</h3>
                    <p>Your website's look and feel are crucial for brand recognition. That's why we'll help you select and customize a Shopify theme that perfectly captures your brand's unique personality.</p>
                </div>

                <div class="content">
                    <h3>3. E-commerce Solutions:</h3>
                    <p>If you're in the world of online sales, we're experts in Shopify e-commerce development. From setting up and configuring your Shopify store to optimizing it for conversions, we ensure your online business thrives.</p>
                </div>

                <div class="content">
                    <h3>4. Powerful Apps to Boost Your Store:</h3>
                    <p>Want to add extra functionality to your Shopify store? We can help! Our experts will identify and integrate the perfect apps to streamline your operations, enhance user experience, and help your store reach its full potential.</p>
                </div>

                <div class="content">
                    <h3>5. Mobile-Friendly Shopping - A Must-Have in Today's World:</h3>
                    <p>People shop on their phones more than ever these days. That's why we ensure your Shopify store is mobile-responsive, offering customers a smooth and user-friendly experience on any device.</p>
                </div>
            </div>

            <div class="right-section">
       
                    <img src="assets/img/close-up-man-shopping-with-laptop_23-2149241375.jpg" alt="Branding Mockup" class="mockup">
              
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
                    <a href="assets/img/shopify4.webp" data-fancybox="brand-gallery"><img src="assets/img/shopify4.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/shopify3.webp" data-fancybox="brand-gallery"><img src="assets/img/shopify3.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/shopify2.webp" data-fancybox="brand-gallery"><img src="assets/img/shopify2.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/shopify1.webp" data-fancybox="brand-gallery"><img src="assets/img/shopify1.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/shopify6.webp" data-fancybox="brand-gallery"><img src="assets/img/shopify6.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/shopify5.webp" data-fancybox="brand-gallery"><img src="assets/img/shopify5.webp" width="100%" height="auto" alt=""></a>
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
                                <div class="content-title">Enterprise</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">499 </span><span class="content-duration"></span></div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i>Custom designed Homepage (6x concepts) </li>
                                    <li><i class="bi bi-check2-circle"></i>Unlimited Custom designed Inner pages </li>
                                    <li><i class="bi bi-check2-circle"></i>Custom Made, Interactive, Dynamic & User Friendly Design </li>
                                    <li><i class="bi bi-check2-circle"></i>High End UI|UX </li>
                                    <li><i class="bi bi-check2-circle"></i>Custom Coding & Development </li>
                                    <li><i class="bi bi-check2-circle"></i>Marketplace Development (Optional) </li>
                                    <li><i class="bi bi-check2-circle"></i>Content Management System </li>
                                    <li><i class="bi bi-check2-circle"></i>Sales & Inventory Management </li>
                                    <li><i class="bi bi-check2-circle"></i>Unlimited Products </li>
                                    <li><i class="bi bi-check2-circle"></i>Unlimited Categories </li>
                                    <li><i class="bi bi-check2-circle"></i>Unlimited Premium Stock Photos </li>
                                    <li><i class="bi bi-check2-circle"></i> Unlimited Promotional Banners </li>
                                    <li><i class="bi bi-check2-circle"></i>2 Landing Pages Design </li>
                                    <li><i class="bi bi-check2-circle"></i>Interactive jQuery Slider </li>
                                    <li><i class="bi bi-check2-circle"></i> Cross platform (Desktop, iPhone, Android, etc) responsive compatibility </li>
                                    <li><i class="bi bi-check2-circle"></i>Product Detail Page Design </li>
                                    <li><i class="bi bi-check2-circle"></i> Bulk CSV Products Upload </li>
                                    <li><i class="bi bi-check2-circle"></i> Product Return Management System </li>
                                    <li><i class="bi bi-check2-circle"></i>Reward pointing system </li>
                                    <li><i class="bi bi-check2-circle"></i> Custom Calculators </li>
                                    <li><i class="bi bi-check2-circle"></i> Product offers (wish-list, discount options, coupon codes) </li>
                                    <li><i class="bi bi-check2-circle"></i> Multiple Product variation (Color, Size, Quantity, and other attributes) </li>
                                    <li><i class="bi bi-check2-circle"></i> Intelligent search system with filtering options (search by price, categories, Styles etc) </li>
                                    <li><i class="bi bi-check2-circle"></i> Product sorting (Newest, Featured, Popular, Best Seller) </li>
                                    <li><i class="bi bi-check2-circle"></i> Shipping Merchant Integration </li>
                                    <li><i class="bi bi-check2-circle"></i> Dropshipping Integration (Optional) </li>
                                    <li><i class="bi bi-check2-circle"></i> Customer Login/Signup Area </li>
                                    <li><i class="bi bi-check2-circle"></i>Complete Database Creation </li>
                                    <li><i class="bi bi-check2-circle"></i> Full Shopping Cart Integration </li>
                                    <li><i class="bi bi-check2-circle"></i> Product Rating & Reviews </li>
                                    <li><i class="bi bi-check2-circle"></i> Automated Emails </li>
                                    <li><i class="bi bi-check2-circle"></i> Automated Reminders </li>
                                    <li><i class="bi bi-check2-circle"></i> Email Marketing Campaigns </li>
                                    <li><i class="bi bi-check2-circle"></i> Tell a Friend Feature </li>
                                    <li><i class="bi bi-check2-circle"></i> Guest Checkout </li>
                                    <li><i class="bi bi-check2-circle"></i> Shipping Labels </li>
                                    <li><i class="bi bi-check2-circle"></i> News & promotions </li>
                                    <li><i class="bi bi-check2-circle"></i> Downloadable items (eBooks, PDFs, Podcast, Videos) </li>
                                    <li><i class="bi bi-check2-circle"></i> Easy Product Search </li>
                                    <li><i class="bi bi-check2-circle"></i> Payment Gateway Integration </li>
                                    <li><i class="bi bi-check2-circle"></i> Multi-currency Support </li>
                                    <li><i class="bi bi-check2-circle"></i> Live Chat/Bot Chat Integration (Optional) </li>
                                    <li><i class="bi bi-check2-circle"></i> Social Media Integration (Facebook, Twitter, LinkedIn) </li>
                                    <li><i class="bi bi-check2-circle"></i> Social Media Live Feeds Widget (Facebook, Instragram, Pinterest) </li>
                                    <li><i class="bi bi-check2-circle"></i> 3rd Party API Integration </li>
                                    <li><i class="bi bi-check2-circle"></i> Signup Automated Email Authentication </li>
                                    <li><i class="bi bi-check2-circle"></i> Signup Area (For Newsletters, Offers etc.) </li>
                                    <li><i class="bi bi-check2-circle"></i> Search Engine Indexing (Google, Yahoo, and Bing) </li>
                                    <li><i class="bi bi-check2-circle"></i> Module-wise Architecture </li>
                                    <li><i class="bi bi-check2-circle"></i> Extensive Admin Panel </li>
                                    <li><i class="bi bi-check2-circle"></i> 404 Redirect </li>
                                    <li><i class="bi bi-check2-circle"></i> XML Sitemap </li>
                                    <li><i class="bi bi-check2-circle"></i> Parallax Scrolling </li>
                                    <li><i class="bi bi-check2-circle"></i> Fast Load Time </li>
                                    <li><i class="bi bi-check2-circle"></i> Security plugins </li>
                                    <li><i class="bi bi-check2-circle"></i> 5 year free hosting </li>
                                    <li><i class="bi bi-check2-circle"></i> 5 year free domain registration </li>
                                    <li><i class="bi bi-check2-circle"></i> SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, etc) </li>
                                    <li><i class="bi bi-check2-circle"></i> On-page SEO configuration </li>
                                    <li><i class="bi bi-check2-circle"></i> Google Friendly Sitemap </li>
                                    <li><i class="bi bi-check2-circle"></i> Google Analytic Installation </li>
                                    <li><i class="bi bi-check2-circle"></i> Google Webmaster Tool </li>
                                    <li><i class="bi bi-check2-circle"></i> W3C Certified HTML </li>
                                    <li><i class="bi bi-check2-circle"></i> Cross Browser Compatible </li>
                                    <li><i class="bi bi-check2-circle"></i> Complete Deployment </li>
                                    <li><i class="bi bi-check2-circle"></i> 48-72 Hours Turnaround Time </li>
                                    <li><i class="bi bi-check2-circle"></i> Unlimited Business Email Address </li>
                                    <li><i class="bi bi-check2-circle"></i> 1 Year Free Maintenance (Post-launch support) </li>
                                    <li><i class="bi bi-check2-circle"></i> Industry Specified Team of Expert Designers and Developers </li>
                                    <li><i class="bi bi-check2-circle"></i>You’ll get Dedicated Account Manager </li>
                                    <li><i class="bi bi-check2-circle"></i>24/7 Customer Support </li>
                                    <li><i class="bi bi-check2-circle"></i>Unlimited Revisions </li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Satisfaction Guarantee </li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Unique Design Guarantee </li>
                                    <li><i class="bi bi-check2-circle"></i> Money Back Guarantee * </li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Ownership Rights </li>
                                    <li><i class="bi bi-check2-circle"></i>ADD-ONS: </li>
                                    <li><i class="bi bi-check2-circle"></i> Professional Content/Copywriting – $1,000 (Up to 20 Pages) – (Per Page $50) </li>
                                    <li><i class="bi bi-check2-circle"></i> Search Engine Optimization (3 Months - 50 Keywords) - $1,350 </li>
                                    
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
                                <div class="content-title">Starter</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,499</span><span class="content-duration"></span>
                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i>Custom designed Homepage (1x concepts)</li>
                                    <li><i class="bi bi-check2-circle"></i> 5 Custom designed Inner pages</li>
                                    <li><i class="bi bi-check2-circle"></i> Upto 25 to 50 Products</li>
                                    <li><i class="bi bi-check2-circle"></i> Upto 7 Categories</li>
                                    <li><i class="bi bi-check2-circle"></i> Content Management System</li>
                                    <li><i class="bi bi-check2-circle"></i> Sales & Inventory Management</li>
                                    <li><i class="bi bi-check2-circle"></i> Mini Shopping Cart Integration</li>
                                    <li><i class="bi bi-check2-circle"></i> Payment Gateway Integration</li>
                                    <li><i class="bi bi-check2-circle"></i> Social Media Integration (Facebook, Twitter, LinkedIn)</li>
                                    <li><i class="bi bi-check2-circle"></i> Easy Product Search</li>
                                    <li><i class="bi bi-check2-circle"></i> 5 Premium Stock Photos</li>
                                    <li><i class="bi bi-check2-circle"></i> 2 Promotional Banners</li>
                                    <li><i class="bi bi-check2-circle"></i> Interactive jQuery Slider</li>
                                    <li><i class="bi bi-check2-circle"></i> Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
                                    <li><i class="bi bi-check2-circle"></i> Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>
                                    <li><i class="bi bi-check2-circle"></i> W3C Certified HTML</li>
                                    <li><i class="bi bi-check2-circle"></i> Google Friendly Sitemap</li>
                                    <li><i class="bi bi-check2-circle"></i> Complete Deployment</li>
                                    <li><i class="bi bi-check2-circle"></i> 30 Days Free Maintenance (Post-launch support)</li>
                                    <li><i class="bi bi-check2-circle"></i> Industry Specified Team of Expert Designers and Developers</li>
                                    <li><i class="bi bi-check2-circle"></i>You’ll get Dedicated Account Manager</li>
                                    <li><i class="bi bi-check2-circle"></i>24/7 Customer Support</li>
                                    <li><i class="bi bi-check2-circle"></i> Unlimited Revisions</li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Satisfaction Guarantee</li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Unique Design Guarantee</li>
                                    <li><i class="bi bi-check2-circle"></i> Money Back Guarantee *</li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Ownership Rights</li>
                                    <li><i class="bi bi-check2-circle"></i> Complete Brand Identity  ($199)</li>
                                    <li><i class="bi bi-check2-circle"></i> Live Chat/Bot Chat Integration  ($249)</li>
                                    <li><i class="bi bi-check2-circle"></i>ADD-ONS:</li>
                                    <li><i class="bi bi-check2-circle"></i>Complete Brand Identity  ($199)</li>
                                    <li><i class="bi bi-check2-circle"></i>Live Chat/Bot Chat Integration  ($249)</li>
                                    
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
                                <div class="content-title">Professional</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,799</span><span class="content-duration"></span>

                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">

                                    <li><i class="bi bi-check2-circle"></i> Custom designed Homepage (2x concepts)</li>
                                    <li><i class="bi bi-check2-circle"></i>10 Custom designed Inner pages</li>
                                    <li><i class="bi bi-check2-circle"></i>Interactive and Dynamic Website Design</li>
                                    <li><i class="bi bi-check2-circle"></i>Upto 50 - 250 Products</li>
                                    <li><i class="bi bi-check2-circle"></i>Upto 10 Categories</li>
                                    <li><i class="bi bi-check2-circle"></i>15 Premium Stock Photos</li>
                                    <li><i class="bi bi-check2-circle"></i>8 Promotional Banners</li>
                                    <li><i class="bi bi-check2-circle"></i>1 Landing Page Design</li>
                                    <li><i class="bi bi-check2-circle"></i>Interactive jQuery Slider</li>
                                    <li><i class="bi bi-check2-circle"></i>Customer Login/Signup Area</li>
                                    <li><i class="bi bi-check2-circle"></i>Complete Database Creation</li>
                                    <li><i class="bi bi-check2-circle"></i>Live Chat/Bot Chat Integration (Optional)</li>
                                    <li><i class="bi bi-check2-circle"></i>Shipping Merchant Integration</li>
                                    <li><i class="bi bi-check2-circle"></i>Dropshipping Integration (Optional)</li>
                                    <li><i class="bi bi-check2-circle"></i> Content Management System</li>
                                    <li><i class="bi bi-check2-circle"></i> Sales & Inventory Management</li>
                                    <li><i class="bi bi-check2-circle"></i> Product offers (wish-list, discount options, coupon codes)</li>
                                    <li><i class="bi bi-check2-circle"></i> Product rating & reviews</li>
                                    <li><i class="bi bi-check2-circle"></i> Easy Product Search</li>
                                    <li><i class="bi bi-check2-circle"></i> Product sorting (Newest, Featured, Popular, Best Seller)</li>
                                    <li><i class="bi bi-check2-circle"></i> Full Shopping Cart Integration</li>
                                    <li><i class="bi bi-check2-circle"></i> Payment Module Integration</li>
                                    <li><i class="bi bi-check2-circle"></i> Social Media Integration (Facebook, Twitter, LinkedIn)</li>
                                    <li><i class="bi bi-check2-circle"></i> 3rd Party API Integration</li>
                                    <li><i class="bi bi-check2-circle"></i> Customized Filters for Refined Search</li>
                                    <li><i class="bi bi-check2-circle"></i> SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, W3C compliant etc)</li>
                                    <li><i class="bi bi-check2-circle"></i> On-page SEO configuration</li>
                                    <li><i class="bi bi-check2-circle"></i> Search Engine Indexing (Google, Yahoo, Bing, etc)</li>
                                    <li><i class="bi bi-check2-circle"></i> Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
                                    <li><i class="bi bi-check2-circle"></i> Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>
                                    <li><i class="bi bi-check2-circle"></i> Fast Load Time</li>
                                    <li><i class="bi bi-check2-circle"></i> Security plugins</li>
                                    <li><i class="bi bi-check2-circle"></i> W3C Certified HTML</li>
                                    <li><i class="bi bi-check2-circle"></i> Google Friendly Sitemap</li>
                                    <li><i class="bi bi-check2-circle"></i> Complete Deployment</li>
                                    <li><i class="bi bi-check2-circle"></i> 5 Business Email Address</li>
                                    <li><i class="bi bi-check2-circle"></i> 90 Days Free Maintenance (Post-launch support)</li>
                                    <li><i class="bi bi-check2-circle"></i> How-to-use Training Manual for CMS</li>
                                    <li><i class="bi bi-check2-circle"></i> Industry Specified Team of Expert Designers and Developers</li>
                                    <li><i class="bi bi-check2-circle"></i>You’ll get Dedicated Account Manager</li>
                                    <li><i class="bi bi-check2-circle"></i> 24/7 Customer Support</li>
                                    <li><i class="bi bi-check2-circle"></i> Unlimited Revisions</li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Satisfaction Guarantee  </li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Unique Design Guarantee</li>
                                    <li><i class="bi bi-check2-circle"></i>Money Back Guarantee *</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Ownership Rights</li>
                                    <li><i class="bi bi-check2-circle"></i>Marketplace Development - ($749)</li>
                                    <li><i class="bi bi-check2-circle"></i>Multi-Currency Support - ($249)</li>
                                    <li><i class="bi bi-check2-circle"></i>ADD-ONS:</li>
                                    <li><i class="bi bi-check2-circle"></i>Marketplace Development - ($749)</li>
                                    <li><i class="bi bi-check2-circle"></i>Multi-Currency Support - ($249)</li>

                                    

                                </ul>



                                <div class="content-button order-btn-sec">
                                    <a type="button" class=" btn theme-btn btn-red openpopuporder" data-bs-toggle="modal" data-bs-target="#OrderFormPopup" data-package="Professional" data-price="AED999.99">

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