
@extends('layouts.master')
@section('content')
<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url(frontend/images/slider-main/bg1.jpg)">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft">17 Years of excellence in</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">Software Industry</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="services.html" class="slider btn btn-primary">Our Services</a>
                    <a href="contact.html" class="slider btn btn-primary border">Contact Now</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(frontend/images/slider-main/bg2.jpg)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                <p data-animation-in="slideInRight">
                    <a href="services.html" class="slider btn btn-primary border">Our Services</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(frontend/images/slider-main/bg3.jpg)">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title" data-animation-in="slideInDown">Meet Our Engineers</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">We believe sustainability</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your failure that determines how you achieve success.</p>
                <div data-animation-in="slideInLeft">
                    <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Free Quote</a>
                    <a href="about.html" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">We understand your needs on digital solution</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="#">Request Quote</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
              <h2 class="into-title">About Us</h2>
              <h3 class="into-sub-title">Software Solutions For Your Business</h3>
              <p>ProjanmoIT is a reputed software, web and mobile application development company in Bangladesh. 
			  We are to gain faith best web design & development and best software development company in Bangladesh. 
			  We provide fully interactive and cost effective software and automation solution by establishing a bridge between modern technology.</p>
          </div><!-- Intro box end -->

          <div class="gap-20"></div>

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">We've Repution for Excellence</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">We Build Partnerships</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">Guided by Commitment</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">A Team of Professionals</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title">Our Values</h3>
          <p>Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.</p>

          <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Mission
                      </button>
                    </h2>
                </div>
              
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    <div class="card-body">
                      Ensure value generation among all the stakeholders
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Vision
                      </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                    <div class="card-body">
                      To Become a Respected Information Technology Company not only in Bangladesh but also in the world in terms of Quality, Best Practices, Job Environment, Profitability, Social Commitment and also client satisfaction.
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Objective
                      </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                    <div class="card-body">
                      We ensure long term value chains along with superior performances and positive business relationships. We also look forward to providing flexibility to adapt the changing technology to the customer’s requirements.
                    </div>
                </div>
              </div>
          </div>
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">We Are Specialists In</h2>
          <h3 class="section-sub-title">What We Do</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon1.jpg')}}" alt="service-icon" style="width:60px;height:60px">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Mobile Application Development</a></h3>
                <p>Android Apps | IOS APPS | Facebook APPS | Game Development | Real State Script</p>
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{asset('frontend/images/icon-image/ecommerce-1.png')}}" alt="service-icon"  style="width:60px;height:60px">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">E-Commerce Solution</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
          </div><!-- Service 4 end -->

        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          
		  
		  <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon2.jpg')}}" alt="service-icon"  style="width:60px;height:60px">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Software Development</a></h3>
                <p>Domain | Static Website | Dynamic Website | Newsportal | E-Commerce | Wordpress</p>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{asset('frontend/images/icon-image/hosting.jpg')}}" alt="service-icon"  style="width:60px;height:60px">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Cloud Hosting</a></h3>
                <p>Linux Shared Hosting | Reseller Hosting | VPS Server | Full Managed / Un-Managed Dedicated Servers</p>
              </div>
          </div><!-- Service 5 end -->
        </div><!-- Col end -->
		
		<div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon4.jpg')}}" alt="service-icon" style="width:60px;height:60px">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">GRAPHIC DESIGN</a></h3>
                <p>Logo Design | Flyer design | Bussiness Card Design</p>
              </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{asset('frontend/images/icon-image/digital_marketting.jpg')}}" alt="service-icon" style="width:60px;height:60px">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">DIGITAL MARKETING</a></h3>
                <p>Facebook Marketing | SMS Marketing | SEO Marketing | Email Marketing</p>
              </div>
          </div><!-- Service 5 end -->

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">Recent Projects</h3>
      </div>
    </div>
    <!--/ Title row end -->
    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
          <label for="commercial">
            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Mobile Application
          </label>
		   <label for="residential">
            <input type="radio" name="shuffle-filter" id="residential" value="residential">Software Development
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="education">Education
          </label>
          <label for="infrastructure">
            <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Web Application
          </label>
         
          <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">E-Commerce
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{asset('frontend/images/projects/project1.jpg')}}" aria-label="project-img">
                <img class="img-fluid" src="{{asset('frontend/images/projects/project1.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Capital Teltway Building</a>
                  </h3>
                  <p class="project-cat">Commercial, Interiors</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{asset('frontend/images/projects/project2.jpg')}}" aria-label="project-img">
                <img class="img-fluid" src="{{asset('frontend/images/projects/project2.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Ghum Touch Hospital</a>
                  </h3>
                  <p class="project-cat">Healthcare</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{asset('frontend/images/projects/project3.jpg')}}" aria-label="project-img">
                <img class="img-fluid" src="{{asset('frontend/images/projects/project3.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">TNT East Facility</a>
                  </h3>
                  <p class="project-cat">Government</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{asset('frontend/images/projects/project4.jpg')}}" aria-label="project-img">
                <img class="img-fluid" src="{{asset('frntend/images/projects/project4.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Narriot Headquarters</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{asset('frontend/images/projects/project5.jpg')}}" aria-label="project-img">
                <img class="img-fluid" src="{{asset('frontend/images/projects/project5.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Kalas Metrorail</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{asset('frontend/images/projects/project6.jpg')}}" aria-label="project-img">
                <img class="img-fluid" src="{{asset('frontend/images/projects/project6.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Ancraft Avenue House</a>
                  </h3>
                  <p class="project-cat">Residential</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->
        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">View All Projects</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

    <!-- ======= Pricing Section ======= -->
	<section id="main-container" class="main-container">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Grab the Packages</h2>
        <h3 class="section-sub-title">Pricing</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box">
          <div class="ts-pricing-header">
            <h2 class="ts-pricing-name">Building Remodels</h2>
            <h2 class="ts-pricing-price">
              <span class="currency">$</span><strong>89.9</strong><small>/Month</small>
            </h2>
          </div><!-- Pricing header -->
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li>Project Management for Owners</li>
              <li>Pre-construction feasibility</li>
              <li>On-site representation</li>
              <li>Quality control inspections</li>
              <li>Schedule claim preparation/defense</li>
              <li>Project phasing development</li>
            </ul>
          </div><!-- Features end -->
          <div class="plan-action">
            <a href="#" class="btn btn-dark">Order Now</a>
          </div>
        </div><!-- Plan 1 end -->
      </div><!-- Col end -->

      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box ts-pricing-featured">
          <div class="ts-pricing-header">
            <h2 class="ts-pricing-name">Renovation</h2>
            <h2 class="ts-pricing-price">
              <span class="currency">$</span><strong>179.9</strong><small>/Month</small>
            </h2>
          </div><!-- Pricing header -->
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li>Project Management for Owners</li>
              <li>Pre-construction feasibility</li>
              <li>On-site representation</li>
              <li>Quality control inspections</li>
              <li>Schedule claim preparation/defense</li>
              <li>Project phasing development</li>
            </ul>
          </div><!-- Features end -->
          <div class="plan-action">
            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
        </div><!-- Plan 2 end -->
      </div><!-- Col end -->

      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box">
          <div class="ts-pricing-header">
            <h2 class="ts-pricing-name">Home Construction</h2>
            <h2 class="ts-pricing-price">
              <span class="currency">$</span><strong>279.9</strong><small>/Month</small>
            </h2>
          </div><!-- Pricing header -->
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li>Project Management for Owners</li>
              <li>Pre-construction feasibility</li>
              <li>On-site representation</li>
              <li>Quality control inspections</li>
              <li>Schedule claim preparation/defense</li>
              <li>Project phasing development</li>
            </ul>
          </div><!-- Features end -->
          <div class="plan-action">
            <a href="#" class="btn btn-dark">Order Now</a>
          </div>
        </div><!-- Plan 3 end -->
      </div><!-- Col end -->

    </div>
    <!--/ Content row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

	<!-- End Pricing Section -->


<section class="content googleMap" >
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Testimonials</h3>

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                      view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                      subline of her own road.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{('frontend/images/clients/testimonial1.png')}}" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Gabriel Denis</h3>
                          <span class="quote-subtext">Chairman, OKT</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi aliquip consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Weldon Cash</h3>
                          <span class="quote-subtext">CFO, First Choice</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi ut commodo consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Minter Puchan</h3>
                          <span class="quote-subtext">Director, AKT</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/images/clients/client1.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/images/clients/client2.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 2 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/images/clients/client3.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 3 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/images/clients/client4.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 4 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/images/clients/client5.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 5 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/images/clients/client6.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 6 end -->

          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->

 
@include('partials.googlemap')
@endsection