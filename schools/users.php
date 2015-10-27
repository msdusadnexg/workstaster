<?php
include('../classes/connection.php');
$schooluser=$_SESSION['schooluserid'];
?>
<html>
	
<head>
	<style>
		table,tr,td,th{
		border:2px solid black;
			padding:5px;
		}
	</style>
</head>
	<body>
		<a href="school_profile.php">Home</a><br>
<a href="../classes/logout.php">Logout</a><br>
		<h3>Users</h3>
		<a href="add_users.php">Add Users</a>
		<table>
			<thead>
				<th>Name</th>
				<th>Job Title</th>
			</thead>
		
		<?php
$sql=mysql_query("select * from add_users where userid='$schooluser'");
if($sql){
while($row=mysql_fetch_array($sql)){
?><tr>
		<td><?php echo $row['salutation']." ".$row['user_first_name']." ".$row['user_last_name'] ;?></td>
		<td><?php echo $row['user_job_title'];?></td>
		</tr>
<?php	
}
}
else{echo "error in query pass".mysql_error();}

?>
	</table>	
	</body>
</html>
