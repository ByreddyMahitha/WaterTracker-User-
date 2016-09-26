
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title> Smart Water Tracker </title>
<meta name="description" content="Smart Water Tracker">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

</head>

<body>


<div class="container">
    <div class="row centered-form">
        <div class="col-lg-10">
                <div class="panel panel-primary">
                        <div class="panel-heading">
                        <h3 class="panel-title">HARDWARE STATUS</h3>
                        </div>
                        <div class="panel-body">
                          <table class="example2">

    <tr>
      <th> ID </th>
      <th data-th="Driver details"><span>DEVICE NAME</span></th>
      <th>STATUS</th>
      <th>TIMESTAMP</th>

    </tr>

    <tr>
      <td>N9TT-9G0A-B7FQ-RANC</td>
      <td>Moisture Sensor</td>
      <td>Not Working</td>
      <td><?php echo date("Y-m-d h:i:sa", time()); ?>
    </tr>

    <tr>
      <td>QK6A-JI6S-7ETR-0A6C</td>
      <td>Humidity Sensor</td>
      <td>Working</td>
      <td><?php echo date("Y-m-d h:i:sa", time()); ?>

    </tr>

    <tr>
    <td>SXFP-CHYK-ONI6-S89U</td>
      <td>Grove relay</td>
      <td>Working</td>
      <td><?php echo date("Y-m-d h:i:sa", time()); ?>

    </tr>

    <tr>
      <td>XNSS-HSJW-3NGU-8XTJ</td>
      <td>Grove encoder</td>
      <td>Working</td>
      <td><?php echo date("Y-m-d h:i:sa", time()); ?>
    </tr>

     <tr>
       <td>NHLE-L6MI-4GE4-ETEV</td>
      <td>Grove Button</td>
      <td>Working</td>
      <td><?php echo date("Y-m-d h:i:sa", time()); ?>
    </tr>

     <tr>
       <td>6ETI-UIL2-9WAX-XHYO</td>
      <td>Grove Base shield</td>
      <td>Working</td>
      <td><?php echo date("Y-m-d h:i:sa", time()); ?>
    </tr>

     <tr>
       <td>2E62-E3SR-33FI-XHV3</td>
      <td>Water flow sensor</td>
      <td>Working</td>
      <td><?php echo date("Y-m-d h:i:sa", time()); ?>
    </tr>

    <tr>
      <td>PP2P-AFG4-KNAT</td>
      <td>Arduino</td>
      <td>Working</td>
      <td><?php echo date("Y-m-d h:i:sa", time()); ?>
    </tr>

    <tr>
      <td>W2DP-2HN9-C3E5</td>
      <td>Grove OLED Display</td>
      <td>Working</td>
      <td><?php echo date("Y-m-d h:i:sa", time()); ?>
    </tr>

  </table>

</div>
</div>
</div>
</div>
</div>
<style type="text/css">
table.example2 {background-color:transparent;border-collapse:collapse;width:100%;}
table.example2 th, table.example2 td {text-align:center;border:1px solid black;padding:5px;}
table.example2 th {background-color:#32CD32;}
table.example2 td:first-child {width:30%;}
</style>
  <style>

    body{
            background-image: url("water.jpg");
}
.centered-form{
    margin-top: 60px;
}

.centered-form .panel{
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
    </style>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </body>
    </html>
