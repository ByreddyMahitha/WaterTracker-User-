<?php
$link = mysqli_connect("localhost","root","stackp")  or die("failed to connect to server !!");
mysqli_select_db($link,"user_details");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$examplebillnumber=$_POST['examplebillnumber'];
$examplebillammount=$_POST['examplebillammount'];
$exampleSelect1=$_POST['exampleSelect1'];

// Validation will be added here

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `user_details`.`bill`
(`examplebillnumber`, `examplebillammount`,`exampleSelect1`) VALUES ('$examplebillnumber', '$examplebillammount', '$exampleSelect1')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}
?>
