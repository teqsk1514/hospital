

<?php
include ('../conn.php');
$docid=$_POST['docid'];
$docname=$_POST['docname'];
$docaddress=$_POST['docaddress'];
$docphoneno=$_POST['docphoneno'];
$docspeciality=$_POST['special'];


$sql="INSERT INTO `doctor` (`docID`, `docName`, `address`, `contact`, `faculty`) VALUES ('$docid', '$docname', '$docaddress', '$docphoneno', '$docspeciality');";
$result=mysqli_query($link,$sql);

if ($result){
        echo "inserted sussecfully";
    }
    else{
        echo"not allowed";
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>addPatient</title>

</head>
<body>
    <a href="../admin.html"><b>Click here to return to the main page</b></a>
</body>
</html>