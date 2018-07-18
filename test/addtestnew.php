

<?php
include ('../conn.php');
//$patientId=$_POST['patientId'];
$testname=$_POST['testname'];
$testamount=$_POST['testamount'];



$sql="
INSERT INTO `test` (`testName`, `amount`)
VALUES ('$testname','$testamount');";
$result=mysqli_query($link,$sql);
$id=mysqli_insert_id($link);
echo "<h2>New Record Id:".$id."</h2>";

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
    <a href="../admin.html"><b>Click here to return to the main page</b></a>
</body>
</html>