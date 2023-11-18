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
              <h1 class="pagetitle__heading">Products</h1>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- ========================
         shop 
      =========================== -->
      <section class="shop-grid">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="sorting-options d-flex flex-wrap justify-content-between align-items-center mb-30">
                <strong class="color-secondary">
                    Showing {{ ($products->currentPage() - 1) * $products->perPage() + 1 }}
                    to {{ $products->count() * $products->currentPage() > $products->total() ? $products->total() : $products->count() * $products->currentPage() }}
                    of {{ $products->total() }} products
                </strong>
                {{-- <select>
                  <option selected="" value="0">Sort by latest</option>
                  <option value="1">Sort by Popular</option>
                  <option value="2">Sort by highest Price </option>
                  <option value="3">Sort by lowest Price </option>
                </select> --}}
              </div>
              <div class="row">
                <!-- Product item #1 -->
                @foreach($products as $product)
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <div class="product-item">
                    <div class="product__img">
                      <img src="{{ asset('storage/' . $product->product_thumbnail) }}" alt="Product" loading="lazy">
                      
                    </div><!-- /.product-img -->
                    <div class="product__info">
                      <h4 class="product__title"><a>{{ $product->product_name}} </a></h4>
                      <p>{{ $product->category}} </p>
                    </div><!-- /.product-content -->
                  </div><!-- /.product-item -->
                </div><!-- /.col-lg-4 -->
                @endforeach
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <nav class="pagination-area">
                        <ul class="pagination justify-content-center">
                            @if ($products->onFirstPage())
                                <li class="disabled"><span><a>&laquo;</a></span></li>
                            @else
                                <li><a href="{{ $products->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                            @endif
                
                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                @if ($page == $products->currentPage())
                                    <li class="active"><a class="text-white bg-primary">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                
                            @if ($products->hasMorePages())
                                <li><a href="{{ $products->nextPageUrl() }}" rel="next">&raquo;</a></li>
                            @else
                                <li class="disabled"><span><a href="">&raquo;</a></span></li>
                            @endif
                        </ul>
                    </nav><!-- /.pagination-area -->
                </div><!-- /.col-lg-12 -->
                
              </div><!-- /.row -->
            </div><!-- /.col-lg-9 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.shop -->
  

    @endsection