<?php
include('../classes/connection.php');
$cover_letter=$_GET['cover'];
$send_media=$_GET['media'];
$empoyer_userid=$_GET['employerid'];
$studentid=$_SESSION['studentuserid'];
$vacancy_autodate=$_GET['vacancy_date'];
$status="Pending";
if(isset($_POST['apply_job'])){

$qry=mysql_query("insert into job_applied (cover_letter,send_media,company_userid,student_userid,vacancy_time,apply_time,status) values ('$cover_letter','$send_media','$empoyer_userid','$studentid','$vacancy_autodate',now(),'$status');");
	
	echo "Your Application Sent Sucessfully";
	  echo '<script type="text/javascript">window.location ="my_applications.php";</script>';
}

?>
