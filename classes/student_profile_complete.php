<?php
include('connection.php');

class ProfileComplete extends createConnection{
   
  public  function student_profile_complete(){
        $current_userid= $_SESSION['studentuserid'];
       $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
       $dob_day=$_POST['day'];
      $dob_month=$_POST['month'];
      $dob_year=$_POST['year'];
       $sex=$_POST['gender'];
      $home_address=$_POST['address'];
      $city=$_POST['city'];
        $region=$_POST['region'];
        $postal_code=$_POST['postal_code'];
      $email=$_POST['email'];
       $phone=$_POST['primery_tel'];
      $website=$_POST['website'];
      
        $dataupdate=mysql_query("UPDATE student_profile SET first_name='$first_name' ,last_name='$last_name',gender='$sex',dob_day='$dob_day',dob_month='$dob_month',dob_year='$dob_year',home_address='$home_address',city='$city',region='$region',postal_code='$postal_code',email='$email',website='$website',phone='$phone' WHERE userid='$current_userid';");
       
        
           if($dataupdate){
          //echo '<script>alert("Student Profile Updated Sucessfully!");</script>';
		echo '<script type="text/javascript">window.location ="../student/view_profile.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student Profile Updatation !'.mysql_error().'");</script>';
        }
        
        
    }
    
    
    public  function student_profile_pic(){
        $current_userid= $_SESSION['studentuserid'];
        
      $profile="../student/student_docs/profile_photo/".$_FILES['profile_image']['name'];
	move_uploaded_file($_FILES['profile_image']['tmp_name'],$profile);
         $image=$_FILES['profile_image']['name'];
        $dataupdate=mysql_query("UPDATE student_profile SET profile_picture='$image' WHERE userid='$current_userid';");
       
           if($dataupdate){
          //echo '<script>alert("Student Profile Picture Updated Sucessfully!");</script>';
			   echo '<script type="text/javascript">window.location ="../student/view_profile.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student Profile Picture Updatation !'.mysql_error().'");</script>';
        }
        
        
    }  
    
    
   public  function password_update(){
        $current_userid= $_SESSION['studentuserid'];
        //$old_password=$_POST['old_password'];
	     $old_password=$_REQUEST['first'];
       $ch_old=MD5($old_password);
       // $new_password=$_POST['new_password'];
	   $new_password=$_REQUEST['new_pass'];
       $up_pass=MD5($new_password);
      
       $old_pass_fetch=mysql_query("select * from login where userid='$current_userid';");
       while($row=mysql_fetch_array($old_pass_fetch)){
            $oldpass=$row['password'];
           $oldc=MD5($oldpass);
           if($ch_old==$oldc){
                $dataupdate=mysql_query("UPDATE login SET password='$up_pass' WHERE userid='$current_userid' && password='$ch_old';");
       
           if($dataupdate){
               $_SESSION['studentuserpass']=$up_pass;
          //echo '<script>alert("Student Password Updated Sucessfully!");</script>';
			   echo '<script type="text/javascript">window.location ="../student/view_profile.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student Password Updatation !'.mysql_error().'");</script>';
        }
        
           }
           
           else{
            echo 'Old Password Dont Match With Our Database'.mysql_error();
			 //echo '<script type="text/javascript">window.location ="../student/student_profile.php";</script>';
           }
       } 
    }  
     
    
    
    

    public function student_school(){
        
         $current_userid= $_SESSION['studentuserid'];
     $school_name=$_POST['school_name'];
        $school_address=$_POST['school_address'];
      $school_city=$_POST['school_city'];
       $school_region=$_POST['school_region'];
       $school_postalcode=$_POST['school_postalcode'];
      $school_contact_sr=$_POST['school_contact_sr'];
        $school_contact_fname=$_POST['school_contact_fname'];
        $school_contact_lname=$_POST['school_contact_lname'];
     $school_phone=$_POST['school_phone'];
      $school_email=$_POST['school_email'];
       $school_website=$_POST['school_website'];
        
        $schoolupdate=mysql_query("UPDATE student_school SET school_name='$school_name',school_address='$school_address',school_city='$school_city',school_region='$school_region',school_postalcode='$school_postalcode',school_contact_sr='$school_contact_sr',school_contact_fname='$school_contact_fname',school_contact_lname='$school_contact_lname',school_phone='$school_phone',school_email='$school_email',school_website='$school_website' WHERE userid='$current_userid'");
   
    
       if($schoolupdate){
          //echo '<script>alert("Student School Detail Updated Successfully!");</script>';
		   echo '<script type="text/javascript">window.location ="../student/view_profile.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student School Updatation !'.mysql_error().'");</script>';
        }
    
    
    }
    
   public  function student_prefrences_job(){
        
      
         $current_userid= $_SESSION['studentuserid'];
       
       if(empty($_POST['banking_finance'])){
       $banking_finance="no";
       }
        else{$banking_finance=$_POST['banking_finance'];}
       if(empty($_POST['retail'])){
       $retail="no";
       }
        else{$retail=$_POST['retail'];}
       if(empty($_POST['construction'])){
       $construction="no";
       }
        else{$construction=$_POST['construction'];}
       if(empty($_POST['legal'])){
       $legal="no";
       }
        else{$legal=$_POST['legal'];}
       
       if(empty($_POST['medical'])){
        $medical="no";
       }
               else{$medical=$_POST['medical'];}
        if(empty($_POST['other'])){
        $other="no";
       }
        else{$other=$_POST['other'];}
       
        if(empty($_POST['newsletter'])){
        $newsletter="no";
       }
        else{ $newsletter=$_POST['newsletter'];}
       
       if(empty($_POST['all'])){
       $all="no";
       }
       else{
       $all=$_POST['all'];   
       }
       
       $vacaince_distance=$_POST['vacaince_distance'];
 
  $student_prefer=mysql_query("UPDATE student_preferences SET all_jobs='$all',banking_finance='$banking_finance',retail='$retail',construction='$construction',legal='$legal',medical='$medical',other='$other',newsletter='$newsletter',vacancies_distance='$vacaince_distance' WHERE userid='$current_userid'");
        
   
       if($student_prefer){
         // echo '<script>alert("Student Preferences  Updated Sucessfully!");</script>';
		   echo '<script type="text/javascript">window.location ="../student/view_profile.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student Preferences  Detail Updatation !'.mysql_error().'");</script>';
        }
    
    
    
    }
    
    public  function student_medical_detail(){
         
          $current_userid= $_SESSION['studentuserid'];
         $pf_hospital=$_POST['preferred_hospital'];
         $physician=$_POST['physician'];
         $telephone=$_POST['telephone'];
         $dentist=$_POST['dentist'];
         $insurance_carrier=$_POST['insurance_carrier'];
         $policy=$_POST['policy'];
         $group_number=$_POST['group_number'];
         $id_number=$_POST['id_number'];
         $explain_medical=$_POST['explain'];
         $cmt=$_POST['cmt'];
         
          $medical="../student/student_docs/medical_docs/".$_FILES['medical_doc']['name'];
	move_uploaded_file($_FILES['medical_doc']['tmp_name'],$medical);
         $medical_doc=$_FILES['medical_doc']['name'];
         
        $medical_update=mysql_query("UPDATE medical_and_emergency SET preferred_hospital='$pf_hospital',student_physician='$physician',hospital_telephone='$telephone',dentist='$dentist',health_insurance_carrier='$insurance_carrier',policy='$policy',group_number='$group_number',identification_number='$id_number' ,`explain`='$explain_medical',mediciation_taken='$cmt',medical_doc='$medical_doc' WHERE userid='$current_userid';");
         
      if($medical_update){
       //   echo '<script>alert("Medical Detail Updated!");</script>';
        }
        else{
        
           echo '<script>alert("Error In Medical Detail Updetation !'.mysql_error().'");</script>';
        }
     
     } 
}

if(isset($_POST['std_profile_submit'])){
$object_class= new ProfileComplete();
$object_class->student_profile_complete();
}

if(isset($_POST['profile_pic'])){
$object_class= new ProfileComplete();
$object_class->student_profile_pic();
}

if(isset($_REQUEST["first"])){
$object_class= new ProfileComplete();
$object_class->password_update();
}

if(isset($_POST['student_school_detail'])){
$object_class= new ProfileComplete();
$object_class->student_school();
}

if(isset($_POST['student_prefrences'])){
$object_class= new ProfileComplete();
$object_class->student_prefrences_job();
}

if(isset($_POST['std_medical_detail'])){
$object_class= new ProfileComplete();
$object_class->student_medical_detail();
}

?>