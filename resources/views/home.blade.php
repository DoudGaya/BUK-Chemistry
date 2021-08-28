@extends('layout.main')

@section('site')

<!-- masterslider -->
<div class="master-slider ms-skin-default" id="masterslider"> 
    
    <!-- slide 1 -->
    <div class="ms-slide slide-1" data-delay="9">
      <div class="slide-pattern"></div>
      <img src=" {{ asset('files/images/sliders/slider1.jpg')}} " data-src="{{ asset('files/images/sliders/slider1.jpg')}}" alt="Slider 1"/>
      
      <h3 class="ms-layer text42"
			style="top: 250px; left:230px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> Experimental & </h3>
            
      <h3 class="ms-layer text43"
			style="top: 290px; left:230px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> experienced <span>learning</span></h3>
            
      <a class="ms-layer sbut18"
			style="left: 230px; top: 380px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Read more </a> 
            
            <a class="ms-layer sbut19"
			style="left: 390px; top: 380px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Apply Now ! </a> 
            
            </div>
    <!-- end slide 1 --> 
    
    
    <!-- slide 2 -->
    <div class="ms-slide slide-2" data-delay="9">
      <div class="slide-pattern"></div>
      <img src=" {{ asset('files/images/sliders/slider2.jpg') }}" data-src=" {{ asset('files/images/sliders/slider2.jpg') }}" alt=""/>
      
      <h3 class="ms-layer text42 text-center"
			style="top: 220px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"> Experimental & </h3>
            
      <h3 class="ms-layer text43 text-center"
			style="top: 270px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> experienced <span>learning</span></h3>
            
      <a class="ms-layer sbut18"
			style="left: 660px; top: 360px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="left(250)"> Read more </a> 
            
            <a class="ms-layer sbut19"
			style="left:820px; top: 360px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Apply Now ! </a> 
            
            </div>
    <!-- end slide 2 -->
    
    <!-- slide 3 -->
    <div class="ms-slide slide-3" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="{{ asset('files/images/sliders/slider4.jpg') }}" data-src=" {{ asset('files/images/sliders/slider4.jpg') }}" alt=""/>
      
      <h3 class="ms-layer text42 text-center"
			style="top: 220px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"> Experimental & </h3>
            
      <h3 class="ms-layer text43 text-center"
			style="top: 270px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> experienced <span>learning</span></h3>
            
      <a class="ms-layer sbut18"
			style="left: 660px; top: 360px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="left(250)"> Read more </a> 
            
            <a class="ms-layer sbut19"
			style="left:820px; top: 360px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Apply Now ! </a> 
            
            </div>
    <!-- end slide 3 -->
  </div>
  <!-- end of masterslider -->
  <div class="clearfix"></div>
  
  <section class="section-pink-3 section-less-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-centered">
          <h2 class="less-mar3 roboto-slab text-white text-center font-weight-3">Chemistry Department</h3>
          <h3 class="less-mar3 roboto-slab text-white text-center font-weight-3">Bayero University Kano</h3>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="feature-box-81 bmargin"> <a href="#">
            <div class="image-holder">
              <div class="hover-strip">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Research<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src=" {{ asset('files/images/banners/research.jpg') }}" alt="" class="img-responsive"/> </div>
            </a> </div>
          <!--end item-->
          
          <div class="col-divider-margin-3"></div>
          <div class="feature-box-81 bmargin"> <a href="#">
            <div class="image-holder">
              <div class="hover-strip">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Experiments<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src="http://placehold.it/400x200" alt="" class="img-responsive"/> </div>
            </a> </div>
          <!--end item--> 
          
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-box-81 bmargin"> <a href="#">
            <div class="image-holder">
              <div class="hover-strip active">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Courses<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src="http://placehold.it/430x470" alt="" class="img-responsive"/> </div>
            </a> </div>
          <!--end item--> 
          
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-box-81 bmargin"> <a href="#">
            <div class="image-holder">
              <div class="hover-strip">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Activities<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src="http://placehold.it/400x200" alt="" class="img-responsive"/> </div>
            </a> </div>
          <!--end item-->
          
          <div class="col-divider-margin-3"></div>
          <div class="feature-box-81 bmargin"> <a href="#">
            <div class="image-holder">
              <div class="hover-strip">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Learning<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src="http://placehold.it/400x200" alt="" class="img-responsive"/> </div>
            </a> </div>
          <!--end item--> 
          
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class="parallax-section57">
    <div class="section-overlay light bg-opacity-7">
      <div class="container">
        <div class="row sec-tpadding-2 sec-bpadding-2">
          <div class="col-md-6 col-sm-6 text-left bmargin">
            <h3 class=" roboto-slab uppercase less-mar3">More about  our department</h3>
            <div class="title-line-9 less-margin align-center"></div>
            <div class="clearfix"></div>
            <p>Lorem ipsum dolor sit amet, consectetuer <span class="text-pink-3">adipiscing elit Suspendisse</span> et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. </p>
            <br/>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. </p>
            <br/>
            <a href="#" class="read-more pink-3"><i class="fa fa-angle-double-right"></i> Read More</a> </div>
          <!--end item-->
          
          <div class="col-md-6 col-sm-6 bmargin">
            <div class="master-slider ms-skin-default" id="masterslider2">
              <div class="ms-slide slide-1" data-delay="18">
                <h3 class="ms-layer text44"
			style="top: 190px; left:50px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="scale(1.5,1.6)"> Praesent mattis commodo augue.</h3>
                <h3 class="ms-layer text44"
			style="top: 225px; left:50px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="scale(1.5,1.6)"> Lorem ipsum dolor sit </h3>
                <img src="js/masterslider/blank.gif" data-src="http://placehold.it/600x300" alt=""/> <a href="http://player.vimeo.com/video/80567526" data-type="video"></a> </div>
              <!-- end --> 
              
            </div>
            <!-- end of slide --> 
            
          </div>
          <!--end item--> 
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row slide-controls-color-8">
        <div class="col-md-6">
          <h3 class=" roboto-slab uppercase less-mar3">Latest News</h3>
          <div class="title-line-9 less-margin align-center"></div>
          <div class="clearfix"></div>
          <br/>
          <div id="owl-demo3" class="owl-carousel">
            <div class="item">
              <div class="feature-box-82 bmargin">
                <div class="col-md-6 nopadding"> <a href="#">
                  <div class="image-holder">
                    <div class="post-info">
                      <div class="post-infoicon"><i class="fa fa-heart"></i> 5</div>
                      <div class="post-infoicon"><i class="fa fa-comment"></i> 20</div>
                      <div class="post-infoicon"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <img src="http://placehold.it/1000x1000" alt="" class="img-responsive"/> </div>
                  </a> </div>
                <div class="col-md-6">
                  <div class="text-box padding-3">
                    <h5 class="uppercase roboto-slab font-weight-4"><a href="#">Chemistry Post</a></h5>
                    <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Habib Mustapha</span> <span><i class="fa fa-comments-o"></i> 15</span> </div>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                  </div>
                </div>
              </div>
              <!--end item-->
              <div class="col-divider-margin-3"></div>
              <div class="feature-box-82 active bmargin">
                <div class="col-md-6 nopadding"> <a href="#">
                  <div class="image-holder">
                    <div class="post-info">
                      <div class="post-infoicon"><i class="fa fa-heart"></i> 5</div>
                      <div class="post-infoicon"><i class="fa fa-comment"></i> 20</div>
                      <div class="post-infoicon"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <img src="http://placehold.it/1000x1000" alt="" class="img-responsive"/> </div>
                  </a> </div>
                <div class="col-md-6">
                  <div class="text-box padding-3">
                    <h5 class="uppercase roboto-slab font-weight-4"><a href="#">Library</a></h5>
                    <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Musbahu Ibrahim</span> <span><i class="fa fa-comments-o"></i> 15</span> </div>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                  </div>
                </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end slide item-->
            
            <div class="item">
              <div class="feature-box-82 bmargin">
                <div class="col-md-6 nopadding"> <a href="#">
                  <div class="image-holder">
                    <div class="post-info">
                      <div class="post-infoicon"><i class="fa fa-heart"></i> 5</div>
                      <div class="post-infoicon"><i class="fa fa-comment"></i> 20</div>
                      <div class="post-infoicon"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <img src="http://placehold.it/1000x1000" alt="" class="img-responsive"/> </div>
                  </a> </div>
                <div class="col-md-6">
                  <div class="text-box padding-3">
                    <h5 class="uppercase roboto-slab font-weight-4"><a href="#">Science Blog</a></h5>
                    <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15</span> </div>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                  </div>
                </div>
              </div>
              <!--end item-->
              
              <div class="feature-box-82 active bmargin">
                <div class="col-md-6 nopadding"> <a href="#">
                  <div class="image-holder">
                    <div class="post-info">
                      <div class="post-infoicon"><i class="fa fa-heart"></i> 5</div>
                      <div class="post-infoicon"><i class="fa fa-comment"></i> 20</div>
                      <div class="post-infoicon"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <img src="http://placehold.it/1000x1000" alt="" class="img-responsive"/> </div>
                  </a> </div>
                <div class="col-md-6">
                  <div class="text-box padding-3">
                    <h5 class="uppercase roboto-slab font-weight-4"><a href="#">Library</a></h5>
                    <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15</span> </div>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end slide item--> 
            
          </div>
          <!--end carousel--> 
          
        </div>
        <!--end item-->
        
        <div class="col-md-6">
          <h3 class=" roboto-slab uppercase less-mar3">Latest Events</h3>
          <div class="title-line-9 less-margin align-center"></div>
          <div class="clearfix"></div>
          <br/>
          <div id="owl-demo2" class="owl-carousel">
            <div class="item">
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Monday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Tuesday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Wednesday, March 16</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Thursday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
            </div>
            <!--end slide item-->
            
            <div class="item">
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Monday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Tuesday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Wednesday, March 16</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Thursday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
            </div>
            <!--end slide item--> 
          </div>
          <!--end carousel--> 
        </div>
        <!--end item--> 
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class="parallax-section58">
    <div class="section-overlay bg-opacity-7">
      <div class="container sec-tpadding-3 sec-bpadding-3">
        <div class="row">
          <div class="col-md-8 col-centered">
            <h1 class="raleway text-white parallax-section-title uppercase">Message from the HOD</h1>
            <br/>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit <span class="text-pink-3">Suspendisse et justo Praesent</span> mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula Etiam sit amet dolor Vestibulum  consectetuer adipiscing elit.</p>
            <br/>
            <a class="btn btn-pink-3 btn-round" href="#">Read more</a> <br/>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 clearfix">
          <div class="item-holder">
            <h4 class=" roboto-slab uppercase less-mar3">Why Choose Chemistry</h4>
            <div class="title-line-9 less-margin align-center"></div>
            <br/>
            <br/>
            <h5 class="uppercase oswald font-weight-3 text-pink-3">Research and teaching</h5>
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis.</p>
            <br/>
            <div class="divider-line solid light opacity-7"></div>
            <br/>
            <h5 class="uppercase oswald font-weight-3 text-pink-3">Careers & Offers</h5>
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis.</p>
            <br/>
            <a class="read-more pink-3" href="#">Read More <i class="fa fa-angle-double-right"></i></a></div>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6 clearfix">
          <div class="item-holder">
            <h4 class=" roboto-slab uppercase less-mar3">Event Gallery</h4>
            <div class="title-line-9 less-margin align-center"></div>
            <br/>
            <br/>
            <div id="owl-demo4" class="owl-carousel">
              <div class="item">
                <div class="feature-box24 bmargin">
                  <div class="inner"> <br/>
                    <br/>
                    <h4 class="text-white uppercase oswald font-weight-3">Vivamus et justo in nunc </h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo.</p>
                    <br/>
                  </div>
                  <div class="image-holder">
                    <div class="overlay"></div>
                    <img src="http://placehold.it/450x350" alt="" class="img-responsive"/> </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box24 bmargin">
                  <div class="inner"> <br/>
                    <br/>
                    <h4 class="text-white uppercase oswald font-weight-3">Vivamus et justo in nunc </h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo.</p>
                    <br/>
                  </div>
                  <div class="image-holder">
                    <div class="overlay"></div>
                    <img src="http://placehold.it/450x350" alt="" class="img-responsive"/> </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box24 bmargin">
                  <div class="inner"> <br/>
                    <br/>
                    <h4 class="text-white uppercase oswald font-weight-3">Vivamus et justo in nunc </h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo.</p>
                    <br/>
                  </div>
                  <div class="image-holder">
                    <div class="overlay"></div>
                    <img src="http://placehold.it/450x350" alt="" class="img-responsive"/> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 last">
          <h4 class=" roboto-slab uppercase less-mar3">Features</h4>
          <div class="title-line-9 less-margin align-center"></div>
          <br/>
          <br/>
          <div class="item-holder">
            <div class="accordion_holder">
              <div class="accordion_example1"> 
                
                <!-- Section 1 -->
                <div class="accordion_in two st3 acc_active">
                  <div class="acc_head">student learning opportunities</div>
                  <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. </div>
                </div>
                
                <!-- Section 2 -->
                <div class="accordion_in two st3">
                  <div class="acc_head">Student storys</div>
                  <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. </div>
                </div>
                
                <!-- Section 3 -->
                <div class="accordion_in two st3">
                  <div class="acc_head">New courses</div>
                  <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Accordion end --> 
        </div>
      </div>
    </div>
  </section>
@endsection