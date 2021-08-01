<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Global Health Education Foundation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <style>
    .causesp{
      font-size: 14px;
      font-family: 'Times new roman Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-style: normal;
    }
    .service{
      margin-bottom: 20px;
      border-radius: 2px;
    }
    .service p{
      text-align: left;
    }
    #footer {
        background: #071527;
        padding: 0 0 10px 0;
        0: ;
        */: ;
        color: #fff;
        font-size: 14px;
    }
    #footer .copyright {
    border-top: 1px solid #0f2f57;
    text-align: center;
    padding-top: 10px;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <!--<h1 class="logo mr-auto"><a href="index.html">Multi</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      @foreach($logo as $logo)
     <a href="{{route('index')}}" class=""><img src="{{asset('upload/student_images/'.$logo->image)}}" alt="logo" class="img-fluid"></a>
     @endforeach
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('index')}}">Home</a></li>
          <li><a href="#aboutus">About Us</a></li>
          <li><a href="#vm">Mission Vission & Values</a></li>
          <li><a href="#team">Board of Directors</a></li>
          <li><a href="#portfolio">Board of Advisors</a></li>          
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 <section>
 <div class="our-slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">

            @foreach ($sliders as $slider)
             <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index}}" class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
            @endforeach

          </ol>
          <div class="carousel-inner">

            @foreach ($sliders as $slider)
              <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                <img class="d-block w-100" src="{{ asset('upload/student_images/'.$slider->slider) }}" alt="{{ $slider->slider_text }}" style="height: 580px;" />

                <div class="carousel-caption d-none d-md-block">
                  
                  @if ($slider->slider_text)
                    <p>
                      <a href="{{ $slider->button_link }}" target="_blank" class="btn btn-danger animate__animated animate__fadeInDown">{{ $slider->slider_text }}</a>
                    </p>
                  @endif

                </div>
            </div>
            @endforeach
            

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="aboutus" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>About Us</p>
        </div>

          <div class="row" data-aos="fade-up" data-aos-delay="200">
         @foreach($aboutus as $aboutus)
          <div class="col-md-6 service">
            <div class="icon-box">
              <h4><a href="#">“{{$aboutus->title}}”</a></h4>
              <p>{{strip_tags($aboutus->description)}}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Vission Mission Section ======= -->
    <section id="vm" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Non-Profit Commitment</h2>
          <p>Non-Profit Component</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
        @foreach($nonprofit as $nonprofit)
          <div class="col-md-12 service">
            <div class="icon-box">
              <h4><a href="#">{{strip_tags($nonprofit->title)}}</a></h4>
              <p>{{strip_tags($nonprofit->description)}}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Vission Mission Section -->

<!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Directors</h2>
          <p>Board of Directors</p>
        </div>

        <div class="row">
  @foreach($bod as $bod)
          <div class="col-lg-4 col-md-6"  data-wow-delay="0.2s">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{asset('public/upload/student_images/'.$bod->image)}}" class="img-fluid" alt="{{$bod->name}}" style=width:300px;height:300px;>
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{$bod->name}}</h4>
                  <span>{{$bod->designation}}</span>
                </div>
                <div class="social">
                  <a href="{{$bod->tw}}"><i class="icofont-twitter"></i></a>
                  <a href="{{$bod->fb}}"><i class="icofont-facebook"></i></a>
                  <a href="{{$bod->insta}}"><i class="icofont-instagram"></i></a>
                  <a href="{{$bod->in}}"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Team Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Advisors</h2>
          <p>Board of Advisors</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
@foreach($boa as $boa)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('public/upload/student_images/'. $boa->image)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$boa->name}}</h4>
              <p>{{$boa->designation}}</p>
              <a href="" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
@endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">
@foreach($address as $address)
          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>{{$address->address}}</p>
				  </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>{{$address->email}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>{{$address->mobile_no}}</p>
                </div>
              </div>
            </div>

          </div>
@endforeach
          <div class="col-lg-6">
            <form action="{{route('admin.messege.store')}}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="messege" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="index.html" class=""><img src="{{asset('assets/img/footerlogo.png')}}" alt="" class="img-fluid"></a>
              <p style="font-size: 18px; font-weight: bold; padding-top: 8px; color: #fff;" class="pb-3"><em>Global Health Education Foundation</em></p>
              <p>
                10376 NW 4th St. <br>
                Plantation, FL 33324<br><br>
                <strong>Phone:</strong> ........<br>
                <strong>Email:</strong> ghefoundation1@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mission Vission & Values</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Board of Directors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Board of Advisors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Non-Profit Commitment</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">No Kids Hungry</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Global Fund for Women</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">TASH</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">The Peace Corps</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Teach for America</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Legal Status</h4>
            <p>501(c) 3 Non-Profit Corporation State of Florida
              Corporation Document # N20000012876
              Federal Identification Number:  85-4349514
              </p>
            <form action="{!! route('admin.subcribe.store') !!}"   method="post">
              @csrf
              <input type="email" name="email">
              <input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <?php echo date("Y"); ?>Copyright <strong><span>Global Health Education Foundation, Inc</span></strong>. All Rights Reserved
      </div>
      <div class="credits">Powered By<a href="https://bootstrapmade.com/"> NC CONNECTIONS</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>