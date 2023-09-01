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
              <h2 class="text-white font-36">Admission</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Admission</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Admission Information -->
    <section class="divider">
      <div class="container pt-50 pb-70">
        <div class="row pt-10">
          <div class="col-md-6">
            <h4 class="mt-0 mb-30 line-bottom">Admission Process</h4>
            <p>We are delighted that you are considering Christ The King Nursery and Primary School Ndegeya for your child's education. Our admission process is designed to ensure that each child receives individual attention and care, fostering an inclusive and nurturing learning environment.</p>
            <p>Our Admissions Director, Ssenkungu Noah, oversees the admission process and will be happy to assist you with any inquiries or concerns. Please feel free to contact her via email at admin@christtheking.com or by phone at +256-75320745 / +256-78255319</p>
            <h4 class="mt-30 mb-30 line-bottom">Required Documentation</h4>
            <p>Download, fill out, and provide the required documentation to admin@christtheking.com in order to register your child/ children.</p>
            <ul>
                <li ><a href="#" style="color: blue;">Admission Form</a></li>
                <li><a href="#" style="color: blue;">Medical Form</a></li>
                <li><a href="#" style="color: blue;">Parent Questionnaire</a></li>
                <li>Years of Academic Reports from the Current School</li>
                <li>Photocopy of Birth Certificate/Biographical Details from the Child’s Passport</li>
              </ul>
          </div>
          <div class="col-md-6">
            <h4 class="mt-0 mb-30 line-bottom">Review of Each Child's File for Admission</h4>
            <p>At Christ The King Nursery and Primary School Ndegeya, we strive to understand and appreciate the unique qualities of each child. We review each child's file carefully to ensure that we can provide the best educational experience for them.</p>
            <p>We look for qualities such as academic potential, social skills, and a positive attitude towards learning. Our goal is to create a diverse and inclusive community where all students can thrive.</p>
            <h4 class="mt-30 mb-30 line-bottom">The Final Stage of Enrolment</h4>
            <p>Before the student's start date, the following documents will need to be submitted:</p>
            <ul>
              <li>2 passport-sized photos of the child</li>
              <li>Emergency Contact Form</li>
              <li>Registration Fees</li>
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
