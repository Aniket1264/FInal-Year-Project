<?php
include('dbcon.php');
function str_openssl_dec($str,$iv){
	$key='army1234565214army';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_decrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
$res=mysqli_query($conn,"select * from regph order by id desc");

echo "<table border='8'>";

	while($row=mysqli_fetch_assoc($res)){
		$iv=hex2bin($row['iv']);
		$name=str_openssl_dec($row['name'],$iv);
		$user=str_openssl_dec($row['user'],$iv);
		$id=str_openssl_dec($row['id'],$iv);
		$phone=str_openssl_dec($row['phoneno'],$iv);
		$email=str_openssl_dec($row['mail'],$iv);
		$adhar=str_openssl_dec($row['adhar'],$iv);
		$password=str_openssl_dec($row['password'],$iv);
		     $a="abc";
		if(strcmp($user,$a)==0)
		{
			echo "<tr><td>".$id."</td><td>".$name."</td><td>".$user."</td><td>".$password."</td><td>".$email."</td><td>".$phone."</td><td>".$adhar."</td></tr>";
		}
		
		# echo "<tr><td>".$id."</td><td>".$name."</td><td>".$user."</td><td>".$password."</td><td>".$email."</td><td>".$phone."</td><td>".$adhar."</td></tr>";
	}
echo "</table>"
?>