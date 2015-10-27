<?php include('connection.php');

class StudentCvDetails{

public function cv_personal_detail(){

 $current_userid= $_SESSION['studentuserid'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone_code=$_POST['country_code'];
$phone_number=$_POST['phone_number'];
$email=$_POST['email'];
$website=$_POST['website'];
$cv=$_POST['cv'];

  $cv_personal=mysql_query("update student_cv set first_name='$first_name',
  last_name='$last_name',phone_code='$phone_code',phone_number='$phone_number',email='$email',website='$website',cv='$cv' where userid='$current_userid' ;");  
    
     if($cv_personal){
          //echo '<script>alert("Student CV Personal Detail Updated Sucessfully!");</script>';
		 echo '<script type="text/javascript">window.location ="../student/student_cv.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student  CV Personal Detail Updatation !'.mysql_error().'");</script>';
        }     
}
   
public function cv_education_detail(){
$current_userid= $_SESSION['studentuserid'];
    $school_name=$_POST['school_name'];
    $school_address=$_POST['school_address'];
    $school_city=$_POST['school_city'];
    $school_region=$_POST['school_region'];
    $school_postalcode=$_POST['school_postalcode'];
    $gcsc_school_start_month=$_POST['gcsc_school_start_month'];
    $gcsc_school_start_year=$_POST['gcsc_school_start_year'];
    $currently_studying=$_POST['currently_studying'];
    //on select condition depens data come or not
     $subject1=$_POST['subject1'];
    $subject2=$_POST['subject2'];
    $subject3=$_POST['subject3'];
    $subject4=$_POST['subject4'];
    $subject5=$_POST['subject5'];
    $subject6=$_POST['subject6'];
    $subject7=$_POST['subject7'];
    $subject8=$_POST['subject8'];
    $subject9=$_POST['subject9'];
    $subject10=$_POST['subject10'];
    $subject11=$_POST['subject11'];
    $expected_grade1=$_POST['expected_grade1'];
    $expected_grade2=$_POST['expected_grade2'];
     $expected_grade3=$_POST['expected_grade3'];
    $expected_grade4=$_POST['expected_grade4'];
    $expected_grade5=$_POST['expected_grade5'];
    $expected_grade6=$_POST['expected_grade6'];
    $expected_grade7=$_POST['expected_grade7'];
    $expected_grade8=$_POST['expected_grade8'];
    $expected_grade9=$_POST['expected_grade9'];
    $expected_grade10=$_POST['expected_grade10'];
    $expected_grade11=$_POST['expected_grade11'];
    
    if($currently_studying='1'){
    $gscse_summary=$_POST['gcse_summary'];
        
         $education=mysql_query("update student_cv set school_name='$school_name',school_address='$school_address',school_city='$school_city',school_region='$school_region',school_postalcode='$school_postalcode',gcsc_school_start_month='$gcsc_school_start_month',gcsc_school_start_year='$gcsc_school_start_year',currently_studying='$currently_studying',gcse_summary='$gscse_summary',subject1='$subject1',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5',subject6='$subject6',subject7='$subject7',subject8='$subject8',subject9='$subject9',subject10='$subject10',subject11='$subject11',expected_grade1='$expected_grade1',expected_grade2='$expected_grade2',expected_grade3='$expected_grade3',expected_grade4='$expected_grade4',expected_grade5='$expected_grade5',expected_grade6='$expected_grade6',expected_grade7='$expected_grade7',expected_grade8='$expected_grade8',expected_grade9='$expected_grade9',expected_grade10='$expected_grade10',expected_grade11='$expected_grade11'  where userid='$current_userid';");           
    }
    
    
    if($currently_studying='2'){
$alevels_summary=$_POST['alevels_summary'];
    $alevel_subject1=$_POST['alevel_subject1'];
    $alevel_subject2=$_POST['alevel_subject2'];
    $alevel_subject3=$_POST['alevel_subject3'];
    $alevel_subject4=$_POST['alevel_subject4'];
    $alevel_subject5=$_POST['alevel_subject5'];
    $alevel_expected_grade1=$_POST['alevel_expected_grade1'];
    $alevel_expected_grade2=$_POST['alevel_expected_grade2'];
    $alevel_expected_grade3=$_POST['alevel_expected_grade3'];
    $alevel_expected_grade4=$_POST['alevel_expected_grade4'];
    $alevel_expected_grade5=$_POST['alevel_expected_grade5'];
      $select_school_name=$_POST['select_school_same'];
        
        
       if($select_school_name='1'){
        
        $education=mysql_query("update student_cv set school_name='$school_name',school_address='$school_address',school_city='$school_city',school_region='$school_region',school_postalcode='$school_postalcode',gcsc_school_start_month='$gcsc_school_start_month',gcsc_school_start_year='$gcsc_school_start_year',currently_studying='$currently_studying',gcse_summary='$gscse_summary',subject1='$subject1',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5',subject6='$subject6',subject7='$subject7',subject8='$subject8',subject9='$subject9',subject10='$subject10',subject11='$subject11',expected_grade1='$expected_grade1',expected_grade2='$expected_grade2',expected_grade3='$expected_grade3',expected_grade4='$expected_grade4',expected_grade5='$expected_grade5',expected_grade6='$expected_grade6',expected_grade7='$expected_grade7',expected_grade8='$expected_grade8',expected_grade9='$expected_grade9',expected_grade10='$expected_grade10',expected_grade11='$expected_grade11',alevels_summary='$alevels_summary',alevel_subject1='$alevel_subject1',alevel_subject2='$alevel_subject2',alevel_subject3='$alevel_subject3',alevel_subject4='$alevel_subject4',alevel_subject5='$alevel_subject5',alevel_expected_grade1='$alevel_expected_grade1',alevel_expected_grade2='$alevel_expected_grade2',alevel_expected_grade3='$alevel_expected_grade3',alevel_expected_grade4='$alevel_expected_grade4',alevel_expected_grade5='$alevel_expected_grade5',select_school_same='$select_school_name'  where userid='$current_userid';");
        
        }   
        
        
        
          
    if($select_school_name='2'){
    // for school diffrent gcse
     $other_school_name=$_POST['other_school_name'];
    $other_school_address=$_POST['other_school_address'];
    $other_school_city=$_POST['other_school_city'];
    $other_school_region=$_POST['other_school_region'];
    $other_school_postalcode=$_POST['other_school_postalcode'];
    $other_school_start_month=$_POST['other_school_start_month'];
    $other_school_start_year=$_POST['other_school_start_year'];
    $other_school_end_month=$_POST['other_school_end_month'];
    $other_school_end_year=$_POST['other_school_end_year'];
         
        
       $education=mysql_query("update student_cv set school_name='$school_name',school_address='$school_address',school_city='$school_city',school_region='$school_region',school_postalcode='$school_postalcode',gcsc_school_start_month='$gcsc_school_start_month',gcsc_school_start_year='$gcsc_school_start_year',currently_studying='$currently_studying',gcse_summary='$gscse_summary',subject1='$subject1',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5',subject6='$subject6',subject7='$subject7',subject8='$subject8',subject9='$subject9',subject10='$subject10',subject11='$subject11',expected_grade1='$expected_grade1',expected_grade2='$expected_grade2',expected_grade3='$expected_grade3',expected_grade4='$expected_grade4',expected_grade5='$expected_grade5',expected_grade6='$expected_grade6',expected_grade7='$expected_grade7',expected_grade8='$expected_grade8',expected_grade9='$expected_grade9',expected_grade10='$expected_grade10',expected_grade11='$expected_grade11',alevels_summary='$alevels_summary',alevel_subject1='$alevel_subject1',alevel_subject2='$alevel_subject2',alevel_subject3='$alevel_subject3',alevel_subject4='$alevel_subject4',alevel_subject5='$alevel_subject5',alevel_expected_grade1='$alevel_expected_grade1',alevel_expected_grade2='$alevel_expected_grade2',alevel_expected_grade3='$alevel_expected_grade3',alevel_expected_grade4='$alevel_expected_grade4',alevel_expected_grade5='$alevel_expected_grade5',select_school_same='$select_school_name',other_school_name='$other_school_name',other_school_address='$other_school_address',other_school_city='$other_school_city',other_school_region='$other_school_region',other_school_postalcode='$other_school_postalcode',other_school_start_month='$other_school_start_month',other_school_start_year='$other_school_start_year',other_school_end_month='$other_school_end_month',other_school_end_year='$other_school_end_year'  where userid='$current_userid';");   
            
    } 
        
       
              
        
    }
    
    if($education){
         // echo '<script>alert("Student Education Updated Sucessfully!");</script>';
		 echo '<script type="text/javascript">window.location ="../student/student_cv.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student Education Updated Updatation !'.mysql_error().'");</script>';
        }   
    
    
}
  public function upload_media(){
      
  $current_userid= $_SESSION['studentuserid'];
       $video="../student/student_docs/video/".$_FILES['video']['name'];
	move_uploaded_file($_FILES['video']['tmp_name'],$video);
         $videoname=$_FILES['video']['name'];
     
      $media=mysql_query("update student_cv set video='$videoname' where userid='$current_userid';");
  
  if($media){
        //  echo '<script>alert("Student Media File Uploaded Sucessfully!");</script>';
	   echo '<script type="text/javascript">window.location ="../student/student_cv.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student  Media File Updatation !'.mysql_error().'");</script>';
        }     
  
  }
	
	public function  Achivements_intrest(){
	
	 $current_userid= $_SESSION['studentuserid'];
       $achiv1=$_POST['Achievement1'];
		$achiv2=$_POST['Achievement2'];
		$achiv3=$_POST['Achievement3'];
		$achiv4=$_POST['Achievement4'];
		$int1=$_POST['Interest1'];
		$int2=$_POST['Interest2'];
		$int3=$_POST['Interest3'];
		$int4=$_POST['Interest4'];
		
      $achiv=mysql_query("update student_achievements set achievement1='$achiv1',achievement2='$achiv2',achievement3='$achiv3',achievement4='$achiv4',interest1='$int1',interest2='$int2',interest3='$int3',interest4='$int4' where userid='$current_userid';");
  
  if($achiv){
         // echo '<script>alert("Student Achievement & Interest Sucessfully!");</script>';
	   echo '<script type="text/javascript">window.location ="../student/student_cv.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student Achievement & Interest Updatation !'.mysql_error().'");</script>';
        } 
	
	}
    
    
}





if(isset($_POST['cv_personal_details'])){
$cvupdate=new StudentCvDetails();
$cvupdate->cv_personal_detail();
}

if(isset($_POST['cv_education_detail'])){
$cvupdate=new StudentCvDetails();
$cvupdate->cv_education_detail();
}

if(isset($_POST['video_upload'])){
$cvupdate=new StudentCvDetails();
$cvupdate->upload_media();
}

if(isset($_POST['achive_intrest'])){
$cvupdate=new StudentCvDetails();
$cvupdate->Achivements_intrest();
}


    ?>