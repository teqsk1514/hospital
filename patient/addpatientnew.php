
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
    <form method="post" action="addpatient.php">
        <!--<label>Patient ID </label> <input type="text" required="required" name="patientId" placeholder="Remember the ID"><br>-->
        <label>Patient name </label> <input type="text" required="required" name="patientname" placeholder="Enter Patient name"><br>

        <label> Patient age </label><input type="number" required="required" name="patientage" min="5" max="100" placeholder="Enter Patient age"><br>

        <label> Patient Gender </label><input type="text" required="required" name="patientgender" placeholder="Enter Patient Gender"><br>
        <label> Patient address </label><input type="text" required="required" name="patientaddress" placeholder="Enter Patient address"><br>

        <label> Registration date </label><input type="date" required="required" name="regdate" placeholder="YYYY-MM-DD"><br>
        <label> Patient phoneno </label><input type="text" required="required" name="patientphoneno" placeholder="Enter Patient phoneno"><br>

        <label> Doctor Id </label><input type="text" required="required" name="docid" placeholder="Enter Doctor ID"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <p id="diplay"></p>
    </div>
    <div class="float-right">
        <?php
    include ("../conn.php");
    $sql = "SELECT * FROM doctor;";
    $result = mysqli_query($link,$sql);
    echo "<h3>SELECT THE DOCID FROM HERE</h3>";

echo "<table  class='cd db' >
        <thead>
            <tr>
                <th>DoctorID</th>
                <th>DoctorNAME</th>
                <th>ADDRESS</th>
                <th>PHONENO</th>
                <th>FAQUITY</th>
            <tr>
        </thead>";
        echo "<tbody>";
        if (mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)) {
        $showID=$row['docID'];
        $showName=$row['docName'];
        $showAddress=$row['address'];
        $showPhoneno=$row['contact'];
        $showfaculty=$row['faculty'];

        echo "<tr>
                <td>$showID</td>
                <td>$showName</td>
                <td>$showAddress</td>
                <td>$showPhoneno</td>
                <td>$showfaculty</td><br>
            </tr>";
        }
        echo "</tbody>";
        echo "</table>";



}



    ?>
    </div>
</body>
</html>


