

<?php
include ('../conn.php');
//$patientId=$_POST['patientId'];
$patientid=$_POST['patientid'];
$particularid=$_POST['particularid'];
$quantity=$_POST['quantity'];
$amount=$_POST['amount'];



$sql="
INSERT INTO `pharmacy` (`patientId`, `particularId`,`quantity`,`amount`)
VALUES ('$patientid','$particularid','$quantity','$amount');";
$result=mysqli_query($link,$sql);
//$id=mysqli_insert_id($link);
//echo "<h2>New Record Id:".$id."</h2>";

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
    <title>addPharmacy</title>

</head>
<body>
    <a href="../welcome.html"><b>Click here to return to the main page</b></a>
</body>
</html>