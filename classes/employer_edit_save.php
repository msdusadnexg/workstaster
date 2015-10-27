<?php
include('connection.php');  
class EmployerEdit{
  public   function employer_profile_edit(){
        $employer_user=$_SESSION['employeruserid'];
        $company_name=$_POST['company_name'];
        $company_address=$_POST['company_address'];
        $company_city=$_POST['company_city'];
        $company_postal_code=$_POST['company_postal_code'];
        $company_website=$_POST['company_website'];
        $company_telephone=$_POST['company_telephone'];
       if(!empty($_FILES['logo']['name'])){
     $logo="../employer/logo/".$_FILES['logo']['name'];
	move_uploaded_file($_FILES['logo']['tmp_name'],$logo);
         $logoname=$_FILES['logo']['name'];
     }
	  else{$logoname=$_POST['old_logo']; }
    
$employer_edit=mysql_query("update employer_registration set company_name='$company_name',company_address='$company_address',company_city='$company_city',company_telephone='$company_telephone',company_website='$company_website',company_postal_code='$company_postal_code',logo='$logoname' where userid='$employer_user';");

if($employer_edit){
//echo '<script>alert("Employer Complete Profile Sucess!");</script>';
	  echo '<script type="text/javascript">window.location ="../employer/employer_profile.php";</script>';
}
else{ echo '<script>alert("Employer profile Cometation Error!'.mysql_error().'");</script>';}
    }

public function create_vacancy(){
    $employer_user=$_SESSION['employeruserid'];
    $vacancy_title=$_POST['vacancy_title'];
    $vacancy_location=$_POST['vacancy_location'];
    $vacancy_description=$_POST['vacancy_description'];
    $number_places=$_POST['number_places'];
    $duration=$_POST['duration'];
    $from_date1=$_POST['from_date1'];
    $from_date2=$_POST['from_date2'];
    $from_date3=$_POST['from_date3'];
    $to_date1=$_POST['to_date1'];
    $to_date2=$_POST['to_date2'];
    $to_date3=$_POST['to_date3'];
    $restriction_gender=$_POST['restriction_gender'];
    $schooling_level=$_POST['schooling_level'];
    $selected_school_name=$_POST['selected_school_name'];
    
    $crt_vacancy=mysql_query("insert into create_vacancy(userid,vacancy_title,vacancy_location,vacancy_description,number_places,duration,from_date1,from_date2,from_date3,to_date1,to_date2,to_date3,restriction_gender,schooling_level,selected_school_name,automatic_date) values ('$employer_user','$vacancy_title','$vacancy_location','$vacancy_description','$number_places','$duration','$from_date1','$from_date2','$from_date3','$to_date1','$to_date2','$to_date3','$restriction_gender','$schooling_level','$selected_school_name',now());");
  
    if($crt_vacancy){
//echo '<script>alert("Vacancy Created Sucessfully!");</script>';
		  echo '<script type="text/javascript">window.location ="../employer/manage_vacancy.php";</script>';
}
else{ echo '<script>alert("Vacancy Created  Error!'.mysql_error().'");</script>';}

}
    
public function employer_create_location(){
      $employer_user=$_SESSION['employeruserid'];
    $company_name=$_POST['company_name'];
    $type_of_location=$_POST['type_of_location'];
    $location_name=$_POST['location_name'];
    $contact_title=$_POST['contact_title'];
    $contact_first_name=$_POST['contact_first_name'];
    $contact_last_name=$_POST['contact_last_name'];
    $contact_email=$_POST['contact_email'];
    $contact_telephone=$_POST['contact_telephone'];
    $location_address=$_POST['location_address'];
    $locatiom_city=$_POST['locatiom_city'];
    $location_postal_code=$_POST['location_postal_code'];
	
	$location=mysql_query("insert into employer_location (userid,company_name,type_of_location,location_name,contact_title,contact_first_name,contact_last_name,conatct_email,contact_telephone,location_address,location_city,location_postal_code,create_time) values('$employer_user','$company_name','$type_of_location','$location_name','$contact_title','$contact_first_name','$contact_last_name','$contact_email','$contact_telephone','$location_address','$locatiom_city','$location_postal_code',now()) ;");

    /*$location=mysql_query("update employer_location set company_name='$company_name',type_of_location='$type_of_location',location_name='$location_name',contact_title='$contact_title',contact_first_name='$contact_first_name',contact_last_name='$contact_last_name',conatct_email='$contact_email',contact_telephone='$contact_telephone',location_address='$location_address',location_city='$locatiom_city',location_postal_code='$location_postal_code' where userid='$employer_user';"); */
    
    
     if($location){
//echo '<script>alert("Employer Location Create Sucessfully!");</script>';
		   echo '<script type="text/javascript">window.location ="../employer/employer_locations.php";</script>';
}
else{ echo '<script>alert("Employer Location Creation  Error!'.mysql_error().'");</script>';}

    
}
	
	public function update_location(){
	
	   $employer_user=$_GET['user'];
		$crt_tm=$_GET['tm'];
    $company_name=$_POST['company_name'];
    $type_of_location=$_POST['type_of_location'];
    $location_name=$_POST['location_name'];
    $contact_title=$_POST['contact_title'];
    $contact_first_name=$_POST['contact_first_name'];
    $contact_last_name=$_POST['contact_last_name'];
    $contact_email=$_POST['contact_email'];
    $contact_telephone=$_POST['contact_telephone'];
    $location_address=$_POST['location_address'];
    $locatiom_city=$_POST['locatiom_city'];
    $location_postal_code=$_POST['location_postal_code'];
	

    $location=mysql_query("update employer_location set company_name='$company_name',type_of_location='$type_of_location',location_name='$location_name',contact_title='$contact_title',contact_first_name='$contact_first_name',contact_last_name='$contact_last_name',conatct_email='$contact_email',contact_telephone='$contact_telephone',location_address='$location_address',location_city='$locatiom_city',location_postal_code='$location_postal_code' where userid='$employer_user' and create_time='$crt_tm';"); 
    
    
     if($location){
//echo '<script>alert("Employer Location Updated Sucessfully!");</script>';
		   echo '<script type="text/javascript">window.location ="../employer/employer_locations.php";</script>';
}
else{ echo '<script>alert("Employer Location Update  Error!'.mysql_error().'");</script>';}

	
	
	}
    
}




if(isset($_POST['employer_edit'])){
$em_edit= new EmployerEdit();
    $em_edit->employer_profile_edit();
}

if(isset($_POST['create_vacancy'])){
$em_edit= new EmployerEdit();
    $em_edit->create_vacancy();

}

if(isset($_POST['employer_location'])){
$em_edit= new EmployerEdit();
    $em_edit->employer_create_location();

}

if(isset($_POST['update_employer_location'])){
$em_edit= new EmployerEdit();
    $em_edit->update_location();

}


?>