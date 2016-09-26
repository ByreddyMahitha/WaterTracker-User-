<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
     $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
     $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$firstname)) {
        $error = true;
        $firstname_error = "Name must contain only alphabets ";
    }
    if (!preg_match("/^[a-zA-Z ]+$/",$lastname)) {
        $error = true;
        $lastname_error = "Name must contain only alphabets ";
    }
    if (!preg_match("/^[0-9 ]+$/",$phone)|| strlen($phone)<10 || strlen($phone)>10) {
        $error = true;
        $phone_error = "Enter a valid phone number ";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(firstname,lastname,phone,email,password) VALUES('" . $firstname . "','" . $lastname . "', '" . $phone . "', '" . $email . "', '" . md5($password) . "')")) {
            $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
                    header("Location: login.php");

        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
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
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title">SignUp for Smart Water Tracker! <small>It's free!</small></h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                       <label for="name"></label>
                                         <input type="text" name="firstname" placeholder="Enter First Name" required value="<?php if($error) echo $firstname; ?>" class="form-control" />
                                             <span class="text-danger"><?php if (isset($firstname_error)) echo $firstname_error; ?></span>
                                     </div>
                                </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                       <label for="name"></label>
                                         <input type="text" name="lastname" placeholder="Enter Last Name" required value="<?php if($error) echo $lastname; ?>" class="form-control" />
                                             <span class="text-danger"><?php if (isset($lastname_error)) echo $lastname_error; ?></span>
                                     </div>
                                </div>
                            </div>

                            <div class="form-group">
                                 <label for="name"></label>
                                    <input type="text" name="phone" placeholder="Phone" required value="<?php if($error) echo $phone; ?>" class="form-control" />
                                         <span class="text-danger"><?php if (isset($phone_error)) echo $phone_error; ?></span>
                            </div>

                            <div class="form-group">
                                  <label for="name"></label>
                                      <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                                            <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                                    </div>
                                    <div class="form-group">
                                          <label for="name"></label>
                                              <input type="text" name="fips" placeholder="fips" required value="<?php if($error) echo $email; ?>" class="form-control" />
                                                    <span class="text-danger"></span>
                                            </div>


                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name"></label>
                                            <input type="password" name="password" placeholder="Password" required class="form-control" />
                                                <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                                     </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                         <label for="name"></label>
                                             <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                                            <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                                    </div>
                                </div>
                            </div>
                    <div class="form-group col-lg-offset-5">
                        <input type="submit" name="signup"  value="Sign Up" class="btn btn-warning" />
                    </div>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
    <div class="col-md-4 col-lg-offset-4">
       Already_Registered?
       </div>
       <div class="col-md-4 col-lg-offset-5">
        <a href="login.php">Login Here</a>
      </div>
</form>
</div>
</div>
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
