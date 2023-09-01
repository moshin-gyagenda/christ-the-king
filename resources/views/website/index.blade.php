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
            {{-- <div id="disable-preloader" class="btn btn-default btn-sm">
          Disable Preloader
        </div> --}}
        </div>

        <!-- Header -->
        @include('website.layouts.header')

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: home -->
            <section id="home" class="divider">
                <div class="container-fluid p-0">
                    <!-- START REVOLUTION SLIDER 5.0.7 -->
                    <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                        data-alias="news-gallery34"
                        style="
                margin: 0px auto;
                background-color: #ffffff;
                padding: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
              ">
                        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                        <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display: none"
                            data-version="5.0.7">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="{{ asset('uploads/1.jpg') }}" data-rotate="0" data-fstransition="fade"
                                    data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                                    data-title="Make an Impact">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('uploads/1.jpg') }}" alt="" data-bgposition="top 40%"
                                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                        class="rev-slidebg" data-no-retina />
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                        id="slide-1-layer-1" data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-start="1000" data-basealign="slide" data-responsive_offset="on"
                                        style="
                        z-index: 5;
                        background-color: rgba(0, 0, 0, 0.35);
                        border-color: rgba(0, 0, 0, 1);
                      ">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-2"
                                        data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                        data-y="['top','top','top','top']" data-voffset="['120','100','70','90']"
                                        data-fontsize="['56','46','40','36']" data-lineheight="['70','60','50','45']"
                                        data-fontweight="['800','700','700','700']" data-width="['700','650','600','420']"
                                        data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                        data-splitout="none" data-responsive_offset="on"
                                        style="
                        z-index: 6;
                        min-width: 600px;
                        max-width: 600px;
                        white-space: normal;
                      ">
                                        Christ the King Nursery
                                        <span class="text-theme-colored2">and</span> Primary School
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3"
                                        data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                        data-y="['top','top','top','top']" data-voffset="['280','220','180','180']"
                                        data-fontsize="['18','18','16','13']" data-lineheight="['30','30','28','25']"
                                        data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']"
                                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                        data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap">
                                        We provide the best education services for children of all ages, <br />
                                        focusing on academic excellence and character development.
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-4"
                                        data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']"
                                        data-y="['top','top','top','top']" data-voffset="['360','290','260','260']"
                                        data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']"
                                        data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']"
                                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap">
                                        <a href="#" class="btn btn-default btn-theme-colored2 btn-xl">Read More</a>
                                        <a href="#" class="btn btn-dark btn-theme-colored btn-xl">Register Now</a>
                                    </div>
                                </li>

                                <!-- SLIDE 2 -->
                                <li data-index="rs-2" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default" data-easeout="default"
                                    data-masterspeed="default" data-thumb="{{ asset('uploads/3.jpg') }}" data-rotate="0"
                                    data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                    data-saveperformance="off" data-title="Make an Impact">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('uploads/3.jpg') }}" alt=""
                                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        class="rev-slidebg" data-no-retina />
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                        id="slide-2-layer-1" data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-start="1000" data-basealign="slide" data-responsive_offset="on"
                                        style="
                        z-index: 5;
                        background-color: rgba(0, 0, 0, 0.35);
                        border-color: rgba(0, 0, 0, 1);
                      ">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-2"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['top','top','top','top']" data-voffset="['120','100','70','90']"
                                        data-fontsize="['28','24','24','24']" data-lineheight="['33','30','30','30']"
                                        data-fontweight="['600','600','600','600']"
                                        data-textalign="['center','center','center','center']" data-width="none"
                                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap">
                                        Providing Quality Education for Children
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-3"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['top','top','top','top']" data-voffset="['165','135','105','130']"
                                        data-fontsize="['56','46','40','36']" data-lineheight="['70','60','50','45']"
                                        data-fontweight="['800','700','700','700']"
                                        data-textalign="['center','center','center','center']"
                                        data-width="['700','650','600','420']" data-height="none"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="
                        z-index: 6;
                        min-width: 600px;
                        max-width: 600px;
                        white-space: normal;
                      ">
                                        Children can learn and grow

                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-4"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['top','top','top','top']" data-voffset="['320','260','220','220']"
                                        data-fontsize="['18','18','16','13']" data-lineheight="['30','30','28','25']"
                                        data-fontweight="['600','600','600','600']"
                                        data-textalign="['center','center','center','center']"
                                        data-width="['700','650','600','420']" data-height="none"
                                        data-whitespace="nowrap" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap">
                                        Our qualified teachers and comprehensive curriculum ensure that your child receives
                                        the best education possible
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-5"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['top','top','top','top']" data-voffset="['400','340','300','300']"
                                        data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']"
                                        data-fontweight="['600','600','600','600']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap">
                                        <a href="#" class="btn btn-dark btn-theme-colored2 btn-xl">Read More</a>
                                    </div>
                                </li>

                                <!-- SLIDE 3 -->
                                <li data-index="rs-3" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default" data-easeout="default"
                                    data-masterspeed="default" data-thumb="{{ asset('uploads/2.jpg') }}" data-rotate="0"
                                    data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                    data-saveperformance="off" data-title="Make an Impact">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('uploads/2.jpg') }}" alt="" data-bgposition="top 30%"
                                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                        class="rev-slidebg" data-no-retina />
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                        id="slide-3-layer-1" data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-start="1000" data-basealign="slide" data-responsive_offset="on"
                                        style="
                        z-index: 5;
                        background-color: rgba(0, 0, 0, 0.25);
                        border-color: rgba(0, 0, 0, 1);
                      ">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-2"
                                        data-x="['center','center','center','center']"
                                        data-hoffset="['310','200','100','0']" data-y="['top','top','top','top']"
                                        data-voffset="['120','100','70','90']" data-fontsize="['56','46','40','36']"
                                        data-lineheight="['70','60','50','45']"
                                        data-fontweight="['800','700','700','700']" data-width="['700','650','500','420']"
                                        data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="
                        z-index: 6;
                        min-width: 600px;
                        max-width: 600px;
                        white-space: normal;
                      ">
                                        Academic Excellence
                                        <span class="text-theme-colored2">unlock Child's Potential</span>
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-3"
                                        data-x="['center','center','center','center']"
                                        data-hoffset="['310','200','100','0']" data-y="['top','top','top','top']"
                                        data-voffset="['280','220','180','180']" data-fontsize="['18','18','16','13']"
                                        data-lineheight="['30','30','28','25']"
                                        data-fontweight="['600','600','600','600']" data-width="['700','650','500','420']"
                                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap">
                                        we strive for academic excellence. Our experienced faculty members <br />
                                        and innovative teaching methods help students reach their full potential.
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-4"
                                        data-x="['center','center','center','center']"
                                        data-hoffset="['310','200','100','0']" data-y="['top','top','top','top']"
                                        data-voffset="['360','290','260','260']" data-fontsize="['18','18','16','16']"
                                        data-lineheight="['30','30','30','30']"
                                        data-fontweight="['600','600','600','600']" data-width="['700','650','500','420']"
                                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap">
                                        <a href="#" class="btn btn-dark btn-theme-colored2 btn-xl">Read More</a>
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption rs-parallaxlevel-0" id="slide-3-layer-5"
                                        data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']"
                                        data-y="['top','top','top','top']" data-voffset="['360','290','260','260']"
                                        data-width="['700','650','600','420']" data-height="none"
                                        data-whitespace="nowrap" data-transform_idle="o:1;"
                                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        data-responsive="off"
                                        style="
                        z-index: 8;
                        white-space: nowrap;
                        outline: none;
                        box-shadow: none;
                        box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        -webkit-box-sizing: border-box;
                      ">
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom"
                                style="height: 5px; background-color: rgba(166, 216, 236, 1)"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: home-boxed -->
            <section>
                <div class="container pb-0">
                    <div class="section-content">
                        <div class="row" data-margin-top="-150px">
                            <div class="col-md-4">
                                <div
                                    class="icon-box iconbox-border border-theme-colored2 bg-theme-colored text-center p-40 mb-sm-50">
                                    <a class="icon icon-lg icon-top bg-theme-colored2 icon-rounded icon-border-effect effect-rounded"
                                        href="#">
                                        <i class="fa fa-flag text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-50 text-white">Mission</h3>
                                    <p class="text-white mb-20">
                                        To inspire and empower each child with knowledge and
                                        skills through well rounded experience of lifelong
                                        learning
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon-box text-center p-40 mb-sm-50 border-2px border-theme-colored2"
                                    data-bg-img="images/bg/motto.jpg">
                                    <div>
                                        <span class="typed-text-carousel font-20 text-white" data-speed="50"
                                            data-back_delay="600" data-loop="true">
                                            <span class="">Dedicated For Excellence</span>
                                            <span class="">Is Our School Motto</span>
                                        </span>
                                        <h4 class="font-54 text-white">Motto</h4>
                                        <a href="#" class="btn btn-default text-theme-colored mt-5 mb-10">Apply
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    class="icon-box iconbox-border border-theme-colored2 bg-theme-colored text-center p-40 mb-sm-50">
                                    <a class="icon icon-lg icon-top bg-theme-colored2 icon-rounded icon-border-effect effect-rounded"
                                        href="#">
                                        <i class="fa fa-graduation-cap text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-50 text-white">Vision</h3>
                                    <p class="text-white mb-20">
                                        To be the best school of choice in the region offering
                                        pre-primary and primary education.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: About Us -->
            <section id="about" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="section-title">About Us</h2>
                            <h3 class="section-subtitle">
                                Providing Quality Education and Lifelong Skills
                            </h3>
                            <p>
                                Christ the King Nursery and Primary School is a private school
                                located in Masaka district, specifically in the village of
                                Ndegeya, which is situated approximately ½ km from Masaka
                                district headquarters. With a rich history spanning over two
                                years, the school is committed to providing quality education
                                to underprivileged children.
                            </p>
                            <p>
                                Our mission is to transform the community by equipping
                                students with lifelong skills and offering them a quality
                                education that enables them to reach their full academic
                                potential. While the school is founded on Catholic values and
                                principles, it warmly welcomes students from all religious
                                backgrounds, fostering an inclusive and diverse learning
                                environment.
                            </p>
                            <p>
                                Christ the King Nursery and Primary School recognizes that
                                education encompasses more than just academics. Therefore, it
                                places a strong emphasis on holistic development, focusing on
                                nurturing students' physical, social, emotional, and spiritual
                                well-being. This comprehensive approach ensures that students
                                receive a well-rounded education that prepares them for
                                various aspects of life.
                            </p>
                            <p>
                                At Christ the King Nursery and Primary School, a commitment to
                                excellence permeates all aspects of education. The school
                                strives to provide a supportive and inclusive learning
                                environment that encourages curiosity, critical thinking,
                                creativity, and collaboration among students. By fostering
                                these qualities, the school aims to empower students to become
                                lifelong learners and responsible members of society. Christ the King Nursery and Primary
                                School is
                                dedicated to making a positive impact on its students and the
                                broader community. Through its focus on quality education,
                                lifelong skills development, and holistic well-being, the
                                school aims to create an environment where every student can
                                thrive and achieve their full potential.
                            </p>
                        </div>

                        <div class="col-md-6">
                            <div class="school-features">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="feature-box">
                                            <div class="circle-icon">
                                                <i class="fa fa-road fa-3x text-white"></i>
                                            </div>
                                            <h4 class="feature-title">Our Approach</h4>
                                            <p>
                                                At Christ the King, we follow a holistic approach to
                                                education, focusing on the overall development of our
                                                students. We strive to foster their intellectual,
                                                physical, social, and emotional growth, preparing them
                                                for lifelong success.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="feature-box">
                                            <div class="circle-icon">
                                                <i class="fa fa-heart fa-3x text-white"></i>
                                            </div>
                                            <h4 class="feature-title">Our Values</h4>
                                            <p>
                                                We are committed to upholding strong values such as
                                                respect, integrity, responsibility, and compassion.
                                                These values form the foundation of our school
                                                community and guide our interactions, ensuring a safe
                                                and nurturing environment for all.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="feature-box">
                                            <div class="circle-icon">
                                                <i class="fa fa-lightbulb-o fa-3x"></i>
                                            </div>
                                            <h4 class="feature-title">Our Commitment</h4>
                                            <p>
                                                We are dedicated to providing a stimulating and
                                                inclusive learning environment. We are committed to
                                                fostering a love for learning, nurturing creativity,
                                                and empowering our students to become confident and
                                                responsible individuals.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="feature-box">
                                            <div class="circle-icon">
                                                <i class="fa fa-users fa-3x text-white"></i>
                                            </div>
                                            <h4 class="feature-title">Community Engagement</h4>
                                            <p>
                                                At Christ the King, we strongly believe in community
                                                engagement. We actively involve our students in
                                                community service projects and initiatives, fostering
                                                a sense of social responsibility and empathy towards
                                                others.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="head-teacher" class="section-padding">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center">
                                <img src="{{ asset('uploads/noah.jpg') }}" alt="Head Teacher Image" class="img-fluid"
                                    style="height: 450px; width:450px; border-radius:80px 10px ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="section-title">Meet Our Head Teacher</h2>
                            <h3 class="section-subtitle">Ssenkungu Noah</h3>
                            <p>
                                Ssenkungu Noah is the dedicated Head Teacher of Christ the King Nursery and Primary School.
                                He
                                brings with him a wealth of experience and a deep passion for education. With his
                                leadership, the school has continued to flourish and maintain its commitment to providing
                                quality education to underprivileged children.
                            </p>
                            <p>
                                Ssenkungu Noah is a firm believer in holistic development and ensures that students receive
                                a
                                well-rounded education. He actively fosters a love for learning, nurtures creativity, and
                                empowers students to become confident and responsible individuals.
                            </p>
                            <p>
                                In addition to his role in the school, The Head Teacher is deeply involved in community
                                engagement. He
                                leads various community service projects and initiatives, instilling a sense of social
                                responsibility and empathy in the school's students.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: info-boxes -->
            <section class="">
                <div class="container pt-0 pt-sm-30">
                    <div class="section-content">
                        <div class="row equal-height-inner home-boxes">
                            <div
                                class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                                <div class="sm-height-auto bg-theme-colored">
                                    <div class="text-center pt-30 pb-30">
                                        <i class="fa fa-book text-white font-64"></i>
                                        <h4 class="text-uppercase mt-20">
                                            <a href="#" class="text-white">Curriculum</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                                <div class="sm-height-auto bg-theme-colored2-darker2">
                                    <div class="text-center pt-30 pb-30">
                                        <i class="fa fa-pencil text-white font-64"></i>
                                        <h4 class="text-uppercase mt-20">
                                            <a href="#" class="text-white">Subjects</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                                <div class="sm-height-auto bg-theme-colored">
                                    <div class="text-center pt-30 pb-30">
                                        <i class="fa fa-puzzle-piece text-white font-64"></i>
                                        <h4 class="text-uppercase mt-20">
                                            <a href="#" class="text-white">Specialized Programs</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                                <div class="sm-height-auto bg-theme-colored2-darker4">
                                    <div class="text-center pt-30 pb-30">
                                        <i class="fa fa-futbol-o text-white font-64"></i>
                                        <h4 class="text-uppercase mt-20">
                                            <a href="#" class="text-white">Extracurricular Activities</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Courses -->
            <section id="facilities" class="bg-silver-light">
                <div class="container pb-40">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-uppercase line-bottom-double-line-centered mt-0">
                                    Facilities and
                                    <span class="text-theme-colored2">Infrastructure</span>
                                </h2>
                                <p>
                                    Our school provides modern and well-equipped facilities and
                                    infrastructure to enhance the learning experience of our
                                    students. Explore the different facilities we offer:
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mtli-row-clearfix">
                        <div class="owl-carousel-3col">
                            <div class="item">
                                <div class="equal-height">
                                    <div class="course-single-item style2 text-center mb-40">
                                        <div class="course-thumb">
                                            <img class="img-fullwidth" alt="" src="images/bg/b6.jpg" />
                                            <div class="price-tag"></div>
                                        </div>
                                        <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                                            <div class="course-top-part">
                                                <h4 class="line-bottom-centered mt-20">Classrooms</h4>
                                            </div>
                                            <p class="course-description mt-5">
                                                Our spacious classrooms provide a conducive
                                                environment for effective learning. Each classroom is
                                                equipped with modern teaching aids and comfortable
                                                seating arrangements.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="equal-height">
                                    <div class="course-single-item style2 text-center mb-40">
                                        <div class="course-thumb">
                                            <img class="img-fullwidth" alt="" src="images/bg/b8.jpg" />
                                            <div class="price-tag"></div>
                                        </div>
                                        <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                                            <div class="course-top-part">
                                                <h4 class="line-bottom-centered mt-20">Libraries</h4>
                                            </div>
                                            <p class="course-description mt-5">
                                                Our well-stocked libraries offer a wide range of
                                                books, reference materials, and digital resources.
                                                Students have access to a peaceful and comfortable
                                                space for reading and research.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="equal-height">
                                    <div class="course-single-item style2 text-center mb-40">
                                        <div class="course-thumb">
                                            <img class="img-fullwidth" alt="" src="images/bg/sports.jpg"
                                                height="170px" />
                                            <div class="price-tag"></div>
                                        </div>
                                        <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                                            <div class="course-top-part">
                                                <h4 class="line-bottom-centered mt-20">
                                                    Playgrounds
                                                </h4>
                                            </div>
                                            <p class="course-description mt-5">
                                                Our spacious playgrounds provide a vibrant space for
                                                students to engage in physical activities and sports.
                                                We believe in promoting a healthy and active
                                                lifestyle.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="equal-height">
                                    <div class="course-single-item style2 text-center mb-40">
                                        <div class="course-thumb">
                                            <img class="img-fullwidth" alt="" src="images/bg/new.jpg"
                                                height="170px" />
                                            <div class="price-tag"></div>
                                        </div>
                                        <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                                            <div class="course-top-part">
                                                <h4 class="line-bottom-centered mt-20">
                                                    Sports Facilities
                                                </h4>
                                            </div>
                                            <p class="course-description mt-5">
                                                Our school boasts state-of-the-art sports facilities
                                                to promote physical fitness and sportsmanship among
                                                students. These facilities include well-maintained
                                                courts, fields, and equipment for various sport.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: events -->
            <section id="event" class="bg-silver-light">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="line-bottom mt-0">
                                    <i class="fa fa-calendar mr-10"></i>Upcoming
                                    <span class="text-theme-colored2">Events</span>
                                </h2>

                                <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                                    <div class="row">
                                        <div class="col-xs-2 col-md-3 pr-0">
                                            <div
                                                class="event-date text-center bg-theme-colored2 border-1px p-0 pt-10 pb-10 sm-custom-style">
                                                <ul>
                                                    <li class="font-28 text-white font-weight-700">
                                                        26
                                                    </li>
                                                    <li class="font-18 text-white text-center text-uppercase">
                                                        OCT
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-9 pr-10 pl-10">
                                            <div class="event-content mt-0 p-5 pb-0 pt-0">
                                                <h4 class="media-heading font-weight-600">
                                                    <a href="#">Parent-Teacher Meeting</a>
                                                </h4>
                                                <p class="mb-0">
                                                    We invite all parents to attend our Parent-Teacher
                                                    Meeting. This is an opportunity to discuss your
                                                    child's progress.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="event media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                                    <div class="row">
                                        <div class="col-xs-2 col-md-3 pr-0">
                                            <div
                                                class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                                                <ul>
                                                    <li class="font-28 text-white font-weight-700">
                                                        15
                                                    </li>
                                                    <li class="font-18 text-white text-center text-uppercase">
                                                        MAR
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-9 pr-10 pl-10">
                                            <div class="event-content mt-0 p-5 pb-0 pt-0">
                                                <h4 class="media-heading font-weight-600">
                                                    <a href="#">Visitation Day</a>
                                                </h4>
                                                <p class="mb-0">
                                                    We welcome parents, guardians, and prospective
                                                    students to visit our school on Visitation Day.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                                    <div class="row">
                                        <div class="col-xs-2 col-md-3 pr-0">
                                            <div
                                                class="event-date text-center bg-theme-colored2 border-1px p-0 pt-10 pb-10 sm-custom-style">
                                                <ul>
                                                    <li class="font-28 text-white font-weight-700">
                                                        20
                                                    </li>
                                                    <li class="font-18 text-white text-center text-uppercase">
                                                        APR
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-9 pr-10 pl-10">
                                            <div class="event-content mt-0 p-5 pb-0 pt-0">
                                                <h4 class="media-heading font-weight-600">
                                                    <a href="#">Sports Day</a>
                                                </h4>
                                                <p class="mb-0">
                                                    Get ready for an exciting Sports Day event! Students
                                                    will participate in various sports activities,
                                                    showcasing their skills
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                                    <div class="row">
                                        <div class="col-xs-2 col-md-3 pr-0">
                                            <div
                                                class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                                                <ul>
                                                    <li class="font-28 text-white font-weight-700">
                                                        28
                                                    </li>
                                                    <li class="font-18 text-white text-center text-uppercase">
                                                        Feb
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-9 pr-10 pl-10">
                                            <div class="event-content mt-0 p-5 pb-0 pt-0">
                                                <h4 class="media-heading font-weight-600">
                                                    <a href="#">School Annual Day Celebration</a>
                                                </h4>
                                                <p class="mb-0">
                                                    Join us for a day of celebration as we showcase the
                                                    talents and achievements of our students.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h2 class="line-bottom mt-0">
                                    Watch Our <span class="text-theme-colored2">Video</span>
                                </h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-hover-effect play-button">
                                            <div class="effect-wrapper">
                                                <div class="thumb">
                                                    <video class="img-fullwidth" controls>
                                                        <source src="images/bg/video.mp4" type="video/mp4" />
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="overlay-shade bg-theme-colored"></div>
                                                <div class="video-button"></div>
                                                <a class="hover-link" data-lightbox-gallery="local-video"
                                                    href="images/bg/video.mp4" title="Local Video">Local Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20">
                            <div class="col-md-4">
                                <div
                                    class="icon-box bg-white left media border-1px border-theme-colored2 bg-hover-theme-colored mb-30 p-30 pb-20">
                                    <a class="media-left pull-left flip" href="#"><i
                                            class="fa fa-book text-theme-colored2"></i></a>
                                    <div class="media-body">
                                        <h4 class="media-heading heading">Popular subjects</h4>
                                        <p>Some of our popular subjects include:</p>
                                        <ul>
                                            <li>Mathematics</li>
                                            <li>English Language</li>
                                            <li>Science</li>
                                            <li>Social Studies</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    class="icon-box bg-white left media border-1px border-theme-colored2 bg-hover-theme-colored mb-30 p-30 pb-20">
                                    <a class="media-left pull-left flip" href="#"><i
                                            class="fa fa-graduation-cap text-theme-colored2"></i></a>
                                    <div class="media-body">
                                        <h4 class="media-heading heading">Best Teachers</h4>

                                        <p>
                                            Our teachers possess a deep understanding of child
                                            development and employ innovative teaching methods to
                                            engage students in their learning journey.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    class="icon-box bg-white left media border-1px border-theme-colored2 bg-hover-theme-colored mb-30 p-30 pb-20">
                                    <a class="media-left pull-left flip" href="#"><i
                                            class="fa fa-university text-theme-colored2"></i></a>
                                    <div class="media-body">
                                        <h4 class="media-heading heading">Certification</h4>

                                        <p>
                                            Our certification programs are designed to equip
                                            students with the knowledge, skills, and competencies
                                            needed for their future endeavors, necessary
                                            certifications
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Divider: Funfact -->
            <section class="divider parallax layer-overlay overlay-theme-colored-7" data-bg-color="#161176"
                data-parallax-ratio="0.7">
                <div class="container">
                    <div class="section-content text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="mt-0 mb-50 text-white">
                                    Providing Quality Education for Your Child's Future
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="pe-7s-smile mt-5 text-theme-colored2"></i>
                                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="500"
                                    data-theme="minimal">
                                    500
                                </div>
                                <h5 class="text-white text-uppercase mb-0">Happy Parents</h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="pe-7s-note2 mt-5 text-theme-colored2"></i>
                                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="18"
                                    data-theme="minimal">
                                    18
                                </div>
                                <h5 class="text-white text-uppercase mb-0">
                                    Approved Courses
                                </h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="pe-7s-users mt-5 text-theme-colored2"></i>
                                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="20"
                                    data-theme="minimal">
                                    20
                                </div>
                                <h5 class="text-white text-uppercase mb-0">
                                    Certified Teachers
                                </h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                            <div class="funfact text-center">
                                <i class="pe-7s-cup mt-5 text-theme-colored2"></i>
                                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="10"
                                    data-theme="minimal">
                                    10
                                </div>
                                <h5 class="text-white text-uppercase mb-0">
                                    Awards Received
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: team -->
            <!-- <section id="team">
                                                                      <div class="container">
                                                                        <div class="section-title text-center">
                                                                          <div class="row">
                                                                            <div class="col-md-10 col-md-offset-1">
                                                                              <h2
                                                                                class="text-uppercase line-bottom-double-line-centered mt-0"
                                                                              >
                                                                                Our <span class="text-theme-colored2">Teachers</span>
                                                                              </h2>
                                                                              <p>
                                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                                Rem autem voluptatem obcaecati! <br />ipsum dolor sit Rem
                                                                                autem voluptatem obcaecati
                                                                              </p>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                        <div class="section-content">
                                                                          <div class="row mtli-row-clearfix">
                                                                            <div class="owl-carousel-4col">
                                                                              <div class="item">
                                                                                <div class="team-members maxwidth400">
                                                                                  <div class="team-thumb">
                                                                                    <img
                                                                                      class="img-fullwidth"
                                                                                      alt=""
                                                                                      src="images/team/sm-1.jpg"
                                                                                    />
                                                                                  </div>
                                                                                  <div
                                                                                    class="bg-lighter border-1px text-center p-10 pt-20 pb-10"
                                                                                  >
                                                                                    <h3 class="mt-0">
                                                                                      <a
                                                                                        class="text-theme-colored2"
                                                                                        href="page-teachers-details.html"
                                                                                        >Sakib Vettori</a
                                                                                      >
                                                                                    </h3>
                                                                                    <h5 class="text-theme-color">Teacher - MBA</h5>
                                                                                  </div>
                                                                                  <div class="bg-theme-colored text-center pt-5">
                                                                                    <ul class="styled-icons">
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-facebook text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-twitter text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-instagram text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-skype text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                    </ul>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                              <div class="item">
                                                                                <div class="team-members maxwidth400">
                                                                                  <div class="team-thumb">
                                                                                    <img
                                                                                      class="img-fullwidth"
                                                                                      alt=""
                                                                                      src="images/team/sm-2.jpg"
                                                                                    />
                                                                                  </div>
                                                                                  <div
                                                                                    class="bg-lighter border-1px text-center p-10 pt-20 pb-10"
                                                                                  >
                                                                                    <h3 class="mt-0">
                                                                                      <a
                                                                                        class="text-theme-colored2"
                                                                                        href="page-teachers-details.html"
                                                                                      >
                                                                                        Maria Vettori</a
                                                                                      >
                                                                                    </h3>
                                                                                    <h5 class="text-theme-color">Teacher - MBA</h5>
                                                                                  </div>
                                                                                  <div class="bg-theme-colored text-center pt-5">
                                                                                    <ul class="styled-icons">
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-facebook text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-twitter text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-instagram text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-skype text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                    </ul>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                              <div class="item">
                                                                                <div class="team-members maxwidth400">
                                                                                  <div class="team-thumb">
                                                                                    <img
                                                                                      class="img-fullwidth"
                                                                                      alt=""
                                                                                      src="images/team/sm-3.jpg"
                                                                                    />
                                                                                  </div>
                                                                                  <div
                                                                                    class="bg-lighter border-1px text-center p-10 pt-20 pb-10"
                                                                                  >
                                                                                    <h3 class="mt-0">
                                                                                      <a
                                                                                        class="text-theme-colored2"
                                                                                        href="page-teachers-details.html"
                                                                                      >
                                                                                        Sakib Martin</a
                                                                                      >
                                                                                    </h3>
                                                                                    <h5 class="text-theme-color">Teacher - MBA</h5>
                                                                                  </div>
                                                                                  <div class="bg-theme-colored text-center pt-5">
                                                                                    <ul class="styled-icons">
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-facebook text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-twitter text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-instagram text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-skype text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                    </ul>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                              <div class="item">
                                                                                <div class="team-members maxwidth400">
                                                                                  <div class="team-thumb">
                                                                                    <img
                                                                                      class="img-fullwidth"
                                                                                      alt=""
                                                                                      src="images/team/sm-4.jpg"
                                                                                    />
                                                                                  </div>
                                                                                  <div
                                                                                    class="bg-lighter border-1px text-center p-10 pt-20 pb-10"
                                                                                  >
                                                                                    <h3 class="mt-0">
                                                                                      <a
                                                                                        class="text-theme-colored2"
                                                                                        href="page-teachers-details.html"
                                                                                      >
                                                                                        Maria Martin</a
                                                                                      >
                                                                                    </h3>
                                                                                    <h5 class="text-theme-color">Teacher - MBA</h5>
                                                                                  </div>
                                                                                  <div class="bg-theme-colored text-center pt-5">
                                                                                    <ul class="styled-icons">
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-facebook text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-twitter text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-instagram text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                      <li>
                                                                                        <a href="#"
                                                                                          ><i class="fa fa-skype text-white"></i
                                                                                        ></a>
                                                                                      </li>
                                                                                    </ul>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </section> -->

            <!-- Section: Gallery -->
            <section id="gallery">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <h2 class="text-uppercase line-bottom-double-line-centered mt-0">
                                    Campus <span class="text-theme-colored2">Gallery</span>
                                </h2>
                                <p>
                                    Explore our beautiful campus through these images. Discover the stunning scenery and
                                    vibrant life on our campus.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="section-content text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Portfolio Gallery Grid -->
                                <div class="gallery-isotope default-animation-effect grid-4 masonry gutter-small clearfix"
                                    data-lightbox="gallery">
                                    <!-- grid sizer for Masonry -->
                                    <div class="gallery-item gallery-item-sizer"></div>

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item wide">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/bg/b5.jpg" alt="project" />
                                            <div class="overlay-shade bg-theme-colored"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                                                        <a data-lightbox="image" href="images/bg/bg5.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="hover-link" data-lightbox="image" href="images/bg/bg5.jpg">View
                                                more</a>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/bg/bg3.jpg" alt="project" />
                                            <div class="overlay-shade bg-theme-colored"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                                                        <a data-lightbox="image" href="images/bg/bg3.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="hover-link" data-lightbox="image" href="images/bg/bg3.jpg">View
                                                more</a>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/bg/bg6.jpg" alt="project" />
                                            <div class="overlay-shade bg-theme-colored"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                                                        <a data-lightbox="image" href="images/bg/bg6.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="hover-link" data-lightbox="image" href="images/bg/bg6.jpg">View
                                                more</a>
                                        </div>
                                    </div>

                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/bg/b7.jpg" alt="project" />
                                            <div class="overlay-shade bg-theme-colored"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                                                        <a data-lightbox="image" href="images/bg/b7.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="hover-link" data-lightbox="image" href="images/bg/b7.jpg">View
                                                more</a>
                                        </div>
                                    </div>

                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/bg/new.jpg" alt="project" />
                                            <div class="overlay-shade bg-theme-colored"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                                                        <a data-lightbox="image" href="images/bg/new.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="hover-link" data-lightbox="image" href="images/bg/new.jpg">View
                                                more</a>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/bg/b10.jpg" alt="project" />
                                            <div class="overlay-shade bg-theme-colored"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                                                        <a data-lightbox="image" href="images/bg/b10.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="hover-link" data-lightbox="image" href="images/bg/b10.jpg">View
                                                more</a>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/bg/b8.jpg" alt="project" />
                                            <div class="overlay-shade bg-theme-colored"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                                                        <a data-lightbox="image" href="images/bg/b8.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="hover-link" data-lightbox="image" href="images/bg/b8.jpg">View
                                                more</a>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/bg/bg1.jpg" alt="project" />
                                            <div class="overlay-shade bg-theme-colored"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                                                        <a data-lightbox="image" href="images/bg/bg1.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="hover-link" data-lightbox="image" href="images/bg/bg1.jpg">View
                                                more</a>
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

            <!-- Divider: testimonials -->
            <section class="divider layer-overlay overlay-theme-colored-5" data-bg-color="#161176">
                <div class="container pt-60 pb-60">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="line-bottom-double-line-centered text-white text-center mt-0 mb-0">
                                Feedback From Our Parents
                            </h2>
                            <div class="text-center mb-30">
                                <i class="icon_quotations font-72 text-gray-lightgray"></i>
                            </div>
                            <div class="owl-carousel-1col" data-dots="true">
                                <div class="item">
                                    <div class="testimonial-wrapper text-center">
                                        <div class="thumb">
                                            <img class="img-thumbnail img-circle" alt="" src="images/bg/mosh.jpg"
                                                height="50px" width="50px" />
                                        </div>

                                        <div class="content pt-10">
                                            <p class="lead text-white">
                                                Christ the King Nursery and Primary School has been an
                                                amazing educational institution for my child. The
                                                teachers are dedicated, caring, and provide a
                                                nurturing environment for learning. I am impressed
                                                with the school's commitment to academic excellence
                                                and character development. Highly recommended!
                                            </p>
                                            <h4 class="author text-theme-colored2 mb-0">
                                                Kivumbi Henry
                                            </h4>
                                            <h6 class="title text-white mt-0 mb-15">Parent</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-wrapper text-center">
                                        <div class="thumb">
                                            <img class="img-thumbnail img-circle" alt="" src="images/bg/mosh.jpg"
                                                height="50px" width="50px" />
                                        </div>

                                        <div class="content pt-10">
                                            <p class="lead text-white">
                                                I couldn't be happier with the quality of education
                                                and the overall experience my child is having at
                                                Christ the King Nursery and Primary School. The school
                                                fosters a love for learning, encourages creativity,
                                                and promotes a sense of community. The staff goes
                                                above and beyond to ensure every child's needs are
                                                met. Thank you for providing such a wonderful
                                                educational environment!
                                            </p>
                                            <h4 class="author text-theme-colored2 mb-0">
                                                Ssenkungu Noah
                                            </h4>
                                            <h6 class="title text-white mt-0 mb-15">Parent</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-wrapper text-center">
                                        <div class="thumb">
                                            <img class="img-thumbnail img-circle" alt="" src="images/bg/mosh.jpg"
                                                height="50px" width="50px" />
                                        </div>

                                        <div class="content pt-10">
                                            <p class="lead text-white">
                                                As a parent, I am grateful to have chosen Christ the
                                                King Nursery and Primary School for my child's
                                                education. The school provides a holistic approach to
                                                learning, focusing not only on academic growth but
                                                also on character development and values. The teachers
                                                are passionate and dedicated, creating a positive and
                                                engaging learning environment. I highly recommend this
                                                school to all parents!
                                            </p>
                                            <h4 class="author text-theme-colored2 mb-0">
                                                Gaygenda Mosh
                                            </h4>
                                            <h6 class="title text-white mt-0 mb-15">Parent</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: blog -->
            <section id="blog" class="bg-silver-light">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <h2 class="text-uppercase line-bottom-double-line-centered mt-0">
                                    Latest <span class="text-theme-colored2">News</span>
                                </h2>
                                <p>
                                    Stay updated with the latest news and events happening at
                                    Christ the King Nursery and Primary School.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                                    <div class="item">
                                        <article class="post clearfix campaign mb-30">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb">
                                                    <img src="images/bg/bg3.jpg" alt=""
                                                        class="img-responsive img-fullwidth" />
                                                </div>
                                                <div
                                                    class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                    <ul>
                                                        <li class="font-16 text-white font-weight-600">
                                                            28
                                                        </li>
                                                        <li class="font-12 text-white text-uppercase">
                                                            Feb
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="entry-content p-20 bg-white">
                                                <div class="entry-meta media mt-0 mb-10">
                                                    <div class="media-body pl-0">
                                                        <div class="event-content pull-left flip">
                                                            <h3 class="entry-title text-white text-capitalize m-0 mt-5">
                                                                <a href="blog-single-left-sidebar.html">Exciting Field Trip
                                                                    to the Zoo</a>
                                                            </h3>
                                                            <span class="mb-10 text-gray-darkgray mr-10">
                                                                <i
                                                                    class="fa fa-commenting-o mr-5 text-theme-colored"></i>214
                                                                Comments
                                                            </span>
                                                            <span class="mb-10 text-gray-darkgray mr-10">
                                                                <i class="fa fa-heart-o mr-5 text-theme-colored"></i>895
                                                                Likes
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-5">
                                                    Our students had an amazing time on their recent
                                                    field trip to the zoo. They had the opportunity to
                                                    learn about various animals and their habitats. They
                                                    were excited to see lions, elephants, and giraffes
                                                    up close. The trip was both educational and fun for
                                                    everyone.
                                                </p>
                                                <a class="btn btn-theme-colored2 btn-sm text-white"
                                                    href="blog-single-left-sidebar.html">View Details</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item">
                                        <article class="post clearfix campaign mb-30">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb">
                                                    <img src="images/bg/b10.jpg" alt=""
                                                        class="img-responsive img-fullwidth" />
                                                </div>
                                                <div
                                                    class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                    <ul>
                                                        <li class="font-16 text-white font-weight-600">
                                                            28
                                                        </li>
                                                        <li class="font-12 text-white text-uppercase">
                                                            Feb
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="entry-content p-20 bg-white">
                                                <div class="entry-meta media mt-0 mb-10">
                                                    <div class="media-body pl-0">
                                                        <div class="event-content pull-left flip">
                                                            <h3 class="entry-title text-white text-capitalize m-0 mt-5">
                                                                <a href="#">Scholarship Program for Outstanding
                                                                    Students</a>
                                                            </h3>
                                                            <span class="mb-10 text-gray-darkgray mr-10">
                                                                <i
                                                                    class="fa fa-commenting-o mr-5 text-theme-colored"></i>214
                                                                Comments
                                                            </span>
                                                            <span class="mb-10 text-gray-darkgray mr-10">
                                                                <i class="fa fa-heart-o mr-5 text-theme-colored"></i>895
                                                                Likes
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-5">
                                                    We are proud to announce our new scholarship program
                                                    for outstanding students. We believe in rewarding
                                                    exceptional academic performance and dedication to
                                                    learning. The scholarship program aims to provide
                                                    financial assistance to deserv....
                                                </p>
                                                <a class="btn btn-theme-colored2 btn-sm text-white"
                                                    href="blog-single-left-sidebar.html">View Details</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item">
                                        <article class="post clearfix campaign mb-30">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb">
                                                    <img src="images/bg/b5.jpg" alt=""
                                                        class="img-responsive img-fullwidth" />
                                                </div>
                                                <div
                                                    class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                    <ul>
                                                        <li class="font-16 text-white font-weight-600">
                                                            28
                                                        </li>
                                                        <li class="font-12 text-whitetext-uppercase">
                                                            Feb
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="entry-content p-20 bg-white">
                                                <div class="entry-meta media mt-0 mb-10">
                                                    <div class="media-body pl-0">
                                                        <div class="event-content pull-left flip">
                                                            <h3
                                                                class="entry-title text-white text-capitalize font-weight-600 m-0 mt-5">
                                                                <a href="blog-single-left-sidebar.html">Parent-Teacher
                                                                    Conference Announcement</a>
                                                            </h3>
                                                            <span class="mb-10 text-gray-darkgray mr-10">
                                                                <i
                                                                    class="fa fa-commenting-o mr-5 text-theme-colored"></i>214
                                                                Comments
                                                            </span>
                                                            <span class="mb-10 text-gray-darkgray mr-10">
                                                                <i class="fa fa-heart-o mr-5 text-theme-colored"></i>895
                                                                Likes
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-5">
                                                    We would like to invite all parents to attend the
                                                    upcoming parent-teacher conference. It is an
                                                    excellent opportunity to discuss your child's
                                                    progress, academic performance, and any concerns or
                                                    questions you may have.
                                                </p>
                                                <a class="btn btn-theme-colored2 btn-sm text-white"
                                                    href="blog-single-left-sidebar.html">View Details</a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Divider: Clients -->
            <!-- <section class="clients bg-theme-colored2">
                                                                      <div class="container pt-10 pb-0">
                                                                        <div class="row">
                                                                          <div class="col-md-12">

                                                                            <div class="owl-carousel-6col text-center">
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w1.png" alt="" /></a>
                                                                              </div>
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w2.png" alt="" /></a>
                                                                              </div>
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w3.png" alt="" /></a>
                                                                              </div>
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w4.png" alt="" /></a>
                                                                              </div>
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w5.png" alt="" /></a>
                                                                              </div>
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w6.png" alt="" /></a>
                                                                              </div>
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w3.png" alt="" /></a>
                                                                              </div>
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w4.png" alt="" /></a>
                                                                              </div>
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w5.png" alt="" /></a>
                                                                              </div>
                                                                              <div class="item">
                                                                                <a href="#"><img src="images/clients/w6.png" alt="" /></a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </section> -->
        </div>
        <!-- end main-content -->

        <!-- Footer -->
        @include('website.layouts.footer')

        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
@endsection
