
<html>
<head>
    <title>ADD Patient</title>
    <style>
    label{
        font-size: 20px;
        box-sizing: border-box;
    }

    p{
        box-sizing: border-box;
    }
input[type=text] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
}
input[type=date] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
}

input[type=number] {
    width: 30%;
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

.float-right{
    float: right;
    padding: 20px;
}

.float-left{
    float:left;
    width: 50%;
    padding: 20px;
}

table.cd th  { background:#eee; padding:5px; border:1px solid #ccc; width: 60px;}

table.db td  { padding:5px; border:1px solid #ccc; width: 60px; text-align: center; }


</style>
</head>
<body>
    <div class="float-left">
    <form method="post" action="addpharmacy.php">
        <!--<label>Patient ID </label> <input type="text" required="required" name="patientId" placeholder="Remember the ID"><br>-->
        <label>Patient ID </label> <input type="number" required="required" name="patientid" min="1" placeholder="Enter PatientID"><br>

        <label>Particular ID </label><input type="number" required="required" name="particularid" min="1"  placeholder="Enter Patient ID"><br>

        <label> Quantity </label><input type="number" required="required" name="quantity" placeholder="particularquantity"><br>

        <label> Amount </label><input type="text" required="required" name="amount" placeholder="amount"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <p id="display"></p>
</div>
<div class="float-right">
    <?php
    include ("../conn.php");
    $sql = "SELECT * FROM particular;";
    $result = mysqli_query($link,$sql);
    echo "<h3>SELECT THE ParticularID FROM HERE</h3>";

echo "<table  class='cd db' >
        <thead>
            <tr>
                <th>ParticularID</th>
                <th>ParticularNAME</th>
                <th>Rate</th>
            <tr>
        </thead>";
        echo "<tbody>";
        if (mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)) {
        $showID=$row['particularId'];
        $showName=$row['particularName'];
        $showRate=$row['rate'];

        echo "<tr>
                <td>$showID</td>
                <td>$showName</td>
                <td>$showRate</td><br>
            </tr>";
        }
        echo "</tbody>";
        echo "</table>";



}



    ?>


</body>
</html>




