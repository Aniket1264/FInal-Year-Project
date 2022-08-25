<?php
include_once 'dbcon.php';
ini_set("SMTP","smtp.gmail.com");
ini_set("sendmail_from","<email-address>@gmail.com>");
function str_openssl_enc($str,$iv){
	$key='army1234565214army';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_encrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
if(isset($_POST['submit']))
{    $iv=openssl_random_pseudo_bytes(16);
     $fname = $_POST['name'];
	  $user = $_POST['user'];
	   $id = $_POST['id'];
	    $phone =$_POST['phoneno'];
         $password = $_POST['password1'];
		   $gender = $_POST['gender'];
		    $adhar = $_POST['adhar'];
			 $mail = $_POST['mail'];
		  
    $fname=str_openssl_enc($fname,$iv);
	 $user=str_openssl_enc($user,$iv);
	   $id=str_openssl_enc($id,$iv);
	    $phone=str_openssl_enc($phone,$iv);
	      $password=str_openssl_enc($password,$iv);
	
	     $mail=str_openssl_enc($mail,$iv);
	   $adhar=str_openssl_enc($adhar,$iv);
	 $gender=str_openssl_enc($gender,$iv);
	
	$iv=bin2hex($iv);
     $sql = "INSERT INTO regph (name,user,id,phoneno,mail,adhar,password,gender,iv)
     VALUES ('$fname','$user','$id','$phone','$mail','$adhar','$password','$gender','$iv')";
    if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
			

                 $to_email =$_POST['mail'];
                  $subject = "E-HEALTH CARE CLOUD SOLUTION:Regstration Successful";
                   $body = "Dear ".$_POST['name']." Thank you for registering with E-HEALTH CARE CLOUD SOLUTION \n Your ID=".$_POST['user']."\n" 
                         ."Your Password=".$_POST['password1']."\n";				   
				   
				   
                    $headers = "From: ehealth.cloud.care@gmail.com";

                  if (mail($to_email, $subject, $body, $headers)) {
   	                    header("Location:./login.php");
                    } else {
                         echo "Email sending failed...";
                            }

       
                 } else{
                    echo "ERROR: Hush! Sorry $sql. " 
                         . mysqli_error($conn);
             }
          
        
        mysqli_close($conn);
		
		
}
  ?>