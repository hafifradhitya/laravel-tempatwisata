<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TravelDesU</title>
    <link rel="icon" href="{{ url('assets/Traveloka.png') }}">
    <link href="{{ url('sb-admin/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"/>
    <link href="{{ url('sb-admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <style>
            .tabel{
                font-family: Arial,Helvetica,sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            .tabel td, .tabel th{
                border: 1px solid #DDD;
                padding: 5px;
            }
            
            .tabel tr:nth-child(even){
                background-color: #F2F2F2;
            }
            
            .tabel tr:hover{
                background-color: #DDD;
            }
            
            .tabel th{
                padding-top: 8px;
                padding-bottom: 8px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
        <style>
            .details {
                color: white;
            }

            .details:hover {
            color: gray;
            text-decoration: none;
            }
        </style>
</head>

<body id="page-top">
    
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-smile-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Travel <sup>DesU</sup></div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Menu
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('destinations') }}">
                <i class="fas fa-fw fa-table"></i>
                    <span>Tempat Wisata</span></a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-users"></i>
                    <span>Pengunjung</span></a>
            </li> -->

            
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="nav">
                        <li>
                            <a href="{{ url('/wisata') }}" class="nav-link">Wisata</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                src="{{ url('sb-admin/img/undraw_profile.svg') }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">
                @if(session()->has("pesan"))
                    <div class="alert alert-info">
                        <marquee behavior="" direction="">{{ session("pesan") }}</marquee>
                    </div>
                @endif
                    @yield("content")
                    <div class="row">
                        
                    </div>


                    <div class="row">

                    </div>

                    <div class="row">

                    </div>

                </div>

            </div>

            

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ url('sb-admin/js/jquery.min.js') }}"></script>
    <script src="{{ url('sb-admin/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ url('sb-admin/js/jquery.easing.min.js') }}"></script>

    <script src="{{ url('sb-admin/js/sb-admin-2.min.js') }}"></script>

    <script src=""></script>

    <script src="{{ url('sb-admin/js/chart-area-demo.js') }}"></script>
    <script src="{{ url('sb-admin/js/chart-pie-demo.js') }}"></script>

</body>

</html>