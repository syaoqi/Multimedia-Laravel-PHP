@extends('layouts.main')
@section('container')
  <section class="text-center py-9">


          <p class="text-light fs-1">About</p>
          <div class="col-12 col-md-7 mx-auto">
            <h1 class="text-white fs-lg-7 fs-md-4 fs-3 my-4">ADEM02 Penyedia Layanan Untuk Kalian Pecinta Potografi & Art.</h1>
          </div>
          <p class="w-md-50 text-light mx-auto">Kami Menyediakan Berbagai Jenis Gambar yang diambil oleh para pecinta potografi & Art. Kalian juga bisa memamerkan karya seni kalian disini dan akan dilihat oleh banyak orang loh! sebelum log in, silahkan melakukan register dahulu.</p>

        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0">

        <div class="container">
          <div class="gallery-wraper">
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/1.jpg') }}" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/2.jpg') }}" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/3.jpg') }}" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/4.jpg') }}" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/5.jpg') }}" alt="" /></div>
          </div>

        </div>
        <!-- end of .container-->

      </section>
@endsection
