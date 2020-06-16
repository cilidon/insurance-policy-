<?php

require 'navbar.php';
if(!isset($_SESSION['usern']))
{
  header("location:index.php?");
}
?>
<head><link rel="stylesheet" href="style.css">
<script>
function validateForm() {
  document.getElementById("l1").style.visibility="hidden";
  document.getElementById("l3").style.visibility="hidden";
  document.getElementById("l4").style.visibility="hidden";
  document.getElementById("l5").style.visibility="hidden";
  var z = 0;
  var lic = document.forms["myForm"]["cln"].value.toUpperCase();
  var year = document.forms["myForm"]["yom"].value;
  var y = document.forms["myForm"]["manu"].value;
  var x = document.forms["myForm"]["term"].value;
  var rli=/^[A-Z]{2}\-[0-9]{2}\-[A-Z]{2}\-[0-9]{4}$/;
  var rye=/^[0-9]{4}$/;
  if (lic.trim() == "") {
  	document.forms["myForm"]["cln"].value="";
  	document.getElementById("l1").innerHTML="Cannot be blank";
    document.getElementById("l1").style.visibility="visible";
    z=1;
  }
  if (year.trim() == "") {
  	document.forms["myForm"]["yom"].value="";
  	document.getElementById("l3").innerHTML="Cannot be blank";
    document.getElementById("l3").style.visibility="visible";
  	z=1;
  }
  else if(!rye.test(year)){
  		document.getElementById("l3").innerHTML="please enter a valid year";
  		document.getElementById("l3").style.visibility="visible";
  		z=1;
  }
  if (!y.localeCompare("None")) {
    document.getElementById("l4").innerHTML="please select a value";
    document.getElementById("l4").style.visibility="visible";
  	z=1;
  }
  if (!x.localeCompare("None")) {
    document.getElementById("l5").innerHTML="please select a value";
    document.getElementById("l5").style.visibility="visible";
    z=1;
  }
  if(!rli.test(lic)){
  		document.getElementById("l1").innerHTML="Invalid";
  		document.getElementById("l1").style.visibility="visible";
  		z=1;
  }
  	
  if(z == 1){
    return false;
  }
  else{
    alert("Succesfully applied")
    return true;
  }
  }
  function fun() {
    var yom = document.forms["myForm"]["yom"].value;
    if(yom < 2012){
      document.getElementById("f").style.display="none";
    }
    else{
      document.getElementById("f").style.display="block";
    }
  }
</script>
</head>
<body bgcolor="#444">
<form  name="myForm" action="carp.php" onsubmit="return validateForm()" method="post" autocomplete="off">
<div class="login-box">
  <h1 id = "hehe">Car Insurance</h1>
    <div class="textbox">
    <i class="fas fa-car-side"></i>
    <input type="text" name ="cln" placeholder="Car License Number">
  </div>
  <label id = "l1" style="color:red;visibility:hidden;">z</label>
  <div class="textbox">
    <i class="far fa-calendar"></i>
    <input type="text" name ="yom" placeholder="Year of Manufacture">
  </div>
  <label id = "l3" style="color:red;visibility:hidden;">z</label>
  <div class="textbox">
    <i class="fas fa-industry"></i>
    <select name="manu">
    <option value="None">Manufacturer</option>
    <option value="Toyota">Toyota</option>
    <option value="Audi">Audi</option>
    <option value="BMW">BMW</option>
    <option value="Mercedes">Mercedes</option>
  </select>
  </div>
  <label id = "l4" style="color:red;visibility:hidden;">z</label>
  <div class="textbox">
    <i class="fas fa-calendar-alt"></i>
    <select onclick="fun()" name="term">
    <option value="None">Term(in years)</option>
    <option value="1">1 - &#8377 2500</option>
    <option value="2">2 - &#8377 5000</option>
    <option value="3">3 - &#8377 7500</option>
    <option value="4" id="f">4 - &#8377 10000</option>
  </select>
  </div>
  <label id = "l5" style="color:red;visibility:hidden;">z</label>
  <input type="submit" class="btn" value="Submit">
</div>
</form>