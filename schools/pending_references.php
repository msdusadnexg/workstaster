<?php include('../classes/connection.php'); 
$schoolid=$_SESSION['schooluserid'];
?>
<html>
	
	<head>
	<style>
		table,tr,th,td{
		border:2px solid black;
			padding:5px;
		}
	</style>
	</head>
	
	<body>
		<a href="school_profile.php">Home</a><br>
<a href="../classes/logout.php">Logout</a><br>
		<table>
			<thead>
				<th>Student Name</th>
			</thead>
		
		<?php
$sql=mysql_query("select a.first_name,a.last_name,a.userid,b.reference_by_school from student_profile a,student_school b where a.userid=b.userid ;");
while($row=mysql_fetch_array($sql)){
?><tr>
			<td><?php echo $row['first_name']." ".$row['last_name'] ;?></td>
			
			<td><a href="write_reference.php?studenduserid=<?php echo $row['userid'];?>">
				<?php if($row['reference_by_school']!=''){echo " Update Reference";}
				else{echo "Write Reference";}
				?></a></td>
		</tr>
	
<?php 
								   }
?></table>
		
	</body>
	
</html>