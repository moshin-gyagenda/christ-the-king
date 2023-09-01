<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="{{ asset('images/mosh.jpg')}}" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              Welcome mosh
            </p>
            <p class="designation">
              Super Admin
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin-dashboard')}}">
          <i class="fa fa-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item d-none d-lg-block">
        <a class="nav-link" data-toggle="collapse" href="#homepage-setting" aria-expanded="false" aria-controls="homepage-setting">
          <i class="fas fa-columns menu-icon"></i>
          <span class="menu-title">Homepage Setting</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="homepage-setting">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('aboutus')}}">About Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('mission-vission')}}">Mission and Vision</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('facilities-infrastructure')}}">Facilities and Infrastructure</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Contact Information</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#academic-programs" aria-expanded="false" aria-controls="academic-programs">
          <i class="far fa-compass menu-icon"></i>
          <span class="menu-title">Academic Programs</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="academic-programs">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">Nursery Programs</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Primary Programs</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Curriculum</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Extracurricular Activities</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Academic Calendar</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#admissions" aria-expanded="false" aria-controls="admissions">
          <i class="fas fa-clipboard-list menu-icon"></i>
          <span class="menu-title">Admissions</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="admissions">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">Admission Process</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Application Form</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Eligibility Criteria</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Tuition Fees</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Scholarships and Grants</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">FAQs</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#faculty-staff" aria-expanded="false" aria-controls="faculty-staff">
          <i class="fab fa-wpforms menu-icon"></i>
          <span class="menu-title">Faculty and Staff</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="faculty-staff">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="#">Teaching Staff</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Administrative Staff</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Faculty Profiles</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Staff Directory</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Employment Opportunities</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#news-events" aria-expanded="false" aria-controls="news-events">
          <i class="fas fa-pen-square menu-icon"></i>
          <span class="menu-title">News and Events</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="news-events">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="#">Latest News</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Events Calendar</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Achievements and Awards</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#school-gallery" aria-expanded="false" aria-controls="school-gallery">
          <i class="fas fa-chart-pie menu-icon"></i>
          <span class="menu-title">School Gallery</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="school-gallery">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">Trips and Tours</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">School Events</a></li>


          </ul>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="pages/documentation.html">
          <i class="far fa-file-alt menu-icon"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
    </ul>
  </nav>
