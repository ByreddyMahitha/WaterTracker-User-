<?php
session_start();



include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $billnumber = mysqli_real_escape_string($con, $_POST['billnumber']);
     $billamount = mysqli_real_escape_string($con, $_POST['billamount']);



    //name can contain only alpha characters and space

    if (!$error) {
        if(mysqli_query($con, "INSERT INTO billu(billnumber,billamount) VALUES('" . $billnumber . "','" . $billamount . "')")) {
            $successmsg = "Successfully Registered! <a href='chartjs.php'>Click here to Login</a>";
                    header("Location: chartjs.php");

        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Water Tracker | ChartJS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

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
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
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
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
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
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['usr_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

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
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
            <li><a href="userpage.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
          </ul>
        </li>



        <li class="treeview active">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="chartjs.php"><i class="fa fa-circle-o"></i> Bill Management</a></li>
            <li><a href="morris.php"><i class="fa fa-circle-o"></i> Water Management</a></li>
            <li><a href="flot.php"><i class="fa fa-circle-o"></i> Flow Management</a></li>
          </ul>
        </li>



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bill Management

      </h1>
      <ol class="breadcrumb">
        <li><a href="userpage.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">ChartJS</li>
      </ol>
      <br>

      <div class="container">
          <div class="row centered-form">
                      <div class="panel panel-default">
                              <div class="panel-heading">
                              <h3 class="panel-title">Enter your bill details! <small>We will analyze it for you!</small></h3>
                              </div>
                              <div class="panel-body">
                                  <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                                  <div class="row">
                                      <div class="col-xs-6 col-sm-6 col-md-6">
                                          <div class="form-group">
                                             <label for="name"></label>
                                               <input type="text" name="billnumber" placeholder="Enter Bill Number"  class="form-control" />

                                           </div>
                                      </div>
                                       <div class="col-xs-6 col-sm-6 col-md-6">
                                          <div class="form-group">
                                             <label for="name"></label>
                                               <input type="text" name="billamount" placeholder="Enter Bill Amount"  class="form-control" />

                                           </div>
                                      </div>
                                  </div>
                          <div class="form-group col-lg-offset-5">
                              <input type="submit" name="signup"  value="Bill It!" class="btn btn-warning" />
                          </div>
      </form>
      </div>
      </div>

      </div>
      </div>

    </section>

    <!-- Main content -->
    <section class="content">


          <!-- AREA CHART -->

          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Dollars spent on the whole</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
              <div class="chart">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="chart-legend clearfix">
              <li><i class="fa fa-circle-o text-red"></i> January</li>
              <li><i class="fa fa-circle-o text-green"></i> February</li>
              <li><i class="fa fa-circle-o text-yellow"></i> March</li>
              <li><i class="fa fa-circle-o text-aqua"></i> April</li>
              <li><i class="fa fa-circle-o text-light-blue"></i> May</li>
              <li><i class="fa fa-circle-o text-gray"></i> June</li>
              <li><i class="fa fa-circle-o text-orange"></i> July</li>
              <li><i class="fa fa-circle-o text-lime"></i> August</li>

            </ul>
          </div>
            </div>

            <!-- /.box-body -->
          </div>
        </div>



          <!-- /.box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Amount spent towards Kitchen</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="chart-legend clearfix">
                <li><i class="fa fa-circle-o text-red"></i> January</li>
                <li><i class="fa fa-circle-o text-green"></i> February</li>
                <li><i class="fa fa-circle-o text-yellow"></i> March</li>
                <li><i class="fa fa-circle-o text-aqua"></i> April</li>
                <li><i class="fa fa-circle-o text-light-blue"></i> May</li>
                <li><i class="fa fa-circle-o text-gray"></i> June</li>
                <li><i class="fa fa-circle-o text-orange"></i> July</li>
                <li><i class="fa fa-circle-o text-lime"></i> August</li>

              </ul>
            </div>
          </div>
            <!-- /.box-body -->
          </div>

        </div>
        <!-- /.col (LEFT) -->
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Amount spent towards Restroom</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="chart-legend clearfix">
                <li><i class="fa fa-circle-o text-red"></i> January</li>
                <li><i class="fa fa-circle-o text-green"></i> February</li>
                <li><i class="fa fa-circle-o text-yellow"></i> March</li>
                <li><i class="fa fa-circle-o text-aqua"></i> April</li>
                <li><i class="fa fa-circle-o text-light-blue"></i> May</li>
                <li><i class="fa fa-circle-o text-gray"></i> June</li>
                <li><i class="fa fa-circle-o text-orange"></i> July</li>
                <li><i class="fa fa-circle-o text-lime"></i> August</li>
              </ul>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
        </div>

          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Amount spent towards Garden</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
              <div class="chart">
                <canvas id="barChart" style="height:250px"></canvas>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="chart-legend clearfix">
                <li><i class="fa fa-circle-o text-red"></i> January</li>
                <li><i class="fa fa-circle-o text-green"></i> February</li>
                <li><i class="fa fa-circle-o text-yellow"></i> March</li>
                <li><i class="fa fa-circle-o text-aqua"></i> April</li>
                <li><i class="fa fa-circle-o text-light-blue"></i> May</li>
                <li><i class="fa fa-circle-o text-gray"></i> June</li>
                <li><i class="fa fa-circle-o text-orange"></i> July</li>
                <li><i class="fa fa-circle-o text-lime"></i> August</li>
              </ul>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->

      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
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
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

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

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: 136,
        color: "#f56954",
        highlight: "#f56954",
        label: "January"
      },
      {
        value: 145,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "February"
      },
      {
        value: 132,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "March"
      },
      {
        value: 148,
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "April"
      },
      {
        value: 162,
        color: "#3c8dbc",
        highlight: "#3c8dbc",
        label: "May"
      },
      {
        value: 157,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "June"
      },
      {
        value: 170,
        color: "#ff00bf",
        highlight: "#ff00bf",
        label: "July"
      },
      {
        value: 194,
        color: "#7FFF00",
        highlight: "#7FFF00",
        label: "August"
      }


    ];
    var pieOptions = {
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
    pieChart.Doughnut(PieData, pieOptions);

    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas);
    var areaData = [
      {
        name:"January",
        value: 42,
        color: "#f56954",
        highlight: "#f56954",
        label: "January"
      },
      {
        value: 47,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "February"
      },
      {
        value: 40,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "March"
      },
      {
        value: 50,
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "April"
      },
      {
        value: 56,
        color: "#3c8dbc",
        highlight: "#3c8dbc",
        label: "May"
      },
      {
        value: 59,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "June"
      },
      {
        value: 64,
        color: "#ff00bf",
        highlight: "#ff00bf",
        label: "July"
      },
      {
        value: 77,
        color: "#7FFF00",
        highlight: "#7FFF00",
        label: "August"
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

    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    var lineData = [
      {
        value: 57,
        color: "#f56954",
        highlight: "#f56954",
        label: "January"
      },
      {
        value: 59,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "February"
      },
      {
        value: 60,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "March"
      },
      {
        value: 62,
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "April"
      },
      {
        value: 64,
        color: "#3c8dbc",
        highlight: "#3c8dbc",
        label: "May"
      },
      {
        value: 66,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "June"
      },
      {
        value: 68,
        color: "#ff00bf",
        highlight: "#ff00bf",
        label: "July"
      },
      {
        value: 72,
        color: "#7FFF00",
        highlight: "#7FFF00",
        label: "August"
      }


    ];

    var lineOptions = {
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
    lineChart.Doughnut(lineData, lineOptions);

    //-------------
    //- BAR CHART -
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barData = [
      {
        value: 37,
        color: "#f56954",
        highlight: "#f56954",
        label: "January"
      },
      {
        value: 39,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "February"
      },
      {
        value: 32,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "March"
      },
      {
        value: 36,
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "April"
      },
      {
        value: 42,
        color: "#3c8dbc",
        highlight: "#3c8dbc",
        label: "May"
      },
      {
        value: 32,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "June"
      },
      {
        value: 38,
        color: "#ff00bf",
        highlight: "#ff00bf",
        label: "July"
      },
      {
        value: 45,
        color: "#7FFF00",
        highlight: "#7FFF00",
        label: "August"
      }


    ];

    var barOptions = {
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
    barChart.Doughnut(barData, barOptions);

    //-------------
  });
</script>
</body>
</html>
