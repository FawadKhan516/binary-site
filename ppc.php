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
    <title>PPC Services</title>
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
                        <h1 class="head1 ani-a fade-right-a delay-1">PPC <span>Services</span></h1>
                        <h4 class="ani-a fade-right-a delay-1">Pay-per-click (PPC) advertising can be a powerful tool to reach your target audience and drive high-quality traffic to your website.</h4>
                        <!-- <a href="#services" class="cta-button">Scroll to Explore</a> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/ppc.png"></div>
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
        <h4 class="ani-a fade-down-a delay-1 animated">Pay-Per-Click (PPC) Services</h4>
        <h2 class="ani-a fade-up-a animated">Get More Than Clicks: Powerful PPC Ads That Drive Results</h2>
    </div>

  <!-- Inner Services Section -->
    <section class="services-section">
        <div class="services-inner">

            <div class="left-section">
                <div class="content">
                    <h3>1. Custom PPC Campaigns Tailored for Your Success :</h3>
                    <p>We ditch the cookie-cutter approach! Our PPC specialists work with you to craft personalized PPC campaigns that perfectly align with your unique goals, target audience, and budget.</p>
                </div>

                <div class="content">
                    <h3>2. Keyword Research Unlocking the Power of Search:</h3>
                    <p>Keyword research is the cornerstone of any successful PPC campaign. That's why our team conducts in-depth research to identify the most relevant and cost-effective keywords that will drive the right kind of traffic to your website.</p>
                </div>

                <div class="content">
                    <h3>3. Compelling Ad Copywriting and Optimization Make Every Click Count :</h3>
                    <p>Our creative team is a word-whiz squad! They'll craft irresistible ad copy that grabs attention, engages your audience, and compels them to click through to your website. We don't stop there – we continuously fine-tune your ads to maximize click-through rates and conversions.</p>
                </div>

                <div class="content">
                    <h3>4. Strategic Ad Placement and Real-Time Monitoring Get Your Ads Seen in the Right Places :</h3>
                    <p>Imagine your ads appearing exactly when and where your ideal customers search online! That's the power of strategic ad placement. We actively monitor your campaigns, making adjustments on the fly to ensure your ads reach their full potential and target the right audience.</p>
                </div>

                <div class="content">
                    <h3>5. Landing Page Optimization Turning Clicks into Conversions :</h3>
                    <p>A well-designed landing page is like a conversion magnet! We'll optimize your landing pages to convert those clicks into paying customers. This ensures your ad spend delivers real value and maximizes your return on investment (ROI).</p>
                </div>
            </div>

            <div class="right-section">
                
                    <img src="assets/img/pay-per-click-login-website-payment-graphic-concept_53876-127624.jpg" alt="Branding Mockup" class="mockup">
                
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
                    <a href="assets/img/ppc1.png" data-fancybox="brand-gallery"><img src="assets/img/ppc1.png" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ppc6.png" data-fancybox="brand-gallery"><img src="assets/img/ppc6.png" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ppc5.png" data-fancybox="brand-gallery"><img src="assets/img/ppc5.png" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ppc4.png" data-fancybox="brand-gallery"><img src="assets/img/ppc4.png" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ppc3.png" data-fancybox="brand-gallery"><img src="assets/img/ppc3.png" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/ppc2.png" data-fancybox="brand-gallery"><img src="assets/img/ppc2.png" width="100%" height="auto" alt=""></a>
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
                                <div class="content-title">PPC Startup Plan</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">499 </span><span class="content-duration"></span></div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i> Monthly Advertising Budget Upto $1000</li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Planning</li>
                                    <li><i class="bi bi-check2-circle"></i> Business Understanding</li>
                                    <li><i class="bi bi-check2-circle"></i> Establish Business Goals</li>
                                    <li><i class="bi bi-check2-circle"></i> Accounts Set-up</li>
                                    <li><i class="bi bi-check2-circle"></i> Analytics Set-up & Linking</li>
                                    <li><i class="bi bi-check2-circle"></i> Linking</li>
                                    <li><i class="bi bi-check2-circle"></i> Budget Planning</li>
                                    <li><i class="bi bi-check2-circle"></i> Deciding Campaign Types</li>
                                    <li><i class="bi bi-check2-circle"></i> Keyword Research</li>
                                    <li><i class="bi bi-check2-circle"></i> No. of Keywords(Up to 100)</li>
                                    <li><i class="bi bi-check2-circle"></i> Landing Page Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i> Budget Estimation</li>
                                    <li><i class="bi bi-check2-circle"></i>  Performance Forecast</li>
                                    <li><i class="bi bi-check2-circle"></i>  Ad Copy Creation </li>
                                    <li><i class="bi bi-check2-circle"></i>  Shopping Feeds</li>
                                    <li><i class="bi bi-check2-circle"></i>  Audience Target Plan</li>
                                    <li><i class="bi bi-check2-circle"></i>  Optimal Campaign Structuring</li>
                                    <li><i class="bi bi-check2-circle"></i>  PPC Platforms</li>
                                    <li><i class="bi bi-check2-circle"></i>  Google Ads(Any One Service)</li>
                                    <li><i class="bi bi-check2-circle"></i>  Bing Ads(Any One Service)</li>
                                    <li><i class="bi bi-check2-circle"></i>  Facebook Paid Ads(Any One Service)</li>
                                    <li><i class="bi bi-check2-circle"></i> AdRoll(Any One Service)</li>
                                    <li><i class="bi bi-check2-circle"></i>  Linkedin(Any One Service)</li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Management & Optimization </li>
                                    <li><i class="bi bi-check2-circle"></i> Cost Monitoring </li>
                                    <li><i class="bi bi-check2-circle"></i> Revenue/Goals Check</li>
                                    <li><i class="bi bi-check2-circle"></i> Account Issues Check</li>
                                    <li><i class="bi bi-check2-circle"></i> Policy Compliance Check</li>
                                    <li><i class="bi bi-check2-circle"></i> Analytics Data Review</li>
                                    <li><i class="bi bi-check2-circle"></i> Bid Management</li>
                                    <li><i class="bi bi-check2-circle"></i> Search Query Reports</li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Strategy Review</li>
                                    <li><i class="bi bi-check2-circle"></i> Product Feed Review</li>
                                    <li><i class="bi bi-check2-circle"></i> Audience Performance Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Geo Target Performance Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> A/B Testing</li>
                                    <li><i class="bi bi-check2-circle"></i> Ad Schedule Checks</li>
                                    <li><i class="bi bi-check2-circle"></i> Strategic Adjustments As Required</li>
                                    <li><i class="bi bi-check2-circle"></i> Remarketing Performance</li>
                                    <li><i class="bi bi-check2-circle"></i> Account Audit (Existing Account)</li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Types</li>
                                    <li><i class="bi bi-check2-circle"></i> Account Best Practices Checks</li>
                                    <li><i class="bi bi-check2-circle"></i> Account Structure Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Keyword Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Ad Copies Check</li>
                                    <li><i class="bi bi-check2-circle"></i> Shopping Campaign Checks</li>
                                    <li><i class="bi bi-check2-circle"></i> Display Campaign Checks</li>
                                    <li><i class="bi bi-check2-circle"></i> Overall Performance Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Analytics Data Review</li>
                                    <li><i class="bi bi-check2-circle"></i> Recommendations</li>
                                    <li><i class="bi bi-check2-circle"></i> Remarketing Campaigns</li>
                                    <li><i class="bi bi-check2-circle"></i> Search Remarketing (RLSA)</li>
                                    <li><i class="bi bi-check2-circle"></i> Display Remarketing</li>
                                    <li><i class="bi bi-check2-circle"></i> Remarketing Audience Setup</li>
                                    <li><i class="bi bi-check2-circle"></i> Reporting</li>
                                    <li><i class="bi bi-check2-circle"></i> Google Data Studio</li>
                                    <li><i class="bi bi-check2-circle"></i> Excel/PDF Reporting</li>
                                    <li><i class="bi bi-check2-circle"></i> Performance Overview</li>
                                    <li><i class="bi bi-check2-circle"></i> ROI/Goal KPIs</li>
                                    <li><i class="bi bi-check2-circle"></i> Recommendations</li>
                                    <li><i class="bi bi-check2-circle"></i>Add on: $500 for expedited services</li>
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
                                <div class="content-title">PPC Scaling Plan</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,499</span><span class="content-duration"></span>
                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i> Monthly Advertising Budget $1000 To $2000</li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Planning</li>
                                    <li><i class="bi bi-check2-circle"></i> Business Understanding</li>
                                    <li><i class="bi bi-check2-circle"></i> Establish Business Goals</li>
                                    <li><i class="bi bi-check2-circle"></i> Accounts Set-up</li>
                                    <li><i class="bi bi-check2-circle"></i> Analytics Set-up & Linking </li>
                                    <li><i class="bi bi-check2-circle"></i> Budget Planning </li>
                                    <li><i class="bi bi-check2-circle"></i> Deciding Campaign Types </li>
                                    <li><i class="bi bi-check2-circle"></i> Keyword Research </li>
                                    <li><i class="bi bi-check2-circle"></i> No. of Keywords(Up to 250) </li>
                                    <li><i class="bi bi-check2-circle"></i> Landing Page Optimization </li>
                                    <li><i class="bi bi-check2-circle"></i> Budget Estimation </li>
                                    <li><i class="bi bi-check2-circle"></i> Performance Forecast </li>
                                    <li><i class="bi bi-check2-circle"></i> Ad Copy Creation </li>
                                    <li><i class="bi bi-check2-circle"></i> Shopping Feeds </li>
                                    <li><i class="bi bi-check2-circle"></i> Audience Target Plan </li>
                                    <li><i class="bi bi-check2-circle"></i> Optimal Campaign Structuring </li>
                                    <li><i class="bi bi-check2-circle"></i> PPC Platforms </li>
                                    <li><i class="bi bi-check2-circle"></i> Google Ads(Any Two Services) </li>
                                    <li><i class="bi bi-check2-circle"></i> Bing Ads(Any Two Services) </li>
                                    <li><i class="bi bi-check2-circle"></i> Facebook Paid Ads(Any Two Services) </li>
                                    <li><i class="bi bi-check2-circle"></i> AdRoll(Any Two Services) </li>
                                    <li><i class="bi bi-check2-circle"></i> Linkedin(Any Two Services) </li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Management & Optimization </li>
                                    <li><i class="bi bi-check2-circle"></i> Cost Monitoring </li>
                                    <li><i class="bi bi-check2-circle"></i> Revenue/Goals Check </li>
                                    <li><i class="bi bi-check2-circle"></i> Account Issues Check </li>
                                    <li><i class="bi bi-check2-circle"></i> Policy Compliance Check </li>
                                    <li><i class="bi bi-check2-circle"></i> Analytics Data Review </li>
                                    <li><i class="bi bi-check2-circle"></i> Bid Management </li>
                                    <li><i class="bi bi-check2-circle"></i> Search Query Reports </li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Strategy Review </li>
                                    <li><i class="bi bi-check2-circle"></i> Product Feed Review </li>
                                    <li><i class="bi bi-check2-circle"></i> Audience Performance Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> Geo Target Performance Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> A/B Testing </li>
                                    <li><i class="bi bi-check2-circle"></i> Ad Schedule Checks </li>
                                    <li><i class="bi bi-check2-circle"></i> Strategic Adjustments As Required </li>
                                    <li><i class="bi bi-check2-circle"></i> Remarketing Performance </li>
                                    <li><i class="bi bi-check2-circle"></i> Account Audit (Existing Account) </li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Types </li>
                                    <li><i class="bi bi-check2-circle"></i> Account Best Practices Checks </li>
                                    <li><i class="bi bi-check2-circle"></i> Account Structure Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> Keyword Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> Ad Copies Check </li>
                                    <li><i class="bi bi-check2-circle"></i> Shopping Campaign Checks </li>
                                    <li><i class="bi bi-check2-circle"></i> Display Campaign Checks </li>
                                    <li><i class="bi bi-check2-circle"></i> Overall Performance Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> Analytics Data Review </li>
                                    <li><i class="bi bi-check2-circle"></i> Recommendations </li>
                                    <li><i class="bi bi-check2-circle"></i> Remarketing Campaigns </li>
                                    <li><i class="bi bi-check2-circle"></i> Search Remarketing (RLSA) </li>
                                    <li><i class="bi bi-check2-circle"></i> Display Remarketing </li>
                                    <li><i class="bi bi-check2-circle"></i> Remarketing Audience Setup </li>
                                    <li><i class="bi bi-check2-circle"></i> Reporting </li>
                                    <li><i class="bi bi-check2-circle"></i> Google Data Studio </li>
                                    <li><i class="bi bi-check2-circle"></i> Excel/PDF Reporting </li>
                                    <li><i class="bi bi-check2-circle"></i> Performance Overview </li>
                                    <li><i class="bi bi-check2-circle"></i> ROI/Goal KPIs </li>
                                    <li><i class="bi bi-check2-circle"></i> Recommendations </li>
                                    <li><i class="bi bi-check2-circle"></i>Add on: $500 for expedited services</li>
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
                                <div class="content-title">PPC Venture Plan</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,799</span><span class="content-duration"></span>

                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">

                                    <li><i class="bi bi-check2-circle"></i>  Monthly Advertising Budget Upto $6000 </li>

                                    <li><i class="bi bi-check2-circle"></i>  Campaign Planning </li>
                                    <li><i class="bi bi-check2-circle"></i> Business Understanding</li>
                                    <li><i class="bi bi-check2-circle"></i> Establish Business Goals</li>
                                    <li><i class="bi bi-check2-circle"></i> Accounts Set-up</li>
                                    <li><i class="bi bi-check2-circle"></i> Analytics Set-up & Linking</li>
                                    <li><i class="bi bi-check2-circle"></i> Budget Planning</li>
                                    <li><i class="bi bi-check2-circle"></i> Deciding Campaign Types</li>
                                    <li><i class="bi bi-check2-circle"></i> Keyword Research</li>
                                    <li><i class="bi bi-check2-circle"></i> No. of Keywords(Up to 500)</li>
                                    <li><i class="bi bi-check2-circle"></i> Landing Page Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i> Budget Estimation</li>
                                    <li><i class="bi bi-check2-circle"></i> Performance Forecast</li>
                                    <li><i class="bi bi-check2-circle"></i> Ad Copy Creation</li>
                                    <li><i class="bi bi-check2-circle"></i> Shopping Feeds</li>
                                    <li><i class="bi bi-check2-circle"></i> Audience Target Plan</li>
                                    <li><i class="bi bi-check2-circle"></i> Optimal Campaign Structuring</li>
                                    <li><i class="bi bi-check2-circle"></i> PPC Platforms</li>
                                    <li><i class="bi bi-check2-circle"></i> Google Ads</li>
                                    <li><i class="bi bi-check2-circle"></i> Bing Ads</li>
                                    <li><i class="bi bi-check2-circle"></i> Facebook Paid Ads</li>
                                    <li><i class="bi bi-check2-circle"></i> AdRoll</li>
                                    <li><i class="bi bi-check2-circle"></i> Linkedin</li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Management & Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i> Cost Monitoring</li>
                                    <li><i class="bi bi-check2-circle"></i> Revenue/Goals Check</li>
                                    <li><i class="bi bi-check2-circle"></i> Account Issues Check</li>
                                    <li><i class="bi bi-check2-circle"></i> Policy Compliance Check</li>
                                    <li><i class="bi bi-check2-circle"></i> Analytics Data Review</li>
                                    <li><i class="bi bi-check2-circle"></i> Bid Management</li>
                                    <li><i class="bi bi-check2-circle"></i> Search Query Reports</li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Strategy Review</li>
                                    <li><i class="bi bi-check2-circle"></i> Product Feed Review</li>
                                    <li><i class="bi bi-check2-circle"></i> Audience Performance Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Geo Target Performance Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> A/B Testing</li>
                                    <li><i class="bi bi-check2-circle"></i> Ad Schedule Checks</li>
                                    <li><i class="bi bi-check2-circle"></i> Strategic Adjustments As Required</li>
                                    <li><i class="bi bi-check2-circle"></i> Remarketing Performance</li>
                                    <li><i class="bi bi-check2-circle"></i> Account Audit (Existing Account)</li>
                                    <li><i class="bi bi-check2-circle"></i> Campaign Types</li>
                                    <li><i class="bi bi-check2-circle"></i> Account Best Practices Checks</li>
                                    <li><i class="bi bi-check2-circle"></i> Account Structure Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Keyword Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Ad Copies Check</li>
                                    <li><i class="bi bi-check2-circle"></i> Shopping Campaign Checks</li>
                                    <li><i class="bi bi-check2-circle"></i> Display Campaign Checks</li>
                                    <li><i class="bi bi-check2-circle"></i> Overall Performance Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Analytics Data Review</li>
                                    <li><i class="bi bi-check2-circle"></i> Recommendations</li>
                                    <li><i class="bi bi-check2-circle"></i> Remarketing Campaigns</li>
                                    <li><i class="bi bi-check2-circle"></i> Search Remarketing (RLSA)</li>
                                    <li><i class="bi bi-check2-circle"></i> Display Remarketing</li>
                                    <li><i class="bi bi-check2-circle"></i> Remarketing Audience Setup</li>
                                    <li><i class="bi bi-check2-circle"></i> Reporting</li>
                                    <li><i class="bi bi-check2-circle"></i> Google Data Studio</li>
                                    <li><i class="bi bi-check2-circle"></i> Excel/PDF Reporting</li>
                                    <li><i class="bi bi-check2-circle"></i> Performance Overview</li>
                                    <li><i class="bi bi-check2-circle"></i> ROI/Goal KPIs</li>
                                    <li><i class="bi bi-check2-circle"></i> Recommendations</li>
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