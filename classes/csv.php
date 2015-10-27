<?php
header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="sample.csv"');

include('../classes/connection.php');
// code for manage student csv file

if(isset($_GET['manage_student'])){
	  $newarr=array('Name,Form,Invitation,Applications,Reference');
	foreach ( $newarr as $out ) {
    $vals = explode(",", $out);
	$fpss = fopen('php://output', 'w');
    fputcsv($fpss, $vals);	
}

$sql = mysql_query("SELECT userid FROM student_profile");
while($name=mysql_fetch_array($sql))
{
	$uname=$name['userid'];
$all_vacancy=mysql_query("select a.userid,a.first_name, a.last_name,b.reference_by_school,count(c.student_userid) as student_userid from student_profile a,student_school b, job_applied c  where a.userid=b.userid and b.userid=c.student_userid and c.student_userid='$uname'");
while($row=mysql_fetch_array($all_vacancy)){
	$name=$row['first_name']." ".$row['last_name'];
	$stdid=$row['student_userid'];
$data = array("'$name','Form,Pending','$stdid','completed");

	
	foreach ( $data as $line ) {
    $val = explode(",", $line);
	$fp = fopen('php://output', 'w');
    fputcsv($fp, $val);
	
}
fclose($fp);
	
		 }
	
}
	
	}

// for manage employer csv file download

if(isset($_GET['manage_employer'])){
 $newarr=array('Name,Invitation,Vacancies,Placements,H&S Cert. Exp.');
	foreach ( $newarr as $out ) {
    $vals = explode(",", $out);
	$fpss = fopen('php://output', 'w');
    fputcsv($fpss, $vals);	
}

$sql = mysql_query("SELECT userid,company_name FROM employer_registration");
while($name=mysql_fetch_array($sql))
{
	$employerid=$name['userid'];
$all_vacancy=mysql_query("select count(userid) as numbofvacncy from create_vacancy where userid='$employerid';");
while($row=mysql_fetch_array($all_vacancy)){
	
	$name=$name['company_name'];
	$noofvacancy=$row['numbofvacncy'];
$data = array("'$name','Invitation,'$noofvacancy',Fetching Placement Pending,Fetching Pending");

	
	foreach ( $data as $line ) {
    $val = explode(",", $line);
	$fp = fopen('php://output', 'w');
    fputcsv($fp, $val);
	
}
fclose($fp);
	
		
		 }
}

}


// for manage Application csv file download

if(isset($_GET['manage_application'])){
 $newarr=array('Student Name,Vacancy,Status,Date of Application,Location');
	foreach ( $newarr as $out ) {
    $vals = explode(",", $out);
	$fpss = fopen('php://output', 'w');
    fputcsv($fpss, $vals);	
}


$user=$_SESSION['employeruserid'];
$all_applications=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,b.automatic_date,c.apply_time,c.status,c.cover_letter,c.company_userid from student_profile a,create_vacancy b,job_applied c where c.company_userid='$user' && c.student_userid=a.userid && c.vacancy_time=b.automatic_date order by c.apply_time  DESC;");
if(mysql_num_rows($all_applications)>0){
while($row=mysql_fetch_array($all_applications)){
	
	$stdname=$row['first_name']." ".$row['last_name'];
	$vacancy=$row['vacancy_title'];
	 $status=$row['status'];
	  $apply_time=$row['apply_time'];
  $vacancy_location=$row['vacancy_location'] ;
$data = array("'$stdname','$vacancy','$status','$apply_time', '$vacancy_location'");

	
	foreach ( $data as $line ) {
    $val = explode(",", $line);
	$fp = fopen('php://output', 'w');
    fputcsv($fp, $val);
	
}
fclose($fp);
	
		
		 }


}
}

?>
