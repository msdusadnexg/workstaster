<?php
include('connection.php');
//class StudentData{

    //function StudentProfile(){
     
// fetch data from student cv table

  $cv_profile=mysql_query("select * from student_cv where userid='{$_SESSION['studentuserid']}';");
    
    if ($cv_profile){
    
  if ($cv_profile && mysql_num_rows($cv_profile)>0) {
    while($row = mysql_fetch_array($cv_profile)){
        
  
         
         $cv_first_name=$row['first_name'];
         $cv_last_name=$row['last_name'];
		$cv_ph_code=$row['phone_code'];
		$cv_primery_tel_no=$row['phone_number'];
         $cv_email=$row['email'];
		 $cv_website=$row['website'];
         $cv_data=$row['cv'];
        
     
         //$cv=$row['cv'];
    } 
     
    }
  }
        else{ echo '<script>alert("Student Cv Detail Fetch Fetching Error!'.mysql_error().'");</script>';}



    // code for fetch data from student profile table
    $st_profile=mysql_query("select * from student_profile where userid='{$_SESSION['studentuserid']}';");
    
    if ($st_profile){
    
  if ($st_profile && mysql_num_rows($st_profile)>0) {
    while($row = mysql_fetch_array($st_profile)){
        
         $home_address=$row['home_address'];
         $primery_tel_no=$row['phone'];
         $email=$row['email'];
        $dob_day=$row['dob_day'];
       $dob_month=$row['dob_month'];
       $dob_year=$row['dob_year'];
         $first_name=$row['first_name'];
         $last_name=$row['last_name'];
         $gender=$row['gender'];
         $city=$row['city'];
         $region=$row['region'];
         $postal_code=$row['postal_code'];
         $website=$row['website'];
         $profile_pic=$row['profile_picture'];
         //$video=$row['video'];
         //$cv=$row['cv'];
    } 
     
    }
  }
        else{ echo '<script>alert("Student Data Fetch Fetching Error!'.mysql_error().'");</script>';}
   // }
//}

 // code for fetch data from student school detail table

$school_detail=mysql_query("select * from student_school where userid='{$_SESSION['studentuserid']}';");
   if ($school_detail){
 while($row = mysql_fetch_array($school_detail)){
     
      $current_userid=$_SESSION['studentuserid'];
     $school_name=$row['school_name'];
        $school_address=$row['school_address'];
      $school_city=$row['school_city'];
       $school_region=$row['school_region'];
       $school_postalcode=$row['school_postalcode'];
      $school_contact_sr=$row['school_contact_sr'];
        $school_contact_fname=$row['school_contact_fname'];
        $school_contact_lname=$row['school_contact_lname'];
     $school_phone=$row['school_phone'];
      $school_email=$row['school_email'];
       $school_website=$row['school_website'];
     
 }
   }
else{ 
    echo '<script>alert("Student School Detail Query Pass Error All fetch Data !'.mysql_error().'");</script>';
    }

// code for fetch data from student prefrences table 

 $student_prefrences=mysql_query("select * from student_preferences where userid='{$_SESSION['studentuserid']}';");
if ($student_prefrences){
 while($row = mysql_fetch_array($student_prefrences)){
    $all=$row['all_jobs'];
      $banking_finance=$row['banking_finance'];
        $retail=$row['retail'];
   $construction=$row['construction'];
       $legal=$row['legal'];
      $medical=$row['medical'];
      $other=$row['other'];
      $newsletter=$row['newsletter'];
    $vacaince_distance=$row['vacancies_distance'];
 }
}
else{ echo '<script>alert("Student Job Prefrences Query Pass Error!");</script>';}



 $student_achivments=mysql_query("select * from student_achievements where userid='{$_SESSION['studentuserid']}';");
if ($student_achivments){
 while($row = mysql_fetch_array($student_achivments)){
    $achiv1=$row['achievement1'];
	 $achiv2=$row['achievement2'];
	 $achiv3=$row['achievement3'];
	 $achiv4=$row['achievement4'];
	 $intr1=$row['interest1'];
	 $intr2=$row['interest2'];
	 $intr3=$row['interest3'];
	 $intr4=$row['interest4'];
 }
}
else{ echo '<script>alert("Student Achievement & Interest Query Pass Error!");</script>';}


?>