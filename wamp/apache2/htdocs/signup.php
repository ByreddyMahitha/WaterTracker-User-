<?php
$link = mysqli_connect("localhost","root","stackp")  or die("failed to connect to server !!");
mysqli_select_db($link,"user_details");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$passwd=$_POST['passwd'];
$repasswd=$_POST['repasswd'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$zipcode=$_POST['zipcode'];
$state=$_POST['state'];
$phone=$_POST['phone'];
$email=$_POST['email'];

// Validation will be added here

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `user_details`.`members`
(`firstname`, `lastname`,`passwd`,`repasswd`, `gender`, `dob`, `address`,
`city`, `zipcode`, `state`, `phone`, `email`) VALUES ('$firstname', '$lastname', '$passwd','$repasswd',
'$gender', '$dob', '$address', '$city', '$zipcode', '$state', '$phone', '$email')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}
?>
