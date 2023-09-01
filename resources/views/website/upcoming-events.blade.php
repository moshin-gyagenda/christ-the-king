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
    <div class="main-content bg-lighter">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
            <div class="container pt-70 pb-20">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title text-white text-center">Upcoming Events</h2>
                            <ol class="breadcrumb text-left text-black mt-10">
                                <li><a href="#">Home</a></li>
                                <li class="active">Upcoming Events</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Upcoming Events section - Column 1 -->
                        <div class="event media mt-0 no-bg no-border">
                            <!-- Event 1 -->
                            <div class="event-date text-center media-left">
                                <ul>
                                    <li class="font-24 text-theme-colored font-weight-600 border-bottom">25</li>
                                    <li class="font-18 text-center text-uppercase text-theme-colored font-weight-600">Jul</li>
                                </ul>
                            </div>
                            <div class="event-content media-body">
                                <div class="event-meta media">
                                    <div class="event-meta media-body">
                                        <h4 class="event-title media-heading font-weight-600 m-0 mb-5">
                                            Graduation Day Ceremony</h4>
                                        <p class="event-location font-14 text-gray-darkgray mt-0">
                                            <i class="fa fa-map-marker mr-5"></i> Christ the King Nursery and Primary School, Masaka</p>
                                    </div>
                                </div>
                                <p>
                                    The Graduation Day Ceremony will take place on July 25th. We are proud to celebrate the achievements of our
                                    graduating students. It will be a joyous event filled with music, speeches, and awards. Join us in
                                    celebrating this milestone in our students' lives.
                                </p>
                                <img src="{{ asset('images/bg/b10.jpg') }}" alt="Graduation Day Ceremony" class="img-responsive mb-20">
                                <a class="btn btn-sm btn-theme-colored mt-10 mb-sm-30" href="events-details.html">View Details</a>
                            </div>
                        </div>

                        <!-- Add more events if needed -->
                    </div>

                    <div class="col-md-6">
                        <!-- Upcoming Events section - Column 2 -->
                        <div class="event media mt-0 no-bg no-border">
                            <!-- Event 2 -->
                            <div class="event-date text-center media-left">
                                <ul>
                                    <li class="font-24 text-theme-colored font-weight-600 border-bottom">15</li>
                                    <li class="font-18 text-center text-uppercase text-theme-colored font-weight-600">Aug</li>
                                </ul>
                            </div>
                            <div class="event-content media-body">
                                <div class="event-meta media">
                                    <div class="event-meta media-body">
                                        <h4 class="event-title media-heading font-weight-600 m-0 mb-5">
                                            Science Fair Exhibition</h4>
                                        <p class="event-location font-14 text-gray-darkgray mt-0">
                                            <i class="fa fa-map-marker mr-5"></i> Christ the King Nursery and Primary School, Masaka</p>
                                    </div>
                                </div>
                                <p>
                                    Join us for the Science Fair Exhibition on August 15th. Our students have been working hard on exciting
                                    science projects that they will showcase during the event. It's a great opportunity to see their creativity
                                    and scientific knowledge in action.
                                </p>
                                <img src="{{ asset('images/bg/bg3.jpg') }}" alt="Science Fair Exhibition" class="img-responsive mb-20">
                                <a class="btn btn-sm btn-theme-colored mt-10 mb-sm-30" href="events-details.html">View Details</a>
                            </div>
                        </div>

                        <!-- Add more events if needed -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    @include('website.layouts.footer')

    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- end wrapper -->
@endsection
