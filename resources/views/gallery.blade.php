@extends('layout.main')

@section('site')
<section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase">We Are Chemistry</h4>
        <h5 class="text-white uppercase">Changing the worl with nothing but science</h5>
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="{{ asset('files/images/gallery-banner.jpg')}}" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  
   <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Gallery</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="index.html">Home</a><i> / </i> Gallery</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
 <section class="sec-tpadding-2">
    <div class="container">
      <div class="row">
          <h3 class=" roboto-slab uppercase less-mar3">Gallery</h3>
            <div class="title-line-9 less-margin align-center"></div>
            <div class="clearfix"></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="demo-full-width">
          <div id="grid-container" class="cbp">
            <div class="cbp-item identity logos"> <a href="{{ asset('files/images/gallery/1.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Suspendisse Imperdiet<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{ asset('files/images/gallery/1.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Suspendisse Imperdiet </div>
                    <div class="cbp-l-caption-desc">by Codelayers</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item web-design"> <a href="{{ asset('files/images/gallery/2.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Magna Tempus Urna<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{ asset('files/images/gallery/2.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Magna Tempus Urna</div>
                    <div class="cbp-l-caption-desc">by Codelayers</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item motion identity"> <a href="{{ asset('files/images/gallery/3.jpg')}}" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{ asset('files/images/gallery/3.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Maecenas Sed </div>
                    <div class="cbp-l-caption-desc">by Codelayers</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item identity graphic"> <a href="{{ asset('files/images/gallery/4.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Quisque Ornare <br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{ asset('files/images/gallery/4.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Quisque Ornare </div>
                    <div class="cbp-l-caption-desc">by Codelayers</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item motion logos"> <a href="{{ asset('files/images/gallery/11.jpeg')}}" class="cbp-caption cbp-lightbox" data-title="Skateshop Website<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{ asset('files/images/gallery/11.jpeg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Hendrerit Condimentum</div>
                    <div class="cbp-l-caption-desc">by Codelayers</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item web-design"> <a href="{{ asset('files/images/gallery/6.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Donec Dapibus Placerat <br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{ asset('files/images/gallery/6.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Donec Dapibus Placerat </div>
                    <div class="cbp-l-caption-desc">by Codelayers</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item identity motion"> <a href="{{ asset('files/images/gallery/7.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Mauris non Quam ac eros<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{ asset('files/images/gallery/7.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Mauris non Quam ac eros </div>
                    <div class="cbp-l-caption-desc">by Codelayers</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item web-design graphic"> <a href="{{ asset('files/images/gallery/9.jpeg')}}" class="cbp-caption cbp-lightbox" data-title="Vivamus Vulputate <br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{ asset('files/images/gallery/9.jpeg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Vivamus Vulputate </div>
                    <div class="cbp-l-caption-desc">by Codelayers</div>
                  </div>
                </div>
              </div>
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection