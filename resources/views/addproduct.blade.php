@extends('layout')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css"  />
<style type="text/css">
    .preview {
        overflow: hidden;
        width: 160px; 
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }
</style>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                                    <div class="page-title-right">
                                        {{-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Elements</li>
                                        </ol> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('products.create') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        
                                            <h4 class="card-title mb-4"></h4>
                                        
                                            <div class="mb-3 row">
                                                <label for="product_name" class="col-md-2 col-form-label">Product Name</label>
                                                <div class="col-10 col-md-6">
                                                    <input class="form-control" type="text" id="product_name" name="product_name" required value="{{ old('product_name') }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="product_thumbnail" class="col-md-2 col-form-label">Product Thumbnail</label>
                                                <div class="col-10 col-md-6">
                                                    <input class="form-control image" type="file" id="product_thumbnail" name="product_thumbnail">
                                                    <input type="hidden" id="croppedImage" name="croppedImage">
                                                    @if($errors->has('error'))
                                                    <p class="text-danger">
                                                        {{ $errors->first('error') }}
                                                    </p>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Product Category</label>
                                                <div class="col-10 col-md-6">
                                                    <select class="form-select" name="category">
                                                        <option value="Pulses" {{ old('category') === 'Pulses' ? 'selected' : '' }}>Pulses</option>
                                                        <option value="Curry Masalas" {{ old('category') === 'Curry Masalas' ? 'selected' : '' }}>Curry Masalas</option>
                                                        <option value="Ethnic Breakfast" {{ old('category') === 'Ethnic Breakfast' ? 'selected' : '' }}>Ethnic Breakfast</option>
                                                        <option value="Rice" {{ old('category') === 'Rice' ? 'selected' : '' }}>Rice</option>
                                                        <option value="Dry Fruits & Assorted Items" {{ old('category') === 'Dry Fruits & Assorted Items' ? 'selected' : '' }}>Dry Fruits & Assorted Items</option>
                                                        <option value="Cooking Oil" {{ old('category') === 'Cooking Oil' ? 'selected' : '' }}>Cooking Oil</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-6">
                                                    <button type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bx-plus label-icon"></i> Create New</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © NOBI.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Akinoz
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->



            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">            
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Crop image</h5>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <div class="col-md-8">  
                                    <img id="image-cropped" height="300">
                                </div>
                                <div class="col-md-4">
                                    <div class="preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="crop">Crop</button>
                    </div>
                </div>
            </div>
        </div>
      


            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>              
            <script>
              var bs_modal = $('#modal');
              var image = document.getElementById('image-cropped');
              var imageInput = document.getElementById('formFile'); 
              var cropper, reader, file;
              
              $("body").on("change", ".image", function(e) {
                  var files = e.target.files;
                  var done = function(url) {
                      image.src = url;
                      bs_modal.modal('show');
                  };
                  $('.close-button').on('click', function() {
                      bs_modal.modal('hide');
                  });
                  $('.delete-modal').on('click', function() {
                      bs_modal.modal('show');
                  });
          
                  if (files && files.length > 0) {
                      file = files[0];
          
                      if (URL) {
                          done(URL.createObjectURL(file));
                      } else if (FileReader) {
                          reader = new FileReader();
                          reader.onload = function(e) {
                              done(reader.result);
                          };
                          reader.readAsDataURL(file);
                      }
                  }
              });
          
              bs_modal.on('shown.bs.modal', function() {
                  cropper = new Cropper(image, {
                      aspectRatio: 233/284,
                      viewMode: 1,
                      preview: '.preview'
                  });
              }).on('hidden.bs.modal', function() {
                  if (cropper) {
                      console.log('Cropper Updated');
                      cropper.destroy();
                      cropper = null;
                      if (image.src) {
                          imageInput.value = image.src;
                      }
                  }
              });
          
              $("#crop").click(function() {
                  
                  canvas = cropper.getCroppedCanvas({
                      width: 450,
                      height: 450,
                  });
          
                  canvas.toBlob(function(blob) {
                      url = URL.createObjectURL(blob);
                      var reader = new FileReader();
                      reader.readAsDataURL(blob);
                      reader.onloadend = function() {
                          var base64data = reader.result;
                          $('#image-cropped').attr('src', base64data);
                          $('#croppedImage').val(base64data);
                          bs_modal.modal('hide');
                      };
                  });
              });
          </script>
          

            @endsection