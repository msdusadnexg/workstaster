<?php
include('connection.php');
$first=$_REQUEST["first"];
$result=mysql_query("SELECT * FROM login WHERE userid='$first';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
    if($row = mysql_fetch_array($result)){ 
		
		
		}
	  echo "Userid Already Exists ";
	}
	
  }

?>