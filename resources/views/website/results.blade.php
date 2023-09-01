<style>
    .name {
  color: blue;
}

.work {
  font-weight: bold;
  font-size: 15px;
}

.about span {
  font-size: 13px;
}

.v-profile {
  color: blue;
  cursor: pointer;
}

.box {
  -webkit-box-shadow: 13px 12px 5px -10px rgba(196,194,196,0.72);
  -moz-box-shadow: 13px 12px 5px -10px rgba(196,194,196,0.72);
  box-shadow: 13px 12px 5px -10px rgba(196,194,196,0.72);
}

.col-md-3 {
  margin-top: 10px;
}
/* Custom CSS for student images */
.student-image {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 80%;
    }
</style>
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
              <h2 class="text-white font-36">PLE Results</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">PLE Results</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="divider">
      <div class="container">
        <div class="row pt-10">

            <div class="container text-center mt-5 mb-2">
                <h1 class="mb-0">Meet our best students</h1>
                <span>We are proud of the outstanding performance of our students in the Primary Leaving Examination (PLE). The results demonstrate the dedication and hard work put in by both our students and teachers throughout the academic year.</span>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box">
                            <img class="student-image mx-auto d-block" src="{{ asset('uploads/s3.jpg')}}" width="90">
                            <h5 class="mt-3 name">MAYANJA FRANK</h5>
                            <span class="work d-block">PLE Grade: 4 Agg</span><br>
                            <span class="work d-block">Village: KYALUGO</span><br>
                            <span class="work d-block">Guardian: BATENGA DORAH</span>
                        </div>
                    </div>
                    <!-- Add more student cards here with their information -->
                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box">
                            <img class="student-image mx-auto d-block" src="{{ asset('uploads/s2.jpg')}}" width="90">
                            <h5 class="mt-3 name">NAMPIJJA STELLAH</h5>
                            <span class="work d-block">PLE Grade: 8 Agg</span><br>
                            <span class="work d-block">Village: BUTEGO</span><br>
                            <span class="work d-block">Guardian: NAMUTEBI MAUREEN</span>
                        </div>
                    </div>
                    <!-- Add more student cards here with their information -->
                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box">
                            <img class="student-image mx-auto d-block" src="{{ asset('uploads/s1.jpg')}}" width="90">
                            <h5 class="mt-3 name">NAMUGERWA ANNAH</h5>
                            <span class="work d-block">PLE Grade: 10 Agg</span> <br>
                            <span class="work d-block">Village: KALUNDIRA</span><br>
                            <span class="work d-block">Guardian: JOSEPHINE</span><br>
                        </div>
                    </div>
                    <!-- Add more student cards here with their information -->
                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box">
                            <img class="student-image mx-auto d-block" src="{{ asset('uploads/s4.jpg')}}" width="90">
                            <h5 class="mt-3 name">WASAJJA MORGAN</h5>
                            <span class="work d-block">PLE Grade: 12 Agg</span><br>
                            <span class="work d-block">Village: LWABUSISI</span><br>
                            <span class="work d-block">Guardian: NAKAZIBWE VALLELIA</span>
                        </div>
                    </div>
                    <!-- Add more student cards here with their information -->

                    <!-- Add more student cards here with their information -->
                </div>
            </div>

          <div class="col-md-12">
            <h4 class="mt-0 mb-30 line-bottom">PLE Results Overview</h4>
            <p>We are proud of the outstanding performance of our students in the Primary Leaving Examination (PLE). The results demonstrate the dedication and hard work put in by both our students and teachers throughout the academic year.</p>
            <p>Christ The King Nursery and Primary School Ndegeya consistently achieves excellent PLE results, reflecting our commitment to providing a high-quality education that equips our students with the knowledge and skills to excel in their future academic endeavors.</p>
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

<script>
  // Replace this with a function to fetch PLE results for the selected year from your database
  function getPLEResults(year) {
    // For demonstration purposes, this function will just display placeholder data
    var pleResultsTable = document.getElementById("ple_results_table");
    pleResultsTable.innerHTML = "<h4>PLE Results for Year: " + year + "</h4>" +
                                 "<table class='table table-striped'>" +
                                 "  <thead>" +
                                 "    <tr>" +
                                 "      <th>Student Name</th>" +
                                 "      <th>Score</th>" +
                                 "    </tr>" +
                                 "  </thead>" +
                                 "  <tbody>" +
                                 "    <tr>" +
                                 "      <td>Student 1</td>" +
                                 "      <td>98%</td>" +
                                 "    </tr>" +
                                 "    <tr>" +
                                 "      <td>Student 2</td>" +
                                 "      <td>97%</td>" +
                                 "    </tr>" +
                                 "    <tr>" +
                                 "      <td>Student 3</td>" +
                                 "      <td>96%</td>" +
                                 "    </tr>" +
                                 "    <!-- Add more students as needed -->" +
                                 "  </tbody>" +
                                 "</table>";
  }
</script>
