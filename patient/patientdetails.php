
<?php
include ('../conn.php');
//error_reporting(0);
$input = $_POST['pID'];

//$input2 = $_POST['pID'];
//if (isset($_POST['SubmitButton'])) {
//
//}
/*
$sql1 = "SELECT (SUM(p.amount)) as totalamount,pp.patientId FROM pharmacy p,patient pp WHERE p.patientId=pp.patientId GROUP BY pp.patientId;";
$result1=mysqli_query($link,$sql1);
if (mysqli_num_rows($result1) > 0 ){
    while($row = mysqli_fetch_assoc($result1)) {
        $showAmount=$row['totalamount'];
        echo "$showAmount";
    }
}

if ($result1== TRUE) {
    echo "opps";
}

*/
$sql="CALL myFirstProc($input);";
$result = mysqli_query($link,$sql);

/*
$sql1="CALL pharmacyProc($input);";
$result1 = mysqli_query($link,$sql1);
if ($result1== FALSE) {
    echo "opps";
}
*/
/*
$sql1="SELECT (SUM('p1.amount')) as totalamount,'pp.patientId' FROM pharmacy p1,patient pp WHERE 'p1.patientId'=$input GROUP BY $input;";
$result1 = mysqli_query($link,$sql1);
if ($result1) {
    echo "asd";
}
if (mysqli_num_rows($result1) > 0 ){
    while($row = mysqli_fetch_assoc($result1)) {
        $showAmount=$row['patientId'];
        echo "$showAmount";
    }
}
*/

//echo mysqli_error();
if (mysqli_num_rows($result)) {
    echo "<h2>You have entered the valid PatientID</h2>";
}else{
    //echo "<h2>You have entered the Invalid PatientID Enter Again</h2>";
        echo '<script language="javascript">';
echo 'alert("Worng PatientID")';
echo '</script>';
echo "<script>setTimeout(\"location.href = 'patient.html';\",1);</script>";
}

echo "<table  class='cd db' >
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>GENDER</th>
                <th>ADDRESS</th>
                <th>DEPOSIT</th>
                <th>REGDATE</th>
                <th>PHONENO</th>
                <th>DOCID</th>
                <th>DEPOSIT</th>
            <tr>
        </thead>";
        echo "<tbody>";
        //if (!$result) {
    //throw new Exception(mysqli_error($link)."[ $sql]");
//}
if (mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)) {
        $showID=$row['patientId'];
        $showName=$row['patientName'];
        $showAge=$row['age'];
        $showGender=$row['gender'];
        $showAddress=$row['address'];
        $showDeposit=$row['deposit'];
        $showRegdate=$row['regDate'];
        $showPhoneno=$row['phoneno'];
        $showDocid=$row['docID'];
        $showDeposit=$row['deposit'];

        echo "<tr>
                <td>$showID</td>
                <td>$showName</td>
                <td>$showAge</td>
                <td>$showGender</td>
                <td>$showAddress</td>
                <td>$showDeposit</td>
                <td>$showRegdate</td>
                <td>$showPhoneno</td>
                <td>$showDocid</td>
                <td>$showDeposit</td><br>
            </tr>";
        }
        echo "</tbody>";
        echo "</table>";
}
/*
echo "<table  class='cd db' >
        <thead>
            <tr>
                <th>ID</th>
                <th>PARTICULAR ID</th>
                <th>QUANTITY</th>
                <th>AMOUNT</th>
                <tr>
        </thead>";
        echo "<tbody>";

if (mysqli_num_rows($result1) > 0 ){
    while($row1 = mysqli_fetch_assoc($result1)) {
        $showID=$row1['patientId'];
        $showPId=$row1['particularId'];
        $showQuantity=$row1['quantity'];
        $showAmount=$row1['amount'];

        echo "<tr>
                <td>$showID</td>
                <td>$showPId</td>
                <td>$showQuantity</td>
                <td>$showAmount</td>
            </tr>";
        }
        echo "</tbody>";
        echo "</table>";
}

*/
?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        input[type=text] {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;

}
input[type=submit]{
    color: green;
    padding: 5px 25px 5px 25px;
}
    </style>
</head>
<body>
    <br>
    <!--<form method="post" action="" name="patient">
        <input name="pID" placeholder="Enter patientId" type="text">
        <input type="submit" name="SubmitButton" value="Submit">
    </form>
-->
<a href="patient.html">Go Back</a>
</body>
</html>
<style type="text/css">
    table.cd th  { background:#eee; padding:5px; border:1px solid #ccc; width: 60px;}

    table.db td  { padding:5px; border:1px solid #ccc; width: 60px; text-align: center; }
</style>