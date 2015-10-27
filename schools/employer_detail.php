<?php
include('../classes/connection.php');
$empid=$_GET['empuserid'];
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
$empdetail=mysql_query("select a.*,b.last_login,count(c.company_userid) as st_apply,d.* from employer_registration a,login b,job_applied c,employer_location d where a.userid='$empid' and b.userid='$empid' and c.company_userid='$empid' and d.userid='$empid';");
if($empdetail){
while($row=mysql_fetch_array($empdetail)){
?>
			<h3>Employer Company: <?php echo $row['company_name']; ?> </h3><br>
		<img src="../employer/logo/<?php echo $row['logo']; ?>" height="200" width="200"><br>
		
		<p>Workstaster employer since </p>
		<p><?php echo $row['join_date']; ?></p>
		<h4>Form print hear form value</h4>
		<p>Last logged in on <?php echo $row['last_login']; ?></p>
		<p>Applications :<?php echo $row['st_apply']; ?></p>
		<p>placement :<?php echo "fetch placement" ?></p><br>
		<a href="">Email Student</a>
		<a href="">Left School</a>
		</div>
		<div class="staus">
		<h3>Detail Industrie</h3>
			<h3>Employer Detail</h3>
			<p><?php echo $row['company_name'];?></p>
			<p><?php echo $row['company_address'];?></p>
			<p><?php echo $row['company_region'];?></p>
			<p><?php echo $row['company_city'];?></p>	
			<p><?php echo $row['company_postal_code'];?></p>
			<p><?php echo "Website : ".$row['company_website'];?></p>
		<p><?php echo "Country";?></p>
		
		<h3>Contact Detail</h3>
			<p><?php echo $row['company_first_name']." ".$row['company_last_name'];?></p>
			<p><?php echo $row['company_title'];?></p>
			<p><?php echo $row['company_telephone'];?></p>	
			<p><?php echo $row['company_email'];?></p>
			<h3>Industries</h3>
			<p><?php echo "Fetch Industry";?></p>
			<h3>Preferences</h3>
			<p><?php echo "No Input Preferences";?></p>
			<h3>Added to Worktaster by</h3>
		<p><?php echo "Fetch With School Added This Company";?></p>
			<?php 
										  
										} 
}
else{echo "error in query pass ".mysql_error();}
		?>	
		<h3>Vacancies Work down in pending...</h3>
			<table>
				<thead>
					
					<th>Vacancy</th>
					<th>From Date</th>
					<th>Placement Date</th>
					<th>Status</th>
				</thead>
				
			<?php   
			$applications=mysql_query("select * from create_vacancy where userid='$empid'");
if($applications){
while($row=mysql_fetch_array($applications)){
	$currtime=date("Y-m-d h:i:s");
?>   
	        <tr>
			<td><?php echo $row['vacancy_title'];?></td>
				<td><?php echo $row['from_date1'];?></td>
				<td><?php echo "Pending  to Fetch";?></td>
			<?php
	if($currtime >$row['automatic_date']){
		?><td>Closed</td></tr>
	<?php
	}
				else{
					?>
			<td>Active</td></tr>
				<?php	
			}
}
	?></table>	
			<?php
}
?>
			<h3>Placement</h3>
			<p> Fetch Placement</p>
			<h3>H&S Certificate</h3>
		<?php
//$sql=mysql_query("select ref_date,userid from student_school  where userid='$stduserid' ;");

	echo "Dta Not Inserted H&S Certificate ?????Where is ";



?>
		</div>
	</body>
</html>