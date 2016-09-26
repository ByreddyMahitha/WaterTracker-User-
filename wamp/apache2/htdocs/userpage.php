<?php
session_start();
include_once 'Dbconnect.php';
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Water Tracker | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="template.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>WW</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Smart Water Tracker</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Smart Water Tracker Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your sesnor
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Pay the water bill in five days.
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Fix the pipe leakage in Kitchen
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Change the alarm limit for water-set it low and save water
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make transitions for the bathroom tap.
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['usr_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['usr_name']; ?>
                  <small>Member since May. 2016</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="Logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['usr_name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">

          <ul class="treeview-menu">
            <li class="active"><a href="userpage.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="chartjs.php"><i class="fa fa-circle-o"></i> Bill Management</a></li>
            <li><a href="morris.php"><i class="fa fa-circle-o"></i> Water Management</a></li>
            <li><a href="flot.php"><i class="fa fa-circle-o"></i> Flow management</a></li>
          </ul>
        </li>


            </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="template.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3">
          <!-- small box -->
          <div class="small-box bg-aqua">

            <div class="inner">
              <h3>436</h3>

              <p>Dollars saved</p>

            </div>

            <a href="chartjs.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Water Consumption Today</p>
            </div>

            <a href="morris.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->

        <div class="col-lg-3">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Water flow rate</p>
            </div>

            <a href="flot.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>44</h3>

              <p>Hardware Status</p>
            </div>

            <a href="manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-md-12">

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Water usage breakdown for the whole house hour wise</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-10">
              <div class="chart">
              <canvas id="pieChart" style="height:350px"></canvas>
            </div>
            </div>
            <div class="col-md-2">
              <ul class="chart-legend clearfix">
                <li><i class="fa fa-circle-o text-red"></i> Restroom</li>
                <li><i class="fa fa-circle-o text-green"></i> Garden</li>
                <li><i class="fa fa-circle-o text-orange"></i> Kitchen</li>
              </ul>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
        </div>
          <!-- /.box -->
          <div class="col-md-4">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Water usage per the week in Restroom</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>

            <!-- /.box-body -->
          </div>

        </div>
        <!--dummy-->
        <div class="col-md-4">

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Water usage per the week in Garden</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">

            <div class="chart">
              <canvas id="areaChart1" style="height:250px"></canvas>
            </div>
          </div>

          <!-- /.box-body -->
        </div>

      </div>
      <div class="col-md-4">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Water usage per the week in Kitchen</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

          <div class="chart">
            <canvas id="areaChart2" style="height:250px"></canvas>
          </div>
        </div>

        <!-- /.box-body -->
      </div>

    </div>
      </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Water usage breakdown per year</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-10">
              <div class="chart">
                <canvas id="lineChart" style="height:350px"></canvas>
              </div>
            </div>
            <div class="col-md-2">
              <ul class="chart-legend clearfix">
                <li><i class="fa fa-circle-o text-red"></i> Restroom</li>
                <li><i class="fa fa-circle-o text-green"></i> Garden</li>
                <li><i class="fa fa-circle-o text-blue"></i> Kitchen</li>
              </ul>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
          <!-- /.box -->

          <!-- BAR CHART -->

        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

      </section>
      <!-- /.content -->

      <!-- /.content-wrapper -->
      <footer class="main-footer">

      <strong>Copyright &copy; 2016 <a href="template.html">Smart Water Tracker</a>.</strong> All rights
      reserved.
      </footer>

      <!-- Control Sidebar -->

      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->

      <!-- jQuery 2.2.0 -->
      <script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
      <!-- Bootstrap 3.3.6 -->
      <script src="../../bootstrap/js/bootstrap.min.js"></script>
      <!-- ChartJS 1.0.1 -->
      <script src="../../plugins/chartjs/Chart.min.js"></script>
      <!-- FastClick -->
      <script src="../../plugins/fastclick/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/app.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../dist/js/demo.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
      <!-- page script -->
      <script>
      $(function () {
      /* ChartJS
      * -------
      * Here we will create a few charts using ChartJS
      */

      //--------------
      //- AREA CHART -
      //--------------

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
      var areaChart = new Chart(areaChartCanvas);
      var areaData = [
        {
          name:"Monday",
          value: 259,
          color: "#f56954",
          highlight: "#f56954",
          label: "Monday"
        },
        {
          value: 263,
          color: "#00a65a",
          highlight: "#00a65a",
          label: "Tuesday"
        },
        {
          value: 274,
          color: "#f39c12",
          highlight: "#f39c12",
          label: "Wednesday"
        },
        {
          value: 273,
          color: "#00c0ef",
          highlight: "#00c0ef",
          label: "Thursday"
        },
        {
          value: 268,
          color: "#3c8dbc",
          highlight: "#3c8dbc",
          label: "Friday"
        },
        {
          value: 289,
          color: "#d2d6de",
          highlight: "#d2d6de",
          label: "Saturday"
        },
        {
          value: 286,
          color: "#ff00bf",
          highlight: "#ff00bf",
          label: "Sunday"
        }


      ];

      var areaOptions = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke: true,
        //String - The colour of each segment stroke
        segmentStrokeColor: "#fff",
        //Number - The width of each segment stroke
        segmentStrokeWidth: 2,
        //Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        //Number - Amount of animation steps
        animationSteps: 100,
        //String - Animation easing effect
        animationEasing: "easeOutBounce",
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate: true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
      };
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      areaChart.Doughnut(areaData, areaOptions);

//dummy1
var areaChartCanvas = $("#areaChart1").get(0).getContext("2d");
var areaChart = new Chart(areaChartCanvas);
var areaData = [
  {
    name:"Monday",
    value: 177,
    color: "#f56954",
    highlight: "#f56954",
    label: "Monday"
  },
  {
    value: 178,
    color: "#00a65a",
    highlight: "#00a65a",
    label: "Tuesday"
  },
  {
    value: 179,
    color: "#f39c12",
    highlight: "#f39c12",
    label: "Wednesday"
  },
  {
    value: 174,
    color: "#00c0ef",
    highlight: "#00c0ef",
    label: "Thursday"
  },
  {
    value: 180,
    color: "#3c8dbc",
    highlight: "#3c8dbc",
    label: "Friday"
  },
  {
    value: 184,
    color: "#d2d6de",
    highlight: "#d2d6de",
    label: "Saturday"
  },
  {
    value: 179,
    color: "#ff00bf",
    highlight: "#ff00bf",
    label: "Sunday"
  }


];

var areaOptions = {
  //Boolean - Whether we should show a stroke on each segment
  segmentShowStroke: true,
  //String - The colour of each segment stroke
  segmentStrokeColor: "#fff",
  //Number - The width of each segment stroke
  segmentStrokeWidth: 2,
  //Number - The percentage of the chart that we cut out of the middle
  percentageInnerCutout: 50, // This is 0 for Pie charts
  //Number - Amount of animation steps
  animationSteps: 100,
  //String - Animation easing effect
  animationEasing: "easeOutBounce",
  //Boolean - Whether we animate the rotation of the Doughnut
  animateRotate: true,
  //Boolean - Whether we animate scaling the Doughnut from the centre
  animateScale: true,
  //Boolean - whether to make the chart responsive to window resizing
  responsive: true,
  // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
  maintainAspectRatio: true,
  //String - A legend template
  legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
};
//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
areaChart.Doughnut(areaData, areaOptions);

//dummy2
var areaChartCanvas = $("#areaChart2").get(0).getContext("2d");
var areaChart = new Chart(areaChartCanvas);
var areaData = [
  {
    name:"Monday",
    value: 22,
    color: "#f56954",
    highlight: "#f56954",
    label: "Monday"
  },
  {
    value: 24,
    color: "#00a65a",
    highlight: "#00a65a",
    label: "Tuesday"
  },
  {
    value: 26,
    color: "#f39c12",
    highlight: "#f39c12",
    label: "Wednesday"
  },
  {
    value: 24,
    color: "#00c0ef",
    highlight: "#00c0ef",
    label: "Thursday"
  },
  {
    value: 22,
    color: "#3c8dbc",
    highlight: "#3c8dbc",
    label: "Friday"
  },
  {
    value: 28,
    color: "#d2d6de",
    highlight: "#d2d6de",
    label: "Saturday"
  },
  {
    value: 32,
    color: "#ff00bf",
    highlight: "#ff00bf",
    label: "Sunday"
  }


];

var areaOptions = {
  //Boolean - Whether we should show a stroke on each segment
  segmentShowStroke: true,
  //String - The colour of each segment stroke
  segmentStrokeColor: "#fff",
  //Number - The width of each segment stroke
  segmentStrokeWidth: 2,
  //Number - The percentage of the chart that we cut out of the middle
  percentageInnerCutout: 50, // This is 0 for Pie charts
  //Number - Amount of animation steps
  animationSteps: 100,
  //String - Animation easing effect
  animationEasing: "easeOutBounce",
  //Boolean - Whether we animate the rotation of the Doughnut
  animateRotate: true,
  //Boolean - Whether we animate scaling the Doughnut from the centre
  animateScale: true,
  //Boolean - whether to make the chart responsive to window resizing
  responsive: true,
  // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
  maintainAspectRatio: true,
  //String - A legend template
  legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
};
//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
areaChart.Doughnut(areaData, areaOptions);


        //-------------
      //- LINE CHART -
      var barChartCanvas = $("#lineChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var barChart = new Chart(barChartCanvas);

      var barChartData = {
      labels: ["January", "February", "March", "April", "May","June","July","August","September","October","November","December"],
      datasets: [
        {
          label: "Restroom",
          fillColor: "rgba(0,0,0,0)",
          strokeColor: "#DC143C",
          pointColor: "#0000FF",
          pointStrokeColor: "#1E90FF",
          pointHighlightFill: "#FF0000",
          pointHighlightStroke: "#FF0000",
          data: [94535,95000,96784,97352,94265,93456,96432,98763,99254,99821,94582,99299]
        },
        {
          label: "Garden",
          fillColor: "rgba(0,0,0,0)",
          strokeColor: "#006400",
          pointColor: "#0000FF",
          pointStrokeColor: "#1E90FF",
          pointHighlightFill: "#FF0000",
          pointHighlightStroke: "#FF0000",
          data: [64605,66231,65340,64201,66207,67236,63219,67299,63489,67267,62374,69531]
        },
        {
          label: "Kitchen",
          fillColor: "rgba(0,0,0,0)",
          strokeColor: "#0000FF",
          pointColor: "#0000FF",
          pointStrokeColor: "#1E90FF",
          pointHighlightFill: "#FF0000",
          pointHighlightStroke: "#FF0000",
          data: [8102,8080,8291,8290,8193,8201,8293,8403,8019,8317,8210,8600]
        }

      ]
      };
      barChartData.datasets[1].fillColor = "#006400";
  barChartData.datasets[2].fillColor = "#0000FF";
  barChartData.datasets[0].fillColor = "#DC143C";


    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
      //--------------

      //-------------
      //- PIE CHART -
      var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var pieChart = new Chart(pieChartCanvas);

      var pieChartData = {
      labels: ["1:00AM", "2:00AM", "3:00AM", "4:00AM", "5:00AM","6:00AM","7:00AM","8:00AM","9:00AM","10:00AM","11:00AM","12:00NOON","1:00PM","2:00PM","3:00PM","4:00PM","5:00PM","6:00PM","7:00PM","8:00PM","9:00PM","10:00PM","11:00PM"],
      datasets: [
        {
          label: "Restroom",
          fillColor: "rgba(0,0,0,0)",
          strokeColor: "#DC143C",
          pointColor: "#0000FF",
          pointStrokeColor: "#1E90FF",
          pointHighlightFill: "#FF0000",
          pointHighlightStroke: "#FF0000",
          data: [4,2,1,1,8,14,20,22,17,14,10,8,8,7,8,10,15,18,20,18,15,10,9]
        },
        {
          label: "Garden",
          fillColor: "rgba(0,0,0,0)",
          strokeColor: "#006400",
          pointColor: "#0000FF",
          pointStrokeColor: "#1E90FF",
          pointHighlightFill: "#FF0000",
          pointHighlightStroke: "#FF0000",
          data: [1,1,3,4,6,8,9,13,12,11,13,13,14,14,11,9,8,8,7,5,4,2,1]
        },
        {
          label: "Kitchen",
          fillColor: "rgba(0,0,0,0)",
          strokeColor: "#FF4500",
          pointColor: "#0000FF",
          pointStrokeColor: "#1E90FF",
          pointHighlightFill: "#FF0000",
          pointHighlightStroke: "#FF0000",
          data: [0.2,0,0.4,0.5,1,1.5,1.5,2,1,0.5,0.5,0.3,0.3,0.2,0.2,0.1,0.6,0.7,1,2,2.5,1.5,1.5]
        }

      ]
      };


      var pieChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "#DCDCDC",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: true,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
      };

      //Create the line chart
      pieChart.Line(pieChartData, pieChartOptions);


      //-------------
      //BAR CHART
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var barChart = new Chart(barChartCanvas);

      var barChartData = {
      labels: ["1:00AM", "2:00AM", "3:00AM", "4:00AM", "5:00AM","6:00AM","7:00AM","8:00AM","9:00AM","10:00AM","11:00AM","12:00NOON","1:00PM","2:00PM","3:00PM","4:00PM","5:00PM","6:00PM","7:00PM","8:00PM","9:00PM","10:00PM","11:00PM"],
      datasets: [
        {
          label: "Electronics",
          fillColor: "#00FF7F",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "#0000FF",
          pointStrokeColor: "#1E90FF",
          pointHighlightFill: "#FF0000",
          pointHighlightStroke: "FF0000",
          data: [12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34]
        }

      ]
      };

      var barChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "#DCDCDC",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: true,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
      };

      //Create the line chart
      barChart.Line(barChartData, barChartOptions);

      // Get context with jQuery - using jQuery's .get() method.
      });
      </script>
      </body>
      </html>
