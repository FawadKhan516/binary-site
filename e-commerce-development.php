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
    <title>E-Commerce Development
    </title>
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
                        <h1 class="head1 ani-a fade-right-a delay-1">E-Commerce
                            <span>Development</span>
                        </h1>
                        <h4 class="ani-a fade-right-a delay-1">Behold the power of ecommerce for your business with custom website development services.</h4>
                        <!-- <a href="#services" class="cta-button">Scroll to Explore</a> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/ecommerce hero right.png"></div>
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
        <h4 class="ani-a fade-down-a delay-1 animated">E-commerce Development Services</h4>
        <h2 class="ani-a fade-up-a animated">A robust e-commerce platform</h2>
    </div>

    <!-- Inner Services Section -->
    <section class="services-section">
        <div class="services-inner">

            <div class="left-section">
                <div class="content">
                    <h3>1. E-Commerce Solutions Built Just for You</h3>
                    <p>We ditch the cookie-cutter approach! Unlike generic platforms,Binary Design Hub crafts custom e-commerce solutions that perfectly align with your unique business needs. Whether you're a startup launching your first online store or an established business looking to revamp your existing platform, we'll work closely to create an e-commerce experience that drives results.</p>
                </div>

                <div class="content">
                    <h3>2. User-Friendly Shopping Experience Designed for Conversions:</h3>
                    <p>A user-friendly online store is like a well-oiled machine – it keeps customers engaged and happy to buy! Our e-commerce websites are designed with user experience (UX) in mind. This means they'll be visually appealing, intuitive to navigate, and ensure a smooth buying journey that converts visitors into customers.</p>
                </div>

                <div class="content">
                    <h3>3. Secure Transactions Build Trust:</h3>
                    <p>Security is paramount in the e-commerce world. We integrate trusted payment gateways into your online store, ensuring a secure and seamless checkout process. This lets your customers shop confidently, knowing their transactions are protected.</p>
                </div>

                <div class="content">
                    <h3>4. Effortless Product Management Keep Your Catalog Organized:</h3>
                    <p>Managing an extensive product catalog shouldn't be a headache. Our e-commerce solutions include user-friendly product catalog management tools. This allows you to easily add, edit, update, and organize your products, saving you time and keeping your online store looking sharp.</p>
                </div>

                <div class="content">
                    <h3>5. Don't Lose Sales to Abandoned Carts :</h3>
                    <p>Abandoned shopping carts can be a significant drain on your sales. We understand this and optimize your shopping cart process to minimize abandonment. This may include streamlining the checkout flow, offering guest checkout options, and implementing cart abandonment recovery strategies.</p>
                </div>
            </div>

            <div class="right-section">
              
                    <img src="assets/img/person-is-working-laptop-with-screen-that-says-shopping-time-is-1-50_577115-121906.jpg" alt="Branding Mockup" class="mockup">
             
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
                    <a href="assets/img/ecommerce5.webp" data-fancybox="brand-gallery"><img src="assets/img/ecommerce5.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ecommerce4.webp" data-fancybox="brand-gallery"><img src="assets/img/ecommerce4.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ecommerce3.webp" data-fancybox="brand-gallery"><img src="assets/img/ecommerce3.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ecommerce2.webp" data-fancybox="brand-gallery"><img src="assets/img/ecommerce2.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ecommerce1.webp" data-fancybox="brand-gallery"><img src="assets/img/ecommerce1.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ecommerce6.webp" data-fancybox="brand-gallery"><img src="assets/img/ecommerce6.webp" width="100%" height="auto" alt=""></a>
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
                                <div class="content-title">Automated/Interactive Ecommerce</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">499 </span><span class="content-duration"></span></div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i> Custom Content Management System (CMS)</li>
                                    <li><i class="bi bi-check2-circle"></i> Unique Pages and UI Design</li>
                                    <li><i class="bi bi-check2-circle"></i> Complete Custom Development</li>
                                    <li><i class="bi bi-check2-circle"></i> Process Automation Tools</li>
                                    <li><i class="bi bi-check2-circle"></i> Newsfeed Integration</li>
                                    <li><i class="bi bi-check2-circle"></i> Social Media Plugins Integration</li>
                                    <li><i class="bi bi-check2-circle"></i> Upto 40 Stock images</li>
                                    <li><i class="bi bi-check2-circle"></i> 10 Unique Banner Designs</li>
                                    <li><i class="bi bi-check2-circle"></i> JQuery Slider</li>
                                    <li><i class="bi bi-check2-circle"></i> Search Engine Submission</li>
                                    <li><i class="bi bi-check2-circle"></i> Free Google Friendly Sitemap</li>
                                    <li><i class="bi bi-check2-circle"></i> FREE 5 Years Hosting</li>
                                    <li><i class="bi bi-check2-circle"></i> Custom Email Addresses</li>
                                    <li><i class="bi bi-check2-circle"></i> Social Media Page Designs (Facebook, Twitter,Instagram)</li>
                                    <li><i class="bi bi-check2-circle"></i> Complete W3C Certified HTML</li>
                                    <li><i class="bi bi-check2-circle"></i> Complete Deployment</li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Satisfaction Guarantee</li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Unique Design Guarantee</li>
                                    <li><i class="bi bi-check2-circle"></i> Money Back Guarantee</li>
                                    <li><i class="bi bi-check2-circle"></i> Automated Inventory/Shipping/Supplier Module: </li>
                                    <li><i class="bi bi-check2-circle"></i> Suppliers Integration (API NEEDED)</li>
                                    <li><i class="bi bi-check2-circle"></i> Shipper Integration (API NEEDED)</li>
                                    <li><i class="bi bi-check2-circle"></i> Order management</li>
                                    <li><i class="bi bi-check2-circle"></i> LOT numbers and expire date tracking</li>
                                    <li><i class="bi bi-check2-circle"></i> Transfer stock between warehouses (If Warehouse - API NEEDED)</li>
                                    <li><i class="bi bi-check2-circle"></i> Receive stock into a specific warehouse (If Warehouse - API NEEDED)</li>
                                    <li><i class="bi bi-check2-circle"></i> Fulfill orders from a particular warehouse (IfWarehouse - API NEEDED)</li>
                                    <li><i class="bi bi-check2-circle"></i> Stock Management</li>
                                    <li><i class="bi bi-check2-circle"></i> Actionable Insights</li>
                                    <li><i class="bi bi-check2-circle"></i> Real- Time Visibility</li>
                                    <li><i class="bi bi-check2-circle"></i> Inventory Opportunities</li>
                                    <li><i class="bi bi-check2-circle"></i> Advanced Features: (API Needed For Suppliers/Warehouse)</li>
                                    <li><i class="bi bi-check2-circle"></i> Speak to suppliers during trivial conversations.</li>
                                    <li><i class="bi bi-check2-circle"></i> Set and send actions to suppliers regarding governance and compliance materials. Place purchasing requests.</li>
                                    <li><i class="bi bi-check2-circle"></i> Research and answer internal questions regarding procurement functionalities or a supplier/supplier set.</li>
                                    <li><i class="bi bi-check2-circle"></i> Receiving/filing/documentation of invoices and payments/order requests</li>
                                    <li><i class="bi bi-check2-circle"></i> Machine Learning (ML) for Supply Chain Planning (SCP)</li>
                                    <li><i class="bi bi-check2-circle"></i> Machine Learning for Warehouse Management</li>
                                    <li><i class="bi bi-check2-circle"></i> Natural Language Processing (NLP) for Data Cleansing and Building Data Robustness</li>
                                    <li><i class="bi bi-check2-circle"></i> Automated Invoices & Estimates</li>
                                    <li><i class="bi bi-check2-circle"></i> Create beautiful, professional invoices & estimates in just a few seconds and then instantly email them as PDF's directly to your customers or prospects.</li>
                                    <li><i class="bi bi-check2-circle"></i> Automated Combine invoices</li>
                                    <li><i class="bi bi-check2-circle"></i> Invoice templates</li>
                                    <li><i class="bi bi-check2-circle"></i> Automated Barcode Scanning</li>
                                    <li><i class="bi bi-check2-circle"></i> Scan inventory into your orders, generate barcodes for your documents, and search for inventory or documents by scanning barcodes.</li>
                                    <li><i class="bi bi-check2-circle"></i> Locations and Zones</li>
                                    <li><i class="bi bi-check2-circle"></i> Manage thousands to millions of inventory with ease and check stock levels in real-time. Receive low inventory notifications and generate purchase orders to replenish your stock.</li>
                                    <li><i class="bi bi-check2-circle"></i> Have multiple warehouses, offices, or retail stores? No problem. Easily track where all your inventory is by organizing everything into locations and zones. Organize inventory items using custom attributes such as size, color, and location. View how many you have globally or at each location.</li>
                                    <li><i class="bi bi-check2-circle"></i> Customer Accounts</li>
                                    <li><i class="bi bi-check2-circle"></i> Event Integration</li>
                                    <li><i class="bi bi-check2-circle"></i> Advanced Data Security</li>
                                    <li><i class="bi bi-check2-circle"></i> Purchase Orders</li>
                                    <li><i class="bi bi-check2-circle"></i> With integrated purchase orders, you can easily replenish your inventory levels by ordering more stock and even track when those new items will arrive.</li>
                                    <li><i class="bi bi-check2-circle"></i> Partial orders fulfill</li>
                                    <li><i class="bi bi-check2-circle"></i> Backordering</li>
                                    <li><i class="bi bi-check2-circle"></i> Financial Reports</li>
                                    <li><i class="bi bi-check2-circle"></i> Generate extremely detailed reports for your inventory, sales and services. Filter your reports by date-range and category to see what's making you the most money.</li>
                                    <li><i class="bi bi-check2-circle"></i></li>
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
                                <div class="content-title">Beginners Ecommerce <br> Website</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,499</span><span class="content-duration"></span>
                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i> Conceptual and Dynamic Website </li>
                                    <li><i class="bi bi-check2-circle"></i> Content Management System (CMS)</li>
                                    <li><i class="bi bi-check2-circle"></i> Mobile Responsive</li>
                                    <li><i class="bi bi-check2-circle"></i> Easy Product Search</li>
                                    <li><i class="bi bi-check2-circle"></i> Product Reviews</li>
                                    <li><i class="bi bi-check2-circle"></i> Up To 100 Products </li>
                                    <li><i class="bi bi-check2-circle"></i> Up To 7 Categories </li>
                                    <li><i class="bi bi-check2-circle"></i> Full Shopping Cart Integration </li>
                                    <li><i class="bi bi-check2-circle"></i> Payment Module Integration </li>
                                    <li><i class="bi bi-check2-circle"></i> Sales & Inventory Management </li>
                                    <li><i class="bi bi-check2-circle"></i> Jquery Slider </li>
                                    <li><i class="bi bi-check2-circle"></i> Free Google Friendly Sitemap </li>
                                    <li><i class="bi bi-check2-circle"></i> Complete W3C Certified HTML </li>
                                    <li><i class="bi bi-check2-circle"></i> Complete Deployment </li>
                                    <li><i class="bi bi-check2-circle"></i> Dedicated Accounts Manager </li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Ownership Rights </li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Satisfaction Guarantee </li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Unique Design Guarantee </li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Money Back Guarantee* </li>
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
                                <div class="content-title">Corporate Ecommerce <br> Website</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,799</span><span class="content-duration"></span>

                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">

                                    <li><i class="bi bi-check2-circle"></i> Unlimited Unique Pages Website </li>

                                    <li><i class="bi bi-check2-circle"></i> Conceptual and Dynamic Website </li>

                                    <li><i class="bi bi-check2-circle"></i> Content Management System (CMS) </li>

                                    <li><i class="bi bi-check2-circle"></i> Mobile Responsive </li>

                                    <li><i class="bi bi-check2-circle"></i> Easy Product Search </li>

                                    <li><i class="bi bi-check2-circle"></i> Product Reviews </li>

                                    <li><i class="bi bi-check2-circle"></i> Unlimited Products </li>

                                    <li><i class="bi bi-check2-circle"></i> Unlimited Categories </li>

                                    <li><i class="bi bi-check2-circle"></i> Full Shopping Cart Integration </li>

                                    <li><i class="bi bi-check2-circle"></i> Payment Module Integration </li>

                                    <li><i class="bi bi-check2-circle"></i> Sales & Inventory Management </li>

                                    <li><i class="bi bi-check2-circle"></i> Jquery Slider </li>

                                    <li><i class="bi bi-check2-circle"></i> Free Google Friendly Sitemap </li>

                                    <li><i class="bi bi-check2-circle"></i> Custom Email Addresses </li>

                                    <li><i class="bi bi-check2-circle"></i> Complete W3C Certified HTML </li>

                                    <li><i class="bi bi-check2-circle"></i> Facebook Page Design </li>

                                    <li><i class="bi bi-check2-circle"></i>Twitter Page Design</li>

                                    <li><i class="bi bi-check2-circle"></i>YouTube Page Design</li>

                                    <li><i class="bi bi-check2-circle"></i>Instagram Page Design</li>

                                    <li><i class="bi bi-check2-circle"></i>Complete Deployment</li>

                                    <li><i class="bi bi-check2-circle"></i>Dedicated Accounts Manager</li>

                                    <li><i class="bi bi-check2-circle"></i>100% Ownership Rights</li>

                                    <li><i class="bi bi-check2-circle"></i>100% Unique Design Guarantee</li>

                                    <li><i class="bi bi-check2-circle"></i>100% Satisfaction And Money Back Guarantee**</li>

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