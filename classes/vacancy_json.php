
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 80%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
include('connection.php');
$q=$_GET['q'];
$user=$_SESSION['employeruserid'];
if($q=='all'){
	$sql="SELECT * FROM create_vacancy order by automatic_date  DESC;" ;
}

if($q=='onlymy'){
	$sql="SELECT * FROM create_vacancy WHERE userid = '".$user."' order by automatic_date  DESC;" ;
}

$result = mysql_query($sql);

?><table>
<tr>
<th>VACANCY</th>
<th>DEPARTMENT</th>
<th>BRANCH</th>
<th>NUMBER OF PLACES</th>
<th>APPLICATIONS</th>
</tr> <?php
while($row = mysql_fetch_array($result)) {
    ?><tr>
 <td><a href="view_vacancy.php?user=<?php echo $row['userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'];?></a> </td>
  <td><?php echo $row['vacancy_description'] ;?></td>
    <td><?php echo  $row['vacancy_location'] ;?></td>
    <td><?php echo  $row['number_places'];?></td>
   <td>total applied</td>
    </tr>
	
<?php } 
	?></table>
</body>
</html>
