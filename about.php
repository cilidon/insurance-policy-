<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<script>
$(function () {
  $(document).scroll(function () {
    var $nav = $(".container");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
    </script>
<link rel="stylesheet" href="style.css">
   
</head>
<body>
<div class="container">
              
   
	<div class ="nav-bar">

        <a href="index.php"><img class="img" src="logo5.png"></a>
		<ul>
          
			<li><a href="lifeinsurance.php">LIFE INSUARANCE</a><span class="arrow-down"></span>
				<ul class="dropdown">
				<li><a href="">ABOUT</a></li>
				<li><a href="">POLICY</a></li>
				<li><a href="">WHY</a></li>
				<li><a href="">PLANS</a></li>
				</ul>
			</li>
			<li><a href="healthinsurance.php">HEALTH INSUARANCE</a><span class="arrow-down"></span>
			<ul class="dropdown">
				<li><a href="">ABOUT</a></li>
				<li><a href="">POLICY</a></li>
				<li><a href="">WHY</a></li>
				<li><a href="">PLANS</a></li>
				</ul>
			</li>
			<li><a href="carinsurance.php">CAR INSUARANCE</a><span class="arrow-down"></span>
			<ul class="dropdown">
				<li><a href="">ABOUT</a></li>
				<li><a href="">POLICY</a></li>
				<li><a href="">WHY</a></li>
				<li><a href="">PLANS</a></li>
				</ul>
			</li>
			<li><a href="bikeinsurance.php">BIKE INSUARANCE</a><span class="arrow-down"></span>
			<ul class="dropdown">
				<li><a href="">ABOUT</a></li>
				<li><a href="">POLICY</a></li>
				<li><a href="">WHY</a></li>
				<li><a href="">PLANS</a></li>
				</ul>
			</li>
			
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="form.html"><b>CONTACT US</b></a></li>
			
         <div class="right1">   <ul><?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
                {?>
             <div class="user"><a  href="afterlogin.php" target="_self"><?php echo  $_SESSION['name'] ; ?> </a></div>
                <?php }
                 else 
                 { ?> <div class="right"><a  href="signup.php" target="_self"><img class="accimg" src="acc.png" align ="right" height ="40" width="40"> <?php } ?></a></div></ul></div>

		</ul>

    	

</div>
	<div class="nav-mobile">
	<div class="menu-icon"> <span></span> <span></span> <span></span> </div>
</div>
</div>
   <section class="1"> 
   <div class="c1">
    </div>
       
    <div class="c2">
    </div>
    </section>
    
    <section class="3">
    <div class="c3">
    </div>
    </section>
    
    
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
</script>
<script>
	$(document).ready(function(){
	$('.menu-icon').click(function(){$('.nav-bar').toggleClass('visible');});
});
</script>