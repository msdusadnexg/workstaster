<html>
    
    <head>
        
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div style="margin-top:2%;">
       <div class="container" style="width:30%;margin-left:10%;border:2px solid black;position:absolute;">
        <form action="classes/login.php" method="post">
            <h3>Work Taster Account Login</h3>
            <div class="form-group input-required">
                 <span class="ss-user"></span>
             <input type="text" class="form-control" name="userid" id="student_id" placeholder="Email"><br>
               
            <input type="password" class="form-control" name="password" id="student_password" placeholder="Password">
				  </div>
              <input type="submit" class="btn btn-block btn-primary btn-embossed" value="Login (Student)" name="student_login"><br>
              <input type="submit" class="btn btn-block btn-primary btn-embossed" value="Login (Employer)" name="employer_login">  <br> 
              <input type="submit" class="btn btn-block btn-primary btn-embossed" value="Login (School)" name="school_login"> <br>  
              </form>
           </div>
		
		
		<div class="container" style="width:30%;border:2px solid black;position:relative;margin-left:43%;">
        <form action="classes/login.php" method="post">
            <h3>Work Taster Account Registration</h3>
              <input type="button" class="btn btn-block btn-primary btn-embossed" value="Register as a Student" name="student_login" onclick="window.location.href='student/student_registration.php'"><br>
              <input type="button" class="btn btn-block btn-primary btn-embossed" value="Register as an Employer" name="employer_login" onclick="window.location.href='employer/employer_registration.php'">  <br> 
              <input type="button" class="btn btn-block btn-primary btn-embossed" value="Register as a School" name="school_login" onclick="window.location.href='schools/school_registration.php'"> <br>  
              </form>
           </div>
			</div>
    </body>
</html>