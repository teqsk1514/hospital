

<?php
include ('../conn.php');
//$patientId=$_POST['patientId'];
$particularname=$_POST['particularname'];
$particularrate=$_POST['particularrate'];



$sql="
INSERT INTO `particular` (`particularName`, `rate`)
VALUES ('$particularname','$particularrate');";
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
    <title>addParticular</title>

</head>
<body>
    <a href="../admin.html"><b>Click here to return to the main page</b></a>
</body>
</html>