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
              <h2 class="text-white font-36">About</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">About</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
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
                        lifelong learners and responsible members of society.
                    </p>
                    <p>
                        Overall, Christ the King Nursery and Primary School is
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

    <!-- Divider: Funfact -->


    <!-- Section: team -->
    <section id="team">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-uppercase line-bottom-double-line-centered mt-0">Our <span class="text-theme-colored2">Teachers</span></h2>
                <p>Our dedicated team of teachers is the heart and soul of our institution. With a passion for education and a commitment to nurturing young minds, they play a pivotal role in shaping the future of our students. Each teacher brings a unique set of skills and experiences, creating a diverse and enriching learning environment for everyone.</p>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="owl-carousel-4col">
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-1.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html">Mosh Gyagenda</a></h3>
                    <h5 class="text-theme-color">Teacher </h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-2.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Ssenkungu Noah</a></h3>
                    <h5 class="text-theme-color">Teacher </h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-3.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html">Arafat Kayondo</a></h3>
                    <h5 class="text-theme-color">Teacher </h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-4.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html">Maria Ndagire</a></h3>
                    <h5 class="text-theme-color">Teacher </h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    {{-- <section class="clients bg-theme-colored2">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col text-center">
              <div class="item"> <a href="#"><img src="images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
  </div>
  <!-- end main-content -->

  <!-- Footer -->

  @include('website.layouts.footer')

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
@endsection
