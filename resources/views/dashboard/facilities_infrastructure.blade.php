<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/text_editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:26 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Christ the King nursery and primary school</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/summernote/dist/summernote-bs4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo.jpg') }}" />
    <!-- Include the required CSS for icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdi@5.9.55/css/materialdesignicons.min.css">

</head>

<body>
    <div class="container-scroller">
        <!-- partial:dashboard/partials/_navbar.html -->
        @include('layouts.top-navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:dashboard/partials/_settings-panel.html -->


            <!-- partial -->
            <!-- partial:dashboard/partials/_sidebar.html -->
            @include('layouts.sidebar')
            <!-- partiaTinymce Editor -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            Facilities and Infrastructure
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('facilities-infrastructure-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row grid-margin">

                            <div class="col-lg-12" style="margin-bottom: 30px">
                                <div>
                                    <label>Title</label>
                                    <input class="form-control" name="tittle" type="text"
                                        style="border-radius: 5px;" />
                                </div>
                            </div>

                            <div class="col-lg-12" style="margin-bottom: 30px">
                                <div>
                                    <label>Upload Image</label>
                                    <input class="form-control-file" name="image" type="file" style="border-radius: 5px;" onchange="previewImage(event)" />
                                </div>
                                <div class="mt-2">
                                    <img id="preview" src="#" alt="Preview" style="max-width: 200px; max-height: 200px; display: none;">
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Description</h4>

                                        <textarea name="description" class="form-control" id="" cols="115" rows="12"></textarea>

                                        <div style="margin-top: 10px;">
                                            <button type="submit" class="btn btn-success btn-icon-text" id="submitBtn">
                                                <i class="fa fa-save btn-icon-prepend"></i>
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-icon-text" id="clearBtn">
                                                <i class="fas fa-trash btn-icon-prepend"></i>
                                                Clear
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:dashboard/partials/_footer.html -->
                @include('layouts.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('dashboard/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/tinymce/themes/modern/theme.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
    <!-- plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dashboard/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dashboard/js/misc.js') }}"></script>
    <script src="{{ asset('dashboard/js/settings.js') }}"></script>
    <script src="{{ asset('dashboard/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('dashboard/js/editorDemo.js') }}"></script>
    <!-- Include the required JavaScript for icons -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function previewImage(event) {
            var input = event.target;
            var preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.setAttribute('src', e.target.result);
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.setAttribute('src', '#');
                preview.style.display = 'none';
            }
        }
        </script>

    <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/text_editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:29 GMT -->

</html>
