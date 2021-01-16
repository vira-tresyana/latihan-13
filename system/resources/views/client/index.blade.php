<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>virashop - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('public')}}/user/assets/img/favicon.png" rel="icon">
  <link href="{{url('public')}}/user/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('public')}}/user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('public')}}/user/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v2.1.1
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

 <!-- ======= Header ======= -->
  @include('client.section.header')
    <!-- ======= Team Section ======= -->
    <div id="produk" class="our-team-area area-padding">
      <div class="container-fuild">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Produk</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <form action="{{url('filter')}}" method="post">
              @csrf
                <div class="card" style="width: 18rem; font-size: 14px">
                    <div class="card-header">
                      Filter
                    </div>
                    <ul class="list-group list-group-flush col-12">
                      <li class="list-group-item">
                          <label for="" class="control label">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
                      </li>
                      <li class="list-group-item">
                          <label for="" class="control label">Stok</label>
                      <input type="text" class="form-control" name="stok" value="{{$stok ?? ''}}">
                      </li>
                      <li class="list-group-item ">
                          <div class="row">
                          <div class="col-6">
                            <label for="" class="control label">Harga Min</label>
                          <input type="text" class="form-control" name="harga_min" placeholder="Wajib Masukkan Harga" value="{{$harga_min ?? ''}}">
                          </div>
                          <div class="col-6">
                           <label for="" class="control label">Harga Max</label>
                          <input type="text" class="form-control" name="harga_max" placeholder="Wajib Masukkan Harga" value="{{$harga_max ?? ''}}">
                          </div>
                        </div>
                      </li>
                    </ul>
                  <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
              </div>
            </form>
          </div>
          <div class="col-9">
              <div class="row row-cols-1 row-cols-md-2">
              @foreach($list_produk as $produk)
                <div class="col mb-4">
                  <div class="card h-100">
                 
                 <img src="{{url("system/public/$produk->foto")}}" alt="{{$produk->foto}}" width="300">
        
                    <div class="card-body">
                      <h5 class="card-title">{{$produk->nama}}</h5>
                      <p class="card-text">
                        Harga Produk : {{$produk->harga}} | Stok Tersedia : {{$produk->stok}} <br>
                        Seller : {{$produk->seller->username}}
                      </p>
                    </div>
                    <div class="card-footer">
                      <strong class="text-muted"><a href="{{url('beli', $produk->id)}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a></strong>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
               <div class="row">
          <div class="col-md-12 mt-4">
            <div class="d-flex justify-content-center">
              {!! $list_produk->links() !!}
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>

   @include('client.section.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{url('public')}}/user/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/appear/jquery.appear.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/knob/jquery.knob.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/parallax/parallax.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/wow/wow.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public')}}/user/assets/js/main.js"></script>

</body>

</html>