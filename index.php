<?php include 'includes/header.php'; ?>
<?php include 'includes/shapes.php'; ?>
<div class="th-hero-wrapper hero-2" id="hero">
    <div class="slider-area">
        <div class="swiper th-slider hero-slider-2" id="heroSlider2" data-slider-options='{"autoHeight":"true","effect":"fade","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="th-hero-slide">
                        <div class="th-hero-bg"><img id="hero-image" style="width: 1100px; float: right; margin-right: -180px;" src="assets/img/hero/Hero1.png">
                        </div>
                        <div class="container">
                            <div class="hero-style2">
                                <div class="ripple-shape"><span class="ripple-1"></span><span class="ripple-2"></span><span class="ripple-3"></span><span class="ripple-4"></span><span class="ripple-5"></span><span class="ripple-6"></span></div><span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s">Webdesign & IT SERVICES</span>
                                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Perfect IT
                                    Solution</h1>
                                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">For Your
                                    Business</h1>
                                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.7s">
                                    Enhance your online presence with custom web design + solutions. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><button data-slider-prev="#heroSlider2" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#heroSlider2" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
    </div>
    <div class="hero-shape1"></div>
    <div class="hero-shape2"><img src="assets/img/hero/hero_shape_2_2.png" alt="shape"></div>
    <div class="hero-shape3"><img src="assets/img/hero/hero_shape_2_3.png" alt="shape"></div>
</div>
<style>
    @media (max-width: 576px) {
        #hero .swiper-slide:nth-child(n+2) {
            display: none;
        }
    }

    .th-hero-wrapper.hero-2 {
        max-height: 500px;
        margin: 0 auto;
    }
</style>


<div class="overflow-hidden space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box4 tilt-active">
                    <div class="img-shape icon-masking"></div>
                    <img style="width: 500px;" src="assets/img/normal/hero-1-img.png" alt="About">
                    <a href="assets/img/vd.mp4" class="play-btn popup-video">
                        <i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-35 text-center text-xl-start">
                    <div class="shadow-title">ABOUT US</div><span class="sub-title">
                        <div class="icon-masking me-2"><span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>About MywebMark IT
                        SOLUTIONS
                    </span>
                    <h2 class="sec-title">We Are Increasing Business Success With <span class="text-theme">Technology</span></h2>
                </div>
                <p class="mt-n2 mb-30 text-center text-xl-start">
                    Our mission is to drive Customer Satisfaction and the Digitization of Companies' Operations.
                </p>
                <div class="achivement-tab filter-menu-active indicator-active"><button data-filter=".cat1" class="active" type="button">Award Winning</button> <button data-filter=".cat2" type="button">Technology Index</button></div>
                <div class="achivement-box-area filter-active-cat1">
                    <div class="filter-item w-100 cat1">
                        <div class="achivement-box">
                            <div class="achivement-box_img"><img style="width: 200px;" src="assets/img/normal/1695653121926.jpeg" alt="About"></div>
                            <div class="media-body">
                                <h3 class="box-title" style="font-size: 18px;">An Award-Winning Company.</h3>
                                <p class="achivement-box_text">We have a history of successfully delivering IT
                                    solutions to a great diverse clientele, from startups to established
                                    enterprises.</p><a href="aboutus.php" class="th-btn">About More</a>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item w-100 cat2">
                        <div class="achivement-box">
                            <div class="achivement-box_img"><img style="width: 200px;" src="assets/img/normal/img-1.jpg" alt="About"></div>
                            <div class="media-body">
                                <h3 class="box-title" style="font-size: 18px;">Having 2+ Years Of Experience.</h3>
                                <p class="achivement-box_text">
                                    We have a history of successfully delivering IT solutions to a great diverse
                                    clientele, from startups to established enterprises. </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bg-top-center z-index-common space-top" id="service-sec" data-bg-src="assets/img/bg/service_bg_2.jpg">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-6 col-sm-9 pe-xl-5">
                <div class="title-area text-center text-lg-start">
                    <div class="shadow-title color2">SERVICES</div><span class="sub-title">
                        <div class="icon-masking me-2"><span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>WHAT WE DO
                    </span>
                    <h2 class="sec-title text-white">We Provide Exclusive Service For <span class="text-theme">Your
                            Business</span></h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn"><a href="service.php" class="th-btn style3">VIEW ALL SERVICES<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="serviceSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon"><img src="assets/img/icon/service_card_1.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="webdesign.php">Web Development</a></h3>
                                <p class="service-grid_text">We are providing the best Product Design. That help you
                                    very much.</p><i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon"><img src="assets/img/icon/service_card_2.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="webdesign.php">UI/UX Design</a></h3>
                                <p class="service-grid_text">We are providing the best UI/UX design. That help you
                                    be professional.</p><i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon"><img src="assets/img/icon/service_card_3.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="webdesign.php">Digital Marketing</a></h3>
                                <p class="service-grid_text">We empower small and medium-sized businesses to
                                    overcome challenges</p><i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon"><img src="assets/img/icon/service_card_4.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="webdesign.php">Business Analysis</a></h3>
                                <p class="service-grid_text">
                                    We provide the best Business Analysis. That help you be professional.
                                </p><i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon"><img src="assets/img/icon/service_card_5.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="webdesign.php">Software Services</a></h3>
                                <p class="service-grid_text">
                                    We provide the best Software Services. That help you be professional.
                                </p><i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon"><img src="assets/img/icon/service_6_3.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="webdesign.php">Graphic design</a></h3>
                                <p class="service-grid_text">We create a unique logo that represents your brand,
                                    making your business stand out.</p><i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon"><img src="assets/img/icon/service_6_2.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="webdesign.php">S.E.O</a></h3>
                                <p class="service-grid_text">With strategic SEO, we improve your online visibility
                                    and drive more organic traffic .</p><i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space" id="process-sec">
    <div class="container">
        <div class="title-area text-center">
            <div class="shadow-title">PROGRESS</div><span class="sub-title">
                <div class="icon-masking me-2"><span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>WORK PROGRESS <span style="font-size: small;color: #141D38;">
                    WEB DESIGN
                </span>
            </span>
            <h2 class="sec-title">How to work <span class="text-theme">it!</span></h2>
        </div>
        <div class="process-card-area">
            <div class="process-line position-top"><img src="assets/img/bg/process_line_2.svg" alt="line"></div>
            <div class="row gy-40 justify-content-between">
                <div class="col-sm-6 col-xl-auto process-card-wrap">
                    <div style="background-color: #E2E8FA;" class="process-card">
                        <div class="pulse"></div>
                        <div class="process-card_icon"><img src="assets/img/icon/process_box_1.png" alt="icon">
                        </div>
                        <h2 class="box-title">Select a project</h2>
                        <p class="process-card_text">Reach out to us to discuss your project requirements and goals.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto process-card-wrap">
                    <div style="background-color: #E2E8FA;" class="process-card">
                        <div class="pulse"></div>
                        <div class="process-card_icon"><img src="assets/img/icon/process_box_2.png" alt="icon">
                        </div>
                        <h2 class="box-title">Project analysis</h2>
                        <p class="process-card_text">Our team will analyze your project requirements and cost
                            estimate.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto process-card-wrap">
                    <div style="background-color: #E2E8FA;" class="process-card">
                        <div class="pulse"></div>
                        <div class="process-card_icon"><img src="assets/img/icon/process_box_3.png" alt="icon">
                        </div>
                        <h2 class="box-title">Plan Execute</h2>
                        <p class="process-card_text">We'll create a strategic execution plan tailored to your
                            project requirements and timelines.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto process-card-wrap">
                    <div style="background-color: #E2E8FA;" class="process-card">
                        <div class="pulse"></div>
                        <div class="process-card_icon"><img src="assets/img/icon/process_box_4.png" alt="icon">
                        </div>
                        <h2 class="box-title">Deliver result</h2>
                        <p class="process-card_text">Once the project is completed, we'll deliver the final result.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-smoke" id="process-sec" data-bg-src="assets/img/bg/process_bg_1.png">
    <div class="container space">
        <div class="title-area text-center">
            <div class="shadow-title">PROGRESS</div><span class="sub-title">
                <div class="icon-masking me-2"><span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>WORK PROGRESS <span style="font-size: small;color: #141D38;">
                    Graphic design
                </span>
            </span>
            <h2 class="sec-title">How to work <span class="text-theme">it!</span></h2>
        </div>
        <div class="process-card-area">
            <div class="process-line"><img src="assets/img/bg/process_line.svg" alt="line"></div>
            <div class="row gy-40">
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">01</div>
                        <div class="process-card_icon"><img src="assets/img/icon/service_3d_2.png" alt="icon">
                        </div>
                        <h2 class="box-title">Select a Design</h2>
                        <p class="process-card_text">
                            Reach out to us to discuss your project requirements and goals for the design project
                            you have in mind.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">02</div>
                        <div class="process-card_icon"><img src="assets/img/icon/service_3d_3.png" alt="icon">
                        </div>
                        <h2 class="box-title">Design analysis</h2>
                        <p class="process-card_text">
                            Our team will analyze your design requirements and cost estimate to create a unique
                            design.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">03</div>
                        <div class="process-card_icon"><img src="assets/img/icon/service_3d_4.png" alt="icon">
                        </div>
                        <h2 class="box-title">Plan Execute</h2>
                        <p class="process-card_text">
                            We'll create a strategic execution plan tailored to your design requirements and
                            timelines.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">04</div>
                        <div class="process-card_icon"><img src="assets/img/icon/quote_3d.png" alt="icon">
                        </div>
                        <h2 class="box-title">Deliver result</h2>
                        <p class="process-card_text">
                            Once the design is completed, we'll deliver the final result to you for approval and
                            feedback on the design project we have worked on.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="margin-top: -80px;" class="space responsive-sec" id="responsive">
    <div class="responsive-shape"></div>
    <div class="container">
        <h2 style="color: #12aa1f!important;text-align: center;" class="text-centred">Fully Responsive Design
            Optimized For You</h2>
        <div class="responsive-area">
            <div class="device-ml">
                <div class="mockup">
                    <img src="assets/img/responsive/device-ml.png" alt="Mockup">
                </div>
                <div class="slider-ml">
                    <div class="responsive-slider th-carousel" data-slide-show="1" data-autoplay-speed="3000">
                        <div>
                            <img src="assets/img/responsive/M1.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/M1a.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/l1.png" alt="Demo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-xl">
                <div class="mockup">
                    <img src="assets/img/responsive/device-xl.png" alt="Mockup">
                </div>
                <div class="slider-xl">
                    <div class="responsive-slider th-carousel" data-slide-show="1" data-autoplay-speed="3000">
                        <div>
                            <img src="assets/img/responsive/M2.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/M1b.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/l2.png" alt="Demo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-lg">
                <div class="mockup">
                    <img src="assets/img/responsive/device-lg.png" alt="Mockup">
                </div>
                <div class="slider-lg">
                    <div class="responsive-slider th-carousel" data-slide-show="1" data-autoplay-speed="3000">
                        <div>
                            <img src="assets/img/responsive/M3.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/M1c.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/l3.png" alt="Demo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-xs">
                <div class="mockup">
                    <img src="assets/img/responsive/device-xs.png" alt="Mockup">
                </div>
                <div class="slider-xs">
                    <div class="responsive-slider th-carousel" data-slide-show="1" data-autoplay-speed="3000">
                        <div>
                            <img src="assets/img/responsive/M4.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/M1d.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/l4.png" alt="Demo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="responsive-tab-area">
            <span class="tab-text">Get Your</span>
            <div class="responsive-tab" data-asnavfor=".responsive-slider">
                <div class="tab-btn active">
                    <img src="assets/img/responsive/M1.png" alt="thumb">
                </div>
                <div class="tab-btn">
                    <img src="assets/img/responsive/M1a.png" alt="thumb">
                </div>
                <div class="tab-btn">
                    <img src="assets/img/responsive/l1.png" alt="thumb">
                </div>
            </div>
            <span class="tab-text">Customised Design</span>
        </div>
    </div>
</div>
<div class="shape-mockup" data-top="0" data-right="0"><img src="assets/img/shape/tech_shape_1.png" alt="shape">
</div>
<div class="shape-mockup" data-top="0%" data-left="0%"><img src="assets/img/shape/square_1.png" alt="shape">
</div>
</section>
<div class="bg-smoke overflow-hidden space" id="faq-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class="title-area text-center text-xl-start"><span class="sub-title">
                        <div class="icon-masking me-2"><span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>Frequently Ask
                        Question
                    </span>
                    <h2 class="sec-title">Talk To About Any <span class="text-theme fw-normal">Question?</span></h2>
                </div>
                <div class="accordion-area accordion" id="faqAccordion">
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-1"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">How
                                can MyWebMark enhance my online presence?</button></div>
                        <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">With our expertise in web and graphic design, we'll craft
                                    visually stunning websites that captivate your audience and reflect your brand
                                    identity. Our strategic approach to digital marketing ensures your online
                                    presence stands out amidst the competition.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-card active">
                        <div class="accordion-header" id="collapse-item-2"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">Can MyWebMark assist with e-commerce
                                solutions?</button></div>
                        <div id="collapse-2" class="accordion-collapse collapse show" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">Absolutely! MyWebMark can develop custom e-commerce websites
                                    tailored to your specific business needs. From user-friendly interfaces to
                                    secure payment gateways, we'll help you create a seamless shopping experience
                                    for your customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> How
                                do I get started with MyWebMark's services?</button></div>
                        <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">Getting started with MyWebMark is simple! Reach out to us via
                                    email or phone to schedule a consultation. During the consultation, we'll
                                    discuss your project requirements, goals, and timeline to ensure we deliver
                                    results that exceed your expectations. Click <a href="contact-us.php">here</a>
                                    to
                                    get in touch with us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mt-35 mt-xl-0">
                <div class="faq-img tilt-active">
                    <div class="img-shape icon-masking"><span class="mask-icon" data-mask-src="assets/img/normal/about_3_1-shape.png"></span> <img src="assets/img/normal/about_3_1-shape.png" alt="img"></div><img src="assets/img/normal/faq_1_1.png" alt="Faq">
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump" data-bottom="0%" data-left="0%"><img src="assets/img/shape/tech_shape_5.png" alt="shape"></div>
</div>
<section style="margin-bottom: 30px;" class="overflow-hidden">
    <div class="container th-container4">
        <div class="cta-sec6 background-image bg-theme" data-bg-src="assets/img/bg/cta_bg_6.jpg">
            <div class="cta-content">
                <div class="cta-wrapper">
                    <div class="cta-icon"><a href="tel:+254 792 966 620"><img src="assets/img/icon/call.svg" alt=""></a>
                    </div>
                    <div class="media-body"><span class="header-info_label text-white">Call For More Info</span>
                        <p class="header-info_link"><a href="tel:+1235859459">+254 792 966 620</a></p>
                    </div>
                </div>
                <div class="title-area mb-0">
                    <h4 class="sec-title text-white">Get In Touch For Free </h4>
                </div>
                <div class="cta-group"><a href="contact-us.php" class="th-btn th-border style-radius">Contact
                        Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden space" data-bg-src="assets/img/bg/testi_bg_1.jpg" data-overlay="overlay1" data-opacity="9">
    <div class="container z-index-common">
        <div class="row align-items-center">
            <div class="col-xl-5">
                <div class="pe-xxl-5 text-xl-start text-center">
                    <div class="title-area mb-35"><span class="sub-title">
                            <div class="icon-masking me-2"><span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span> <img src="assets/img/theme-img/title_shape_1.svg" alt="shape"></div>CUSTOMER FEEDBACK
                        </span>
                        <h2 class="sec-title text-white">What Happy Clients Says
                            <span class="text-theme">About Us?</span>
                        </h2>
                    </div>
                    <p class="mt-n2 mb-35 text-white">We stand out as a reliable ally in attaining marketing success
                        and business growth thanks to our focused on customers methodology, data-driven insights,
                        and creative prowess.


                    </p><a href="aboutus.php" class="th-btn style3 shadow-none">VIEW MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-xl-7 mt-40 mt-xl-0">
                <div class="testi-card-area slider-area">
                    <div class="swiper th-slider" id="testiSlide1" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_review"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                                    <p class="testi-card_text">“MyWebMark exceeded our expectations with their
                                        exceptional
                                        web design services. Their team's attention to detail and commitment to
                                        delivering high-quality results are truly commendable. We are thrilled with
                                        our
                                        new website!”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/john.png" alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="testi-card_name">John Muthiani</h3><span class="testi-card_desig">Business Manager</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_quote"><img src="assets/img/icon/quote_left.svg" alt="quote"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_review"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                                    <p class="testi-card_text">“MyWebMark's team demonstrated professionalism and
                                        creativity throughout the entire web design process. They were responsive to
                                        our
                                        feedback and delivered a website that exceeded our expectations.”</p>
                                    <div class="testi-card_profile">
                                        <div style="width: 50px;" class="testi-card_avater"><img src="assets/img/testimonial/pc.jpg" alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="testi-card_name">Michael Johnson</h3><span class="testi-card_desig">CEO at blue sky enterprise</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_quote"><img src="assets/img/icon/quote_left.svg" alt="quote"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_review"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                                    <p class="testi-card_text">“Working with MyWebMark was a pleasure from start to
                                        finish. They listened to our needs and preferences and created a website
                                        perfectly reflects our brand identity. ”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img style="width: 50px;" src="assets/img/testimonial/testi_1_3.jpg" alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="testi-card_name">Abraham Khalil</h3><span class="testi-card_desig">UI/UX Designer</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_quote"><img src="assets/img/icon/quote_left.svg" alt="quote"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_review"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                                    <p class="testi-card_text">“MyWebMark delivered beyond our expectations. Their
                                        team's
                                        professionalism and attention to detail made the entire web design process
                                        seamless and enjoyable. We are incredibly happy with the final result!”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img style="width: 50px;" src="assets/img/testimonial/testi_1_4.jpg" alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="testi-card_name">Alexa Jenifer</h3><span class="testi-card_desig">CEO at Morosto</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_quote"><img src="assets/img/icon/quote_left.svg" alt="quote"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-thumb-wrap">
                        <div class="testi-thumb testi-card-tab" data-slider-tab="#testiSlide1">
                            <div class="tab-btn active"><img src="assets/img/testimonial/john.png" alt="Image">
                            </div>
                            <div class="tab-btn"><img src="assets/img/testimonial/pc.jpg" alt="Image"></div>
                            <div class="tab-btn"><img src="assets/img/testimonial/testi_1_3.jpg" alt="Image"></div>
                            <div class="tab-btn"><img src="assets/img/testimonial/testi_1_4.jpg" alt="Image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="margin-top: 20px;margin-bottom: 20px;" class="container">
    <div class="slider-area text-center">
        <div class="swiper th-slider" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/sass.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/google_font.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/w3c.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/code.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/docs.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/support.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/responsive.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/font_awesome.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/bootstrap.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/swiper.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/jquery.svg" alt="Brand Logo"></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><img src="assets/img/brands/seo.svg" alt="Brand Logo"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>