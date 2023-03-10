@extends('layouts.user.dashboard')

@section('content')
    <!-- Navbar -->
    <nav class="main-header navbar  navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="#">Online Ticket Reservation System</a>

            </li>
        </ul>


        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-success elevation-4">
        <!-- Brand Logo -->
        <a href="individual.php" class="brand-link">

            <span class="brand-text font-weight-light">Sun 16, Oct 22</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('/assets/')}}/uploads/404a6378027a553d980b99162a5b4ce8.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Demo Account</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{url('user/profile')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Profile
                            </p>
                        </a>

                    </li>
                    

                    
                    <li class="nav-item">
                        <a href="{{url('user/bookedHistory')}}" class="nav-link ">
                            <i class="fa fa-book nav-icon"></i>
                            <p>View Bookings</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-mail-bulk nav-icon"></i>
                            <p>Feedback</p>
                        </a>
                    </li>

                    <li>
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> Passenger's Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        
<div class="content">
<div class="container-fluid">
            <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header alert-success">
                    <h5 class="m-0">Quick Tips</h5>
                </div>
                <div class="card-body">
                    Use the links at the left.
                    <br />You can see list of schedules by clicking on "New Booking". The system will display list
                    of available schedules for you which you can view and make bookings from. <br>Before your
                    bookings are saved, you are redirected to make payment. <br>After a successful payment, system
                    generates your ticket ID for you which you are required to bring to the station. <br>You are
                    allowed to view all your booking history by clicking on "View Bookings".
                </div>
            </div>
        </div>            </div>
    </div>
</div>
</div>            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection