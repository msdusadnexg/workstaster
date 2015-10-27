<?php
include('connection.php');

class SchoolProfile {

 public function school_profile_complete(){

   $school_user=$_SESSION['schooluserid'];
        $school_name=$_POST['school_name'];
        $school_address=$_POST['school_address'];
        $school_city=$_POST['school_city'];
        $school_postal_code=$_POST['school_postal_code'];
        $school_website=$_POST['school_website'];
        $school_telephone=$_POST['school_telephone'];
       if (empty($_FILES['school_logo']['name'])) {
		   $logoname=$_POST['school_logo'];
	   }
	 else{
     $logo="../schools/logo/".$_FILES['school_logo']['name'];
	move_uploaded_file($_FILES['school_logo']['tmp_name'],$logo);
         $logoname=$_FILES['school_logo']['name'];
	 }
    
$school_profile=mysql_query("update school_registration set school_name='$school_name',school_address='$school_address',school_city='$school_city',school_telephone='$school_telephone',school_website='$school_website',school_postal_code='$school_postal_code',school_logo='$logoname' where userid='$school_user';");

    
       
      if($school_profile){
         // echo '<script>alert("School Profile Complete Detail Updated!");</script>';
		    echo '<script type="text/javascript">window.location ="../schools/school_profile.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In School Profile Complete Detail Updetation !'.mysql_error().'");</script>';
        }
}
    
  public function add_student(){
      $user=$_SESSION['schooluserid'];
 $first_name=$_POST['first_name'];
       $last_name=$_POST['last_name'];
       $email=$_POST['email'];
       $current_form=$_POST['current_form'];
       $gender=$_POST['gender'];
      
      $add=mysql_query("insert into add_student (userid,first_name,last_name,email,current_form,gender) values ('$user','$first_name','$last_name','$email','$current_form','$gender');");
        if($add){
         //echo '<script>alert("Add Student Sucessfully!");</script>';
			  echo '<script type="text/javascript">window.location ="../schools/manage_students.php";</script>';
        }
        else{
        echo '<script>alert("Error In Add Student !'.mysql_error().'");</script>';
        }
  
  }  
    
    public function Addemployer(){
        $school_user=$_SESSION['schooluserid'];
        $sir_title=$_POST['company_sir_title'];
        $company_fname=$_POST['company_f_name'];
        $company_lname=$_POST['company_l_name'];
         $company_email=$_POST['company_email'];
         $company_website=$_POST['company_website'];
        $company_telephone=$_POST['country_code']." ".$_POST['company_telephone'];
        $company_title=$_POST['company_title'];
        $company_name=$_POST['company_name'];
        $company_address=$_POST['company_address'];
        $company_city=$_POST['company_city'];
        $company_postal_code=$_POST['company_postal_code'];
        $company_country=$_POST['company_country'];
     
         $add_employer=mysql_query("insert into add_employer (userid,sir_title,company_first_name,company_last_name,company_email,company_telephone,company_title,company_name,company_address,company_city,company_website,company_postal_code,company_country) values('$school_user','$sir_title','$company_fname','$company_lname','$company_email','$company_telephone','$company_title','$company_name','$company_address','$company_city','$company_website','$company_postal_code','$company_country');");

 if($add_employer){
      //echo '<script type="text/javascript">window.location ="../employer/employer_profile_edit.php";</script>';
          //echo '<script>alert("School Employer Added Sucessfully!");</script>';
	   echo '<script type="text/javascript">window.location ="../schools/manage_employers.php";</script>';

        }
        else{
        
           echo '<script>alert("School  Error In Employer Add !'.mysql_error().'");</script>';
        }
    }
    
    
    public function AddUsers(){
    
    $school_user=$_SESSION['schooluserid'];
        $salutation=$_POST['salutation'];
        $user_fname=$_POST['user_first_name'];
        $user_lname=$_POST['user_last_name'];
            $user_title=$_POST['user_job_title'];
          $user_email=$_POST['user_email'];
        $user_telephone=$_POST['cont_code']." ".$_POST['user_telephone'];
    $add_users=mysql_query("insert into add_users (userid,salutation,user_first_name,user_last_name,user_job_title,user_email,user_telephone) values ('$school_user','$salutation','$user_fname','$user_lname','$user_title','$user_email','$user_telephone');");
    
    if($add_users){
      //echo '<script type="text/javascript">window.location ="../employer/employer_profile_edit.php";</script>';
         // echo '<script>alert("School Users Added Sucessfully!");</script>';
		  echo '<script type="text/javascript">window.location ="../schools/users.php";</script>';

        }
        else{
        
           echo '<script>alert("Error In School User Add !'.mysql_error().'");</script>';
        }
    
    }
    
}

if(isset($_POST['school_profile'])){
    $sc_pro_com= new SchoolProfile();
    $sc_pro_com->school_profile_complete();
}
if(isset($_POST['add_student'])){
    $sc_pro_com= new SchoolProfile();
    $sc_pro_com->add_student();
}
if(isset($_POST['add_users'])){
    $sc_pro_com= new SchoolProfile();
    $sc_pro_com->AddUsers();
}

if(isset($_POST['add_employer'])){
    $sc_pro_com= new SchoolProfile();
    $sc_pro_com->Addemployer();
}





?>