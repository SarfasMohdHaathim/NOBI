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
            <h1 class="pagetitle__heading">Services</h1>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid">
      <div class="container">
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a>
                  <img src="{{ asset('blackcat/assets/images/blog/grid/1.jpg') }}" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <h4 class="post__title">
                  <a>Three Important Things You Must Look For While Choosing Home Security
                    System</a>
                </h4>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

	
@endsection