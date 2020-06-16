<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<script src="scroll.js">
    </script>
</head>
<body>
    <?php
require 'navbar.php';
?>
       <section class="s3">
    <div class="c33">
    <div class="ree">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>THE DREAM TEAM</h1>
        <br>
        <br>
        <br>
        <div>
            <div class="revv"> <div class="in"><img src="me.jpg" class="reimg"><br><br>Navpreet Singh Aulakh<br><br><br><br><br><div class="cre">Student<br>Third year engineering<br>pursuing  BTEC from Pillai College Of Engineering<br>Back End Developer<br>Hobbies:Avid Anime Watcher</div></div></div>
            <div class="revv"> <div class="in"><img src="mandar2.jpg" class="reimg"><br><br>Mandar Mhatre<br><br><br><br><br><div class="cre">Student<br>Third year engineering<br>pursuing  BTEC from Pillai College Of Engineering<br>Front End Developer<br>Hobbies:Photography,Gaming,Football</div></div></div>
        
        </div>
        <br>
      
        <div>
            <div class="revv"> <div class="in"><img src="tejas.png" class="reimg"><br><br>Tejas Mayekar<br><br><br><br><br><div class="cre">Student<br>Third year engineering<br>pursuing  BTEC from Pillai College Of Engineering<br>Hobbies:Software Tster </div></div></div>
            <div class="revv"> <div class="in"><img src="sankalp.JPG" class="reimg"><br><br>Sankalp Yadav<br><br><br><br><br><div class="cre">Student<br>Third year engineering<br>pursuing  BTEC from Pillai College Of Engineering<br>Hobbies:Football,Cricket,Touring,Politics</div></div></div>
        </div>
        </div>
    </div>
           
    </section>
    <?php
    require'footer.php';
    ?>
    </body>
</html>