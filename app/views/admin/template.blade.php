<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="admin/img/favicon.png">

    <title>{{$title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <link rel="stylesheet" href="admin/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="admin/js/html5shiv.js"></script>
    <script src="admin/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<section id="container">
    @include('admin.header')
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="{{$active_dashboard}}" href="{{Asset('sky-admin')}}">
                        <i class="icon-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="{{$active_game}}">
                        <i class="icon-laptop"></i>
                        <span>Game</span>
                    </a>
                    <ul class="sub">
                        <li class="{{$active_game_add}}"><a href="{{Asset('add-game')}}">Add Game</a></li>
                        <li><a href="">List Game</a></li>
                        <li><a href="">Other</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            @yield('content')
            <!-- page end-->
        </section>
    </section>
    @include('admin.footer')
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="admin/js/jquery-1.8.3.min.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
<!--JS LEFT BAR ACCORDION-->
<script src="admin/js/common-scripts.js"></script>
<script class="include" type="text/javascript" src="admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="admin/js/jquery.scrollTo.min.js"></script>
<script src="admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<!--<script src="admin/js/jquery.sparkline.js" type="text/javascript"></script>-->
<!--<script src="admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>-->
<!--<script src="admin/js/owl.carousel.js" ></script>-->
<!--<script src="admin/js/jquery.customSelect.min.js" ></script>-->
<!--<script src="admin/js/respond.min.js" ></script>-->

<!--common script for all pages-->


<!--script for this page-->
<!--<script src="admin/js/sparkline-chart.js"></script>-->
<!--<script src="admin/js/easy-pie-chart.js"></script>-->
<!--<script src="admin/js/count.js"></script>-->

<script>

    //owl carousel

    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

</script>

</body>