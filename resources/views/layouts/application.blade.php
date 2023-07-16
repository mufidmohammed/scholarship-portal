<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/eduadmin-template/images/favicon.ico">

    <title>Student Application Form</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">

    @livewireStyles
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <div class="content px-2">
            <div class="container-xxx mx-0">
                <!-- Main content -->
                <section class="content px-0">
                    <!-- vertical wizard -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Student Application</h4>
                            <h6 class="box-subtitle">Complete the form below</a></h6>
                            <div class="pull-right">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body wizard-content">

                            {{ $slot }}

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </section>
            </div>
        </div>
    </div>
    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/jquery-steps-master/build/jquery.steps.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

    <!-- EduAdmin App -->
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/pages/advanced-form-element.js') }}"></script>
    <script src="{{ asset('assets/js/pages/steps.js') }}"></script>

    @livewireScripts
</body>

</html>
