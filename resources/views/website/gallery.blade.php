@extends('website.layouts.master')
@section('content')
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
        <div class="preloader-eight-spinning">
            <div class="cssload-lt"></div>
            <div class="cssload-rt"></div>
            <div class="cssload-lb"></div>
            <div class="cssload-rb"></div>
        </div>
    </div>

</div>

  <!-- Header -->
  @include('website.layouts.header')

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-white font-36">Gallery</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Gallery</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Works Filter -->
              <div class="portfolio-filter font-alt align-center">
                <a href="#" class="active" data-filter="*">All</a>
                <a href="#select1" class="" data-filter=".select1">Photos</a>
                <a href="#select2" class="" data-filter=".select2">Campus</a>
                <a href="#select3" class="" data-filter=".select3">Students</a>
              </div>
              <!-- End Works Filter -->

              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix" style="position: relative; height: 495px;">

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1" style="position: absolute; left: 0px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/b5.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/b6.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b8.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1" style="position: absolute; left: 285px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/b8.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/b10.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b11.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2" style="position: absolute; left: 570px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/bg3.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/b10.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b10.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3" style="position: absolute; left: 855px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/bg1.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/bg3.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/bg4.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1" style="position: absolute; left: 0px; top: 165px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/b5.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/b6.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b10.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3" style="position: absolute; left: 285px; top: 165px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/b10.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/b11.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b8.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2" style="position: absolute; left: 570px; top: 165px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/b10.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/b6.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/bg1.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3" style="position: absolute; left: 855px; top: 165px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/b10.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/b5.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b8.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1" style="position: absolute; left: 0px; top: 330px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/b7.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/b11.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b10.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2" style="position: absolute; left: 285px; top: 330px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/bg3.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/bg4.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b5.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1" style="position: absolute; left: 570px; top: 330px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/b5.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/b7.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b6.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3" style="position: absolute; left: 855px; top: 330px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{ asset('images/bg/b5.jpg')}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="{{ asset('images/bg/bg1.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ asset('images/bg/b8.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->

  @include('website.layouts.footer')
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
@endsection
