<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{asset('css/font-awesome.min.css')}}>
    <!-- Ionicons -->
    <link rel="stylesheet" href={{asset('css/ionicons.min.css')}}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{asset('css/AdminLTE.min.css')}}>
    <link rel="stylesheet" href={{asset('css/skin-blue.min.css')}}>
    <link rel="stylesheet" href={{asset('css/fullcalendar.css')}}>
    <link rel="stylesheet" href={{asset('css/bootstrap-datetimepicker.css')}}>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src={{asset('js/html5shiv.js')}}></script>
    <script src={{asset('js/respond.js')}}></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<script src={{asset('js/jquery-3.2.1.js')}}></script>
<script src={{asset('/js/Moment.js')}}></script>
<script src={{asset('/js/fullcalendar.js')}}></script>
<div class="wrapper" id="app">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Spark</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Autodrop3d</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="nav navbar-brand">@yield('title')</div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notification Navbar List-->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label notification-label">new</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Your notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu notification-menu">
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    @hasanyrole(['superadmin','admin'])
                    <li class="">
                        <button class="nav navbar-brand btn-link" data-toggle="control-sidebar"><i class="fa fa-cog"></i></button>
                    </li>
                    @endhasanyrole
                <!-- END notification navbar list-->
                    @if(Auth::user())
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="http://ahloman.net/wp-content/uploads/2013/06/user.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{Auth::user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="http://ahloman.net/wp-content/uploads/2013/06/user.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        {{Auth::user()->name}}
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="{{url('logout')}}" class="btn btn-default btn-flat"
                                           onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">Sign out</a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="">
                            <a href="{{url('/login')}}">Login</a>
                        </li>
                        <li class="">
                            <a href="{{url('/register')}}">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
        {{--<!-- search form -->--}}
        {{--<form action="#" method="get" class="sidebar-form">--}}
        {{--<div class="input-group">--}}
        {{--<input type="text" name="auto3dprintqueue" class="form-control" placeholder="Search...">--}}
        {{--<span class="input-group-btn">--}}
        {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
        {{--</button>--}}
        {{--</span>--}}
        {{--</div>--}}
        {{--</form>--}}
        {{--<!-- /.search form -->--}}
        <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                {{--<li class="header">MAIN NAVIGATION</li>--}}
                <li class="active treeview">
                    <a href="{{url('dashboard')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview"><a href="{{url('./event')}}"></i> <span>Calender</span></a></li>
                <li class="treeview"><a href="{{url('./g/')}}"></i> <span>Groups</span></a></li>
                <li class="treeview"><a href="{{url('./post/')}}"></i> <span>Posts</span></a></li>
                <li class="treeview"><a href="{{url('./resource/')}}"></i> <span>Resource</span></a></li>


                <li class="treeview"><a href="{{url('./comment/')}}"></i> <span>Comments</span></a></li>

                <li class="treeview"><a href="{{url('./door/')}}"></i> <span>Doors</span></a></li>

                <li class="treeview"><a href="{{url('./image/')}}"></i> <span>Images</span></a></li>

                <li class="treeview"><a href="{{url('./resource/')}}"></i> <span>Resource</span></a></li>

                <li class="treeview"><a href="{{url('./test/')}}"></i> <span>Test</span></a></li>

                @hasanyrole(['superadmin','admin'])
                <li class="header">ADMINISTRATOR</li>
                <li class="treeview"><a href="{{url('/users')}}"><i class="fa fa-users"></i> <span>Users</span></a></li>
                <li class="treeview"><a href="{{url('/roles')}}"><i class="fa fa-user-plus"></i> <span>Role</span></a></li>
                <li class="treeview"><a href="{{url('/permissions')}}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
                @endhasanyrole
                @yield('someSideBarJunk')

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- The Right Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        @yield('adminBar')
    </aside>
    <!-- The sidebar's background -->
    <!-- This div must placed right after the sidebar for it to work-->
    <div class="control-sidebar-bg"></div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class = 'AjaxisModal'>
    </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/demo.js"></script>
<script> var baseURL = "{{ URL::to('/') }}"</script>
<script src = "{{URL::asset('js/AjaxisBootstrap.js') }}"></script>
<script src = "{{URL::asset('js/scaffold-interface-js/customA.js') }}"></script>
<script src="https://js.pusher.com/3.2/pusher.min.js"></script>

<script>
    // pusher log to console.
    Pusher.logToConsole = true;
    // here is pusher client side code.
    var pusher = new Pusher("{{env("PUSHER_KEY")}}", {
        encrypted: true
    });
    var channel = pusher.subscribe('test-channel');
    channel.bind('test-event', function(data) {
        // display message coming from server on dashboard Notification Navbar List.
        $('.notification-label').addClass('label-warning');
        $('.notification-menu').append(
            '<li>\
                        <a href="#">\
                                    <i class="fa fa-users text-aqua"></i> '+data.message+'\
						</a>\
			</li>'
        );
    });
</script>
<script>
    $(document).ready(function(){
        @stack('jquery.ready')
    });
</script>
<script src="{{url('/js/app.js')}}"></script>
@yield('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.js"></script>
<script src="{{url('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/app.min.js"></script>
</body>
</html>
