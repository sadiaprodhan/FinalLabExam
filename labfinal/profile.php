<?php
session_start();
require('db.php');
if(isset($_SESSION['uid']))
{ $id= $_SESSION['uid'];

?>
<html>
<body>
<?php
$con= getConnection();
	$sql ="select  * from users where id='{$id}'";
	$result= mysqli_query($con,$sql);
	$data= mysqli_fetch_assoc($result);
?>
Profile
<table border="1">
<tr>
<td> ID </td>
<td> <?php echo $data['id'];?> </td>
</tr>
<tr>
<td> Name</td>
<td> <?php echo $data['name'];?> </td>
</tr>
<tr>
<td> Email</td>
<td> <?php echo $data['email'];?> </td>
</tr>
<tr>
<td> User Type</td>
<td> <?php echo $data['type'];?> </td>
</tr>

</table>
<a href="Home.php"> Go home </a>

</body>


</html>
<?php
}
?>