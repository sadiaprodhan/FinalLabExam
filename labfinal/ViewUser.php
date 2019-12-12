<?php
session_start();
require('db.php');
if(isset($_SESSION['uid']))
{
?>
<html>
<body>
View Users

<table border="1">
<tr>
<td> ID </td>
<td> Name </td>
<td> Email</td>
<td> User Type</td>
</tr>
<?php
$con= getConnection();
$sql='select * from users';
$result= mysqli_query($con,$sql);
while($row= mysqli_fetch_assoc($result))
{
?>
<tr>
<td> <?php echo $row['id'];?> </td>
<td> <?php echo $row['name'];?> </td>
<td> <?php echo $row['email'];?> </td>
<td> <?php echo $row['type'];?> </td>
</tr>
<?php
}
?>

<a href="Home.php"> Go home </a>

</table>

<body>

</html>
<?php
}
?>
