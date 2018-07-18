<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Lab</title>
    <link rel="stylesheet" type="text/css" href="../welcome.css" >
    <style type="text/css">
        input[type=text] {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
    background-color: #EEEEEE;

}

        input[type=number] {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
    background-color: #EEEEEE;

}
        input[type=date] {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
    background-color: #EEEEEE;

}
textarea{
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
    background-color: #EEEEEE;
}
input[type=submit]{
    color: green;
    padding: 5px 25px 5px 25px;
}



table.cd th  { background:#eee; padding:5px; border:1px solid #ccc; width: 60px;}

table.db td  { padding:5px; border:1px solid #ccc; width: 60px; text-align: center; }


    </style>
</head>
<body style="background-color: #EEEEEE">
    <h1>Welcome to laboratory</h1>
    <div style="float: left;">
    <form  method="post" action="laboratoryadd.php" name="lab">
        <input type="number" name="patientid" placeholder="Enter Patient ID"><br>

        <input type="number" name="testid" placeholder="Enter Test ID"><br>
        <input type="date" name="testdate" placeholder="Enter TestDate"><br>
        <textarea name="remarks" cols="30" rows="3" placeholder="Text Remarks"     ></textarea><br>
        <input type="submit" name="submit"><br>
    </form>
    <br><br>
    <button class="button-container" onclick="location.href ='../welcome.html'">GO TO MAIN PAGE</button>
    </div>
    <div style=" float: right;">
        <?php
    include ("../conn.php");
    $sql = "SELECT * FROM test;";
    $result = mysqli_query($link,$sql);
    echo "<h3>SELECT THE TestID FROM HERE</h3>";

echo "<table  class='cd db' >
        <thead>
            <tr>
                <th>TestID</th>
                <th>TestName</th>
                <th>TestAmount</th>
            <tr>
        </thead>";
        echo "<tbody>";
        if (mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)) {
        $showID=$row['testId'];
        $showName=$row['testName'];
        $showAmount=$row['amount'];

        echo "<tr>
                <td>$showID</td>
                <td>$showName</td>
                <td>$showAmount</td>
                <br>
            </tr>";
        }
        echo "</tbody>";
        echo "</table>";



}



    ?>
    </div>


</body>
</html>
