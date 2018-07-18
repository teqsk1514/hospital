<?php
session_start();
if(!$_SESSION['username']){
header("location:welcome.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>