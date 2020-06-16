<?php
require 'navbar.php';
$uname=$_SESSION['usern'];
require 'db.php';
$sql = "select * from clientdetails where uname='$uname'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);?>
   <head><link rel="stylesheet" href="regsty.css"> </head>
<?php
 ?>
 
<script>
  function validateForm() {
  document.getElementById("l1").style.visibility="hidden";
  document.getElementById("l2").style.visibility="hidden";
  document.getElementById("l3").style.visibility="hidden";
  document.getElementById("l4").style.visibility="hidden";
  document.getElementById("l5").style.visibility="hidden";
  document.getElementById("l6").style.visibility="hidden";
  document.getElementById("l7").style.visibility="hidden";
  document.getElementById("l8").style.visibility="hidden";
      document.getElementById("l9").style.visibility="hidden";
  document.getElementById("ldt").style.visibility="hidden";
  var z = 0;
  var un = document.forms["myForm"]["un"].value;
  var fn = document.forms["myForm"]["fn"].value;
  var ln = document.forms["myForm"]["ln"].value;
  var em = document.forms["myForm"]["em"].value;
  var mn = document.forms["myForm"]["mn"].value;
  var ct = document.forms["myForm"]["ct"].value;
  var p1 = document.forms["myForm"]["p1"].value;
        var p3 = document.forms["myForm"]["p3"].value;
  var p2 = document.forms["myForm"]["p2"].value;
  var dt = document.forms["myForm"]["dt"].value;
  var rna=/^([a-z A-Z]+)$/;
  var rmn=/^[7-9]\d{9}$/;
  var rem=/^([a-zA-Z0-9\._-]+)@([a-zA-Z-]+).([a-z]{2,8})(\.[a-z]{2,8})?(\.[a-z]{2,8})?$/;
  var bday= +new Date(dt);
  var age = ~~ ((Date.now() - bday) / (31557600000));
  if (un.trim() == "") {
    document.forms["myForm"]["un"].value ="";
    document.getElementById("l1").innerHTML="cannot be left blank";
    document.getElementById("l1").style.visibility="visible";
    z=1;
  }

  if (fn.trim() == "") {
    document.getElementById("l2").innerHTML="cannot be left blank";
    document.getElementById("l2").style.visibility="visible";
    z=1;
  }
  else if(!rna.test(fn)){
    document.forms["myForm"]["fn"].value ="";
   document.getElementById("l2").innerHTML="Invalid" ;
   document.getElementById("l2").style.visibility="visible";
    z=1; 
  }
  if (ln.trim() == "") {
    document.getElementById("l3").innerHTML="cannot be left blank" ;
    document.getElementById("l3").style.visibility="visible";
    z=1;
  }
  else if(!rna.test(ln)){
    document.forms["myForm"]["rn"].value ="";
   document.getElementById("l3").innerHTML="Invalid" ;
   document.getElementById("l3").style.visibility="visible";
    z=1; 
  }
  if (!rem.test(em)) {
    document.forms["myForm"]["em"].value ="";
    document.getElementById("l4").innerHTML="Inavlid Email";
    document.getElementById("l4").style.visibility="visible";
    z=1;
  }
  if (!rmn.test(mn)) {
    document.forms["myForm"]["mn"].value ="";
    document.getElementById("l5").innerHTML="Inavlid Mobile Number";
    document.getElementById("l5").style.visibility="visible";
    z=1;
  }
  if (ct.trim() == "") {
    document.getElementById("l6").innerHTML="cannot be left blank";
    document.getElementById("l6").style.visibility="visible";
    z=1;
  }
  if(age<21){
    document.getElementById("ldt").innerHTML="age must be above 20 years"
    document.getElementById("ldt").style.visibility="visible";
  }
  if (p1.trim() == ""||p1.length<=5) {
    document.getElementById("l7").innerHTML="too short";
    document.getElementById("l7").style.visibility="visible";
    z=1;
  }
        if (p3.trim() == ""||p3.length<=5) {
    document.getElementById("l9").innerHTML="too short";
    document.getElementById("l9").style.visibility="visible";
    z=1;
  }
  if (p2.trim() == ""||p1.length<=5) {
    document.getElementById("l8").innerHTML="too short"
    document.getElementById("l8").style.visibility="visible";
    z=1;
  }

  if(p1.localeCompare(p2)){
    document.forms["myForm"]["p2"].value ="";
    document.getElementById("l8").innerHTML="Please Enter the same pasword as above" ;
    document.getElementById("l8").style.visibility="visible";
     return false;
  }


  if(z == 1){
    return false;
  }
  else{
    return true;
  }
}
</script>
    
 <form  name="myForm" onsubmit="return validateForm()" action="upp.php" method="post" autocomplete="off">
<div class="reg-box">
  <h1>Update</h1>
  <div class="textbox1">
    <i class="fas fa-user"></i>
    <input type="text" name="un" placeholder="UserName" value="<?php echo $row['uname'] ?>" ></div>
    <?php if(isset($_GET['error'])){
      if($_GET['error']=='taken')
        echo '<label id="l1" style="color:red;">Username already taken</label>';}
     ?>
    <label id="l1" style="color:red;visibility:hidden;">z</label>
  <div class="textbox1">
    <i class="fas fa-id-card"></i>
    <input type="text" name="fn" placeholder="First Name" value="<?php echo $row['fname'] ?>">
  </div>
  <label id="l2" style="color:red;visibility:hidden;">z</label>
  <div class="textbox1">
    <i class="fas fa-id-card"></i>
    <input type="text" name="ln" placeholder="Last Name" value="<?php echo $row['lname'] ?>">
  </div>
 <label id="l3" style="color:red;visibility:hidden;">z</label>
  <div class="textbox1">
    <i class="fas fa-envelope"></i>
    <input type="text" name="em" placeholder="Email Id" value="<?php echo $row['email'] ?>">
  </div>
  <label id="l4" style="color:red;visibility:hidden;">z</label>
  <div class="textbox1">
    <i class="fas fa-mobile-alt"></i>
    <input type="text" name="mn" placeholder="Mobile Number" value="<?php echo $row['mobile'] ?>">
  </div>
    <label id="l5" style="color:red;visibility:hidden;">z</label>
    <div class="textbox1">
    <i class="far fa-calendar-alt"></i>
    <input type="date" name="dt" placeholder="Date of Birth" value="<?php echo $row['dob'] ?>">
  </div>
  <label id="ldt" style="color:red;visibility:hidden;">z</label>
  <div class="textbox1">
    <i class="fas fa-map"></i>
    <input type="text" name="ct" placeholder="City" value="<?php echo $row['city'] ?>">
  </div>
  <label id="l6" style="color:red;visibility:hidden;">z</label>
  <div class="textbox1">
    <i class="fas fa-lock"></i>
    <input type="password" name="p3" placeholder=" Old Password">
  </div>
    <?php if(isset($_GET['error'])){
      if($_GET['error']=='wrong')
        echo '<label id="l9" style="color:red;">wrong pass</label>';
}?>
      <label id="l9" style="color:red;visibility:hidden;">z</label>

    <div class="textbox1">
    <i class="fas fa-lock"></i>
    <input type="password" name="p1" placeholder=" New Password">
  </div>
    
  <label id="l7" style="color:red;visibility:hidden;">z</label>
  <div class="textbox1">
    <i class="fas fa-key"></i>
    <input type="password" name="p2" placeholder="Confirm Password">
  </div>
  <label id="l8" style="color:red;visibility:hidden;">z</label>

  <input type="submit" class="btn1" value="Change">
  <br>
</div>
</form>

