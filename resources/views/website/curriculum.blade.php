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
              <h2 class="text-white font-36">Curriculum</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Curriculum</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Curriculum Overview -->
    <section class="divider">
      <div class="container">
        <div class="row pt-10">
          <div class="col-md-6">
            <h4 class="mt-0 mb-30 line-bottom">Curriculum Overview</h4>
            <p>At Christ The King Nursery and Primary School Ndegeya, we are committed to providing a comprehensive and holistic curriculum that nurtures the intellectual, social, emotional, and physical development of our students. Our curriculum is designed to meet the needs of each child, promoting critical thinking, creativity, and moral values.</p>
            <p>We follow the national curriculum standards and integrate modern teaching methodologies to create a stimulating and engaging learning environment. Our experienced and dedicated teachers ensure that every child receives individual attention and support to excel academically and personally.</p>
          </div>
          <div class="col-md-6">
            <h4 class="mt-0 mb-30 line-bottom">Key Features of Our Curriculum</h4>
            <ul>
              <li>Child-Centered Approach</li>
              <li>Integrated Learning Experiences</li>
              <li>Project-Based Learning</li>
              <li>STEAM Education (Science, Technology, Engineering, Arts, Mathematics)</li>
              <li>Value-Based Education</li>
              <li>Physical Education and Sports</li>
              <li>Co-Curricular Activities</li>
              <li>Assessment for Learning</li>
              <li>Continuous Professional Development for Teachers</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Curriculum Subjects -->
    <section class="divider">
      <div class="container ">
        <div class="row pt-10">
          <div class="col-md-12">
            <h4 class="mt-0 mb-30 line-bottom">Curriculum Subjects</h4>
            <p>Our curriculum covers a wide range of subjects, providing students with a well-rounded education. Some of the key subjects taught at Christ The King Nursery and Primary School Ndegeya include:</p>
            <ul>
              <li>English Language</li>
              <li>Mathematics</li>
              <li>Science</li>
              <li>Social Studies</li>
              <li>Religious Education</li>
              <li>Physical Education</li>
              <li>Health and Nutrition</li>
              <li>Language (Local Language)</li>
              <li>Art and Craft</li>
              <li>Music</li>
            </ul>
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
