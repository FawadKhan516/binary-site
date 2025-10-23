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
    <title>Video Animation</title>
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
                        <h1 class="head1 ani-a fade-right-a delay-1">Video <span>Animation</span></h1>
                        <h4 class="ani-a fade-right-a delay-1">Brand your business with us with some irresistible ideas to adore.</h4>
                        <!-- <a href="#services" class="cta-button">Scroll to Explore</a> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/premium_photo-1710962537846-dca5c74f5c6c.png"></div>
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
        <h4 class="ani-a fade-down-a delay-1 animated">Video Animation Services</h4>
        <h2 class="ani-a fade-up-a animated">In today's digital age, video content reigns supreme.</h2>
    </div>

  <!-- Inner Services Section -->
    <section class="services-section">
        <div class="services-inner">

            <div class="left-section">
                <div class="content">
                    <h3>1. Captivate Your Audience with Custom custom-animated videos:</h3>
                    <p>We don't create one-size-fits-all animations! At Visionary Soft, we craft custom-animated videos tailored to your specific message and target audience. This ensures your video resonates profoundly and achieves your marketing goals, whether brand awareness, lead generation, or driving sales.</p>
                </div>

                <div class="content">
                    <h3>2. Make the Complex Clear with Explainer Video Animations:</h3>
                    <p>Do you have a complex product, service, or idea to explain? Explainer videos are your secret weapon! Our team transforms intricate concepts into engaging, easy-to-understand narratives that educate and entertain your audience. This not only clarifies your message but also keeps viewers hooked, maximizing the impact of your video.</p>
                </div>

                <div class="content">
                    <h3>3. Your Brand with Motion Graphics :</h3>
                    <p>Want to add a touch of sophistication and dynamism to your videos or presentations? Look no further than our motion graphics services! We create eye-catching animated elements like text overlays, infographics, and data visualizations. These elements will enhance your branding, grab attention, and effectively communicate your message.</p>
                </div>

                <div class="content">
                    <h3>4. 2D & 3D Animation: The Perfect Style for Your Project :</h3>
                    <p>Our animation expertise spans across the spectrum. We offer 2D animations, perfect for explainer videos, product demos, and character-driven stories, and stunning 3D animation, ideal for visualizing, medical animations, and architectural walkthroughs. No matter your vision, we have the skills and experience to bring it to life.</p>
                </div>

                <div class="content">
                    <h3>5. Storyboard & Script The Backbone of Your Animation:</h3>
                    <p>A strong foundation is vital to a successful animation. That's why we meticulously craft storyboards and scripts for every project. These elements ensure a clear narrative flow, a cohesive message, and a polished final product that delivers results.</p>
                </div>
            </div>

            <div class="right-section">
             
                    <img src="assets/img/Animator-working-on-3D-animated-video-on-a-computer-iStock-1353865693.jpg" alt="Branding Mockup" class="mockup">
                
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
                    <a href="assets/img/video1.jfif" data-fancybox="brand-gallery"><img src="assets/img/video1.jfif" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/video6.jpg" data-fancybox="brand-gallery"><img src="assets/img/video6.jpg" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/video5.webp" data-fancybox="brand-gallery"><img src="assets/img/video5.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/video4.webp" data-fancybox="brand-gallery"><img src="assets/img/video4.webp" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/video3.jfif" data-fancybox="brand-gallery"><img src="assets/img/video3.jfif" width="100%" height="auto" alt=""></a>
                </div>
                <div class="filter-item-a all branding" style="display: block;">
                    <a href="assets/img/video2.jpg" data-fancybox="brand-gallery"><img src="assets/img/video2.jpg" width="100%" height="auto" alt=""></a>
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
                                <div class="content-title">Silver</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">499 </span><span class="content-duration"></span></div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i> Terms - 3 days Whiteboard Video / Motion</li>
                                    <li><i class="bi bi-check2-circle"></i> Custom Artwork; No Stolen Images</li>
                                    <li><i class="bi bi-check2-circle"></i> Unlimited Storyboard Revisions</li>
                                    <li><i class="bi bi-check2-circle"></i> Professional Voice – Over</li>
                                    <li><i class="bi bi-check2-circle"></i> Background Music</li>
                                    <li><i class="bi bi-check2-circle"></i> Exotic Animations</li>
                                    <li><i class="bi bi-check2-circle"></i> HD Video Production</li>
                                    <li><i class="bi bi-check2-circle"></i> Add video script $120/minute 30 seconds Video Duration*(Yes, you can ask for more!)</li>
                                    <li><i class="bi bi-check2-circle"></i> MORE FEATURES</li>
                                    <li><i class="bi bi-check2-circle"></i> 100% Satisfaction Guaranteed</li>
                                    <li><i class="bi bi-check2-circle"></i> Dedicated Account Executive</li>
                                    <li><i class="bi bi-check2-circle"></i> 24 X 7 Customer Support</li>
                                    <li><i class="bi bi-check2-circle"></i> Moneyback Guarantee </li>                                    
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
                                <div class="content-title">Gold</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,499</span><span class="content-duration"></span>
                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">
                                    <li><i class="bi bi-check2-circle"></i> 2D Animation / Cut-out Video / Screen Cast</li>
                                    <li><i class="bi bi-check2-circle"></i>Custom Artwork; No Stolen Images</li>
                                    <li><i class="bi bi-check2-circle"></i>Initial Script Writing</li>
                                    <li><i class="bi bi-check2-circle"></i>Professional Voice – Over</li>
                                    <li><i class="bi bi-check2-circle"></i>Background Music</li>
                                    <li><i class="bi bi-check2-circle"></i>Exotic Animations</li>
                                    <li><i class="bi bi-check2-circle"></i>HD Video Production</li>
                                    <li><i class="bi bi-check2-circle"></i>Add video script $120/minute 30 seconds Video Duration*(Yes, you can ask for more!)</li>
                                    <li><i class="bi bi-check2-circle"></i>MORE FEATURES</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Satisfaction Guaranteed</li>
                                    <li><i class="bi bi-check2-circle"></i>Dedicated Account Executive</li>
                                    <li><i class="bi bi-check2-circle"></i>24 X 7 Customer Support</li>
                                    <li><i class="bi bi-check2-circle"></i>Moneyback Guarantee</li>
                                                                       
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
                                <div class="content-title">Platinum</div>
                                <div class="pricing-price"><sup class="content-currency">AED</sup><span class="content-price">1,799</span><span class="content-duration"></span>

                                </div>
                                <!-- <p class="p">Offer both fixed packages and flexible hourly rates to cater to different client .</p> -->
                                <ul class="content-desc">

                                    <li><i class="bi bi-check2-circle"></i> 2 Character Illustration / Music Videos </li>

                                    <li><i class="bi bi-check2-circle"></i>Custom Artwork; No Stolen Images</li>
                                    <li><i class="bi bi-check2-circle"></i>Unlimited Storyboard Revisions</li>
                                    <li><i class="bi bi-check2-circle"></i>Professional Voice – Over</li>
                                    <li><i class="bi bi-check2-circle"></i>Background Music</li>
                                    <li><i class="bi bi-check2-circle"></i>Exotic Animations</li>
                                    <li><i class="bi bi-check2-circle"></i>HD Video Production</li>
                                    <li><i class="bi bi-check2-circle"></i>Add video script $120/minute 30 seconds Video Duration*(Yes, you can ask for more!)</li>
                                    <li><i class="bi bi-check2-circle"></i>MORE FEATURES</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Satisfaction Guaranteed</li>
                                    <li><i class="bi bi-check2-circle"></i>Dedicated Account Executive</li>
                                    <li><i class="bi bi-check2-circle"></i>24 X 7 Customer Support</li>
                                    <li><i class="bi bi-check2-circle"></i>Moneyback Guarantee</li>
                                                             

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