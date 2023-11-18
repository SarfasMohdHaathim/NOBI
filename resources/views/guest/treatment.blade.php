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
              <h1 class="pagetitle__heading">Projects</h1>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- =========================== 
        portfolio layout1 
      ============================= -->
      <section class="portfolio-layout1">
        <div class="container">
          <div class="row">
            <div class="col-12">
              {{-- <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">
                <li><a class="filter active" href="#" data-filter="all">ALL</a></li>
                <li><a class="filter" href="#" data-filter=".filter-monitoring">Monitoring</a></li>
                <li><a class="filter" href="#" data-filter=".filter-cctv">CCTV</a></li>
                <li><a class="filter" href="#" data-filter=".filter-detection">Detection</a></li>
                <li><a class="filter" href="#" data-filter=".filter-fire">Fire Alarms</a></li>
                <li><a class="filter" href="#" data-filter=".filter-security">Security</a></li>
                <li><a class="filter" href="#" data-filter=".filter-resources">Resources</a></li>
              </ul> --}}
              <!-- /.portfolio-filter  -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div id="filtered-items-wrap" class="row">
            @foreach($treatments as $treatments)

            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-fire">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('storage/' . $treatments->thumbnail) }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <h4 class="portfolio__title"><a href="{{ route('guest.treatmentdetails', ['name' => $treatments->name]) }}">{{ $treatments->name }}</a></h4>
                  <div class="portfolio__cat">
                    {{-- <a href="#">Detection</a><a href="#">Fire Alarms</a> --}}
                  </div><!-- /.portfolio-cat -->
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            @endforeach
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12 text-center">
              <nav class="pagination-area">
                <ul class="pagination justify-content-center mb-0">
                  <li><a class="current" href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#"><i class="icon-arrow-right"></i></a></li>
                </ul>
              </nav><!-- .pagination-area -->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.portfolio layout1 -->
  

    @endsection