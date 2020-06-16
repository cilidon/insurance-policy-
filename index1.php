<!DOCTYPE html>
<html>
    <body>
<?php
// We need to use sessions, so you should always start sessions using the below code.

require 'navbar.php';
?>

 
   <div class="c11">
     <div class="imgtext">INSCURE</div>
    </div>
         <div class="s1"> 
    <div id="life" class="c22">

        <div><img class="infoimgr" src="life-insurance%20(1).png"></div>
                <div  class="txtl">Life Insurance</div>
        <div class="infol">A Life Insurance can be defined as a contract between an insurance policy holder and an insurance company wherein the insurer pays a sum of money in exchange for a premium after a set period or upon the death of an insured person. Life insurance is an inimitable part of one’s financial plan. Opting for a life insurance policy can insure one from financial strain in case of an unfortunate event such as when someone passes away.</div>
    </div>
  
    
   
  <div id="health" class="c33">
    
     <div  class="txtr">Health Insurance</div>
       <div><img class="infoimgl" src="cross.png"></div>
    <div class="infor">Health Insurance is a kind of insurance that provides coverage for medical expenses to the policy holder. Depending on the health insurance plan chosen the policy holder can get coverage for critical illness expenses, surgical expenses, hospital expenses etc.</div>
        </div>
    <div id="car" class="c44">
       <div  class="txtl">Car Insurance</div>
         <div><img class="infoimgr" src="car-insurance.png">
             <div class="infol">Car insurance (also known as auto or motor insurance) is done to protect your vehicle from unforeseen risks. It basically provides protection against the losses incurred as a result of unavoidable instances. It helps cover against theft, financial loss caused by accidents and any subsequent liabilities. The cover level of Car insurance can be the insured party, the insured vehicle and third parties (car and people). The premium of the insurance is dependent on certain parameters like value of the car, type of coverage, vehicle classification; voluntary excess etc. Car insurance gives confidence to drive peacefully. In emergencies it acts like a boon to the insurance holder.</div></div>
    </div>
    
    
    <div id="bike" class="c55">
       <div  class="txt">Bike Insurance</div>
         <div class="imginfo"><img class="infoimg" src="motorcycle.png"></div>
        <div class="info">Two-wheeler insurance safeguards a two-wheeler and its owner by offering protection against financial liabilities that may arise in case of accidents occur.</div>
    </div>
    </div>
 
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
</script>
<script>
	$(document).ready(function(){
	$('.menu-icon').click(function(){$('.nav-bar').toggleClass('visible');});
});
</script>