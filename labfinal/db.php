<?php
function getConnection()
{
	$con= mysqli_connect('localhost','root','','user_info');
	return $con;
}
?>