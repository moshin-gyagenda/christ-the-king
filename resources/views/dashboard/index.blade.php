@extends('layouts.master')
@section('content')

  <div class="container-scroller">
    <!-- Top Nav Bar -->
    @include('layouts.top-navbar')
    <!-- End of Nav Bar -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- sidebar start -->
      @include('layouts.sidebar')
      <!-- end of sidebar-->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Dashboard
            </h3>
          </div>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          New users
                        </p>
                        <h2>54000</h2>
                        <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                          Avg Time
                        </p>
                        <h2>123.50</h2>
                        <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                          Downloads
                        </p>
                        <h2>3500</h2>
                        <label class="badge badge-outline-success badge-pill">12% increase</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-check-circle mr-2"></i>
                          Update
                        </p>
                        <h2>7500</h2>
                        <label class="badge badge-outline-success badge-pill">57% increase</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-chart-line mr-2"></i>
                          User
                        </p>
                        <h2>9000</h2>
                        <label class="badge badge-outline-success badge-pill">10% increase</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-circle-notch mr-2"></i>
                          Pending
                        </p>
                        <h2>7500</h2>
                        <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">
                    <i class="fas fa-users"></i>
                    User status
                  </h4>
                  <div class="flex-grow-1 d-flex flex-column justify-content-between">
                    <canvas id="sales-status-chart" class="mt-3"></canvas>
                    <div class="pt-4">
                      <div id="sales-status-chart-legend" class="sales-status-chart-legend"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="far fa-futbol"></i>
                    Activity
                  </h4>
                  <ul class="solid-bullet-list">
                    <li>
                      <h5>4 people shared a post
                        <span class="float-right text-muted font-weight-normal small">8:30 AM</span>
                      </h5>
                      <p class="text-muted">It was an awesome work!</p>
                      <div class="image-layers">
                        <div class="img-sm profile-image-text bg-warning rounded-circle image-layer-item">M</div>
                        <img class="img-sm rounded-circle image-layer-item" src="images/faces/face3.jpg" alt="profile"/>
                        <img class="img-sm rounded-circle image-layer-item" src="images/faces/face5.jpg" alt="profile"/>
                        <img class="img-sm rounded-circle image-layer-item" src="images/faces/face8.jpg" alt="profile"/>
                      </div>
                    </li>
                    <li>
                      <h5>Stella posted in a group
                        <span class="float-right text-muted font-weight-normal small">11:40 AM</span>
                      </h5>
                      <p class="text-muted">The team has done a great job</p>
                    </li>
                    <li>
                      <h5>Dobrick posted in material
                        <span class="float-right text-muted font-weight-normal small">4:30 PM</span>
                      </h5>
                      <p class="text-muted">Great work. Keep it up!</p>
                    </li>
                  </ul>
                  <div class="border-top pt-3">
                    <div class="d-flex justify-content-between">
                      <button class="btn btn-outline-dark">More</button>
                      <button class="btn btn-primary btn-icon-text">
                        Add new task
                        <i class="btn-icon-append fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">
                      <i class="fas fa-calendar-alt"></i>
                      Calendar
                    </h4>
                    <div id="inline-datepicker-example" class="datepicker"></div>
                  </div>
                </div>
              </div>
          </div>



          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                      <button class="btn btn-social-icon btn-facebook btn-rounded">
                        <i class="fab fa-facebook-f"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Facebook</h5>
                        <p class="mb-0">813 friends</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                      <button class="btn btn-social-icon btn-twitter btn-rounded">
                        <i class="fab fa-twitter"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Twitter</h5>
                        <p class="mb-0">9000 followers</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                      <button class="btn btn-social-icon btn-google btn-rounded">
                        <i class="fab fa-google-plus-g"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Google plus</h5>
                        <p class="mb-0">780 friends</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <button class="btn btn-social-icon btn-linkedin btn-rounded">
                        <i class="fab fa-linkedin-in"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Linkedin</h5>
                        <p class="mb-0">1090 connections</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 . All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

@endsection
