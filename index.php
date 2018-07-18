
<?php
include ('conn.php');
?>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="index.css" >
        <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
    </head>
    <body onload="startTime()">
    <div class="wrapper"> <!-- for reasons -->
        <div class="main-content">
            <!-- your main stuff here -->
            <!--<h1 class="hospital">HOSPITAL DETAILS</h1>-->
            <div id="txt"></div>
            <br>
            <br><br>
            <div style="float: left;">
              <img src="hms.png" alt="Mountain View" style="width:600px;height:500px;">

            </div>

<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("txt").innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(function(){ startTime() }, 500);

}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script>

        </div>
        <div class="aside">
            <!-- your not so main stuff here -->
            <div class="wrapper_login">
  <div class="login">
    <h1>Log in here</h1>
    <form method="post" action="login.php">
      <input type="text" name="username" placeholder="Your Username" required="required" maxlength="50" />
      <input type="password" name="password" placeholder="Your Password" required="required" maxlength="50" />
      <input type="submit" class="submit" value="Login">
    </form>
  </div>
<br>
<br>
  <div class="login">
    <h1>New User</h1>
    <form method="post" action="signup.php">
      <input type="text" name="username_signup" placeholder="Your Username" required="required" maxlength="50" />
      <input type="text" name="password_signup" placeholder="Your Password" required="required" maxlength="50" />
      <input type="submit" class="submit" value="Signup">
    </form>
  </div>
</div>
        </div>
    </div>
</body>
</html>