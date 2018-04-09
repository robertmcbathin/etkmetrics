<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />



    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-dashboard.min.css" rel="stylesheet" />

    <!--  Social tags      -->
    <meta name="keywords" content="@yield('keywords')">

    <meta name="description" content="@yield('description')">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/demo/demo.css" rel="stylesheet" />


</head>

<body>
    <div class="wrapper">

        @include('includes.header')
        <div class="main-panel">
            @yield('content')
            @include('includes.footer')
        </div>
    </div>

</body>

<!--   Core JS Files   -->
<script src="/assets/js/core/jquery.min.js" ></script>
<script src="/assets/js/core/popper.min.js" ></script>
<script src="/assets/js/core/bootstrap.min.js" ></script>
<script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js" ></script>
<script src="/assets/js/plugins/moment.min.js"></script>



<!--  Plugin for Sweet Alert -->
<script src="/assets/js/plugins/sweetalert2.min.js"></script>

<!-- Forms Validations Plugin -->
<script src="/assets/js/plugins/jquery.validate.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="/assets/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="/assets/js/plugins/bootstrap-selectpicker.js" ></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/assets/js/plugins/bootstrap-switch.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="/assets/js/plugins/bootstrap-datetimepicker.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="/assets/js/plugins/jquery.dataTables.min.js"></script>

<!--    Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/assets/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="/assets/js/plugins/fullcalendar.min.js"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="/assets/js/plugins/jquery-jvectormap.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/assets/js/plugins/nouislider.min.js" ></script>

<!--  Google Maps Plugin    -->
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

<!-- Chart JS -->
<script src="/assets/js/plugins/chartjs.min.js"></script>


<!--  Notifications Plugin    -->
<script src="/assets/js/plugins/bootstrap-notify.js"></script>

<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/now-ui-dashboard.min.js" ></script>

<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="/assets/demo/demo.js"></script>


<!-- Sharrre libray -->
<script src="/assets/assets-for-demo/js/jquery.sharrre.js">
</script>

    <script >
        $(document).ready(function(){
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();
            demo.initVectorMap();
        });
    </script>




    </html>