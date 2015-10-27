<html>
	<head>
		<style>
			table,tr,td,th{
			border:2px solid black;
			}
		</style>
	</head>
	<body>
		<a href="school_profile.php">Home</a><br>
<a href="../classes/logout.php">Logout</a><br>
		<table style="width:80%;">
	<tr><td>Form</td><td><select name="form" id="search_vacancies" onchange="showUser(this.value)">
		<option value="all">All</option>
		<option value="6b">6B</option>
		<option value="6g"> 6G</option>
		<option value="7t">7T</option>
	</select></td>
		<td>Invitation Status</td><td><select name="invitstion_status">
		<option value="all_invitation">All</option>
		<option value="finance">Pending</option>
		<option value="front_office">Invited</option>
		<option value="technology">Accepted</option>
	</select></td>
		
		<td>Reference Status </td><td> <select name="reference_status" >
<option value="all">All</option>
<option value="pending">Pending</option>
<option value="completed">Completed</option>
</select></td>
	</tr>
	
</table><br><br>	
	<table style="width:70%"><tr><td>Show <select name="num_of_vacancy_show">
		<option>10</option>
		<option>20</option>
		<option>20</option>
		<option>40</option>
		<option>50</option>
		<option>100</option>
		
	</select> Entries</td>
		<td>Search <input type="search" name="search_vacancy"></td>
	</tr>
		
	</table><br><br>

		<div id="txtHint"></div>
		<div id="all_vacancy">
		<a href="add_student.php">+Add</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../classes/csv.php?manage_student">CSV</a>
	<table style="width:80%;">
		<thead>
			<th>Name</th>
			<th>Form</th>
			<th>Invitation</th>
			<th>Applications</th>
			<th>Reference</th>
		</thead>
		<?php 
include('../classes/connection.php');
$sql = mysql_query("SELECT userid FROM student_profile");
while($name=mysql_fetch_array($sql))
{
	$uname=$name['userid'];
$all_vacancy=mysql_query("select a.userid,a.first_name, a.last_name,b.reference_by_school,count(c.student_userid) as student_userid from student_profile a,student_school b, job_applied c  where a.userid=b.userid and b.userid=c.student_userid and c.student_userid='$uname'");
while($row=mysql_fetch_array($all_vacancy)){
?>
		<tr><td><a href="student_detail.php?userid=<?php echo $row['userid'];?>&apps=<?php echo $row['student_userid'];?>"><?php echo $row['first_name']." ".$row['last_name'];?></a></td>
			<td><?php echo "Form";?></td>
			<td><?php echo "Pending";?></td>
			<td><?php echo $row['student_userid'];?></td>
			<td><?php if($row['reference_by_school']!=''){echo "Completed ";}
	else{echo "Pending";}
	
	;?></td>
		</tr>
		<?php }}
		?>
	</table>			
		</div>
		
		
	</body>
	
</html>