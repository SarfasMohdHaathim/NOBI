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
            <h1 class="pagetitle__heading">Contact Us</h1>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1 py-0 mt--100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
              <div class="contact-panel__info bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{ asset('blackcat/assets/images/banners/2.jpg') }}" alt="banner"></div>
                <h4 class="contact-panel__title color-white">Tailored Solutions For Your Security Priorities</h4>
                <p class="contact-panel__desc color-white">We take great pride in everything that we do, control over
                  products allows us to ensure our customers receive the best quality service.
                </p>
                <ul class="contact__list list-unstyled mb-40">
                  <li>
                    <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002) 01061245741</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="#">Location: Brooklyn, New York</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
                  </li>
                </ul>
                <a href="contact-us.html" class="btn btn__white btn__xl btn__block justify-content-between">
                  <span>Get Started Now</span> <i class="icon-arrow-right"></i>
                </a>
              </div>
              <form class="contact-panel__form" method="post" action="{{ route('store.contact') }}">
                @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Get In Touch</h4>
                    <p class="contact-panel__desc mb-30">We take great pride in everything that we do, control over
                      products allows us to ensure customers receive the best quality service and highest standards, you
                      need a dedicated team of specialists.
                    </p>
                    @if(session('success'))
                    <p class="text-success">
                        {{ session('success') }}
                    </p>
                    @endif

                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="firstname"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="emailaddress" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="phone" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Additional Details" id="contact-message"
                        name="msg"></textarea>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__xl mt-10">
                      <i class="icon-arrow-right"></i> <span>Submit Request</span>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->

@endsection