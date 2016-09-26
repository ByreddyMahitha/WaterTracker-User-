<?php
session_start();
include_once 'Dbconnect.php';
?>
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

<div class="container-fluid">
<?php if (isset($_SESSION['usr_id'])) { ?>
<div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Signed in as <?php echo $_SESSION['usr_name']; ?></h3>
                </div>
                <div class="panel-body">
                        <form role="form">
                            <div class="form-group col-lg-offset-5">
                                <a href="userpage.php" type="submit" class="btn btn-warning ">Go!</a>
                            </div>
                            <div class="form-group col-lg-offset-5">
                                <a href="Logout.php" type="submit" class="btn btn-warning ">Logout</a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
</div>
<?php } else { ?>
<div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                        <form role="form">
                            <div class="form-group col-lg-offset-5">
                                <a href="login.php" type="submit" class="btn btn-warning ">Login</a>
                            </div>
                            <div class="form-group col-lg-offset-5">
                                <a href="Register.php" type="submit" class="btn btn-warning ">SignIn</a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
</div>
<?php } ?>
</div>
<style>

    body{
            background-image: url("water.jpg");

}
.centered-form{
    margin-top: 60px;
}

.centered-form .panel{
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
    </style>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </body>
    </html>
