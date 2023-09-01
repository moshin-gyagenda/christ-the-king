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
              <h2 class="title text-white text-center">FAQ</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active">Faqs</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <!-- FAQs section -->
        <div id="accordion1" class="panel-group accordion">
            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="active"
                        aria-expanded="true"> <span class="open-sub"></span> <strong style="color:blue;">Q. What are
                            the school's operating hours?</strong></a> </div>
                <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                        <p>Christ the King Nursery and Primary School operates from Monday to Friday, with classes
                            starting at 8:00 AM and ending at 3:30 PM.</p>
                    </div>
                </div>
            </div>

            <!-- Add other FAQs in a similar manner -->
            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" aria-expanded="false">
                        <span class="open-sub"></span> <strong style="color:blue;">Q. What grades does the school
                            offer?</strong></a> </div>
                <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                        <p>We offer nursery education for children aged 3 to 5 years and primary education from Primary
                            1 to Primary 7.</p>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="collapsed"
                        aria-expanded="false"> <span class="open-sub"></span> <strong style="color:blue;">Q. What is
                            the school's admission process?</strong></a> </div>
                <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                        <p>To enroll your child, please visit our admissions office or website to obtain the admission
                            form. After submitting the form, we will schedule an entrance assessment and interview with
                            both the child and parent/guardian.</p>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="collapsed"
                        aria-expanded="false"> <span class="open-sub"></span> <strong style="color:blue;">Q. What is
                            the school's teaching approach?</strong></a> </div>
                <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                        <p>At Christ the King, we follow a child-centered teaching approach that focuses on fostering
                            critical thinking, creativity, and moral values. We strive to create a nurturing environment
                            where every child can thrive academically and personally.</p>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="collapsed"
                        aria-expanded="false"> <span class="open-sub"></span> <strong style="color:blue;">Q. Are there
                            any extracurricular activities offered?</strong></a> </div>
                <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                        <p>Yes, we offer a variety of extracurricular activities, including sports, music, arts, and
                            cultural clubs. These activities help students develop their talents and interests outside
                            of the regular academic curriculum.</p>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion16" class="collapsed"
                        aria-expanded="false"> <span class="open-sub"></span> <strong style="color:blue;">Q. What
                            safety measures are in place at the school?</strong></a> </div>
                <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                        <p>The safety and well-being of our students are our top priorities. We have security personnel,
                            surveillance cameras, and strict access control measures in place. Additionally, all staff
                            members are trained in emergency procedures.</p>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion17" class="collapsed"
                        aria-expanded="false"> <span class="open-sub"></span> <strong style="color:blue;">Q. Does the
                            school provide transportation services?</strong></a> </div>
                <div id="accordion17" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                        <p>Yes, we offer safe and reliable transportation services for students. Our school buses cover
                            specific routes and ensure that students reach school and return home safely.</p>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion18" class="collapsed"
                        aria-expanded="false"> <span class="open-sub"></span> <strong style="color:blue;">Q. How can
                            parents get involved in school activities?</strong></a> </div>
                <div id="accordion18" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                        <p>We encourage parental involvement and welcome parents to participate in school events,
                            parent-teacher meetings, and various committees. Parents can also join our Parent-Teacher
                            Association (PTA) to actively contribute to the school community.</p>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion19" class="collapsed"
                        aria-expanded="false"> <span class="open-sub"></span> <strong style="color:blue;">Q. Does the
                            school provide meals for students?</strong></a> </div>
                <div id="accordion19" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                        <p>Yes, we offer nutritious and balanced meals for students during school hours. Our school
                            cafeteria provides a variety of food options to cater to different dietary preferences and
                            requirements.</p>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion20" class="collapsed"
                        aria-expanded="false"> <span class="open-sub"></span> <strong style="color:blue;">Q. How can I
                            contact the school for further inquiries?</strong></a> </div>
                <div id="accordion20" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                        <p>You can contact our school office via phone at (123) 456-7890 or through email at
                            info@christthekingschool.com. Alternatively, you can fill out the contact form on our
                            website, and we will get back to you promptly.</p>
                    </div>
                </div>
            </div>
        </div>
          </div>
        </div>
      </div>
    </section>

    <!-- divider: what makes us different -->
    <section class="divider parallax layer-overlay overlay-white-9" data-parallax-ratio="0.1" data-bg-img="images/bg/bg2.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h4 class="mt-0">Did not find your answer?</h4>
              <h3>Just call at <span class="text-theme-color-2" style="color: #9D0000">+256-75320745 / +256-78255319</span> for emergency service</h3>
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
<!-- end wrapper -->
@endsection
