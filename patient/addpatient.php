

<?php
include ('../conn.php');
//$patientId=$_POST['patientId'];
$patientname=$_POST['patientname'];
$patientage=$_POST['patientage'];
$patientgender=$_POST['patientgender'];
$patientaddress=$_POST['patientaddress'];
$patientregdate=$_POST['regdate'];
$patientphoneno=$_POST['patientphoneno'];
$docid=$_POST['docid'];



$sql="
INSERT INTO `patient` (`patientName`, `age`, `gender`, `address`, `regDate`, `phoneno`, `docID`)
VALUES ('$patientname','$patientage','$patientgender','$patientaddress','$patientregdate','$patientphoneno','$docid');";
$result=mysqli_query($link,$sql);
$id=mysqli_insert_id($link);
echo "<h2>New Record Id is Remember This For Future:".$id."</h2>";
$sql1="SELECT docID from doctor where docID=$docid;";
$result1=mysqli_query($link,$sql1);
/*
$sql2="SELECT patientId from patient where patientName='$patientname';";
$result2=mysqli_query($link,$sql2);
        if (mysqli_num_rows($result2)) {
            while($row = mysqli_fetch_assoc($result2)){
                $showID=$row['patientId'];
            }
        }
*/
if ($result1){
    if (mysqli_num_rows($result1)) {
        echo "<br>inserted sussecfully ";
    }
    else{
        echo"not allowed";
    }
}
/*
$sql_show="SELECT * FROM patient WHERE 'patientid'= $id;";
$result_show = mysqli_query($link,$sql_show);
    echo "<h3>THE PATIENT INFORMATION IS</h3>";

echo "<table  class='cd db' >
        <thead>
            <tr>
                <th>PatientID</th>
                <th>PatientNAME</th>
                <th>Age</th>
                <th>Gender</th>
                <th>ADDRESS</th>
                <th>Deposit</th>
                <th>RegDate</th>
                <th>Phone no</th>
                <th>DocID</th>
            <tr>
        </thead>";
        echo "<tbody>";
        if (mysqli_num_rows($result_show) > 0 ){
    while($row = mysqli_fetch_assoc($result_show)) {
        $showID=$row['patientID'];
        $showName=$row['patientName'];
        $showAge=$row['age'];
        $showGender=$row['gender'];
        $showAddress=$row['address'];
        $showDeposit=$row['deposit'];
        $showDate=$row['regDate'];
        $showPhoneno=$row['phoneno'];
        $showfaculty=$row['docid'];

        echo "<tr>
                <td>$showID</td>
                <td>$showName</td>
                <td>$showAge</td>
                <td>$showGender</td>
                <td>$showAddress</td>
                <td>$showDeposit</td>
                <td>$showDate</td>
                <td>$showPhoneno</td>
                <td>$showfaculty</td><br>
            </tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>addPatient</title>

</head>
<body>
    <a href="patient.html"><b>Click here to return to the main page</b></a>
</body>
</html>