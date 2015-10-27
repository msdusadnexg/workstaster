<?php
include('header.php');
?>
 
 <div class="row bgColorOne" style="height:500px;position:relative;background-color:green;">
	


       <div style="width:40%;position:absolute;margin-left:3%;">
        <form action="classes/login.php" method="post">
            <h1 style="color:white">Work Taster Account Login</h1>
			<?php
			if(isset($_GET['messg'])){
				$ErrorMessage=$_GET['messg'];
				?>
				<div class="alert alert-warning">
  <strong><?php echo $ErrorMessage;?></strong> </div>	
<?php
			}
?>					
			
        <div class="input-icon">
                 <span class="ss-user"></span>
             <input type="text" class="form-control" name="userid" id="student_id" placeholder="Username" value="<?php 
if(isset($_COOKIE['studentcook'])){

echo $_COOKIE['studentcook']; 
}																												 
 ?>" required><br>
            </div> 
			<div class="input-icon">
				  <span class="ss-link"></span>
            <input type="password" class="form-control" name="password" id="student_password" placeholder="Password" value="<?php 
if(isset($_COOKIE['studentcookpass'])){

echo $_COOKIE['studentcookpass']; 
}																												 
 ?>" required>
				  </div> 
			  <div class="col-sm-9" >  <br> <label class="checkbox"><input data-toggle="checkbox"  type="checkbox" name="rememberme"  <?php if(isset($_COOKIE['studentcook'])){
?> value="1" checked
																		   <?php
}	
																		   
	else{
	?> value="0"
																		   
																		   <?php
	}																	   
																		   ?>	> 
	 <p class="lead">Remember Me</span>&nbsp;&nbsp;<a href="forgot_password.php"> Forgot Password</a></p></div>
			
              <input type="submit" class="btn btn-block btn-primary btn-embossed" value="Login (Student)" name="student_login"><br>
              <input type="submit" class="btn btn-block btn-primary btn-embossed" value="Login (Employer)" name="employer_login">  <br> 
              <input type="submit" class="btn btn-block btn-primary btn-embossed" value="Login (School)" name="school_login"> <br>  
			
              </form>
           </div>
		
		
		<div  style="width:45%;position:relative;margin-left:50%;">
        <form action="classes/login.php" method="post">
            <h1 style="color:white">Work Taster Account Registration</h1>
              <input type="button" class="btn btn-block btn-primary btn-embossed" value="Register as a Student" name="student_login" onclick="window.location.href='student/student_registration.php'"><br>
              <input type="button" class="btn btn-block btn-primary btn-embossed" value="Register as an Employer" name="employer_login" onclick="window.location.href='employer/employer_registration.php'">  <br> 
              <input type="button" class="btn btn-block btn-primary btn-embossed" value="Register as a School" name="school_login" onclick="window.location.href='schools/school_registration.php'"> <br>  
              </form>
           </div>
	 
			</div>

<?php
include('footer.php');
?>
