<?php

include('connection.php');
class Login extends createConnection{

 public function StudentLogin(){

  $id=$_POST["userid"];
	 $passcok=$_POST["password"]; 
$pass=$_POST["password"]; 
$pass=md5($pass);
$result=mysql_query("SELECT * FROM login WHERE userid='$id' && password='$pass' && category='Student';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
    if($row = mysql_fetch_array($result)){ 
		
		// code for set cookies if user click on remeber password

		if(isset($_POST['rememberme'])){
					$cookie_name ="studentcook";
                   $cookie_value = $id;
			    $cookie_pass ="studentcookpass";
                   $cookie_val = $passcok;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/"); // 86400 = 1 day
		setcookie($cookie_pass, $cookie_val, time() + (86400 * 90), "/");
		}
		//end hear
		
       $_SESSION['studentuserid']=$row['userid'];
        $_SESSION['studentuserpass']=$row['password'];
       $lastlogin=mysql_query("update login set last_login=now() where userid='$id' && password='$pass' && category='Student'");
       // echo '<script>alert("Student Login Sucessfully!");</script>';
        echo '<script type="text/javascript">window.location ="../student/view_profile.php";</script>';
        //  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../student/student_profile.php">'; 
       //return header('Location:../student/student_profile.php');
    }
      
  }
   else{
	   //echo '<script>alert("NO Any Student User Found!'.mysql_error().'");</script>';
	    echo '<script type="text/javascript">window.location ="../index.php?messg=Wrong Student Username/Password";</script>';
   }
}
    else{
		echo '<script>alert("Error IN Student Login Query!'.mysql_error().'");</script>';
	}
    
    

}
   public  function EmployerLogin(){
        $id=$_POST["userid"];
$password=$_POST["password"]; 
$pass=md5($password);
$result=mysql_query("SELECT * FROM login WHERE userid='$id' && password='$pass' && category='Employer';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
    if($row = mysql_fetch_array($result)){ 
		// code for set cookies if user click on remeber password

		if(isset($_POST['rememberme'])){
					$cookie_name ="studentcook";
                   $cookie_value = $id;
			    $cookie_pass ="studentcookpass";
                   $cookie_val = $password;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/"); // 86400 = 1 day
		setcookie($cookie_pass, $cookie_val, time() + (86400 * 90), "/");
		}
		//end hear
		
       $_SESSION['employeruserid']=$row['userid'];
        $_SESSION['employeruserpass']=$row['password'];
		 $lastlogin=mysql_query("update login set last_login=now() where userid='$id' && password='$pass' && category='Employer'");
       // echo '<script>alert("Employer Login Sucessfully!");</script>';
        echo '<script type="text/javascript">window.location ="../employer/employer_profile.php";</script>';
        //header('Location:../employer/employer_edit.php');
    }
      
  }
   else{
	   //echo '<script>alert("NO Any Employer User Found!'.mysql_error().'");</script>';
	   echo '<script type="text/javascript">window.location ="../index.php?messg=Wrong Employer Username/Password";</script>';
   }
}
    else{echo '<script>alert("Error IN Employer Login Query!'.mysql_error().'");</script>';}
    
    }
    
    
    
   public  function SchoolLogin(){
        $id=$_POST["userid"];
	 $passcokk=$_POST["password"];
$pass=$_POST["password"]; 
$pass=md5($pass);
$result=mysql_query("SELECT * FROM login WHERE userid='$id' && password='$pass' && category='School';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
    if($row = mysql_fetch_array($result)){ 
		
		
		// code for set cookies if user click on remeber password

		if(isset($_POST['rememberme'])=='1'){
					$cookie_name ="studentcook";
                   $cookie_value = $id;
			    $cookie_pass ="studentcookpass";
                   $cookie_val = $passcokk;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/"); // 86400 = 1 day
		setcookie($cookie_pass, $cookie_val, time() + (86400 * 90), "/");
		}
		else{
		unset($_COOKIE['studentcook']);
			unset($_COOKIE['studentcookpass']);
		
		}
		//end hear
		
		
       $_SESSION['schooluserid']=$row['userid'];
        $_SESSION['schooluserpass']=$row['password'];
		 $lastlogin=mysql_query("update login set last_login=now() where userid='$id' && password='$pass' && category='School'");
        //echo '<script>alert("School Login Sucessfully!");</script>';
        echo '<script type="text/javascript">window.location ="../schools/school_profile.php";</script>';
        //header('Location:../employer/employer_edit.php');
    }
      
  }
   else{
	  // echo '<script>alert("NO Any School User Found!'.mysql_error().'");</script>';
	   echo '<script type="text/javascript">window.location ="../index.php?messg=Wrong School Username/Password";</script>';
   }
}
    else{echo '<script>alert("Error IN School Login Query!'.mysql_error().'");</script>';}
    
    }
    
    
    
    

}

if(isset($_POST['student_login'])){
$log= new Login();
    $log->StudentLogin();
}
if(isset($_POST['employer_login'])){
$log= new Login();
    $log->EmployerLogin();
}

if(isset($_POST['school_login'])){
$log= new Login();
    $log->SchoolLogin();
}


?>