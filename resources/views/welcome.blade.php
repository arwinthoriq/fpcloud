<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>Perhutani</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css      {{ asset('Remember/     ') }}         --> 
  <link href="{{ asset('Remember/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('Remember/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('Remember/css/prettyPhoto.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('Remember/css/style.css') }}" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href=" {{ asset('Remember/ico/apple-touch-icon-144-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href=" {{ asset('Remember/ico/apple-touch-icon-114-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href=" {{ asset('Remember/ico/apple-touch-icon-72-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" href=" {{ asset('Remember/ico/apple-touch-icon-57-precomposed.png') }}" />
  <link rel="shortcut icon" href=" {{ asset('Remember/ico/iconperhutani.png') }}" />

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
           
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.html"><i class="icon-tint"></i> Perhutani</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn btn-success" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-success"  href="{{ route('login') }}">Login</a>

                    @endauth
                </div>
            @endif 
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- section intro -->
    <section id="intro">
      <div class="intro-content">

      <img src="{{ asset('Remember/ico/iconperhutani.png') }}" alt="">
        <div>
          </a>
        </div>
      </div>
    </section>
    <!-- /section intro -->

    <section id="offer">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <div class="aligncenter">
                  <h3>Perhutani</h3>
                  <p>Perum Perhutani adalah perusahaan yang bergerak di bidang Kehutanan (khususnya di Pulau Jawa dan Madura) 
                  dan mengemban tugas serta wewenang untuk menyelenggarakan kegiatan pengelolaan Sumber Daya Hutan (SDH) 
                  dengan memperhatikan aspek produksi/ekonomi, aspek sosial dan aspek lingkungan. Dalam operasionalnya, 
                  Perum Perhutani berada di bawah koordinasi Kementerian BUMN dengan bimbingan teknis dari Departemen Kehutanan. </p>
                  Sejarah pengelolaan hutan di Jawa dan Madura, secara modern institusional dimulai tahun 1897 dengan dikeluarkannya “Reglement voor het beheer der bosschen van den Lande op Java en Madoera”, Staatsblad 1897 nomor 61 (disingkat “Bosreglement”) selain itu terbit pula “Reglement voor den dienst van het Boschwezen op Java en Madoera” (disingkat “Dienst Reglement”) yang menetapkan aturan tentang organisasi Jawatan Kehutanan, dimana dibentuk Jawatan Kehutanan dengan Gouvernement Besluit (Keputusan Pemerintah) tanggal 9 Februari 1897 nomor 21, termuat dalam Bijblad 5164. Hutan-hutan Jati 27 di Jawa mulai diurus dengan baik, dengan dimulainya afbakening (pemancangan), pengukuran, pemetaan dan tata hutan.
               <br><br>
                <center><a class="btn btn-success" href="{{ url('/Daftar/Kegiatan') }}">DAFTAR  KEGIATAN</a></center>
                </div>
              </div>
            </div>

        </div>

      </div>
    </section>

    <footer>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; 2020 Perhutani</span></p>
              </div>

            </div>

            
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ==================================================        {{ asset('Remember/     ') }}         -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('Remember/js/jquery.js') }} "></script>
  <script src="{{ asset('Remember/js/jquery.easing.1.3.js') }} "></script>
  <script src="{{ asset('Remember/js/bootstrap.js') }} "></script>
  <script src="{{ asset('Remember/js/modernizr.custom.js') }} "></script>
  <script src="{{ asset('Remember/js/toucheffects.js') }} "></script>
  <script src="{{ asset('Remember/js/google-code-prettify/prettify.js') }} "></script>
  <script src="{{ asset('Remember/js/jquery.prettyPhoto.js') }} "></script>
  <script src="{{ asset('Remember/js/portfolio/jquery.quicksand.js') }} "></script>
  <script src="{{ asset('Remember/js/portfolio/setting.js') }} "></script>
  <script src="{{ asset('Remember/js/animate.js') }} "></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('Remember/js/custom.js') }} "></script>

</body>
       
</html>
