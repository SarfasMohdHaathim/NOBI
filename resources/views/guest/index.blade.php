@extends('guest.layout')
@section('content')


    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item bg-overlay align-v-h">
          <div class="bg-img"><img src="{{ asset('blackcat/assets/images/sliders/1.jpg') }}" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <span class="slide__subtitle">Home Security Products Everyone Can Install, Afford, And Use!</span>
                  <h2 class="slide__title">Smart Security Systems For The Modern World</h2>
                  <p class="slide__desc">We provide security requirements of residential, commercial and other clients,
                    with the largest assortment of security cameras and alarm systems installation.
                  </p>
                  <div class="d-flex flex-wrap align-items-center">
                    <a href="services.html" class="btn btn__primary btn__xl mr-30">
                      <span>Explore Our Services</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a href="services.html" class="btn btn__white btn__xl">
                      More About Us!
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 offset-xl-2 d-none d-xl-block">
                <div class="cta-banner">
                  <h4 class="cta__title">Custom Alerts For Friends And Family</h4>
                  <img src="{{ asset('blackcat/assets/images/cta/1.jpg') }}" alt="cta__img" class="cta__img">
                  <p class="cta__desc">Door, window, and Glass Break Detectors designed to monitor and protect home and
                    family.
                  </p>
                  <a href="services.html" class="btn btn__primary btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Protect Your Home</span>
                  </a>
                </div>
              </div><!-- /.col-xl-2 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item bg-overlay align-v-h">
          <div class="bg-img"><img src="{{ asset('blackcat/assets/images/sliders/2.jpg') }}" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <span class="slide__subtitle">Home Security Products Everyone Can Install, Afford, And Use!</span>
                  <h2 class="slide__title">Best Practices <br> For All Business Security Systems</h2>
                  <p class="slide__desc">We provide security requirements of residential, commercial and other clients,
                    with the largest assortment of security cameras and alarm systems installation.
                  </p>
                  <div class="d-flex flex-wrap align-items-center">
                    <a href="services.html" class="btn btn__primary btn__xl mr-30">
                      <span>Explore Our Services</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a href="services.html" class="btn btn__white btn__xl">
                      More About Us!
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 offset-xl-2 d-none d-xl-block">
                <div class="cta-banner">
                  <h4 class="cta__title">Custom Alerts For Friends And Family</h4>
                  <img src="{{ asset('blackcat/assets/images/cta/1.jpg') }}" alt="cta__img" class="cta__img">
                  <p class="cta__desc">Door, window, and Glass Break Detectors designed to monitor and protect home and
                    family.
                  </p>
                  <a href="services.html" class="btn btn__primary btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Protect Your Home</span>
                  </a>
                </div>
              </div><!-- /.col-xl-2 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1 pt-130 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
            <div class="heading-layout2">
              <h3 class="heading__title mb-50">Protection Against Intruders, Fires, Water & More For Every Window, Room
                And Door.</h3>
            </div><!-- /heading -->
            <div class="about__Text">
              <p class="heading__desc mb-20">Helping families live intelligently means we’re always working to bring our
                customers the
                latest technology. As one of the premier providers of smart home technology, we are recognized
                throughout the industry for our products, innovation & customer satisfaction.</p>
              <p class="heading__desc mb-40">Don’t worry about any thing, our security experts will install your new
                system, activate
                it, and show
                you how to use it.</p>
              <div class="d-flex align-items-center flex-wrap mt-10 mb-40">
                <a href="services.html" class="btn btn__primary btn__xl my-1 mr-30">
                  <span>Products And Solutions</span>
                  <i class="icon-arrow-right"></i>
                </a>
                <a href="contact-us.html" class="btn btn__secondary btn__xl my-1"> Contact Us</a>
              </div>
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
            <div class="video-banner-layout2 mb-50">
              <img src="{{ asset('blackcat/assets/images/about/1.jpg') }}" alt="about">
              <a class="video__btn video__btn-white popup-video" href="">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__title color-white">Watch Our Intro!</span>
              </a>
            </div><!-- /.video-banner -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->


    <!-- ========================
      Features layout 2
    ========================== -->
    <section class="features-layout2 bg-overlay bg-overlay-gradient pt-130">
      <div class="bg-img"><img src="{{ asset('blackcat/assets/images/banners/7.jpg') }}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout2 heading-light mb-140">
              <h3 class="heading__title">AUTOMATION PRODUCTS</h3>
              {{-- <p class="heading__desc">Not only will this reduce the probability of crime happening on your property,
                it will reduce or eliminate any liability that falls on you if you can show you have solid,
                well-designed commercial building security systems in place.
              </p> --}}
            </div><!-- /heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 5, "arrows": true, "dots": false, "autoplay": false,  "infinite": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <!-- feature item #1 -->
              <div class="feature-item">
                <h3 class="feature__number">01</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Sliding Gate Motor</h4>
                  <a href="#" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Get Started</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #2 -->
              <div class="feature-item">
                <h3 class="feature__number">02</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Swing Gate Motor</h4>
                  <a href="#" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Get Started</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #3 -->
              <div class="feature-item">
                <h3 class="feature__number">03</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Boom Barrier System</h4>
                  <a href="#" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Get Started</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #4 -->
              <div class="feature-item">
                <h3 class="feature__number">04</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Entrance Management Solutions</h4>
                  <a href="#" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Get Started</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #5 -->
              <div class="feature-item">
                <h3 class="feature__number">05</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Finger Print Door Lock System</h4>
                  <a href="#" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Get Started</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #6 -->
              <div class="feature-item">
                <h3 class="feature__number">06</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Video Door Phone</h4>
                  <a href="#" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Get Started</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #7 -->
              <div class="feature-item">
                <h3 class="feature__number">07</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Public Address System</h4>
                  <a href="#" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Get Started</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 d-flex justify-content-end">
            <button class="btn__download d-flex align-items-center">
              <span class="text-right mx-2">
                <span class="color-body d-block">Just everything you need</span>
                <strong class="color-white d-block fz-15">Download 2022 Brochure</strong>
              </span>
              <span class="download__icon">
                <i class="icon-download"></i>
              </span>
            </button>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features-layout2 -->


    


        <!-- ========================
        Services Layout 3
    =========================== -->
    <section class="services-layout3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-60">
              <h3 class="heading__title">Whole Home Protection</h3>
              <p class="heading__desc">Whether it’s protecting your possessions while you are on vacation or your family
                while they sleep, we will give you the peace of mind that should the worst happen.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row services-wrapper row-gutter-0">
          <!-- service item #1 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="service-item">
              <div class="service__body">
                <div class="service__icon">
                  <i class="icon-cctv-camera2"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Smarter Business Security </h4>
                <p class="service__desc">Clever security system connects your security, CCTV, lights, locks and more,
                  for true seamless automation and control.
                </p>
                <a href="services.html" class="btn btn__primary  btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service__body -->
              <div class="service__img">
                <div class="bg-img"><img src="{{ asset('blackcat/assets/images/services/7.jpg') }}" alt="service"></div>
              </div><!-- /.service__img -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #2 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="service-item">
              <div class="service__body">
                <div class="service__icon">
                  <i class="icon-fire-alarm"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Fire Detection & <br> Life Safety</h4>
                <p class="service__desc">We're industry leaders in the design, installation of quality fire alarm and
                  provide systems enhance security and ensure...
                </p>
                <a href="services.html" class="btn btn__primary btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service__body -->
              <div class="service__img">
                <div class="bg-img"><img src="{{ asset('blackcat/assets/images/services/8.jpg') }}" alt="service"></div>
              </div><!-- /.service__img -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #3 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="service-item">
              <div class="service__body">
                <div class="service__icon">
                  <i class="icon-home-automation"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Smart Home Systems</h4>
                <p class="service__desc">Whether you’re home or away, we make smart simple, have a remote access and
                  control everything from lights, locks,...
                </p>
                <a href="services.html" class="btn btn__primary  btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service__body -->
              <div class="service__img">
                <div class="bg-img"><img src="{{ asset('blackcat/assets/images/services/9.jpg') }}" alt="service"></div>
              </div><!-- /.service__img -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #4 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="service-item">
              <div class="service__body">
                <div class="service__icon">
                  <i class="icon-smart-control"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Access Control Installation</h4>
                <p class="service__desc">Effective and simple-to-use door access control systems, we offer a decade of
                  experience in planning, customizing...
                </p>
                <a href="services.html" class="btn btn__primary  btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service__body -->
              <div class="service__img">
                <div class="bg-img"><img src="{{ asset('blackcat/assets/images/services/10.jpg') }}" alt="service"></div>
              </div><!-- /.service__img -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 d-flex flex-wrap justify-content-center align-items-center mt-50">
            <a href="#" class="btn btn__secondary btn__xl mr-30">
              <span>How Does It Work? </span>
              <i class="icon-arrow-right"></i>
            </a>
            <a href="services.html" class="btn btn__secondary btn__link">
              <i class="icon-arrow-right icon-outlined"></i>
              <span>Check All Services </span>
            </a>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 3 -->


    <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout2 pb-0">
      <div class="container">
        <div class="row heading mb-70">
          <div class="col-12">
            <h2 class="heading__subtitle">Find peace of mind with 24/7 monitoring</h2>
          </div><!-- /.col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title">SURVEILLANCE SYSTEMS</h3>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <p class="heading__desc">Because a commercial security camera system has to produce results, we offer what
              most security camera companies can’t. For CCTV installation companies, it’s important to treat cctv camera
              installation with a modern approach. Our security camera system installation department is just passionate
              about security installation</p>
            <div class="d-flex flex-wrap align-items-center mt-30">
              <a href="#" class="btn btn__secondary btn__xl my-1 mr-30">
                <span>How Does It Work? </span>
                <i class="icon-arrow-right"></i>
              </a>
              <a href="services.html" class="btn btn__secondary btn__link my-1">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Check All Services </span>
              </a>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="services-wrapper">
          <div class="row row-gutter-0">
            <!-- service item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="service-item">
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-cctv-camera2"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title"> Network CCTV Cameras </h4>
                  <p class="service__desc">Clever security system connects your security, CCTV, lights, locks and more,
                    for true seamless automation and control.
                  </p>
                  <a href="services.html" class="btn btn__primary  btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="service-item">
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-fire-alarm"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title">Analogue CCTV Cameras</h4>
                  <p class="service__desc">We're industry leaders in the design, installation of quality fire alarm and
                    provide systems enhance security and ensure...
                  </p>
                  <a href="services.html" class="btn btn__primary btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="service-item">
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-home-automation"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title">HD CCTV Cameras</h4>
                  <p class="service__desc">Whether you’re home or away, we make smart simple, have a remote access and
                    control everything from lights, locks,...
                  </p>
                  <a href="services.html" class="btn btn__primary  btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #4 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="service-item">
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-smart-control"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title">Network Video Recorders</h4>
                  <p class="service__desc">Effective and simple-to-use door access control systems, we offer a decade of
                    experience in planning, customizing...
                  </p>
                  <a href="services.html" class="btn btn__primary  btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-3 -->
          </div><!-- /.row -->
        </div><!-- /.services-wrapper -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- ========================
      About Layout 3
    =========================== -->
    <section class="about-layout3 bg-dark pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading-layout2 heading-light text-center mb-90">
              <h2 class="heading__subtitle">Find Peace Of Mind With Smart Home Security System </h2>
              <h3 class="heading__title">Integrated Security Solutions & Remote Monitoring 24/7</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
            <div class="about__text">
              <div class="heading-layout1 heading-light mb-50">
                <h2 class="heading__subtitle color-primary">Total Control Over Securing Your Business</h2>
                <h3 class=" heading__title mb-40">Providing The Best Practices for Industry Security Protocols &
                  Standardizing Procedures.</h3>
                <p class="heading__desc">We can partner with you to design and implement a scalable integrated
                  security solution that addresses your toughest security challenges, while gaining efficiencies across
                  your systems and teams by standardizing platforms and implementing event-driving system automation and
                  powerful solutions help</p>
              </div><!-- /heading -->
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
            <div class="about__img">
              <img src="{{ asset('blackcat/assets\images\portfolio\grid\door-access-control-system.jpeg') }}" alt="about">
              <div class="cta-banner">
                <h3 class="cta__subtitle">Protect Your Home!</h3>
                <h4 class="cta__title">Finger Print Door Lock</h4>
                <ul class="list-items-layout5 list-unstyled mb-0">
                  <li class="list__item">Easy to setup and use</li>
                  <li class="list__item">Environmental Sensors</li>
                  <li class="list__item">Touch Screen Panel</li>
                </ul>
              </div>
            </div><!-- /.about__img -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 3 -->

    <!-- ========================
      About Layout 4
    =========================== -->

    <section class="about-layout4 bg-dark pt-0 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
            <div class="about__img">
              <img src="{{ asset('blackcat/assets/images/portfolio/grid/office-management-solution.jpg') }}" alt="about">
              <div class="cta-banner cta-banner-primary">
                <h3 class="cta__subtitle">Just Don’t Worry.</h3>
                <h4 class="cta__title">Office Management Solution</h4>
                <ul class="list-items-layout5 list-unstyled mb-0">
                  <li class="list__item">Easy to setup and use</li>
                  <li class="list__item">Environmental Sensors</li>
                  <li class="list__item">Touch Screen Panel</li>
                </ul>
              </div>
            </div><!-- /.about__img -->
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1">
            <div class="about__text">
              <div class="heading-layout1 heading-light mb-60">
                <h2 class="heading__subtitle color-primary">Convenient System Access By Phone Or Tablet</h2>
                <h3 class=" heading__title mb-40">Trusted Analytics that Give Meaning To Security Data.</h3>
                <p class="heading__desc mb-30">Our experts have undertaken system projects of all sizes and scopes,
                  whether
                  you need security system integration for your corporate office or retail store, an enterprise solution
                  for multiple manufacturing buildings, or a complex integration for a stadium, university, hospital, or
                  corporate campus.</p>
              </div><!-- /heading -->
            </div>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 4 -->


    <!-- ========================
      About Layout 5
    =========================== -->
    <section class="about-layout5 bg-dark pt-0 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
            <div class="about__text">
              <div class="heading-layout1 heading-light mb-50">
                <h2 class="heading__subtitle color-primary">Home Security Camera</h2>
                <h3 class=" heading__title mb-40">Solutions That Reduce Cost & Increase Business Efficiency.</h3>
                <p class="heading__desc">We will design, install, maintain and upgrade solutions to meet businesses'
                  specific needs and budgets, from large enterprises to local business security platforms, from simple
                  camera solutions for small offices to complex enterprise-class video surveillance systems for large
                  campuses.
                </p>
              </div><!-- /heading -->
            </div>
          </div><!-- /.col-xl-6 -->


          
          
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
            <div class="about__img">
              <img src="{{ asset('blackcat/assets\images\portfolio\grid\home-security-camera.jpg') }}" alt="about">
              <div class="cta-banner">
                <h3 class="cta__subtitle">Protect Your Home!</h3>
                <h4 class="cta__title">Finger Print Door Lock</h4>
                <ul class="list-items-layout5 list-unstyled mb-0">
                  <li class="list__item">Easy to setup and use</li>
                  <li class="list__item">Environmental Sensors</li>
                  <li class="list__item">Touch Screen Panel</li>
                </ul>
              </div>
            </div><!-- /.about__img -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 5 -->
    <!-- ======================
      Portfolio
    ========================= -->
    <section class="portfolio-carousel portfolio-layout2">
      <div class="container">
        <div class="row heading mb-20">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title">Explore Our Product & Latest Sucess Stories.</h3>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <p class="heading__desc mb-30">For the Security and IT directors ensuring our places of
              work and leisure are safe. For the Chief Technology Officers shaping the smart businesses of tomorrow. We
              delivers powerful and insightful security solutions that enable protectors to drive forward.</p>
            <p class="heading__desc mb-30">We understand that in a complex world, it is not enough to solve the
              challenges of today, we need to be ready for the opportunities of tomorrow. </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="carousel-container">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "autoplay": false, "arrows": true, "dots": true, "responsive": [{"breakpoint": 1300, "settings": {"slidesToShow": 3,"slidesToScroll": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('blackcat/assets\images\products\1.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="#">Getting The Right Fire Alarm Detection System Online</a>
                      </h4>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a>
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('blackcat/assets\images\products\2.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="#">Getting The Right Fire Alarm Detection System Online</a>
                      </h4>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a>
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('blackcat/assets\images\products\3.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="#">Getting The Right Fire Alarm Detection System Online</a>
                      </h4>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a>
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('blackcat/assets\images\products\4.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="#">Getting The Right Fire Alarm Detection System Online</a>
                      </h4>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a>
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('blackcat/assets\images\products\1.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="#">Getting The Right Fire Alarm Detection System Online</a>
                      </h4>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a>
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('blackcat/assets\images\products\1.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="#">Getting The Right Fire Alarm Detection System Online</a>
                      </h4>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a>
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
              </div><!-- /.carousel -->
            </div><!-- /.carousel-container -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio -->

    <!-- ======================
     Clients
    ========================= -->
    <section class="clients border-top pt-50 pb-50">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <p class="font-weight-bold my-3">
              Provide better security and control for residential and business customers.
              <a href="#" class="text-underlined">Compare Security Options!</a>
            </p>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="{{ asset('blackcat/assets/images/clients/8.png') }}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('blackcat/assets/images/clients/9.png') }}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('blackcat/assets/images/clients/10.png') }}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('blackcat/assets/images/clients/11.png') }}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('blackcat/assets/images/clients/9.png') }}" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Clients -->




    <!-- ======================
      Portfolio
    ========================= -->
    <section class="portfolio-carousel portfolio-layout2">
      <div class="container">
        <div class="row heading mb-20">
          <div class="col-sm-12 col-md-12">
            <h3 class="heading__title text-center">What Our Client Say</h3>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="carousel-container">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "autoplay": false, "arrows": true, "dots": true, "responsive": [{"breakpoint": 1300, "settings": {"slidesToShow": 3,"slidesToScroll": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <p class="portfolio__desc">
                        <div class="testimonial-item d-flex flex-wrap">
                          <div class="testimonial__icon"></div>
                          <div class="testimonial__info">
                            
                            <div class="testimonial__meta d-flex align-items-center">
                              <h4 class="testimonial__meta-title mb-0">Martin Qube Jr</h4>
                            </div><!-- /.testimonial-meta -->
                            <h3 class="testimonial__title">
                              That’s a defense you can trust! I love that I can access my video feed, arm and disarm my system from
                              my
                              phone anytime, anywhere!
                            </h3>
                          </div>
                        </div><!-- /. testimonial-item --></p>
                    </div>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <p class="portfolio__desc">
                        <div class="testimonial-item d-flex flex-wrap">
                          <div class="testimonial__icon"></div>
                          <div class="testimonial__info">
                            
                            <div class="testimonial__meta d-flex align-items-center">
                              <h4 class="testimonial__meta-title mb-0">Martin Qube Jr</h4>
                            </div><!-- /.testimonial-meta -->
                            <h3 class="testimonial__title">
                              That’s a defense you can trust! I love that I can access my video feed, arm and disarm my system from
                              my
                              phone anytime, anywhere!
                            </h3>
                          </div>
                        </div><!-- /. testimonial-item --></p>
                    </div>
                  </div><!-- /.portfolio__body -->
                  
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <p class="portfolio__desc">
                        <div class="testimonial-item d-flex flex-wrap">
                          <div class="testimonial__icon"></div>
                          <div class="testimonial__info">
                            
                            <div class="testimonial__meta d-flex align-items-center">
                              <h4 class="testimonial__meta-title mb-0">Martin Qube Jr</h4>
                            </div><!-- /.testimonial-meta -->
                            <h3 class="testimonial__title">
                              That’s a defense you can trust! I love that I can access my video feed, arm and disarm my system from
                              my
                              phone anytime, anywhere!
                            </h3>
                          </div>
                        </div><!-- /. testimonial-item --></p>
                    </div>
                  </div><!-- /.portfolio__body -->
                  
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <p class="portfolio__desc">
                        <div class="testimonial-item d-flex flex-wrap">
                          <div class="testimonial__icon"></div>
                          <div class="testimonial__info">
                            
                            <div class="testimonial__meta d-flex align-items-center">
                              <h4 class="testimonial__meta-title mb-0">Martin Qube Jr</h4>
                            </div><!-- /.testimonial-meta -->
                            <h3 class="testimonial__title">
                              That’s a defense you can trust! I love that I can access my video feed, arm and disarm my system from
                              my
                              phone anytime, anywhere!
                            </h3>
                          </div>
                        </div><!-- /. testimonial-item --></p>
                    </div>
                  </div><!-- /.portfolio__body -->
                  
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <p class="portfolio__desc">
                        <div class="testimonial-item d-flex flex-wrap">
                          <div class="testimonial__icon"></div>
                          <div class="testimonial__info">
                            
                            <div class="testimonial__meta d-flex align-items-center">
                              <h4 class="testimonial__meta-title mb-0">Martin Qube Jr</h4>
                            </div><!-- /.testimonial-meta -->
                            <h3 class="testimonial__title">
                              That’s a defense you can trust! I love that I can access my video feed, arm and disarm my system from
                              my
                              phone anytime, anywhere!
                            </h3>
                          </div>
                        </div><!-- /. testimonial-item --></p>
                    </div>
                  </div><!-- /.portfolio__body -->
                  
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <p class="portfolio__desc">
                        <div class="testimonial-item d-flex flex-wrap">
                          <div class="testimonial__icon"></div>
                          <div class="testimonial__info">
                            
                            <div class="testimonial__meta d-flex align-items-center">
                              <h4 class="testimonial__meta-title mb-0">Martin Qube Jr</h4>
                            </div><!-- /.testimonial-meta -->
                            <h3 class="testimonial__title">
                              That’s a defense you can trust! I love that I can access my video feed, arm and disarm my system from
                              my
                              phone anytime, anywhere!
                            </h3>
                          </div>
                        </div><!-- /. testimonial-item --></p>
                    </div>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__body">
                    <div class="portfolio__info">
                      <p class="portfolio__desc">
                        <div class="testimonial-item d-flex flex-wrap">
                          <div class="testimonial__icon"></div>
                          <div class="testimonial__info">
                            
                            <div class="testimonial__meta d-flex align-items-center">
                              <h4 class="testimonial__meta-title mb-0">Martin Qube Jr</h4>
                            </div><!-- /.testimonial-meta -->
                            <h3 class="testimonial__title">
                              That’s a defense you can trust! I love that I can access my video feed, arm and disarm my system from
                              my
                              phone anytime, anywhere!
                            </h3>
                          </div>
                        </div><!-- /. testimonial-item --></p>
                    </div>
                  </div><!-- /.portfolio__body -->
                  
                </div><!-- /.portfolio-item -->
              </div><!-- /.carousel -->
            </div><!-- /.carousel-container -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio -->




	
@endsection