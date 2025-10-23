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
    <title>Hybrid Mobile App Development Services </title>
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
                        <h1 class="head1 ani-a fade-right-a delay-1">Build Future-Ready Apps with a Leading <span>Hybrid App Development Company</span>
                        </h1>
                        <h4 class="ani-a fade-right-a delay-1">Your business needs an app that reaches users across all platforms without compromise. Our <strong>Hybrid App Development</strong> company specializes in creating high-performing, cost-effective, and scalable mobile applications that deliver a seamless experience across iOS and Android devices.
                        </h4>
                        <!-- <a href="#services" class="cta-button">Scroll to Explore</a> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/hybrid hero right.png"></div>
                        <!-- <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/hybrid hero right.png"></div> -->
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
    <section class="subscribe-section">
        <div class="container-fluid packagesContainer">

            <div class="row  d-flex align-items-center">

                <div class="col-lg-6 col-md-12">

                    <div class="subscribe-section-head ani-a fade-right-a delay-1 main-hd">
                        <h2 class="section-title">
                            <span style="color: white;" class="">Why Choose Hybrid Mobile App Development?</span>
                        </h2>
                        <p class="p">In today's competitive market, businesses need solutions that are efficient and cost-effective. Hybrid app development services offer the perfect balance between native performance and cross-platform compatibility. With a single codebase, you can target multiple platforms, reducing development time and cost while ensuring consistency in user experience.
                        </p>

                    </div>

                </div>

                <div class="col-lg-6 col-md-12">

                    <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                        <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/hybrid.png"></div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Welcome Section -->
    <section class="whyus">
        <div class="innerwhyus text-center text-white">
            <div class="container-fluid">
                <div class="main-hd">
                    <h3 class="ani-a fade-in-a delay-1">Benefits of Hybrid Mobile App Development </h3>
                    <!-- <p class="ani-a fade-in-a delay-1">In today's competitive market, businesses need solutions that are efficient and cost-effective. Hybrid app development services offer the perfect balance between native performance and cross-platform compatibility. With a single codebase, you can target multiple platforms, reducing development time and cost while ensuring consistency in user experience. </p> -->
                    <!-- <h2 class="ani-a fade-up-a delay-1">Why Choose Us for Your iOS App Development?</h2> -->
                </div>
                <div class="whyTabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item ani-a fade-up-a delay-1" role="presentation">
                            <button class="nav-link active" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="true"><img class="mr-3" src="assets/img/experience.png" alt="experince icon">
                                <h5 class="tabHead">Cost Efficiency</h5>
                            </button>
                        </li>
                        <li class="nav-item ani-a fade-up-a delay-2" role="presentation">
                            <button class="nav-link" id="innovation-tab" data-bs-toggle="tab" data-bs-target="#innovation" type="button" role="tab" aria-controls="innovation" aria-selected="false"><img class="mr-3" src="assets/img/rocket.png" alt="Generic placeholder image">
                                <h5 class="tabHead">Faster Time-to-Market </h5>
                            </button>
                        </li>
                        <li class="nav-item ani-a fade-up-a delay-3" role="presentation">
                            <button class="nav-link" id="client-tab" data-bs-toggle="tab" data-bs-target="#client" type="button" role="tab" aria-controls="client" aria-selected="false"><img class="mr-3" src="assets/img/client-centric.png" alt="client image">
                                <h5 class="tabHead">Wider Reach </h5>
                            </button>
                        </li>
                        <li class="nav-item ani-a fade-up-a delay-4" role="presentation">
                            <button class="nav-link" id="transparency-tab" data-bs-toggle="tab" data-bs-target="#transparency" type="button" role="tab" aria-controls="transparency" aria-selected="false"><img class="mr-3" src="assets/img/transparency.png" alt="Transparency image">
                                <h5 class="tabHead">Easy Maintenance </h5>
                            </button>
                        </li>
                        <li class="nav-item ani-a fade-up-a delay-5" role="presentation">
                            <button class="nav-link" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false"><img class="mr-3" src="assets/img/results-driven.png" alt="results image">
                                <h5 class="tabHead">Performance Optimization</h5>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                            <h5 class="tabHead">Developing a single app that works on multiple platforms saves significant development costs.
                            </h5>
                        </div>
                        <div class="tab-pane fade" id="innovation" role="tabpanel" aria-labelledby="innovation-tab">
                            <h5 class="tabHead">With one codebase, deployment is quicker, allowing businesses to launch their apps faster.
                            </h5>
                        </div>
                        <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                            <h5 class="tabHead">A hybrid app can reach both iOS and Android users without requiring separate development efforts.
                            </h5>
                        </div>
                        <div class="tab-pane fade" id="transparency" role="tabpanel" aria-labelledby="transparency-tab">
                            <h5 class="tabHead">Updates and maintenance are simplified since changes are made in a single codebase.
                            </h5>
                        </div>
                        <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                            <h5 class="tabHead">With advancements in hybrid frameworks, performance is comparable to native apps. </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-two">
        <div class="container-fluid packagesContainer">
            <div class="row">
                <div class="main-hd text-center">
                    <h3 class="ani-a fade-in-a delay-1">Our Expertise in Hybrid App Development </h3>
                    <p class="ani-a fade-in-a delay-1 p">We combine the best of web and mobile technologies to build hybrid apps that are: ✔ Fast and Responsive</p>
                </div>
            </div>
            <div class="row">
                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single ani-a fade-up-a delay-1">
                        <p class="counter-two__text"><strong>Scalable and Secure </strong></p>
                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single counter-two__single-2 ani-a fade-up-a delay-2">
                        <p class="counter-two__text"><strong> Cost-Effective and Time-Saving</strong></p>
                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single ani-a fade-up-a delay-3">

                        <p class="counter-two__text"><strong>Compatible Across Devices </strong></p>

                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single counter-two__single-2 counter-two__single-4 ani-a fade-up-a delay-4" style="border:none;">


                        <p class="counter-two__text"><strong> Easy to Maintain and Update</strong></p>
                    </div>

                </div>

                <!--Counter Two End-->

            </div>

        </div>

    </section>


    <!-- Inner Services Section Heading -->
    <div class="main-hd">
        <h4 class="ani-a fade-down-a delay-1 animated">Hybrid App Development Services</h4>
        <h2 class="ani-a fade-up-a animated">Create Apps That Work Seamlessly Across Platforms!</h2>
    </div>

    <!-- Inner Services Section -->
    <section class="services-section">
        <div class="services-inner">

            <div class="left-section">
                <div class="content">
                    <h3>1. Custom Hybrid App Solutions</h3>
                    <p>We build hybrid applications that combine the best of web and mobile technologies, delivering a seamless experience across Android, iOS, and web platforms. Each app is tailored to meet your unique business needs.</p>
                </div>

                <div class="content">
                    <h3>2. Cross-Platform UI/UX Design</h3>
                    <p>Our designers create intuitive and visually appealing interfaces that adapt perfectly to different devices and screen sizes. We ensure smooth navigation and a consistent user experience everywhere.</p>
                </div>

                <div class="content">
                    <h3>3. Performance & Optimization</h3>
                    <p>We optimize hybrid apps for speed, responsiveness, and reliability. Our development practices ensure minimal crashes, fast load times, and efficient resource usage across platforms.</p>
                </div>

                <div class="content">
                    <h3>4. Testing & Quality Assurance</h3>
                    <p>We rigorously test every app on multiple devices and operating systems to guarantee flawless performance. Our QA ensures your hybrid app is stable, secure, and ready for deployment.</p>
                </div>

                <div class="content">
                    <h3>5. Maintenance & Updates</h3>
                    <p>We provide ongoing support and updates to keep your hybrid app compatible with new OS versions and technologies. Continuous improvements ensure your app remains relevant and delivers the best user experience.</p>
                </div>
            </div>

            <div class="right-section">
               
                <img src="assets/img/representation-user-experience-interface-design_23-2150169864.jpg" alt="Hybrid App Mockup" class="mockup">
          
            </div>

        </div>
    </section>


    <!-- Portfolio Section -->
    <section class="portfolio-container">
        <div class="container-fluid">
            <div class="portfolio-content text-center main-hd">
                <h2 class="ani-a fade-down-a animated">Technologies
                    <span>We Use</span>
                </h2>
                <p class="ani-a p fade-up-a animated">We use the latest hybrid development frameworks to ensure high performance and scalability: </p>

            </div>
            <div class="container">
                <div class="techArea">
                    <div class="techBox">
                        <div class="techImg">
                            <img alt="Flutter" src="assets/img/flutter.png">
                        </div>
                        <h3>Flutter</h3>
                    </div>
                    <div class="techBox">
                        <div class="techImg">
                            <img alt="React Native" src="assets/img/native.png">
                        </div>
                        <h3>React Native
                        </h3>
                    </div>
                    <div class="techBox">
                        <div class="techImg">
                            <img alt="Ionic" src="assets/img/ionic.png">
                        </div>
                        <h3>Ionic </h3>
                    </div>
                    <div class="techBox">
                        <div class="techImg">
                            <img alt="Angular" src="assets/img/angular.png">
                        </div>
                        <h3>Angular
                        </h3>
                    </div>
                    <div class="techBox">
                        <div class="techImg">
                            <img alt="Node JS" src="assets/img/node.png">
                        </div>
                        <h3>Node JS
                        </h3>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="counter-two">
        <div class="container-fluid packagesContainer">
            <div class="row">
                <div class="main-hd text-center">
                    <h3 class="ani-a fade-in-a delay-1">Key Features of Our Hybrid Apps </h3>
                </div>
            </div>
            <div class="row">
                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single ani-a fade-up-a delay-1">
                        <p class="counter-two__text"><strong>Seamless User Experience:
                            </strong></p>
                        <p class="counter-two__text">Intuitive designs that enhance user engagement.</p>
                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single counter-two__single-2 ani-a fade-up-a delay-2">
                        <p class="counter-two__text"><strong>Push Notifications:
                            </strong></p>
                        <p class="counter-two__text">Keep users informed with real-time updates.
                        </p>
                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single ani-a fade-up-a delay-3">
                        <p class="counter-two__text"><strong>Offline Functionality: </strong></p>
                        <p class="counter-two__text"> Ensure access to important features even without an internet connection. </p>

                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single counter-two__single-2 counter-two__single-4 ani-a fade-up-a delay-4" style="border:none;">

                        <p class="counter-two__text"><strong>Social Media Integration: </strong></p>
                        <p class="counter-two__text">Enable easy login and content sharing. </p>


                    </div>

                </div>

                <!--Counter Two End-->

            </div>

        </div>

    </section>
    <section class="contentSection py-5">
        <div class="innContSec py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="subscribe-section-head ani-a fade-right-a delay-1 main-hd">
                            <h2 class="section-title">
                                <span style="color: white;" class="">Industries We Serve </span>
                            </h2>
                            <p class="p">Our mobile hybrid app development solutions cater to various industries, including: </p>

                            <p class="p "><strong> 1. E-commerce & Retail</strong></p>
                            <p class="p">Engaging shopping experiences on any device, offering seamless browsing and purchasing options.</p>
                            <p class="p "><strong> 2. Healthcare</strong></p>
                            <p class="p">HIPAA-compliant apps for patient management, telemedicine, and health tracking.</p>
                            <p class="p "><strong> 3. Finance & Banking</strong></p>
                            <p class="p">Secure mobile banking solutions that facilitate transactions, portfolio management, and real-time updates.</p>
                            <p class="p "><strong> 4. Education & E-Learning</strong></p>
                            <p class="p">Interactive learning platforms with multimedia content, quizzes, and live sessions.</p>
                            <p class="p "><strong> 5.Travel & Hospitality</strong></p>
                            <p class="p">Seamless booking and customer engagement apps with real-time tracking and customer support.</p>
                            <p class="p"><strong>Logistics & Transportation </strong></p>
                            <p class="p">Real-time tracking, route optimization, and delivery management for improved efficiency.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                            <div class="bann-thumbnail"><img alt="Branding Thumbnail" src="assets/img/Industries We Serve.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-two">
        <div class="container-fluid packagesContainer">
            <div class="row">
                <div class="main-hd text-center">
                    <h3 class="ani-a fade-in-a delay-1">Why Partner with Us?
                    </h3>
                </div>
            </div>
            <div class="row">
                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single ani-a fade-up-a delay-1">
                        <p class="counter-two__text"><strong>Innovative Solutions </strong></p>
                        <p class="counter-two__text">We stay ahead of industry trends to build future-ready apps that drive engagement and growth.</p>
                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single counter-two__single-2 ani-a fade-up-a delay-2">
                        <p class="counter-two__text"><strong>Client-Centric Approach </strong></p>
                        <p class="counter-two__text">Your vision is our priority. We collaborate closely with you to ensure every aspect of your app aligns with your business goals.
                        </p>
                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single ani-a fade-up-a delay-3">
                        <p class="counter-two__text"><strong>End-to-End Support</strong></p>
                        <p class="counter-two__text">From ideation to post-launch support, we provide comprehensive hybrid app development services to keep your app competitive.</p>

                    </div>

                </div>

                <!--Counter Two End-->

                <!--Counter Two Start-->

                <div class="col-xl-3 col-lg-6 col-md-6">

                    <div class="counter-two__single counter-two__single-2 counter-two__single-4 ani-a fade-up-a delay-4" style="border:none;">

                        <p class="counter-two__text"><strong>Scalability and Performance </strong></p>
                        <p class="counter-two__text">We build apps that grow with your business, ensuring they remain responsive and high-performing as your user base expands. </p>


                    </div>

                </div>

                <!--Counter Two End-->

            </div>

        </div>

    </section>
    <section class="contentSection py-5">
        <div class="innContSec py-5 diffSec">
            <div class="container">
                <div class="row">
                    <div class="main-hd text-center">
                        <h3 class="ani-a fade-in-a delay-1">Hybrid vs. Native Apps: Which One is Right for You?
                        </h3>
                        <p class="ani-a fade-in-a delay-1 p">While native apps offer optimal performance, they require separate development for iOS and Android, increasing costs and time. Hybrid apps, on the other hand, use a single codebase, making them more efficient and budget-friendly while still delivering a near-native experience.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center py-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="subscribe-section-head ani-a fade-right-a delay-1 main-hd">
                            <h4 class="section-title">
                                <span style="color: white;" class="">Choose Hybrid Apps If: </span>
                            </h4>
                            <p class="p">You need a cost-effective solution with cross-platform compatibility.</p>
                            <p class="p">Your app requires quick updates and frequent changes.</p>
                            <p class="p">You want to reach a broader audience without separate native development.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="bann-thumbnail-wrapper ani-a fade-left-a delay-1">
                            <h4 class="section-title">
                                <span style="color: white;" class="">Choose Native Apps If: </span>
                            </h4>
                            <p class="p">You need a highly optimized and performance-intensive app.</p>
                            <p class="p">Your app depends on complex hardware features like AR/VR, advanced sensors, or real-time processing. </p>
                            <p class="p">Budget and development time are not constraints.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-two">
        <div class="container">
            <div class="row py-4">
                <div class="main-hd text-center">
                    <h2 class="ani-a fade-in-a delay-1">Case Studies</h2>
                    <h3 class="ani-a fade-in-a delay-1">Our Success Stories
                    </h3>
                </div>
            </div>
            <div class="row">
                <!--Counter Two Start-->

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="caseBox">
                        <div class="imgBox">
                            <img alt="Case Study" class="img-fluid" src="assets/img/case1.jpg">
                        </div>
                        <div class="cBox">
                            <h3>E-commerce App for a Global Brand</h3>
                            <p class="p">We developed a hybrid shopping app for a retail giant, integrating a seamless browsing and checkout experience across multiple devices. The app increased conversions by 30% within three months. </p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="caseBox">
                        <div class="imgBox">
                            <img alt="Case Study" class="img-fluid" src="assets/img/case2.jpg">
                        </div>
                        <div class="cBox">
                            <h3>Healthcare App for a Telemedicine Startup</h3>
                            <p class="p">Our team built a secure hybrid app that allows patients to consult doctors remotely. The app features secure video calls, appointment scheduling, and digital prescriptions.</p>
                        </div>
                    </div>
                </div>



                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="caseBox">
                        <div class="imgBox">
                            <img alt="Case Study" class="img-fluid" src="assets/img/case3.jpg">
                        </div>
                        <div class="cBox">
                            <h3>Finance App for a Digital Banking Platform</h3>
                            <p class="p">We designed a hybrid mobile banking app with biometric authentication, real-time transaction updates, and an intuitive UI, improving customer engagement and security.
                            </p>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>
    <!-- Pricing Section -->
    <?php // include "templates/home-pricing.php" 
    ?>
    <section class="contact-one">
        <div class="container-fluid packagesContainer">
            <div class="main-hd">
                <h2 class="small-head ani-a fade-in-a ">Contact Us</h2>

                <h3 class="head2 ani-a fade-up-a delay-1">Let’s Build Your Hybrid App
                </h3>
                <p class="p">Transform your business with a powerful, cross-platform mobile app. Partner with our hybrid app development company today and take the first step toward digital success. </p>
                <p class="p"><strong>Contact Us Today</strong>— Get a Free Consultation Now!
                </p>
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

    <?php include "templates/testi-sec.php"; ?>
    <?php include "templates/footer.php" ?>

    <!-- Scripts Section -->
    <?php include "templates/global-scripts.php" ?>
</body>

</html>