<?php
include ('conn.php');
//include ('index.php');
$username=$_POST['username_signup'];
$password=$_POST['password_signup'];
//$link=@mysqli_connect("localhost","root","","hms") or die(mysqli_error());



$sql="INSERT INTO `signup` (`username`, `password`) VALUES ('$username', '$password');";

$result=mysqli_query($link,$sql);
//$count=mysqli_num_rows($result);
/*
if($count==1){

$_SESSION["username"];
$_SESSION["password"];
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
*/
if($result>=0)
{
echo'<br><br><b>Thank you for registeration !! <br>';
}


?>

<html>
<br>
<a href="index.php"><b>Click here to return to the main page</b></a>
</html>
