<?php
session_start();
require('db.php');
if(isset($_POST['uid']))
{
	$uid= $_POST['uid'];
	$pass= $_POST['pass'];
	$con= getConnection();
	$sql= "select * from users where id='{$uid}' and password='{$pass}'";
	$result= mysqli_query($con,$sql);
	$data= mysqli_fetch_assoc($result);
	if(count($data)>0)
	{
		$_SESSION['uid']=$uid;
		$_SESSION['pass']=$pass;
		//setcookie('uid',$uid,t+1000000,'/');
		
		echo "true";}
else
{echo "invalid userid and password";}
	
	
}
?>