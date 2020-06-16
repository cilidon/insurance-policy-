<html>
<head>
<link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
require'navbar.php';
?>
<div class="wrapper">
  <h2>Contact us</h2>
  <div id="error_message">
     
  </div>
  <form action="" id="myform" onsubmit = "return validate();">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Subject" id="subject">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" id="message"></textarea>
    </div>
    <div class="btnn">
        <input type="submit">
    </div>
  </form>
</div>
</body>
</html>
<script src="form.js"></script>