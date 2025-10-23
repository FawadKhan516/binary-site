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
    <title>Social Media Marketing</title>
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
                        <h1 class="head1 ani-a fade-right-a delay-1">Social Media<span> Marketing</span></h1>
                        <h4 class="ani-a fade-right-a delay-1">Get more engaging, refreshing results with our social media marketing agency</h4>
                        <!-- <a href="#services" class="cta-button">Scroll to Explore</a> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/social media hero right.png"></div>
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
        <h4 class="ani-a fade-down-a delay-1 animated">Social Media Marketing Services</h4>
        <h2 class="ani-a fade-up-a animated">Grow Your Audience and Brand with Engaging Social Media Marketing</h2>
    </div>

  <!-- Inner Services Section -->
    <section class="services-section">
        <div class="services-inner">

            <div class="left-section">
                <div class="content">
                    <h3>1. Social Media Strategy A Custom Roadmap to Success :</h3>
                    <p>We ditch the cookie-cutter approach! Our social media experts will collaborate closely with you to craft a personalized strategy that perfectly aligns with your business goals, target audience, and the unique landscape of your industry.</p>
                </div>

                <div class="content">
                    <h3>2. Content Creation and Curation Eye-Catching Content Your Audience Will Love :</h3>
                    <p>Our creative team is a powerhouse of ideas! They'll develop engaging social media content that resonates with your audience. Think stunning visuals, persuasive writing, and a message that makes your brand shine brightly across all social media platforms.</p>
                </div>

                <div class="content">
                    <h3>3. Community Management Building Relationships That Last :</h3>
                    <p>Engaging with your audience is vital to building a thriving online community. Our community management services ensure the conversation keeps flowing, helping you foster relationships and build brand loyalty that lasts.</p>
                </div>

                <div class="content">
                    <h3>4.Paid Advertising Campaigns Turning Data into Results:</h3>
                    <p>We're data wizards! We leverage the power of insights to create and manage targeted paid advertising campaigns that maximize your return on investment (ROI). Think of increased website traffic, more leads, and higher conversion rates.</p>
                </div>

                <div class="content">
                    <h3>5. Analytics and Reporting Keeping You Informed Every Step of the Way :</h3>
                    <p>We're committed to results, which means keeping you in the loop. Our team will constantly monitor and analyze your social media performance, providing detailed reports so you can see exactly how your brand is making a significant impact online.</p>
                </div>
            </div>

            <div class="right-section">
                
                    <img src="assets/img/hands-holding-smartphone-social-media-concept_23-2150208239.jpg" alt="Branding Mockup" class="mockup">
                
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
                    <a href="assets/img/COYOTE-REALTY-LLC-SMMS-1.jpg" data-fancybox="brand-gallery"><img src="assets/img/COYOTE-REALTY-LLC-SMMS-1.jpg" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/EVENT-POST.jpg" data-fancybox="brand-gallery"><img src="assets/img/EVENT-POST.jpg" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/Friday-Instagram-Stories-Customer-Review.jpg" data-fancybox="brand-gallery"><img src="assets/img/Friday-Instagram-Stories-Customer-Review.jpg" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/Jan-30,-2025.jpg" data-fancybox="brand-gallery"><img src="assets/img/Jan-30,-2025.jpg" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/agapefamilycare-2.jpg" data-fancybox="brand-gallery"><img src="assets/img/agapefamilycare-2.jpg" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/Carousel-Ads-4.jpg" data-fancybox="brand-gallery"><img src="assets/img/Carousel-Ads-4.jpg" width="100%" height="auto" alt=""></a>
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
                                <div class="content-title">Startup SMM </div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">499 </span><span class="content-duration"></span></div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i> Social Media strategy will be devised</li>
                                    <li><i class="bi bi-check2-circle"></i> Competitor Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Copywriting</li>
                                    <li><i class="bi bi-check2-circle"></i> Content Plan Creation</li>
                                    <li><i class="bi bi-check2-circle"></i> Social Media Posts (06/month)</li>
                                    <li><i class="bi bi-check2-circle"></i> Facebook Ad Campaigns will be set up</li>
                                    <li><i class="bi bi-check2-circle"></i> Community Management</li>
                                    <li><i class="bi bi-check2-circle"></i> Page Management (Facebook, Instagram and Twitter)</li>
                                    <li><i class="bi bi-check2-circle"></i> Page Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i> Tracking Setup</li>
                                    <li><i class="bi bi-check2-circle"></i> Facebook Shop Creation</li>
                                    <li><i class="bi bi-check2-circle"></i> Lead Form Creation</li>
                                    <li><i class="bi bi-check2-circle"></i> 1000 Likes on Facebook page (applicable on 3month plan)</li>
                                    <li><i class="bi bi-check2-circle"></i> Add on: $500 for expedited services</li>
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
                                <div class="content-title">Professional SMM</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,499</span><span class="content-duration"></span>
                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i> Social Media strategy will be devised </li>
                                    <li><i class="bi bi-check2-circle"></i> Competitor Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> Copywriting </li>
                                    <li><i class="bi bi-check2-circle"></i> Content Plan Creation </li>
                                    <li><i class="bi bi-check2-circle"></i> Social Media Posts (10/month) </li>
                                    <li><i class="bi bi-check2-circle"></i> Facebook Ad Campaigns will be set up </li>
                                    <li><i class="bi bi-check2-circle"></i> Community Management </li>
                                    <li><i class="bi bi-check2-circle"></i> Page Optimization </li>
                                    <li><i class="bi bi-check2-circle"></i> Tracking Setup </li>
                                    <li><i class="bi bi-check2-circle"></i> Facebook Shop Creation </li>
                                    <li><i class="bi bi-check2-circle"></i> Lead Form Creation </li>
                                    <li><i class="bi bi-check2-circle"></i> 1000 Likes on Facebook page (applicable on 3 month plan) </li>
                                    <li><i class="bi bi-check2-circle"></i> 1000 Likes on Instagram (applicable on 3 month plan) </li>
                                    <li><i class="bi bi-check2-circle"></i> Page Moderation </li>
                                    <li><i class="bi bi-check2-circle"></i>  Facebook Ad Campaign Optimization </li>
                                    <li><i class="bi bi-check2-circle"></i>  Add on: $500 for expedited services </li>
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
                                <div class="content-title">Elite SMM</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,799</span><span class="content-duration"></span>

                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">

                                    <li><i class="bi bi-check2-circle"></i>  Social Media strategy will be devised  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Competitor Analysis  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Copywriting  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Content Plan Creation  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Social Media Posts (15/month)  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Facebook Ad Campaigns will be set up  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Community Management  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Page Management (Facebook, Instagram and Twitter)  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Page Optimization  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Tracking Setup  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Facebook Shop Creation  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Lead Form Creation  </li>

                                    <li><i class="bi bi-check2-circle"></i>  10000 Likes on Facebook page  </li>

                                    <li><i class="bi bi-check2-circle"></i>  2000 Likes on Instagram  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Page Moderation  </li>

                                    <li><i class="bi bi-check2-circle"></i>  Facebook Ad Campaign Optimization  </li>

                                    <li><i class="bi bi-check2-circle"></i> Facebook Ads A/B Testing </li>

                                    <li><i class="bi bi-check2-circle"></i> Social Media Listening </li>

                                    <li><i class="bi bi-check2-circle"></i>Add on: $500 for expedited services</li>


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