<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="adminsty.css">
<script>
function validateForm() {
  document.getElementById("l1").style.visibility="hidden";
  document.getElementById("l2").style.visibility="hidden";
  var z = 0;
  var x = document.forms["myForm"]["uname"].value;
  var y = document.forms["myForm"]["pass"].value;
  if (x.trim() == "") {
    var x = document.forms["myForm"]["uname"].value="";
    document.getElementById("l1").style.visibility="visible";
    z=1;
  }
  if (y.trim() == ""||y.length<=5) {
     document.forms["myForm"]["pass"].value=""
    document.getElementById("l2").style.visibility="visible";
    z=1;
  }
  if(z == 1){
    return false;
  }
  else{
    return true;
  }
}
</script>
</head>
<body bgcolor = "#eee">
<form name="myForm" action="adminp.php" onsubmit="return validateForm()" method="post">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">

    <i class="fas fa-user"></i>
    <input type="text" name ="uname" placeholder="Username" autocomplete="off" >
  </div>
<label id = "l1" style="color:red;visibility:hidden;float: right">Please enter a valid username</label>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="pass" placeholder="Password" autocomplete="off" >
  </div>
<label id="l2" style="color:red;visibility:hidden;float: right;"> please enter a valid password</label>
<br>  
<input type="submit" id="inp1" on click ="chng()" class="btn" value="Submit">
</div>
</form>
  </body>
</html>