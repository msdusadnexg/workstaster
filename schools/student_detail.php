<?php
include('../classes/connection.php');
$stduserid=$_GET['userid'];
$application=$_GET['apps'];
?>
<html>
	<head>
		<style>
			table,tr,td{
			border:2px solid black;
			}
		</style>
	</head>
	<body>
		
			<div>
				<a href="school_profile.php">Home</a><br>
<a href="../classes/logout.php">Logout</a><br>
				
			<?php
$stdetail=mysql_query("select * from student_profile a,login b,student_achievements c where a.userid='$stduserid' and b.userid='$stduserid' and c.userid='$stduserid';");
while($row=mysql_fetch_array($stdetail)){
?>
			<h3>Student Name: <?php echo $row['first_name']." ".$row['last_name']; ?> </h3><br>
		<img src="../student/student_docs/profile_photo/<?php echo $row['profile_picture']; ?>" height="200" width="200"><br>
		<h4>Form print hear form value</h4>
		<p>Workstaster student since </p>
		<p><?php echo $row['joining_date']; ?></p>
		<p>Last logged in on <?php echo $row['last_login']; ?></p>
		<p>Applications :<?php echo $application; ?></p>
		<p>placement :<?php echo "fetch placement" ?></p><br>
		<a href="">Email Student</a>
		<a href="">Left School</a>
		</div>
		<div class="staus">
		<h3>Cv Completed in percentage</h3>
			<h3>Interests</h3>
			<p>1.<?php echo $row['interest1'];?></p><p>2.<?php echo $row['interest2'];?></p><p>3.<?php echo $row['interest3'];?></p><p>1.<?php echo $row['interest4'];?></p>
		
		
		<h3>Placements</h3>
			<p>Secrch where is student join comapany or palcement done</p>
			
			<?php 
										} 
		?>	
		<h3>This Year Applications</h3>
			<table>
				<thead>
					<th>Employer</th>
					<th>Vacancy</th>
					<th>Placement Date</th>
					<th>Status</th>
						<th>Cover Letter</th>
				</thead>
				
			<?php  $year=date("Y"); 

//new
$yearapplication=mysql_query("select a.company_name,b.vacancy_title,c.apply_time,c.status,c.cover_letter from employer_registration a,create_vacancy b,job_applied c where c.student_userid='mahendersingh' and c.company_userid=a.userid and c.company_userid=b.userid and c.vacancy_time=b.automatic_date and c.apply_time >= '2015-01-01:00:00:00'AND c.apply_time <= '2015-12-30:23:59:59.997'");

//old
		/*	$yearapplication=mysql_query("select b.company_name,a.apply_time,a.status,c.vacancy_title from job_applied a,employer_registration b,create_vacancy c where a.apply_time >= '2015-01-01:00:00:00'AND a.apply_time <= '2015-12-30:23:59:59.997' and a.company_userid=b.userid and a.company_userid=c.userid"); */
if($yearapplication){
while($row=mysql_fetch_array($yearapplication)){
?>
	        <tr><td><?php echo $row['company_name'];?></td>
			<td><?php echo $row['vacancy_title'];?></td>
			<td><?php echo $row['apply_time'];?></td>
			<td><?php echo $row['status'];?></td>
				<td><?php echo $row['cover_letter'];?></td></tr>
			
<?php
}
	?></table>	
			<?php
}
?>
			<h3>Placement</h3>
			<p> Fetch Placement</p>
			<h3>Reference</h3>
		<?php
$sql=mysql_query("select ref_date,userid from student_school  where userid='$stduserid' ;");
if($row=mysql_fetch_array($sql)){
	echo $row['ref_date'];
	?><a href="write_reference.php?studenduserid=<?php echo $row['userid'];?>">Write Reference</a>
			<?php
}

?>
		</div>
	</body>
</html>