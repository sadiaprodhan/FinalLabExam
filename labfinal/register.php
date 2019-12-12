<?php
session_start();
require('db.php');
if(isset($_POST['uid']))
{$uid= $_POST['uid'];
$pass= $_POST['pass'];
$name= $_POST['name'];
$email= $_POST['email'];
$type= $_POST['type'];
$con= getConnection();
$sql= "insert into users values ('{$uid}','{$pass}', '{$name}','{$email}','{$type}')";

 if($result= mysqli_query($con,$sql))

 {

	$_SESSION['uid']=$uid;
	$_SESSION['pass']=$pass;
	
	echo "true";

}
else
{echo "Registration not done ";} 


}
?>