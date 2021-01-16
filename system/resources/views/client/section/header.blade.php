<header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">virashop</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{url('public')}}/user/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Beranda</a></li>
          <li><a href="{{url('keranjang')}}">Keranjang</a></li>
          <li><a href="{{url('/index')}}#produk">Produk</a></li>
          <li><a href="{{url('login')}}">Login</a></li>
          <li><a href="{{url('registrasi')}}">Registrasi</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Slider Section ======= -->
  <div id="ensign-nivoslider" class="slides">
        <img src="{{url('public')}}/user/assets/img/hero-bg.jpg" alt="" title="#slider-direction-2" />
      </div>
 <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class ="title1">welcome to virashop</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Happy Shopping!</h1>
                  @include('template.utils.notif')
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

  <main id="main">

    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Kategori</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  
                 
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          
        </div>
      </div>
    </div><!-- End Services Section -->
