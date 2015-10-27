<?php
include('connection.php');
class Registration extends createConnection{ // for insert data into database of registration 

   public  function student_regestration(){
          // for insert data into database
        $fname=$_POST['fname'];
       $lname=$_POST['lname'];
        $email=$_POST['email'];
        $userid=$_POST['userid'];
       $dob_day=$_POST['day'];
       $dob_month=$_POST['month'];
       $dob_year=$_POST['year'];
       $gender=$_POST['gender'];
        $password=$_POST['password'];
        $en_pass=md5($password);
        $category="Student";
         //$term_cond=$_POST['trm_cond'];
        if(!isset($_POST['trm_cond'])){ $term_cond="0";}
        else{$term_cond="1";}
       
	  
        //for login table
         
        $login=mysql_query("insert into login (email,userid,password,category) values('$email','$userid','$en_pass','$category');");
         
        
        if($login){
			$student_school=mysql_query("insert into student_school (userid) values('$userid');");
         $student_preferences=mysql_query("insert into student_preferences (userid) values('$userid');");
        $student_cv=mysql_query("insert into student_cv (userid) values('$userid');");
	   $student_achivment=mysql_query("insert into student_achievements (userid) values('$userid');");
	   
         
        //for stdent profile table
        
        $student_profile=mysql_query("insert into student_profile (first_name,last_name,email,userid,dob_day,dob_month,dob_year,gender,t_c,joining_date) values('$fname','$lname','$email','$userid','$dob_day','$dob_month','$dob_year','$gender','$term_cond',now());");
        
      // confirmation mail for account activate
			
	$subject = 'Work Taster Account Activation Confirmation Mail';
$message = ("Dear  $fname ,<br>Greetings!!!<br>
Your Account has been created Sucessfully<br>
<a href=''>Click Hear for Activate it</a>");  
        
 $header= 'From: ' . "\r\n" .
    'Reply-To:  ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($email, $subject, $message, $header);	
			
			
             $_SESSION['studentuserid']=$_POST['userid'];
        $_SESSION['studentuserpass']=$_POST['password'];
            
         // echo '<script>alert("Student Registration Sucessfully!");</script>';
			  echo '<script type="text/javascript">window.location ="../student/student_profile.php";</script>';
        }
        else{
			$checkVar=mysql_error();
        
						//echo $checkVar;
 if($checkVar=="Duplicate entry '".$userid."' for key 'userid'"){
	             
			$_SESSION['userid_error']="Userid  Aleready Taken , Choose Different ";
			echo '<script>javascript:history.go(-1);</script>';
			
			}
		
			elseif($checkVar=="Duplicate entry '".$email."' for key 'email'"){
				
				$_SESSION['email_error']="Email  Aleready Registered , Choose Different ";
		echo '<script>javascript:history.go(-1);</script>';
				
				
			}
				
			else{
				
			echo '<script>alert(" Error in student Registration query'.mysql_error().' ");javascript:history.go(-1);</script>';
			
			}
			
        }
    }
    
    // code for data insertion  employee registration
    
 public function employer_regestration(){

        $sir_title=$_POST['company_sir_title'];
        $company_fname=$sir_title." ".$_POST['company_f_name'];
        $company_lname=$_POST['company_l_name'];
        $company_title=$_POST['company_title'];
        $company_email=$_POST['company_email'];
        $company_telephone=$_POST['coun_code']." ".$_POST['company_telephone'];
        $company_name=$_POST['company_name'];
        $company_address=$_POST['company_address'];
        $company_city=$_POST['company_city'];
        $company_region=$_POST['company_region'];
        $company_postal_code=$_POST['company_postal_code'];
        $company_userid=$_POST['company_userid'];
        $company_password=$_POST['company_password'];
        $company_pass=MD5($company_password);

        if(isset($_POST['company_term'])){
        $company_terms="checked";
        }
        else{ $company_terms="unchecked";}
    $company_categorytype="Employer";
    
  /*   $logo="../employer/logo/".$_FILES['Logo']['name'];
	move_uploaded_file($_FILES['Logo']['tmp_name'],$logo);
         $logoname=$_FILES['Logo']['name'];
         */
    
    
    $logindetail=mysql_query("insert into login (userid,password,email,category) values ('$company_userid','$company_pass','$company_email','$company_categorytype');");
        
     

 if($logindetail){
	 
	 $employer_location=mysql_query("insert into employer_location (userid) values('$company_userid');");
      
        $employer_register=mysql_query("insert into employer_registration (userid,company_first_name,company_last_name,company_email,company_telephone,company_title,company_name,company_address,company_city,company_region,company_postal_code,company_terms,join_date) values('$company_userid','$company_fname','$company_lname','$company_email','$company_telephone','$company_title','$company_name','$company_address','$company_city','$company_region','$company_postal_code','$company_terms',now());");

     
      $_SESSION['employeruserid']=$_POST['company_userid'];
        $_SESSION['employeruserpass']=$_POST['company_password'];
	 
	 
	 	$subject = 'Work Taster Account Activation Confirmation Mail';
$message = ("Dear  $company_fname ,<br>Greetings!!!<br>
Your Account has been created Sucessfully<br>
<a href=''>Click Hear for Activate it</a>");  
        
 $header= 'From: ' . "\r\n" .
    'Reply-To:  ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($company_email, $subject, $message, $header);	
	 
	 
	 
	 
      echo '<script type="text/javascript">window.location ="../employer/employer_profile.php";</script>';
         // echo '<script>alert("Employer Registration Sucessfully!");</script>';

        }
        else{
			
			$checkVar=mysql_error();
			//echo $checkVar;
 if($checkVar=="Duplicate entry '".$company_userid."' for key 'userid'"){
	 
			
			$_SESSION['emp_userid_error']="Userid  Aleready Taken , Choose Different ";
	 
			echo '<script>;javascript:history.go(-1);</script>';
			
			}
		
			elseif($checkVar=="Duplicate entry '".$company_email."' for key 'email'"){
				
				$_SESSION['emp_email_error']='Email  Aleready Registered , Choose Different';  
			
				
				
		echo '<script>javascript:history.go(-1);</script>';
			}
				
			else{	
			echo '<script>alert("Error in Query Pass Employer Registration'.mysql_error().'");javascript:history.go(-1);</script>';
			
			}
        }
    }
    
    
    public function school_registration(){
         $sir_title=$_POST['sir_title'];
        $fname=$_POST['f_name'];
        $lname=$_POST['l_name'];
        $title=$_POST['title'];
        $email=$_POST['email'];
        $telephone=$_POST['telephone'];
        $school_name=$_POST['school_name'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $region=$_POST['region'];
        $postal_code=$_POST['postal_code'];
        $userid=$_POST['userid'];
        $password=$_POST['password'];
        $pass=MD5($password);
        $categorytype="School";
        if(isset($_POST['term'])){
        $terms="checked";
        }
        else{ $terms="unchecked";}
        
        
        $logindetail=mysql_query("insert into login (userid,password,email,category) values ('$userid','$pass','$email','$categorytype');");
        
        
        
        if($logindetail){
            $school_register=mysql_query("insert into school_registration (userid,school_first_name,school_last_name,school_email,school_telephone,school_title,school_name,school_address,school_city,school_region,school_postal_code,school_terms,school_name_title) values('$userid','$fname','$lname','$email','$telephone','$title','$school_name','$address','$city','$region','$postal_code','$terms','$sir_title');");
			
             $_SESSION['schooluserid']=$_POST['userid'];
        $_SESSION['schooluserpass']=$pass;
			
			
				$subject = 'Work Taster Account Activation Confirmation Mail';
$message = ("Dear  $fname ,<br>Greetings!!!<br>
Your Account has been created Sucessfully<br>
<a href=''>Click Hear for Activate it</a>");  
        
 $header= 'From: ' . "\r\n" .
    'Reply-To:  ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($email, $subject, $message, $header);	
			
			
			
         //echo '<script>alert("School Registration Sucessfully!");</script>';
  echo '<script type="text/javascript">window.location ="../schools/school_profile.php";</script>';
            
        }
        else{
			
		$checkVar=mysql_error();
			//echo $checkVar;
 if($checkVar=="Duplicate entry '".$userid."' for key 'userid'"){
	 
	 $_SESSION['sch_userid_error']="Userid  Aleready Taken , Choose Different ";
			
			echo '<script>javascript:history.go(-1);</script>';
			
			}
		
			elseif($checkVar=="Duplicate entry '".$email."' for key 'email'"){
				
				$_SESSION['sch_email_error']='Email  Aleready Registered , Choose Different';  
				
		echo '<script>javascript:history.go(-1);</script>';
				
			}
				
			else{	
			echo '<script>alert("Error in School registration Query'.mysql_error().'");javascript:history.go(-1);</script>';
			
			}	
			
        }
    
    }
    
    

}

if(isset($_POST['student'])){
$cl= new Registration();
$cl->student_regestration();
}
if(isset($_POST['employer'])){
$cl= new Registration();
$cl->employer_regestration();
}
if(isset($_POST['school'])){
$cl= new Registration();
$cl->school_registration();
}

?>