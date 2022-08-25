

<?php
session_start();
  $rno=$_SESSION['rndno'];
 
if(isset($_POST['submit'])){

 $urno = $_POST['otp'];
if($rno==$urno)
{
	
      header("Location:./sitecon.php");
	
}

  else
  {
	  echo "Fail";
  }
  
 
}
?>