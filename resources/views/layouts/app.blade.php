<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema | LEUG</title>
      <link rel="icon" type="image/png" href="{{asset('dist/img/leug_logo1.png')}}">
      <!--<link rel="shortcut icon" type="image/x-icon" href="dist/img/icono_leug.ico">-->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="dist/js/adminlte.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            @guest
                //
            @else
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            @endguest

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->

                <a href="{{ url('/') }}" class="brand-link">
                  <img src="{{asset('dist/img/logo_leug.png')}}" alt="LEUG Logo" class="image " style="max-width:40%;width:auto;height:auto; margin-left:25%" >
                  {{-- width="400" height="300" style="opacity: 80" > --}}
                  <span class="brand-text font-weight-light" ><br> Learning English UG </br></span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                   {{--  @auth    
                        <div class="image">
                            <img src="{{asset('dist/img/user.png')}}" class="brand-image img-circle elevation-2" alt="User Image">
                        </div>
                    @endauth  --}}   
                        <div class="info">
                            <a href="#" class="d-block">
                                @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                @else
                                {{ Auth::user()->name }}
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    LOGOUT
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                @endguest
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                                
                                <li class="nav-item">
                                    <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="nav-icon fas fa-home"></i>
                                        <p>Home</p>
                                    </a>
                                </li>
                           
                                <li class="nav-item">
                                     
                                    <a href="{{route('usuarios.index')}}"
                                        class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Users
                                            <?php use App\User; $users_count = User::all()->count(); ?>
                                            <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>

                                        </p>
                                    </a>
                                  
                                </li>
                           
                                {{-- se agrega menu --}}
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-university"></i>
                                      <p>
                                        Academic Information
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="{{route('periodo.index')}}" class="nav-link">
                                          <i class="far fa-calendar-alt"></i>
                                          <p>Periods
                                            {{-- <i class="right fas fa-angle-left"></i> --}}
                                          </p>
                                        </a>
                                      </li>
                                       <li class="nav-item">
                                        <a href="{{route('carrera.index')}}" class="nav-link">
                                          <i class="fas fa-graduation-cap"></i>
                                          <p>University Career
                                          </p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="#" class="nav-link">
                                          <i class="fas fa-clipboard"></i>
                                          <p>Courses
                                             <i class="right fas fa-angle-left"></i>
                                          </p>
                                        </a>
                                      </li>
                                      <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                          <i class="fas fa-th"></i>
                                          <p>Modules
                                            <i class="right fas fa-angle-left"></i>
                                          </p>

                                        </a>
                                      </li>
                                    </ul>
                                  </li>

                                 {{--  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-copy"></i>
                                      <p>
                                        Courses
                                        <i class="fas fa-angle-left right"></i>
                                        <span class="badge badge-info right">1</span>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>S3M</p>
                                        </a>
                                      </li>
                                      
                                    </ul>
                                  </li> --}}
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-chart-pie"></i>
                                      <p>
                                        Progress
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="pages/charts/chartjs.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>ChartJS</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/charts/flot.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Flot</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/charts/inline.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Inline</p>
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-tree"></i>
                                      <p>
                                        Assignment
                                        <i class="fas fa-angle-left right"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="pages/UI/general.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>General</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/UI/icons.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Icons</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/UI/buttons.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Buttons</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/UI/sliders.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Sliders</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/UI/modals.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Modals & Alerts</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/UI/navbar.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Navbar & Tabs</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/UI/timeline.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Timeline</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/UI/ribbons.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Ribbons</p>
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-edit"></i>
                                      <p>
                                        Practice
                                        <i class="fas fa-angle-left right"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="pages/forms/general.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>General Elements</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/forms/advanced.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Advanced Elements</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/forms/editors.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Editors</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/forms/validation.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Validation</p>
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-table"></i>
                                      <p>
                                        Published
                                        <i class="fas fa-angle-left right"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="pages/tables/simple.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Recent</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/tables/data.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Old</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="pages/tables/jsgrid.html" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>ALL</p>
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                {{-- fin de menu --}}
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-sticky-note"></i>
                                        <p>Notas<i class="fas fa-angle-left right"></i></p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="notas/todas"
                                                class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Todas</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="notas/favoritas"
                                                class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Favoritas</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="notas/archivadas"
                                                class="{{ Request::path() === 'notas/archivadas' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Archivadas</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                        
                    </div>

                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- NO QUITAR -->
                <strong>Copyright &copy; 2020 LEUG.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                  <b>Version</b> 1.0
                </div>
              </footer>


            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
</body>

</html>