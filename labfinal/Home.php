<?php
session_start();
require('db.php');
if(isset($_SESSION['uid']))
{ $id= $_SESSION['uid'];
	$con= getConnection();
	$sql="select  * from users where id='{$id}'";
	$result= mysqli_query($con,$sql);
	$data= mysqli_fetch_assoc($result);
	
?>

<html>
<body>
<form>

Welcome <?php echo $data['name'];?> ! <br>
<a href="profile.php"> Profile </a> <br>
<a href="changepass.html"> Change Password </a> <br>
<?php
if($data['type']== "Admin")
{
?>
<a href="ViewUser.php"> ViewUser </a> <br>
<?php
}
?>
<a href="logout.php"> logout </a>

<?php
}
?>

</form>
</body>
</html>