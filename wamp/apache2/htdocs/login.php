<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['firstname'];
        header("Location: userpage.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
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


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <fieldset>
                    <legend>Login</legend>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Your Email" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Your Password" required class="form-control" />
                    </div>

                    <div class="form-group col-lg-offset-5">
                        <input type="submit" name="login"  value="Login" class="btn btn-warning" />
                    </div>
                </fieldset>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
        New User? <a href="register.php">Sign Up Here</a>
        </div>
    </div>
    </form>
 </div>
    </div>
</div>
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
