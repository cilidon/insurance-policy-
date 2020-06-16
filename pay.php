<?php 
session_start();
$id=$_GET['id'];
?>
<html><head><link rel="stylesheet" href="pay.css"></head>
<body><div class="wrapper">
    <div class="container">
        <article class="part card-details">
            <h1>
                 Card Details
            </h1>
            <form autocomplete="off">
                <div class="group card-number">
                    <label for="first">Card Number</label>
                    <input type="text" id="first" class="cc-num" type="text" maxlength="16" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                </div>
                <div class="group card-name">
                    <label for="name">Name On Card</label>
                    <input type="text" id="name" class="" type="text" maxlength="20" placeholder="Name Surname">
                </div>
                <div class="group card-expiry">
                    <div class="input-item expiry">
                        <label for="expiry">Expiry Date</label>
                        <input type="text" class="month" id="expiry" placeholder="02">
                        <input type="text" class="year" id="" placeholder="2017">
                    </div>
                    <div class="input-item csv">
                        <label for="csv">CVV No.</label><a href="#what">?</a>
                        <input type="password" maxlength="3" placeholder="&#9679;&#9679;&#9679;" class="csv">
                    </div>
                </div>
                <div class="grup submit-group">
                    <span class="arrow"></span>
                    <input type="button" class="submit" onclick="location.href='payp.php?id=<?php echo $id;?>';" value="Continue to payment">
                </div>
            </form>
        </article>
        <div class="part bg"></div>
    </div>
</div>
