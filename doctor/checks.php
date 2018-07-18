

<?php
include ('../conn.php');
$docId=$_POST['docid'];
$patientId=$_POST['patientid'];
$checkdate=$_POST['checkdate'];
$fees=$_POST['fees'];
$remarks=$_POST['remarks'];



$sql="
INSERT INTO `checking` (`docId`, `patientId`, `checkDate`, `fee`, `remarks`) VALUES ('$docId', '$patientId', '$checkdate', '$fees', '$remarks');";
$result=mysqli_query($link,$sql);

if ($result){
    echo "<br>inserted sussecfully<br> ";
}
    else{
        echo"Not Inserted<br>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>addPatient</title>

</head>
<body>
    <a href="doctor.html"><b>Click here to return to the main page</b></a>
</body>
</html>