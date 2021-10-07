
<!doctype html>
<html lang="en">
<head>
<title>BUK - Chemistry Department</title>
<meta charset="utf-8">
<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="" />
<meta name="description" content="" />

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->

{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

<link rel="stylesheet" media="screen" href=" {{ asset('files/js/bootstrap/bootstrap.min.css') }}" type="text/css" />
<link rel="stylesheet" href=" {{ asset('files/js/mainmenu/menu.css') }}" type="text/css" />
<link rel="stylesheet" href=" {{ asset('files/css/layouts.css') }}" type="text/css" />
<link rel="stylesheet" href=" {{ asset('files/css/default.css') }}" type="text/css" />
<link rel="stylesheet" href=" {{ asset('files/css/forms.css') }}" type="text/css" />
<link rel="stylesheet" href=" {{ asset('files/css/shortcodes.css') }}" type="text/css" />
<link rel="stylesheet" href=" {{ asset('files/css/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" media="screen" href=" {{ asset('files/css/responsive-leyouts.css') }}" type="text/css" />
<link rel="stylesheet" href=" {{ asset('files/js/masterslider/style/masterslider.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('files/css/Simple-Line-Icons-Webfont/simple-line-icons.css') }}" media="screen" />
<link rel="stylesheet" href=" {{ asset('files/css/et-line-font/et-line-font.css') }}">
<link href=" {{ asset('files/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href=" {{ asset('files/js/tabs/assets/css/responsive-tabs.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('files/js/cubeportfolio/cubeportfolio.min.css') }}">
<link rel="stylesheet" href=" {{ asset('files/css/colors/lightblue.css') }}" />
</head>

<body>
<div class="site_wrapper">
  <div class="topbar white topbar-padding">
    <div class="container">
      <div class="topbar-left-items">
        <ul class="toplist toppadding pull-left paddtop1">
          <li class="rightl">Call us</li>
          <li>(234) 80 BUK CHEM</li>
        </ul>
      </div>
      <!--end left-->
      
      <div class="topbar-right-items pull-right">
        <ul class="toplist toppadding">
          <li><a href="#">Login</a></li>
          <li><a href="#" class=" btn btn-pink-3 less-top-bottom-padding btn-round btn-small-2">Register</a></li>
          <li><a href="#">Student</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  
  <div id="header">
    <div class="container">
      <div class="navbar pink-3 navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="index.html" class="navbar-brand less-top-padding"><img src="images/logo.png" alt=""/></a> </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav pink-3 navbar-nav">
            <li><a href="i{{ route('home')}}" class="dropdown-toggle active">Home</a></li>
            <li><a href="{{ route('about')}}" class="dropdown-toggle">About</a></li>
            <li><a href="{{ route('facilities')}}" class="dropdown-toggle">Facilities</a></li>
            <li><a href="{{ route('admission')}}" class="dropdown-toggle">Admissions</a></li>
            <li class="dropdown"> <a href="{{ route('courses')}}" class="dropdown-toggle">More +</a>
              <ul class="dropdown-menu five" role="menu">
                <li> <a href="{{ route('courses')}}">Courses</a> </li>
                <li> <a href="{{ route('jobs')}}">Jobs</a> </li>
                <li> <a href="{{ route('students')}}">Student portal</a> </li>
                <li> <a href="{{ route('research')}}">Research</a> </li>
                <li> <a href="{{ route('library')}}">Library</a> </li>
              </ul>
            </li>
            <li><a href="{{ route('gallery')}}" class="dropdown-toggle">Gallery</a></li>
            <li><a href="{{ route('blog')}}" class="dropdown-toggle">Blog</a></li>
            <li><a href="{{ route('contact')}}" class="dropdown-toggle">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end menu-->
  <div class="clearfix"></div>
@yield('site')
<div class="clearfix"></div>
<section class="section-pink-3 section-less-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-centered text-center">
          <h3 class="less-mar3 roboto-slab text-white text-center font-weight-3">Get More out of Chemistry </h3>
          <br/>
          <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus.</p>
          <br/>
          <a class="btn btn-border white btn-large" href="#">Start Learning Today</a> </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="section-fulldark sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 clearfix">
          <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">Information About</h4>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul class="usefull-links no-border">
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
          </ul>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">Recent Posts</h4>
            <div class="footer-title-bottomstrip"></div>
            <div class="clearfix"></div>
            <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
            <div class="text-box-right">
              <h6 class="text-white less-mar3 nopadding roboto-slab font-weight-3 nopadding"><a href="#">Clean And Modern</a></h6>
              <p>Lorem ipsum dolor sit</p>
              <div class="footer-post-info"> <span>By John Doe</span><span> May 20</span> </div>
            </div>
            <div class="divider-line solid dark margin opacity-6"></div>
            <div class="clearfix"></div>
            <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
            <div class="text-box-right">
              <h6 class="text-white less-mar3 roboto-slab font-weight-3 nopadding"><a href="#">Layered PSD Files</a></h6>
              <p>Lorem ipsum dolor sit</p>
              <div class="footer-post-info"> <span>By John Doe</span><span> May 20</span> </div>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">quick links</h4>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul class="usefull-links no-border">
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
          </ul>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">quick links</h4>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul class="usefull-links no-border">
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
          </ul>
        </div>
        <!--end item--> 
        
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="section-copyrights sec-moreless-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <span>Copyright © 2020 <a href="https://1.envato.market/hasta-html-by-codelayers">hasta</a> By <a href="https://1.envato.market/codelayers">Codelayers</a> | All rights reserved.</span></div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <a href="#" class="scrollup pink-3"></a><!-- end scroll to top of the page--> 
</div>
<!-- end site wraper --> 

<!-- ============ JS FILES ============ -->
 
<script type="text/javascript" src=" {{ asset('files/js/universal/jquery.js') }}"></script> 
<script src=" {{ asset('files/js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script> 
<script src=" {{ asset('files/js/masterslider/jquery.easing.min.js') }}"></script> 
<script src=" {{ asset('files/js/masterslider/masterslider.min.js') }}"></script> 
<script type="text/javascript">
(function($) {
 "use strict";
	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	slider.control('bullets');
	
	slider.setup('masterslider' , {
		 width:1600,    // slider standard width
		 height:630,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"parallaxMask"
	});

})(jQuery);
</script> 
<script type="text/javascript">
(function($) {
 "use strict";
	var slider = new MasterSlider();

	 slider.setup('masterslider2' , {
		 width:570,    // slider standard width
		 height:300,   // slider standard height
		 space:0,
		 speed:27,
		 layout:'boxed',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"basic",
	});
})(jQuery);
</script>  
<script src=" {{ asset('files/js/mainmenu/customeUI.js') }}"></script> 
<script src=" {{ asset('files/js/forms.js') }}"></script> 
<script src=" {{ asset('files/js/owl-carousel/owl.carousel.js') }}"></script> 
<script src=" {{ asset('files/js/owl-carousel/custom.js') }}"></script> 
<script type="text/javascript" src=" {{ asset('files/js/tabs/smk-accordion.js') }}"></script>
<script type="text/javascript" src=" {{ asset('files/js/tabs/custom.js') }}"></script> 
<script src=" {{ asset('files/js/scrolltotop/totop.js') }}"></script> 
<script src=" {{ asset('files/js/mainmenu/jquery.sticky.js') }}"></script> 
<script type="text/javascript" src="{{ asset('files/js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('files/js/cubeportfolio/main.js') }}"></script> 
<script src=" {{ asset('files/js/scripts/functions.js') }}" type="text/javascript"></script>
</body>
</html>
