<?php
  session_start();
include "dbcon.php";
function str_openssl_dec($str,$iv){
	$key='army1234565214army';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_decrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $password1 = mysqli_real_escape_string($conn,$_POST['password']);
        $res=mysqli_query($conn,"select * from regph order by id desc");
		while($row=mysqli_fetch_assoc($res)){
		$iv=hex2bin($row['iv']);
		$name=str_openssl_dec($row['name'],$iv);
		$user=str_openssl_dec($row['user'],$iv);
		$id=str_openssl_dec($row['id'],$iv);
		$phone=str_openssl_dec($row['phoneno'],$iv);
		$email=str_openssl_dec($row['mail'],$iv);
		$adhar=str_openssl_dec($row['adhar'],$iv);
		$password=str_openssl_dec($row['password'],$iv);
		    
		if(strcmp($user,$$uname)==0)
		{
			
			 $_SESSION['phone']=$phone;
			   header("Location:./otp1.php");
			
		}
	   else{
		      echo "Invaild Username";
		   
	   }		   
		
		 
   

    }
}