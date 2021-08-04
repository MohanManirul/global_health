@include('partials.header')

  <!-- CSS 
================================================== -->
@include('partials.styles')
  
  
    <!-- Vendor CSS Files -->
<style>
	.ts-features {
    background: #f9f9f9;
	}
	.googleMap{
	    padding: 0 0;
	}
</style>
</head>
<body>
@include('partials.menu')
<!--/ Header end -->
@yield('content')
  
	
  
</section><!-- Content end -->

@include('partials.footer')

  <!-- Javascript Files
  ================================================== -->

  @include('partials.scripts')
  </div><!-- Body inner end -->
  </body>

  </html>