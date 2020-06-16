<?php session_start();?>
<head>
    <meta charset="utf-8">
<link rel="stylesheet" href="indexstyle.css">
      <link rel="stylesheet" href="adsty.css">

        <link rel="stylesheet" href="style.css">
    <script src="scroll.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
         
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="container">
              
   
	<div class ="nav-bar">

        <a href="index.php"><img class="img" src="logo5.png"></a>
		<ul>
          
			<li><a href="index1.php">INSURANCE</a><span class="arrow-down"></span>
				<ul class="dropdown">
				<li><a href="index1.php#life">LIFE INSURANCE</a></li>
				<li><a href="index1.php#health">HEALTH INSURANCE</a></li>
				<li><a href="index1.php#car">CAR INSURANCE</a></li>
				<li><a href="index1.php#bike">BIKE INSURANCE</a></li>
				</ul>
			</li>
			<li><a href="index.php#whhy">WHY</a><span class="arrow-down"></span>
			
			</li>
			<li><a href="privacy.html" target="_blank">Privacy Policy</a><span class="arrow-down"></span>
			</li>
			<li><a href="afterlogin.php">Profile</a><span class="arrow-down"></span>
			</li>
			
			<li><a href="form.php"><b>CONTACT US</b></a></li>
			
         <div class="right1">   <ul><?php if (isset($_SESSION['usern'])) 
                {?>
             <div class="user"><a  href="afterlogin.php"><?php echo  $_SESSION['usern'] ; ?> </a></div>
                <?php }
                 else 
                 { ?> <div class="right"><a  href="login.php" target="_self"><img class="accimg" src="acc.png" align ="right" height ="40" width="40"> <?php } ?></a></div></ul></div>
		</ul>

    	

</div>
	<div class="nav-mobile">
	<div class="menu-icon"> <span></span> <span></span> <span></span> </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
</script>
<script>
	$(document).ready(function(){
	$('.menu-icon').click(function(){$('.nav-bar').toggleClass('visible');});
});
</script>