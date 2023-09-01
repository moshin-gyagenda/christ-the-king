<header id="header" class="header modern-header modern-header-theme-colored">
    <div class="header-top bg-theme-colored2 sm-text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="widget text-white">
                        <i class="fa fa-map-marker"></i> Ndegeya-Masaka, 2Km
                        Off Kampala Mabarara Highway<i class="fa fa-clock-o text-white" style="margin-left: 20px"></i>
                        Opening Hours: Mon - Sun : 6.00 am - 10.00 pm
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <ul class="list-inline text-right flip sm-text-center">
                            <li class="m-0 pl-10">
                                <a href="ajax-load/login-form.html" class="text-white ajaxload-popup"><i
                                        class="fa fa-user-o mr-5 text-white"></i> Login /</a>
                            </li>
                            <li class="m-0 pl-0 pr-10">
                                <a href="ajax-load/register-form.html" class="text-white ajaxload-popup"><i
                                        class="fa fa-edit mr-5 text-white"></i>Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle p-0 bg-light xs-text-center">
        <div class="container pt-20 pb-20">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="widget sm-text-center">
                        <i
                            class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                        <a href="#" class="font-12 text-uppercase"
                            style="color: #161176; font-weight: 600; font: bold">Mail Us Today</a>
                        <h5 class="font-13 text-black m-0">christthekingps23@gmail.com</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <div class="widget text-center">
                        <a class="" href="index.html">
                            <img src="images/logo.png" alt="" height="100px" width="100px" />
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="widget sm-text-center">
                        <i
                            class="fa fa-phone-square text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                        <a href="#" class="font-12 text-uppercase"
                            style="color: #161176; font-weight: 600; font: bold">Call us for more details</a>
                        <h5 class="font-13 text-black m-0">
                            +256-758001270 / +256-773900615
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav">
        <div class="header-nav-wrapper navbascrolltofixed">
            <div class="container">


                <nav id="menuzord" class="menuzord green">
                    <a class="logo" href="index.html" style="margin-top: 5px; margin-bottom: 5px;">
                        <img src="images/logo.jpg" alt="Logo" height="55px" width="55px" class="logo-img-small"
                            style="border-radius: 50%; margin-left: 20px; padding: 5px;">
                    </a>
                    <ul class="menuzord-menu">
                        <li class="active">
                            <a href="{{ route('home') }}">Home</a>

                        </li>
                        <li>
                            <a href="">Academics</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('admission') }}">Admissions</a></li>
                                <li><a href="{{ route('curriculum') }}">Curriculum</a></li>
                                <li><a href="{{ route('results') }}">PLE Results</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('faqs') }}">Faqs</a>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('upcoming-events') }}">Upcoming Events</a>

                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}">Contact</a>

                        </li>
                        <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i>Admin Login</a></li>
                    </ul>
                    <ul class="pull-right sm-pull-nonelist-inline nav-side-icon-list">
                        <li>
                            <a href="#fullscreen-search-form" id="fullscreen-search-btn"><i
                                    class="search-icon text-theme-colored2 fa fa-search"></i></a>
                            <div id="fullscreen-search-form">
                                <button type="button" class="close">×</button>
                                <form>
                                    <input type="search" value="" placeholder="Search keywords(s)" />
                                    <button type="submit"><i class="search-icon fa fa-search"></i></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
