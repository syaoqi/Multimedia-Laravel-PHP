@extends('layouts.main')
@section('container')
 <div class="row align-items-center py-lg-8 py-6">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white fs-5 fs-xl-6">Selamat Datang Di Website ADEM02!</h1>
                <p class="text-white py-lg-3 py-2">Apakah Kamu Seorang Potografer ? Pecinta Art ? Buruan Jelajahi Website Kami!</p>

              </div>
              <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid" src="{{ asset('stylehome/assets/img/hero/hero-graphics.png') }}" alt="" /></div>
            </div>
                <div class="swiper">
                <div class="swiper-container swiper-shadow swiper-theme" data-swiper='{"slidesPerView":2,"breakpoints":{"640":{"slidesPerView":2,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":40},"992":{"slidesPerView":5,"spaceBetween":40},"1024":{"slidesPerView":4,"spaceBetween":50},"1025":{"slidesPerView":6,"spaceBetween":50}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"freeMode":true,"autoplay":{"delay":2500,"disableOnInteraction":false}}'>
                    <div class="swiper-wrapper">
                    <div class="swiper-slide text-center"><img src="{{ asset('stylehome/assets/img/logos/adem3.png') }}" alt="" /></div>
                    <div class="swiper-slide text-center"><img src="{{ asset('stylehome/assets/img/logos/boldo.png') }}" alt="" /></div>
                    <div class="swiper-slide text-center"><img src="{{ asset('stylehome/assets/img/logos/presto.png') }}" alt="" /></div>
                    <div class="swiper-slide text-center"><img src="{{ asset('stylehome/assets/img/logos/adem3.png') }}" alt="" /></div>
                    <div class="swiper-slide text-center"><img src="{{ asset('stylehome/assets/img/logos/boldo.png') }}" alt="" /></div>
                    <div class="swiper-slide text-center"><img src="{{ asset('stylehome/assets/img/logos/presto.png') }}" alt="" /></div>
                    </div>
                </div>
                </div>


 <section class="pb-0">

        <div class="container">
          <div class="gallery-wraper">
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/6.jpg') }}" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/7.jpg') }}" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/8.jpg') }}" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/9.jpg') }}" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="{{ asset('stylehome/assets/img/gallery/10.jpg') }}" alt="" /></div>
          </div>

        </div>
        <!-- end of .container-->

      </section>

  {{-- <footer class="footer text-center mt-5">
            All Rights Reserved by Boldo.
        </footer> --}}
           <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-sm-12"><a href="index.html"><img class="img-fluid mt-5 mb-4" src="{{ asset('stylehome/assets/img/logo.png') }}" alt="" /></a>
            <p class="w-lg-75 text-gray">Social media validation business model canvas graphical user interface launch party creative facebook iPad twitter.</p>
          </div>
        
        </div>
        <p class="text-gray">All rights reserved.</p>
      </div>
@endsection
