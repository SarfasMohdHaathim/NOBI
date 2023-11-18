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
              <h1 class="pagetitle__heading">Project</h1>
              <p>{{ $treatment->name}}</p>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- ========================
       gallery 
      =========================== -->
      <section class="gallery pt-130 pb-90">
        <div class="container">
          <div class="row">
            @foreach($p_images as $image)
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="{{ asset('storage/' . $image->thumbnail) }}"><i class="fas fa-plus"></i></a>
                <img src="{{ asset('storage/' . $image->thumbnail) }}" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            @endforeach
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12 text-center">
              <button class="btn btn__primary loadMoreGallery">Load More</button>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.gallery -->
  
  

@endsection