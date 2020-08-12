<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('backend/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/main-style.css')}}" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{asset('backend/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="{{url('/')}}">
                    Talii Hotel
                    {{-- <img src="{{asset('backend/img/logo.png')}}" alt="" /> --}}
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->

                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="{{asset('backend/img/user.jpg')}}" >
                            </div>
                            <div class="user-info">
                                <div>User <strong>Name</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>

                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="{{url('admin')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Clients<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('all-clients')}}">Client List</a>
                            </li>
                            <li>
                                <a href="{{url('add-client')}}">Add Client</a>
                            </li>

                        </ul>
                        <!-- second-level-items -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Booking<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('all-booking')}}">Booking List</a></li>
                            {{-- <li><a href="{{url('all-booked-rooms')}}">Booked Rooms</a></li>
                            <li><a href="{{url('all-booked-halls')}}">Booked Halls</a></li> --}}

                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Rooms<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="{{url('all-rooms')}}">All Rooms </a></li>
                            <li><a href="{{url('add-room')}}">Add Room</a></li>
                            <li><a href="{{url('add-room-type')}}">Add Room Type</a></li>
                            <li><a href="{{url('add-room-service')}}">Add Room Service</a></li>


                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reservation<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('all-reservations')}}">Reservation List</a></li>
								<li><a href="payments.html">Payments</a></li>
								<li><a href="expenses.html">Expenses</a></li>
								<li><a href="taxes.html">Taxes</a></li>
								<li><a href="provident-fund.html">Provident Fund</a></li>
                        </ul>
                        <!-- second-level-items -->
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Customers<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('all-customers')}}">Customers List</a>
                            </li>
                            <li>
                                <a href="{{url('add-customer')}}">Add Customer</a>
                            </li>
                            <li>
                                <a href="{{url('checkin-customers')}}">Checked In</a>
                            </li>
                            <li>
                                <a href="{{url('checkout-customers')}}">Checked Out</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Payments<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('all-payments')}}">Payments List </a></li>

                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Employees<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('all-employees')}}">Employees List</a></li>
                            <li><a href="{{url('add_employee')}}">Add Employee</a></li>
                            <li><a href="{{url('employee-leave')}}">Leaves</a></li>
                        </ul>
                        <!-- second-level-items -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris Charts</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Payroll<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('all-salary')}}">Employees Salary</a></li>
                            <li><a href="{{url('generate-slip')}}">Payslip</a></li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Accounts and Invoicing<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('all-invoices')}}">Invoices</a></li>
                            <li><a href="payments.html">Payments</a></li>
                            <li><a href="expenses.html">Expenses</a></li>
                            <li><a href="taxes.html">Taxes</a></li>
                            <li><a href="provident-fund.html">Provident Fund</a></li>
                        </ul>
                        <!-- second-level-items -->
                    </li>




                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>System Configuration<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="login.html">Lock System</a>
                            </li>
                            <li>
                                <a href="login.html">Users</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

          @yield('content')

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{asset('backend/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('backend/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('backend/plugins/pace/pace.js')}}"></script>
    <script src="{{asset('backend/scripts/siminta.js')}}"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{asset('backend/plugins/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('backend/plugins/morris/morris.js')}}"></script>
    <script src="{{asset('backend/scripts/dashboard-demo.js')}}"></script>

    <!-- Page-Level Plugin Scripts-->

    <script src="{{asset('backend/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>


</body>

</html>
