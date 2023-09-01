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
              <h2 class="text-white font-36">Contact</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-50 pb-70">
        <div class="row pt-10">
          <div class="col-md-5">
            <h4 class="mt-0 mb-30 line-bottom">Find Our Location</h4>
            <!-- Google Map HTML Codes -->

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.764475055103!2d31.727995273895168!3d-0.2976702353424132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d78c71ddd488d7%3A0xb26fc34b3cc29aa2!2sNdegeya%20Trading%20Center!5e0!3m2!1sen!2sug!4v1690046826968!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


          </div>
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom"> Please feel free to reach out to us</h4>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="http://thememascot.net/demo/personal/s/studypro/j/demo/includes/sendmail.php" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group mb-30">
                <textarea id="form_message" name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-flat btn-default btn-theme-colored mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-flat btn-theme-colored2 text-white">Reset</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
              <h4>Call Us</h4>
              <h6 class="text-gray">0759557325 / 0782552319</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2"></i>
              <h4>Address</h4>
              <h6 class="text-gray">Ndegeya-Masaka Uganda</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
              <h4>Email</h4>
              <h6 class="text-gray">info@christtheking.com</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-fax font-36 mb-10 text-theme-colored2"></i>
              <h4>Fax</h4>
              <h6 class="text-gray">+256-78255319</h6>
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
