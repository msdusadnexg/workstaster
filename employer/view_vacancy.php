<?php
include('../classes/connection.php');
$userid=$_GET['user'];
$auto_date=$_GET['auto_date'];
$current_user=$_SESSION['employeruserid'];
$qry=mysql_query("select * from create_vacancy where userid='$userid' && automatic_date='$auto_date';");
if($qry){
	if(mysql_num_rows($qry)>0){
	if($row=mysql_fetch_array($qry)){
	$vacancy_title=$row['vacancy_title'];
	
	}
	}
	else{
	echo "this vacancy detail not in our database".mysql_error();
	
	}
}

else{
echo "Error in Query Pass".mysql_error();
}
?>

<html>
	<head>
		<style>
			table,tr,td,th{
			border:2px solid black;
				padding:7px;
			}
		</style>
	</head>
	
	<body>
		<a href="employer_profile.php">Home</a>
		<br><a href="../classes/logout.php">Logout</a>
		<div class="upper">
			<h2>Vacancies / Technology department / Barclays Bank / Developer</h2><br>
			
			<h3><?php echo $vacancy_title;?></h3>
			<h4>Description : <?php echo $row['vacancy_description'];?></h4><br><br>
			
			<h3>Vacancy Detail</h3>
			<h4>From : <?php echo $row['from_date1'];?></h4>
			<h4>To : <?php echo $row['to_date1'];?></h4>
			<h4>Duration : <?php echo $row['duration'];?></h4>
			<h4>Location : <?php echo $row['vacancy_location'];?></h4>
			<h4>Number of Places : <?php echo $row['number_places'];?></h4><br><br>
			
			<h3>Applications</h3>
			
			<table style="width:80%;">
				<thead>
					<th>Student</th>
					<th>Application Date</th>
					<th>Date Requested</th>
					<th>Status</th>
				</thead>
				<?php    
				$applications=mysql_query("select a.first_name,a.last_name,b.apply_time,b.status from student_profile a,job_applied b where b.company_userid='$current_user' && b.student_userid=a.userid;");
if($applications){
	if(mysql_num_rows($applications)>0){
	while($row=mysql_fetch_array($applications)){
	
	?><tr>
					<td><?php echo $row['first_name']." ".$row['last_name'] ;?></td>
					<td><?php echo $row['apply_time'];?></td>
					<td>Requested Date</td>
					<td><?php echo $row['status'];?></td>
				</tr>
							
				<?php
	}?> </table><?php
	}
	else{
	echo "this vacancy detail not in our database".mysql_error();
	
	}
}

else{
echo "Error in Query Pass".mysql_error();
}
				?>
				
	
		</div>
		
	</body>
</html>