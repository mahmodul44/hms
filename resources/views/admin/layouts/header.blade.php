
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="icon" href="{{asset('admin/img/logo.png')}}" type="img" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/reset.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/text.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/grid.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/layout.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/nav.css')}}" media="screen" />
    <link href="{{asset('admin/css/table/demo_page.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BEGIN: load jquery -->
    <script src="{{asset('admin/js/jquery-1.6.4.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('admin/js/jquery-ui/jquery.ui.core.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery-ui/jquery.ui.widget.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery-ui/jquery.effects.slide.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery-ui/jquery.ui.mouse.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery-ui/jquery.ui.sortable.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/table/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <!-- END: load jquery -->

    <script src="{{asset('admin/js/setup.js')}}" type="text/javascript"></script>



	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

</head>
<body>
    <div style="height: 1100px" class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <img src="{{asset('admin/img/logo.png')}}" alt="Logo" />
				</div>
				<div class="floatleft middle">
					<h1>RSA Hospital</h1>
					<p>www.rsa.com</p>
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="{{asset('admin/img/img-profile.jpg')}}" alt="Profile Pic" /></div>


                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello</li>
                            <li>{{ Auth::user()->name }}</li>
                            <li>
<a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
        <ul class="nav main">

        <li class="ic-dashboard"><a href="{{Route('dashbord')}}"><span>Dashboard</span></a> </li>
            @if(Session::get('user_role') == 'admin')
				<li class="ic-grid-tables"><a href="{{Route('inbox')}}"><span>Inbox</span></a></li>
            @endif

        <li class="ic-charts"><a href="{{Route('index')}}" target="_blank"><span>Visit Website</span></a></li>
        </ul>
        </div>
        <div class="clear">
        </div>
