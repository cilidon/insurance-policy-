function validate() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var dob = document.getElementById("dateofbirth").value;
    var password = document.getElementsByName("password").value;
    var password1 = document.getElementsByName("password2").value;
    var text;
    {if(allLetter(name))
        {if(ValidateEmail(email))
            {
                if (isNaN(x) || x < 1 || x > 10) 
                {
                alert('enter correct number');
                phone.focus();
                return false;
            
                    {
                        if(password1 != password)
                        {
                        alert('please re rnter the same password! ');
                        password2.focus();
                        return false;
                        }
                        else
                        return true;
            
                    }
                }
                    else 
                    return true;
                }
        
        
            }
        }
    
    
    return false;
     
     function allLetter(name)
{ 
var letters = /^[A-Za-z]+$/;
if(name.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
name.focus();
return false;
}
}
    function ValidateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}
    var text;
  if(name == ""){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(subject == ""){
    text = "Please Enter Correct Subject";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message==""){
    text = "Please Enter More Than 140 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}