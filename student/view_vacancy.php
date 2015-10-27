<?php include('../classes/connection.php'); 

$userid=$_GET['userid'];
$vcancy_title=$_GET['vacancy_title'];
$company_name=$_GET['company_name'];
$company_website=$_GET['company_website'];
$date_of_vacancy=$_GET['date'];
?>
<html>
<body>
	<a href="student_profile.php">Home</a>
	<br><a href="../classes/logout.php">Logout</a>
	<div class="container">
		<?php
$qry=mysql_query("select * from create_vacancy where userid='$userid' && automatic_date='$date_of_vacancy' && vacancy_title='$vcancy_title' ");

if($row=mysql_fetch_array($qry)){
$from_vacancy=$row['from_date1'];
$to_vacancy=$row['to_date1'];
$duration=$row['duration'];
	$location=$row['vacancy_location'];
	$numberof_places=$row['number_places'];
	$description=$row['vacancy_description'];
}

?>
		<div>
			<h3><?php echo $vcancy_title;?></h3><br>
			<p><?php echo $description;?></p>
			
			<div style="float:left;">
				<h3>Vacancy Detail</h3>
				From : <?php echo $from_vacancy;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: <?php echo $to_vacancy;?><br><br>
		
				Duration : <?php echo $duration;?><br><br>
				Location : <?php echo $location;?><br><br>
				 Number Of Places : <?php echo $numberof_places;?><br><br>
				
			</div>
			
			<div style="float:right;">
				<h3>Employer Detail</h3>
				Company Name : <?php echo $company_name;?><br><br>
				    Website  :<?php echo $company_website;?><br><br>
			</div>
			
			
		</div>
		<form action="apply_to_vacancy.php?vacancy_created_date=<?php echo $date_of_vacancy;?>" method="post">
		<button name="apply" value="<?php echo $userid; ?>" style="margin-top:200px;">Apply</button>
			</form>
	</div>
	
</body>	
	
	
	
</html>