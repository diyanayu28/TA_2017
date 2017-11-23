<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Core CSS - Include with every page -->
    <link rel="stylesheet" href="{{ asset('AdminN/assets/plugins/bootstrap/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{ asset('AdminN/assets/font-awesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{ asset('AdminN/assets/plugins/pace/pace-theme-big-counter.css')}}"/>
    <link rel="stylesheet" href="{{ asset('AdminN/assets/css/style.css')}}"/>
    <link rel="stylesheet"href="{{ asset('AdminN/assets/css/main-style.css')}}"/>
    <!-- Page-Level CSS -->
    <link rel="stylesheet" href="{{ asset('AdminN/assets/plugins/morris/morris-0.4.3.min.css')}}"/>
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
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Lunar Hospital Bagian Saraf</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Untuk membuat jadwal pemeriksaan silahkan kontak bagian administrasi rumah sakit dan mengisi form <br> Terimakasih </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Adiministrasi Rumah Sakit Bagian Kandungan</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Kepada pasien yth, diingatkan bahwa besuk akan ada pemeriksaan kandungan pukul 11.00 WIB dengan Dr. Dhea <br> Terimakasih <br> Note : Harap membawa kartu pasien</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Administrasi Bagian Keuangan</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Two days ago</em>
                                    </span>
                                </div>
                                <div>Kepada saudari rina, diharap untuk segera membayar biaya administrasi akun rumah sakit untuk bulan ini. Paling lambat 20 November 2017 <br> Terimakasih</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">4</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>1 New Message
                                    <span class="pull-right text-muted small">30 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>1 New Schedule
                                    <span class="pull-right text-muted small">Tomorrow</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>2 Message Sent
                                    <span class="pull-right text-muted small">45 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>1 Bill
                                    <span class="pull-right text-muted small">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/users"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Jonny <strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>

                    <li class="selected">
                        <a href="/"><i class="fa fa-dashboard fa-fw"></i>Home</a>
                    </li>
                    <li>
                        <a href="/dokter"><i class="fa fa-table fa-fw"></i>Dokter Jaga</a>
                    </li>
                    <li>
                        <a href="/kamar"><i class="fa fa-table fa-fw"></i>Kamar Tersedia</a>
                    </li>
                    <li>
                        <a href="/kontak"><i class="fa fa-table fa-fw"></i>Kontak (per Departement)</a>
                    </li>
                    <li>
                        <a href="/antrian"><i class="fa fa-table fa-fw"></i>Antrian</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Jonny Deen </b>
								</b> &#10084 Stay Healthy please &#10084;
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>2 </b>Check Up Shceduled This Month

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b> 1 </b>Bill Charge This Month
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b>5</b> New Check Up Data This Year

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>1 </b>Waiting List
                    </div>
                </div>
                <!--end quick info section -->
            </div>

            <div class="row">
                <div class="col-lg-8">



                    <!--Area chart example -->

                    <!--End area chart example -->
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Check Up Data
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Registration Number</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2017</td>
                                                    <td>09:29 AM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>04/15/2017</td>
                                                    <td>10:20 AM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>12/20/2016</td>
                                                    <td>09:03 AM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>08/08/2016</td>
                                                    <td>10:00 AM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>03/24/2016</td>
                                                    <td>10:49 AM</td>
                                                    <td>$8345.23</td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->

                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3>537 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Online
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3>298 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Visitors
                            </span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{ asset('AdminN/assets/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{ asset('AdminN/assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('AdminN/assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{ asset('AdminN/assets/plugins/pace/pace.js')}}"></script>
    <script src="{{ asset('AdminN/assets/scripts/siminta.js')}}"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{ asset('AdminN/assets/plugins/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{ asset('AdminN/assets/plugins/morris/morris.js')}}"></script>
    <script src="{{ asset('AdminN/assets/scripts/dashboard-demo.js')}}"></script>

</body>

</html>
