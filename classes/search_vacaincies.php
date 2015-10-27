
<?php 
include('connection.php');
// code for search vacancies for view_all_application page in student

if($_REQUEST['type']=='student_view_all'){
$srch=$_REQUEST['first'];
$all_vacancy=mysql_query("select a.userid,a.vacancy_title,a.vacancy_location,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website from create_vacancy a,employer_registration b where a.userid=b.userid && (a.vacancy_title LIKE '%$srch%' || a.vacancy_location LIKE '%$srch%' || a.from_date1 LIKE '%$srch%' || a.to_date1 LIKE '%$srch%' || b.company_name LIKE '%$srch%') order by automatic_date  DESC;");

if($all_vacancy){
	echo "<table style='width:80%;'>
		<thead>
			<th>VACANCY</th>
			<th>INDUSTRY</th>
			<th>EMPLOYER</th>
			<th>PLACEMENTS</th>
			<th>FROM / TO</th>
		</thead>";
	if($all_vacancy && mysql_num_rows($all_vacancy)>0){
while($row=mysql_fetch_array($all_vacancy)){
	$userid=$row['userid'];
	$vacancy_title=$row['vacancy_title'];
		$company_name=$row['company_name'];
		$company_website=$row['company_website'];
		$automatic_date=$row['automatic_date'];
		$vacancy_title=$row['vacancy_title'];
		$number_places=$row['number_places'];
		$from_date1=$row['from_date1'];
		$to_date1=$row['to_date1'];
echo "<tr><td><a href='view_vacancy.php?userid=$userid&vacancy_title=$vacancy_title&company_name=$company_name&company_website= $company_website&date=$automatic_date'>$vacancy_title</a></td>";
echo "<td>Industury Type</td><td>$company_name</td><td>$number_places</td><td>$from_date1  TO $to_date1</td></tr>";
	
 }
	}
	else{
	echo "<tr><td>No Result Found</td></tr>";
	}
	echo "</table>";
}
else{
echo "Error in Query Pass".mysql_error();
}
	
}

//// code for search vacancies for My_application page in student

if($_REQUEST['type']=='student_my_application'){
$srch=$_REQUEST['first'];
	$currrt_user=$_SESSION['studentuserid'];
$all_vacancy=mysql_query("SELECT  a.cover_letter,a.status,a.apply_time, b.company_name, c.vacancy_title FROM job_applied a, employer_registration b, create_vacancy c where a.company_userid = b.userid = c.userid and a.student_userid='$currrt_user' and a.vacancy_time = c.automatic_date && (a.cover_letter LIKE '%$srch%' || a.status LIKE '%$srch%' || b.company_name LIKE '%$srch%' || c.vacancy_title LIKE '%$srch%' || a.apply_time LIKE '%$srch%' ) ;");

if($all_vacancy){
	echo "<table style='width:80%;'>
		<thead>
			<th>Vacancy</th>
			<th>Employer</th>
			<th>Cover Letter</th>
			<th>Date Of Application</th>
			<th> Status</th>
		</thead>";
	if($all_vacancy && mysql_num_rows($all_vacancy)>0){
while($row=mysql_fetch_array($all_vacancy)){
		$company_name=$row['company_name'];
		$vacancy_title=$row['vacancy_title'];
		$cover_letter=$row['cover_letter'];
		$apply_time=$row['apply_time'];
		$status=$row['status'];
	
echo "<tr><td><a href='review_application.php?cover=$cover_letter'>$vacancy_title</a></td>
			<td> $company_name</td>
			<td> $cover_letter</td>
			<td> $apply_time</td>
			<td>$status</td>
		</tr>";
	
 }
		}
	else{
	echo "<tr><td>No Result Found</td></tr>";
	}
	echo "</table>";
}
else{
echo "Error in Query Pass".mysql_error();
}
	
}
		?>