<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!          {{ asset('sufee-admin-dashboard-master/     ') }}                               -->
<!--html class="no-js" lang="en"> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>beli & jual</title>
    <meta name="description" content="donorkan">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('sufee-admin-dashboard-master/apple-icon.png') }} ">
    <link rel="shortcut icon" href="{{ asset('Remember/ico/iconperhutani.png') }}">

    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/bootstrap/dist/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/font-awesome/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/themify-icons/css/themify-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/flag-icon-css/css/flag-icon.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/selectFX/css/cs-skin-elastic.css') }} ">
    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/jqvmap/dist/jqvmap.min.css') }} ">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('DataTables/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('DataTables/dist/css/adminlte.min.css') }}">


    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/assets/css/style.css') }} ">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>


    <!-- Left Panel              {{ asset('sufee-admin-dashboard-master/     ') }}              -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><h2>beli & jual</h2></a>
                <a class="navbar-brand hidden" href="{{ url('/') }}"><img src="{{ asset('Remember/ico/iconperhutani.png') }}" alt="Logo"></a>
            </div>
            
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                @if(Auth::user()->akses == 'admin')
                    <li class="active">
                        <a href="{{route('name.daftar.buku')}}"> <i class="menu-icon fa fa-book"></i>Buku </a>
                    </li>
                    <li class="active">
                        <a href="{{route('name.daftar.kegiatan')}}"> <i class="menu-icon ti-user"></i>Kegiatan</a>
                    </li>
                @endif
                </ul>
            </div><!-- /.navbar-collapse            menu-item-has-children -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ Auth::user()->name }} 
                        </a>
                             
                        <div class="user-menu dropdown-menu">

                            

                            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-power-off"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </div>

                    
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

     
        <main class="py-4">
            @yield('content')
        </main>

            

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel                            {{ asset('sufee-admin-dashboard-master/     ') }}                        -->

    <script src="{{ asset('sufee-admin-dashboard-master/vendors/jquery/dist/jquery.min.js') }} "></script>
    <script src="{{ asset('sufee-admin-dashboard-master/vendors/popper.js/dist/umd/popper.min.js') }} "></script>
    <script src="{{ asset('sufee-admin-dashboard-master/vendors/bootstrap/dist/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('sufee-admin-dashboard-master/assets/js/main.js') }} "></script>


    <script src="{{ asset('sufee-admin-dashboard-master/vendors/chart.js/dist/Chart.bundle.min.js') }} "></script>
    <script src="{{ asset('sufee-admin-dashboard-master/assets/js/dashboard.js') }} "></script>
    <script src="{{ asset('sufee-admin-dashboard-master/assets/js/widgets.js') }} "></script>
    <script src="{{ asset('sufee-admin-dashboard-master/vendors/jqvmap/dist/jquery.vmap.min.js') }} "></script>
    <script src="{{ asset('sufee-admin-dashboard-master/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }} "></script>
    <script src="{{ asset('sufee-admin-dashboard-master/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }} "></script>


    <!-- jQuery -->
    <script src="{{ asset('DataTables/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('DataTables/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('DataTables/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- page script -->
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        });
    });
    </script>
   
</body>

</html>
