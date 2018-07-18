

<?php
include ('../conn.php');
$patientId=$_POST['patientid'];
$testid=$_POST['testid'];
$testdate=$_POST['testdate'];
$remarks=$_POST['remarks'];



$sql="
INSERT INTO `laboratory` (`patientId`, `testId`,`testDate`,`remarks`)
VALUES ('$patientId','$testid','$testdate','$remarks');";
$result=mysqli_query($link,$sql);

if ($result){
    echo "<br>inserted sussecfully ";
}
    else{
        echo"Not Inserted";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>addPatient</title>

</head>
<body>
    <a href="../welcome.html"><b>Click here to return to the main page</b></a>
</body>
</html>