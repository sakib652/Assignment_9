
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor')}}/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/libs')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets/vendor')}}/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('assets/vendor')}}/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{asset('assets/vendor')}}/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{asset('assets/vendor')}}/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/vendor')}}/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{asset('assets/vendor')}}/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <style>
        .nav-item a {
            color: #ffffff; /* Set the default text color */
        }

        .nav-item.active a {
            background-color: white; /* Set the background color for active state */
            color: #ffffff; /* Set the text color for active state */
        }
    </style>


    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        
        @include("components.navbar") 
         
        @include("components.leftbar")

        <!-- ============================================================== -->
        <!-- ============================================================== -->

        @yield("content")

        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('assets/vendor')}}/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('assets/vendor')}}/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="{{asset('assets/vendor')}}/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="{{asset('assets/libs')}}/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="{{asset('assets/vendor')}}/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="{{asset('assets/vendor')}}/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="{{asset('assets/vendor')}}/charts/morris-bundle/raphael.min.js"></script>
    <script src="{{asset('assets/vendor')}}/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="{{asset('assets/vendor')}}/charts/c3charts/c3.min.js"></script>
    <script src="{{asset('assets/vendor')}}/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{asset('assets/vendor')}}/charts/c3charts/C3chartjs.js"></script>
    <script src="{{asset('assets/libs')}}/js/dashboard-ecommerce.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
 
</html>
