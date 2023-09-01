<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Christ the King nursery and primary school</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/iconfonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body>

    @yield('content')
    <!-- plugins:js -->
    <script src="{{ asset('dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('dashboard/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('dashboard/js/off-canvas.js')}}"></script>
    <script src="{{ asset('dashboard/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('dashboard/js/misc.js')}}"></script>
    <script src="{{ asset('dashboard/js/settings.js')}}"></script>
    <script src="{{ asset('dashboard/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('dashboard/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    <script>
        $(document).ready(function() {
          // Collapse all submenus initially
          $('.nav .collapse').collapse('hide');

          // Handle the click event for the menu items with submenus
          $('.nav-link[data-toggle="collapse"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this).attr('href');

            // Collapse all other submenus except the one being clicked
            $('.nav .collapse').not(target).collapse('hide');

            // Toggle the clicked submenu
            $(target).collapse('toggle');
          });
        });
      </script>

</body>


</html>
