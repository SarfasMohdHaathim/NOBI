@extends('guest.layout')
@section('content')


    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout2 page-title-light bg-overlay">
        <div class="bg-img"><img src="{{ asset('blackcat/assets/images/page-titles/8.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
              <h1 class="pagetitle__heading">About Us</h1>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- ========================
        About Layout 1
      =========================== -->
      <section class="about-layout1">
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
                <strong>More Protection With Monitoring:</strong>
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <ul class="list-items-layout1 list-unstyled mt-20">
                      <li class="list__item">Smart Home Security</li>
                      <li class="list__item">Professional Installation</li>
                      <li class="list__item">In Home Consultation</li>
                    </ul>
                  </div><!-- /.col-md-6 -->
                  <div class="col-sm-12 col-md-6">
                    <ul class="list-items-layout1 list-unstyled mt-20">
                      <li class="list__item">Doorbell Video Cameras</li>
                      <li class="list__item">Burglary Sensor Detection</li>
                      <li class="list__item">24/7 Alarm Monitoring</li>
                    </ul>
                  </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
                <div class="d-flex align-items-center flex-wrap mt-10 mb-40">
                  <a href="services.html" class="btn btn__primary btn__xl mr-30">
                    <span>Products And Solutions</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                  <a href="contact-us.html" class="btn btn__secondary btn__xl"> Contact Us</a>
                </div>
              </div>
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
              <div class="video-banner-layout2 mb-50">
                <img src="{{ asset('blackcat/assets/images/about/1.jpg') }}" alt="about">
                <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
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
        About Layout 2
      =========================== -->
      <section class="about-layout2 pt-0">
        <div class="container-fluid px-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 banner-img">
              <div class="bg-img">
                <img src="{{ asset('blackcat/assets/images/about/2.jpg') }}" alt="about" class="w-100">
              </div>
              <div class="testimonials-box">
                <div class="testimonials-layout1 testimonials-light">
                  <div class="slick-carousel carousel-arrows-light carousel-dots-light"
                    data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": false, "arrows": true, "dots": false}'>
                    <!-- Testimonial #1 -->
                    <div class="testimonial-item">
                      <h3 class="testimonial__title">The technician was professional, educational and thorough in both the
                        installation process and walking us thru features of system. Also, easy to work with and
                        absolutely no issues!!
                      </h3>
                      <div class="testimonial__meta">
                        <div class="testimonial__thmb">
                          <img src="{{ asset('blackcat/assets/images/testimonials/thumbs/1.png') }}" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div>
                          <h4 class="testimonial__meta-title">Martin Qube Jr</h4>
                          <p class="testimonial__meta-desc">akinoz Inc</p>
                        </div>
                      </div><!-- /.testimonial-meta -->
                    </div><!-- /. testimonial-item -->
                    <!-- Testimonial #2 -->
                    <div class="testimonial-item">
                      <h3 class="testimonial__title">The technician was professional, educational and thorough in both the
                        installation process and walking us thru features of system. Also, easy to work with and
                        absolutely no issues!!
                      </h3>
                      <div class="testimonial__meta">
                        <div class="testimonial__thmb">
                          <img src="{{ asset('blackcat/assets/images/testimonials/thumbs/2.png') }}" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div>
                          <h4 class="testimonial__meta-title">Martin Qube</h4>
                          <p class="testimonial__meta-desc">Digital Media</p>
                        </div>
                      </div><!-- /.testimonial-meta -->
                    </div><!-- /. testimonial-item -->
                  </div><!-- /.slick-carousel -->
                </div><!-- /.testimonials-layout1 -->
              </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
              <div class="inner-padding">
                <div class="about-content">
                  <div class="heading-layout2">
                    <h3 class="heading__title mb-30">Keep An Eye On Everything With Our Video Security! </h3>
                    <p class="heading__desc mb-30">Helping families live intelligently means we’re always working to bring
                      our customers
                      the latest technology. As one of the premier providers of smart home technology, we are recognized
                      throughout the industry for our products, innovation & customer satisfaction.</p>
                    <p class="heading__desc mb-50">Don’t worry about any thing, our security experts will install your new
                      system,
                      activate it, and show you how to use it.</p>
                  </div><!-- /heading -->
                  <ul class="list-items-layout2 list-unstyled mt-20">
                    <li class="list__item">Professional Grade Protection and Alarm Monitoring 24/7 </li>
                    <li class="list__item">Alerts, Schedules, Automations and All Smart Home Controls</li>
                    <li class="list__item">Live Stream From Any Mobile and Lifetime Rate Lock Guarantee</li>
                  </ul>
                  <div class="d-flex align-items-center flex-wrap mb-40">
                    <a href="about-us.html" class="btn btn__primary btn__xl mr-30">
                      <span class="px-1">How Does It Work? </span>
                      <i class="icon-arrow-right px-1"></i>
                    </a>
                    <a href="services.html" class="btn btn__secondary btn__link">
                      <span>Check All Services</span>
                      <i class="icon-arrow-right icon-outlined"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.About Layout 2 -->
  
      <!-- ======================
        Portfolio
      ========================= -->
      <section class="portfolio-carousel portfolio-layout2">
        <div class="container">
          <div class="row heading mb-20">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <h3 class="heading__title">Explore Our Case Studies & Latest Sucess Stories.</h3>
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
                      <img src="{{ asset('blackcat/assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Detection</a><a href="#">Fire Alarms</a>
                      </div><!-- /.portfolio-cat -->
                      <div class="portfolio__info">
                        <h4 class="portfolio__title"><a href="#">Getting The Right Fire Alarm Detection System Online</a>
                        </h4>
                        <p class="portfolio__desc">The systems feature manual call and sounder devices wirelessly linked
                          to
                          main
                          panel. Whilst wireless systems are more expensive than hard wired standard versions, they negate
                          the...</p>
                      </div>
                      <div class="d-flex justify-content-end">
                        <a href="projects-single-project.html" class="btn btn__secondary">
                          <i class="icon-arrow-right"></i>
                          <span>Explore More</span>
                        </a>
                      </div>
                    </div><!-- /.portfolio__body -->
                    <a href="projects-single-project.html" class="portfolio__readmore"> <i
                        class="icon-arrow-right"></i></a>
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #2 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('blackcat/assets/images/portfolio/grid/2.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Security</a><a href="#">CCTV</a>
                      </div><!-- /.portfolio-cat -->
                      <div class="portfolio__info">
                        <h4 class="portfolio__title"><a href="#">Helping Manufacturers With Workplace Essential Safety</a>
                        </h4>
                        <p class="portfolio__desc">The systems feature manual call and sounder devices wirelessly linked
                          to
                          main
                          panel. Whilst wireless systems are more expensive than hard wired standard versions, they negate
                          the...</p>
                      </div>
                      <div class="d-flex justify-content-end">
                        <a href="projects-single-project.html" class="btn btn__secondary">
                          <i class="icon-arrow-right"></i>
                          <span>Explore More</span>
                        </a>
                      </div>
                    </div><!-- /.portfolio__body -->
                    <a href="projects-single-project.html" class="portfolio__readmore"> <i
                        class="icon-arrow-right"></i></a>
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #3 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('blackcat/assets/images/portfolio/grid/3.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Resources</a><a href="#">Security</a>
                      </div><!-- /.portfolio-cat -->
                      <div class="portfolio__info">
                        <h4 class="portfolio__title"><a href="#">Vendors With Resources To Deliver Safety & Security</a>
                        </h4>
                        <p class="portfolio__desc">The systems feature manual call and sounder devices wirelessly linked
                          to
                          main
                          panel. Whilst wireless systems are more expensive than hard wired standard versions, they negate
                          the...</p>
                      </div>
                      <div class="d-flex justify-content-end">
                        <a href="projects-single-project.html" class="btn btn__secondary">
                          <i class="icon-arrow-right"></i>
                          <span>Explore More</span>
                        </a>
                      </div>
                    </div><!-- /.portfolio__body -->
                    <a href="projects-single-project.html" class="portfolio__readmore"> <i
                        class="icon-arrow-right"></i></a>
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #4 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('blackcat/assets/images/portfolio/grid/4.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Detection</a><a href="#">Fire Alarms</a>
                      </div><!-- /.portfolio-cat -->
                      <div class="portfolio__info">
                        <h4 class="portfolio__title"><a href="#">Home Security For The Front And Back Of Your House</a>
                        </h4>
                        <p class="portfolio__desc">The systems feature manual call and sounder devices wirelessly linked
                          to
                          main
                          panel. Whilst wireless systems are more expensive than hard wired standard versions, they negate
                          the...</p>
                      </div>
                      <div class="d-flex justify-content-end">
                        <a href="projects-single-project.html" class="btn btn__secondary">
                          <i class="icon-arrow-right"></i>
                          <span>Explore More</span>
                        </a>
                      </div>
                    </div><!-- /.portfolio__body -->
                    <a href="projects-single-project.html" class="portfolio__readmore"> <i
                        class="icon-arrow-right"></i></a>
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #5 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('blackcat/assets/images/portfolio/grid/5.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Detection</a><a href="#">Fire Alarms</a>
                      </div><!-- /.portfolio-cat -->
                      <div class="portfolio__info">
                        <h4 class="portfolio__title"><a href="#">Expert’s Guide To Security For Rental Properties</a></h4>
                        <p class="portfolio__desc">The systems feature manual call and sounder devices wirelessly linked
                          to
                          main
                          panel. Whilst wireless systems are more expensive than hard wired standard versions, they negate
                          the...</p>
                      </div>
                      <div class="d-flex justify-content-end">
                        <a href="projects-single-project.html" class="btn btn__secondary">
                          <i class="icon-arrow-right"></i>
                          <span>Explore More</span>
                        </a>
                      </div>
                    </div><!-- /.portfolio__body -->
                    <a href="projects-single-project.html" class="portfolio__readmore"> <i
                        class="icon-arrow-right"></i></a>
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #6 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('blackcat/assets/images/portfolio/grid/6.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Resources</a><a href="#">Security</a>
                      </div><!-- /.portfolio-cat -->
                      <div class="portfolio__info">
                        <h4 class="portfolio__title"><a href="#">Getting The Right Fire Alarm Detection System Online</a>
                        </h4>
                        <p class="portfolio__desc">The systems feature manual call and sounder devices wirelessly linked
                          to
                          main
                          panel. Whilst wireless systems are more expensive than hard wired standard versions, they negate
                          the...</p>
                      </div>
                      <div class="d-flex justify-content-end">
                        <a href="projects-single-project.html" class="btn btn__secondary">
                          <i class="icon-arrow-right"></i>
                          <span>Explore More</span>
                        </a>
                      </div>
                    </div><!-- /.portfolio__body -->
                    <a href="projects-single-project.html" class="portfolio__readmore"> <i
                        class="icon-arrow-right"></i></a>
                  </div><!-- /.portfolio-item -->
                </div><!-- /.carousel -->
              </div><!-- /.carousel-container -->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.portfolio -->
  

      <!-- ======================
       fancyboxs layout1
      ========================= -->
      <section class="fancyboxs-layout1 fancybox-light bg-primary pb-0">
        <div class="container">
          <div class="row heading heading-light mb-100">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h3 class="heading__title mb-30">Providing The Best Practices for All Security Protocols & Standardizing
                Procedures.</h3>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <p class="heading__desc mb-30">We can partner with you to design and implement a scalable integrated
                security solution that addresses your toughest security challenges, while gaining efficiencies across your
                systems and teams by standardizing and implementing system automation and powerful solutions help!</p>
              <p class="heading__desc mb-40">Our experts have undertaken system projects of all sizes and scopes, whether
                you need security system integration for your corporate. </p>
              <div class="d-flex align-items-center flex-wrap">
                <a href="#" class="btn btn__white px-4 mr-30">
                  <span>Discover More Info</span>
                  <i class="icon-arrow-right ml-20"></i>
                </a>
                <div class="phone__number phone__number-light">
                  <div class="phone__icon">
                    <i class="icon-phone"></i>
                  </div>
                  <div>
                    <span class="email__link d-block">Call 24HR / 7Days</span>
                    <a class="phone__link d-block mt-2 mb-0" href="tel:0201061245741">02 01061245741</a>
                  </div>
                </div>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="container-fluid px-0">
          <div class="row row-gutter-0">
            <div class="col-sm-6 col-md-6 col-lg-3 fancybox-item mb-0">
              <div class="fancybox__img">
                <div class="bg-img"> <img src="{{ asset('blackcat/assets/images/features/1.jpg') }}" alt="feature"></div>
              </div><!-- /.fancybox__img -->
              <div class="fancybox__body">
                <h4 class="fancybox__title">No Contracts Required</h4>
                <p class="fancybox__desc">Security shouldn’t come with any strings attached. Every solution is available
                  with no contract to control your home anywhere.</p>
                <a href="#" class="btn btn__white btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                </a>
              </div><!-- /.feature__body -->
            </div><!-- /.col-lg-3 -->
            <div class="col-sm-6 col-md-6 col-lg-3 fancybox-item mb-0">
              <div class="fancybox__img">
                <div class="bg-img"> <img src="{{ asset('blackcat/assets/images/features/2.jpg') }}" alt="feature"></div>
              </div><!-- /.fancybox__img -->
              <div class="fancybox__body">
                <h4 class="fancybox__title">Flexible Payment Plans</h4>
                <p class="fancybox__desc">Our customers choose the security that’s right for them, and how they want to
                  pay for it any solution is available to you.</p>
                <a href="#" class="btn btn__white btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                </a>
              </div><!-- /.feature__body -->
            </div><!-- /.col-lg-3 -->
            <div class="col-sm-6 col-md-6 col-lg-3 fancybox-item mb-0">
              <div class="fancybox__img">
                <div class="bg-img"> <img src="{{ asset('blackcat/assets/images/features/3.jpg') }}" alt="feature"></div>
              </div><!-- /.fancybox__img -->
              <div class="fancybox__body">
                <h4 class="fancybox__title">Local Service Support</h4>
                <p class="fancybox__desc">Security shouldn’t come with any strings attached. Every solution is available
                  with no contract to control your home anywhere.</p>
                <a href="#" class="btn btn__white btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                </a>
              </div><!-- /.feature__body -->
            </div><!-- /.col-lg-3 -->
            <div class="col-sm-6 col-md-6 col-lg-3 fancybox-item mb-0">
              <div class="fancybox__img">
                <div class="bg-img"> <img src="{{ asset('blackcat/assets/images/features/4.jpg') }}" alt="feature"></div>
              </div><!-- /.fancybox__img -->
              <div class="fancybox__body">
                <h4 class="fancybox__title">Low Voltage Wiring</h4>
                <p class="fancybox__desc">Hire the best low voltage wiring contractor for your new construction or cabling
                  needs & an experienced company that designs.</p>
                <a href="#" class="btn btn__white btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                </a>
              </div><!-- /.feature__body -->
            </div><!-- /.col-lg-3 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.fancyboxs layout1 -->
  

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
  


@endsection