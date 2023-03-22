 @extends('dashboard.layouts.main')
 @section('content')
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-8">
                 <div class="card">
                     <form method="post" action="/dashboard/posts" enctype="multipart/form-data" class="form-horizontal">
                         @csrf

                         <div class="card-body">
                             <h4 class="card-title">Insert Data</h4>
                             <div class="form-group row">
                                 <label for="title"
                                     class="col-sm-3 text-right control-label col-form-label">Title</label>
                                 <div class="col-sm-9">
                                     <input type="text" class="form-control @error('title') is-invalid @enderror"
                                         id="title" name="title" placeholder="Title" autofocus
                                         value="{{ old('title') }}">
                                     @error('title')
                                         <div class="invalid-feedback">
                                             {{ $message }}
                                         </div>
                                     @enderror
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="slug"
                                     class="col-sm-3 text-right control-label col-form-label ">slug</label>
                                 <div class="col-sm-9">
                                     <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                         id="slug" name="slug" placeholder="slug" value="{{ old('slug') }}">
                                     @error('slug')
                                         <div class="invalid-feedback">
                                             {{ $message }}
                                         </div>
                                     @enderror
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="category" class="col-sm-3 text-right control-label col-form-label">Single
                                     Select</label>
                                 <div class="col-md-9">

                                     <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                         name="category_id">
                                         @foreach ($categories as $category)
                                             @if (old('category_id') == $category->id)
                                                 <option value="{{ $category->id }}" selected>
                                                     {{ $category->name }}</option>
                                             @else
                                                 <option value="{{ $category->id }}">{{ $category->name }}
                                                 </option>
                                             @endif
                                         @endforeach
                                     </select>
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


                             <div class="form-group row">
                                 <label for="body"
                                     class="col-sm-3 text-right control-label col-form-label">Descript</label>
                                 <div class="col-sm-9 ">
                                     @error('body')
                                         <p class="text-danger col-sm-3">{{ $message }}</p>
                                     @enderror
                                     <input class="col-sm-3" id="body" type="hidden" name="body"
                                         value="{{ old('body') }}" required>
                                     <trix-editor input="body"></trix-editor>
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
         const title = document.querySelector('#title');
         const slug = document.querySelector('#slug');

         title.addEventListener('change', function() {
             fetch('/dashboard/posts/checkSlug?title=' + title.value)
                 .then(response => response.json())
                 .then(data => slug.value = data.slug)
         });

         document.addEventListener('trix-file-accept', function(e) {
             e.preventDefault();
         })

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
