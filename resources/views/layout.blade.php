<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Stream This</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/css/animate.min.css" rel="stylesheet" />
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link href="/assets/css/theme/orange.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN PAGE CSS STYLE ================== -->
    @yield('css.head')
    <!-- ================== END PAGE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->

</head>
<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-default navbar-fixed-top">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin mobile sidebar expand / collapse button -->
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">Stream This</a>
                    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- end mobile sidebar expand / collapse button -->
                
                <!-- begin header navigation right -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form full-width">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter keyword" />
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown navbar-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/assets/img/user-13.jpg" alt="" /> 
                            <span class="hidden-xs">Travis Neiderhiser</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="javascript:;">Edit Profile</a></li>
                            <li><a href="javascript:;">Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="/auth/logout">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- end header navigation right -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-film"></i>
                            <span>Movies</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('movies.create') }}">Add Movie Inventory</a></li>
                            <li><a href="{{ route('movies.index') }}">Manage Movie Inventory</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-user"></i>
                            <span>Customers</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('customers.create') }}">Add New Customer</a></li>
                            <li><a href="{{ route('customers.index') }}">Manage Customers</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-inbox"></i>
                            <span>Rentals</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/rentals/create">Create New Rental</a></li>
                            <li><a href="#">View Returned Rentals</a></li>
                        </ul>
                    </li>
                    <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->
        
        <!-- begin #content -->
        <div id="content" class="content">
            @yield('content')
        </div>
        <!-- end #content -->
                
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="/assets/crossbrowserjs/html5shiv.js"></script>
        <script src="/assets/crossbrowserjs/respond.min.js"></script>
        <script src="/assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <script src="/assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="/assets/js/apps.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    @yield('scripts.footer')
    <!-- ================== END PAGE LEVEL JS ================== -->
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>

    @include('partials/flash')

</body>
</html>
