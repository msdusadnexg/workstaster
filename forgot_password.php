<?php
include('header.php');
?>
<div class="row bgColorOne" style="position:relative;background-color:green;">
	<div style="width:30%;margin-left:10%;"><br>
		<form action="" method="post">
	<div class="input-icon" style="position:absolute;">
				  <span class="ss-link"></span>
           <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
				  </div>
			<div style="margin-left:55%;">
			 <input type="submit" name="submit" value="Get Password" class="btn  btn-primary btn-embossed">
			</div>
			</form>
		</div><br>
	
	<?php
if(isset($_POST['submit'])){
	include('classes/connection.php');
    $emailid=$_POST['email'];
	$sql=mysql_query("select * from login where email='$emailid';");
	if($sql){
	
		if($sql && mysql_num_rows($sql)>0){
		 if($row = mysql_fetch_array($sql)){ 
			 
			 $to=$row['email'];
			 $userid=$row['userid'];
			 $pass=$row['password'];
			 
			 $subject = 'Password Reset Worktaster';
$message = "For Password Reset <a href='http://vibedevelopment.co.uk/workstarter/password_update.php?userid=$userid&pass=$pass'>Click Hear</a>";  
        
          $header= 'From: ' . "\r\n" .
    'Reply-To:  ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
		
		mail($to,$subject,$message,$header);
			 
			 
			 ?>
	
			 <div class="alert alert-warning" >
  <strong>Password Reset Link Sent on Email</strong> </div>
	<?php
			 
		 }
		
		}
		
		else{
	//echo "Email Not Registred With Us".mysql_error();
			?>	<div class="alert alert-warning">
  <strong>Email Not Registred With Us</strong> </div>	
		
	
	<?php
	}
		
	}
	else{
	echo "Error inquery Pass".mysql_error();
	}
}
?>
	<br><br>
	</div>


<?php
include('footer.php')

?>