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
    <title>SEO Services
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
                        <h1 class="head1 ani-a fade-right-a delay-1">SEO
                            <span>Services</span>
                        </h1>
                        <h4 class="ani-a fade-right-a delay-1">In todays digital world, ranking high in search results is crucial for attracting new customers and growing your business. But navigating the ever-changing world of SEO can be a challenge.</h4>
                        <!-- <a href="#services" class="cta-button">Scroll to Explore</a> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/seo hero right.png"></div>
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
        <h4 class="ani-a fade-down-a delay-1 animated">Search Engine Optimization (SEO)</h4>
        <h2 class="ani-a fade-up-a animated">SEO Beyond Rankings – Building Your Digital Powerhouse</h2>
    </div>

    <!-- Inner Services Section -->
    <section class="services-section">
        <div class="services-inner">

            <div class="left-section">
                <div class="content">
                    <h3>1. Custom SEO Plans Built for Your Business</h3>
                    <p>We ditch the cookie-cutter approach! Our SEO specialists collaborate closely with you to craft a personalized SEO plan that perfectly aligns with your unique business goals, target audience, and the ever-changing dynamics of your industry.</p>
                </div>

                <div class="content">
                    <h3>2.On-Page Optimization: Fine-Tuning Your Website for Search Success</h3>
                    <p>Your website's Content and structure are the building blocks of SEO. We'll optimize your website's Content, meta tags, and structure to make it search-engine friendly and a breeze to navigate for visitors.</p>
                </div>

                <div class="content">
                    <h3>3. Off-Page SEO and Building Website Authority :</h3>
                    <p>Imagine your website as a trusted expert in your field. That's what off-page SEO helps achieve! We'll implement strategic link-building and other off-page SEO techniques to boost your website's credibility and visibility in search engine results.</p>
                </div>

                <div class="content">
                    <h3>4. Keyword Research Unlocking the Secrets of Search :</h3>
                    <p>Keywords are the magic words that help people find your website online. Our team conducts in-depth keyword research to identify the most relevant and high-performing keywords to bring the right traffic to your website.</p>
                </div>

                <div class="content">
                    <h3>5. Transparent SEO Audits and Reports You Can Understand :</h3>
                    <p>We believe in clear communication. That's why we conduct regular SEO audits and provide detailed performance reports in an easy-to-understand format. This allows you to track the Success of your SEO efforts and make data-driven decisions to improve your website's ranking.</p>
                </div>
            </div>

            <div class="right-section">
              
                    <img src="assets/img/conceptual-seo-analysis-business-with-wooden-blocks-with-words-it-magnifying-glass-side-view_176474-10541.jpg" alt="Branding Mockup" class="mockup">
                
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
                    <a href="assets/img/seo1.webp" data-fancybox="brand-gallery"><img src="assets/img/seo1.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/screencapture-royalviewcampground-2025-10-22-11_34_58.png" data-fancybox="brand-gallery"><img src="assets/img/screencapture-royalviewcampground-2025-10-22-11_34_58.png" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/screencapture-coyoterealty-net-2025-10-22-11_34_38.png" data-fancybox="brand-gallery"><img src="assets/img/screencapture-coyoterealty-net-2025-10-22-11_34_38.png" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/seo4.webp" data-fancybox="brand-gallery"><img src="assets/img/seo4.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/seo5.webp" data-fancybox="brand-gallery"><img src="assets/img/seo5.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/seo2.webp" data-fancybox="brand-gallery"><img src="assets/img/seo2.webp" width="100%" height="auto" alt=""></a>
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
                                <div class="content-title">Startup Plan</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">499 </span><span class="content-duration"></span></div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i>Campaign Setup And Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i>Website Audit</li>
                                    <li><i class="bi bi-check2-circle"></i>Pages Optimized (10 pages)</li>
                                    <li><i class="bi bi-check2-circle"></i>15 Selected Keywords Targeting</li>
                                    <li><i class="bi bi-check2-circle"></i>Keyword Research</li>
                                    <li><i class="bi bi-check2-circle"></i>Keyword Grouping</li>
                                    <li><i class="bi bi-check2-circle"></i>Keyword Mapping</li>
                                    <li><i class="bi bi-check2-circle"></i>On-Page Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i>SEO Road Map</li>
                                    <li><i class="bi bi-check2-circle"></i>Blog Creation</li>
                                    <li><i class="bi bi-check2-circle"></i>Webpage Copywriting (3 pages, 350 words per page)</li>
                                    <li><i class="bi bi-check2-circle"></i>Title Tag Optimization (10 titles)</li>
                                    <li><i class="bi bi-check2-circle"></i>Meta Description Optimization (10 meta description)</li>
                                    <li><i class="bi bi-check2-circle"></i>Meta Keyword Optimization (10 meta keywords)</li>
                                    <li><i class="bi bi-check2-circle"></i>Domain Redirect Optimization (10 domain redirects)</li>
                                    <li><i class="bi bi-check2-circle"></i>xml Sitemap Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i>Robots.txt Check</li>
                                    <li><i class="bi bi-check2-circle"></i>URL Rewrites (10 URL rewrites)</li>
                                    <li><i class="bi bi-check2-circle"></i>Broken Link Report</li>
                                    <li><i class="bi bi-check2-circle"></i>Rich Snippet Recommendations</li>
                                    <li><i class="bi bi-check2-circle"></i>Breadcrumbs</li>
                                    <li><i class="bi bi-check2-circle"></i>Initial Off-Page SEO</li>
                                    <li><i class="bi bi-check2-circle"></i>Social Bookmarking</li>
                                    <li><i class="bi bi-check2-circle"></i>Slide Share Marketing</li>
                                    <li><i class="bi bi-check2-circle"></i>Forums/FAQ’s</li>
                                    <li><i class="bi bi-check2-circle"></i>Link Building</li>
                                    <li><i class="bi bi-check2-circle"></i>Directory Submission</li>
                                    <li><i class="bi bi-check2-circle"></i>Local Business Listings</li>
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
                                <div class="content-title">Scaling Plan</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,499</span><span class="content-duration"></span>
                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i> Campaign Setup And Optimization </li>
                                    <li><i class="bi bi-check2-circle"></i> Prior Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> Business Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> Consumer Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> Competitor Analysis </li>
                                    <li><i class="bi bi-check2-circle"></i> 35 Selected Keywords Targeting</li>
                                    <li><i class="bi bi-check2-circle"></i> 15 Pages Keyword Targeted </li>
                                    <li><i class="bi bi-check2-circle"></i>Webpage Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i> Meta Tags Creation </li>
                                    <li><i class="bi bi-check2-circle"></i> Keyword Optimization </li>
                                    <li><i class="bi bi-check2-circle"></i> Inclusion of anchors </li>
                                    <li><i class="bi bi-check2-circle"></i>Off Page Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i> Social Bookmarking </li>
                                    <li><i class="bi bi-check2-circle"></i> Slide Share Marketing </li>
                                    <li><i class="bi bi-check2-circle"></i> Forums/FAQ’s </li>
                                    <li><i class="bi bi-check2-circle"></i> Link Building </li>
                                    <li><i class="bi bi-check2-circle"></i> Directory Submission</li>
                                    <li><i class="bi bi-check2-circle"></i> Local Business Listings</li>
                                    <li><i class="bi bi-check2-circle"></i>On-Page Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i> SEO Road Map</li>
                                    <li><i class="bi bi-check2-circle"></i> Blog Creation</li>
                                    <li><i class="bi bi-check2-circle"></i> Webpage Copywriting (5 pages, 350 words per page)</li>
                                    <li><i class="bi bi-check2-circle"></i> Title Tag Optimization (15 titles)</li>
                                    <li><i class="bi bi-check2-circle"></i> Meta Description Optimization (15 meta description)</li>
                                    <li><i class="bi bi-check2-circle"></i> Domain Redirect Optimization (15 domain redirects)</li>
                                    <li><i class="bi bi-check2-circle"></i> xml Sitemap Optimization</li>
                                    <li><i class="bi bi-check2-circle"></i> Robots.txt Check</li>
                                    <li><i class="bi bi-check2-circle"></i> URL Rewrites (15 URL rewrites)</li>
                                    <li><i class="bi bi-check2-circle"></i> Broken Link Report</li>
                                    <li><i class="bi bi-check2-circle"></i>Tracking & Analysis</li>
                                    <li><i class="bi bi-check2-circle"></i> Google Analytics Installation</li>
                                    <li><i class="bi bi-check2-circle"></i> Google Webmaster Installation</li>
                                    <li><i class="bi bi-check2-circle"></i> Call To Action Plan</li>
                                    <li><i class="bi bi-check2-circle"></i> Creation of Sitemaps</li>
                                    <li><i class="bi bi-check2-circle"></i>Reporting</li>
                                    <li><i class="bi bi-check2-circle"></i> Monthly Reporting</li>
                                    <li><i class="bi bi-check2-circle"></i> Recommendation</li>
                                    <li><i class="bi bi-check2-circle"></i> Email Support</li>
                                    <li><i class="bi bi-check2-circle"></i> Phone Support</li>
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
                                <div class="content-title">Venture Plan</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,799</span><span class="content-duration"></span>

                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">

                                    <li><i class="bi bi-check2-circle"></i> Campaign Setup And Optimization </li>

                                    <li><i class="bi bi-check2-circle"></i> Prior Analysis </li>

                                    <li><i class="bi bi-check2-circle"></i> Business Analysis </li>

                                    <li><i class="bi bi-check2-circle"></i> Consumer Analysis </li>

                                    <li><i class="bi bi-check2-circle"></i> Competitor Analysis </li>

                                    <li><i class="bi bi-check2-circle"></i> 60+ Selected Keywords Targeting </li>

                                    <li><i class="bi bi-check2-circle"></i> 30 Pages Keyword Targeted </li>

                                    <li><i class="bi bi-check2-circle"></i> Webpage Optimization </li>

                                    <li><i class="bi bi-check2-circle"></i> Meta Tags Creation </li>

                                    <li><i class="bi bi-check2-circle"></i> Keyword Optimization </li>

                                    <li><i class="bi bi-check2-circle"></i> Image Optimization </li>

                                    <li><i class="bi bi-check2-circle"></i> Google Webmaster Installation </li>

                                    <li><i class="bi bi-check2-circle"></i> Call To Action Plan </li>

                                    <li><i class="bi bi-check2-circle"></i> Creation of Sitemaps </li>

                                    <li><i class="bi bi-check2-circle"></i> Reporting </li>

                                    <li><i class="bi bi-check2-circle"></i> Monthly Reporting </li>

                                    <li><i class="bi bi-check2-circle"></i>Recommendation</li>

                                    <li><i class="bi bi-check2-circle"></i>Email Support</li>

                                    <li><i class="bi bi-check2-circle"></i>Phone Support</li>

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