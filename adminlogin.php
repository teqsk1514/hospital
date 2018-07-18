<?php
include ('conn.php');
//include ('index.php');
$username=$_POST['username'];
$password=$_POST['password'];
//$link=@mysqli_connect("localhost","root","","hms") or die(mysqli_error());



$sql="SELECT * FROM admin  WHERE username='$username' and password='$password'";

$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);

if($count==1){

$_SESSION["username"];
$_SESSION["password"];
header("location:admin.html");
}
else {
    echo '<script language="javascript">';
echo 'alert("Worng Username Password")';
echo '</script>';
echo "<script>setTimeout(\"location.href = 'welcome.html';\",1);</script>";


//header("location:index.php");


//header("location:index.php");
}
ob_end_flush();
?>
<!--
<html>
<br>
<a href="index.php"><b>Click here to return to the main page</b></a>
</html>
-->

<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>

</body>
</html>