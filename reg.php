<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
  
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="style/stylereg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <script>  
function matchPassword() {  
  var pw1 = document.getElementById("password1").value;  
  var pw2 = document.getElementById("pswd2").value;  
  if(pw1 != pw2)  
  {   
    alert("Password did not match ");  
	
	return false;
  } 
     var p1 =document.getElementById("phone").value;
	if(p1=="" || p1==null)
	{
		alert("Please enter mobile number");
		return false;
	}
		
		if(p1.length<10 || p1.length>10)
		{
			alert("Please enter 10 digit mobile number ")
			return false;
		}
		else{
			alert("Registration successfully ");
		return true;
		}
  }  
 

	
</script>
<body>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form  action="insert.php" onsubmit="return matchPassword()"  method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name"required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="user" required>
          </div>
          <div class="input-box">
            <span class="details">Physician/lab ID</span>
            <input type="text" placeholder="Enter your ID" name="id" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number" id="phone" name="phoneno" value="" required>
          </div>
		  <div class="input-box">
            <span class="details">E mail</span>
            <input type="text" placeholder="Enter your E mail" name="mail" required>
          </div>
		  <div class="input-box">
            <span class="details">Adhar Number</span>
            <input type="number" placeholder="Enter your Adhar Number" id="phone" name="adhar" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password1" placeholder="Enter password" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"value="" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="pswd2" id="pswd2" value="" autocomplete="new-password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit"  value="Register" ">
        </div>
      </form>
	  
    </div>
 </div>

</body>
</html>
