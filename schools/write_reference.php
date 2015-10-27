<?php include('../classes/connection.php'); 

$_SESSION['stdid']=$_GET['studenduserid'];
$schoolid=$_SESSION['schooluserid'];
?>
<script type="text/javascript" src="../js/validation.js"></script>
<script>
	function restform(){
	document.getElementById("write_reference").reset();
		return false;
	}
	
</script>
<a href="school_profile.php">Home</a><br>
<a href="../classes/logout.php">Logout</a><br>

<form action="" id="write_reference" method="post">
	<table>
<tr><td>Attendance Record in %</td><td><input type="text" name="attdance_record" id="attdance_record" onkeypress="return isNumberKey(event)" required>	</td></tr>
<tr><td>From </td><td> <input type="text" name="from_peroid" id="from_peroid" required>	</td></tr>
	<tr><td>To </td><td> <input type="text" name="to_peroid" id="to_peroid" required></td></tr>
	
	<tr><td>For teacher comments (optional)</td><td><textarea type="text"  rows="10" cols="20" maxlength="300" name="comment"></textarea></td></tr>
	<tr><td><input type="submit" name="gnerate_reference" value="Generate Reference"></td><td><input type="submit" name="cancel" value="Cancel" onclick="return restform();"></td></tr>
	
</table>	
</form>

<?php
if(isset($_POST['gnerate_reference'])){
     $std=$_SESSION['stdid'];
	$attend_record=$_POST['attdance_record'];
	$from=$_POST['from_peroid'];
	$to=$_POST['to_peroid'];
	$comment=$_POST['comment'];
	$qry=mysql_query("update student_school set reference_by_school='$schoolid',attendance_record='$attend_record',ref_from='$from',ref_to='$to',ref_comment='$comment',ref_date=now() where userid='$std'");
		
		if($qry){
			
	//echo '<script>alert("Stdent Reference Added!");</script>';
			//echo '<script type="text/javascript">window.location ="pending_references.php";</script>';
			  echo '<script type="text/javascript">window.location ="pending_references.php";</script>';
	}
	else{
		echo '<script>alert("Error In SStdent Reference Added !'.mysql_error().'");</script>';
		}
}
?>