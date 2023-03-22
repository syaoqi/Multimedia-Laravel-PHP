 @extends('dashboard.layouts.main')
 @section('content')
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-8">
                 <div class="card">
                     <form method="post" action="/dashboard/categories" enctype="multipart/form-data" class="form-horizontal">
                         @csrf

                         <div class="card-body">
                             <h4 class="card-title">Insert Data</h4>
                             <div class="form-group row">
                                 <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                 <div class="col-sm-9">
                                     <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                         placeholder="name" autofocus  value="{{ old('name') }}">
                                     @error('name')
                                         <div class="invalid-feedback">
                                             {{ $message }}
                                         </div>
                                     @enderror
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="slug" class="col-sm-3 text-right control-label col-form-label">slug</label>
                                 <div class="col-sm-9">
                                     <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                                         placeholder="slug"  value="{{ old('slug') }}">
                                     @error('slug')
                                         <div class="invalid-feedback">
                                             {{ $message }}
                                         </div>
                                     @enderror
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <label for="image" class="col-sm-3 text-right control-label col-form-label">File
                                     Upload</label>
                                 <div class="col-md-9">
                                     <img class="img-preview img-fluid mb-3 col-sm-5">
                                     <div class="custom-file">
                                         <label class="custom-file-label" for="image">Choose file...</label>
                                         <input type="file"
                                             class="custom-file-input  @error('image') is-invalid @enderror" id="image"
                                             name="image" onchange="previewImage()">
                                         @error('image')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>

                         </div>
                         <div class="border-top">
                             <div class="card-body">
                                 <button type="submit" class="btn btn-primary">Create</button>
                             </div>
                         </div>
                 </div>
                 </form>
             </div>
         </div>
     </div>
     <footer class="footer text-center">
         All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
     </footer>
     </div>

     <script>
         const name = document.querySelector('#name');
         const slug = document.querySelector('#slug');

         name.addEventListener('change', function() {
             fetch('/dashboard/categories/checkSlug?name=' + name.value)
                 .then(response => response.json())
                 .then(data => slug.value = data.slug)
         });

         function previewImage() {
             const image = document.querySelector('#image');
             const imgPreview = document.querySelector('.img-preview');

             imgPreview.style.display = 'block';

             const oFReader = new FileReader();
             oFReader.readAsDataURL(image.files[0]);

             oFReader.onload = function(oFREvent) {
                 imgPreview.src = oFREvent.target.result;
             }
         }
     </script>
 @endsection
