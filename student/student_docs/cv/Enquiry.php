<?
$URL="http://www.exuberantsolutions.com/thanks.htm";

header ("Location: $URL");

?>



<html>

<head>

<title>Welcome To Nex-G Exuberant Solutions : Invitation Enquiry</title>



<script type="text/javascript">var switchTo5x=true;</script>

<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>

<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>





</head>

<body>

<?php

if(isset($_POST['submit'])) {

mysql_connect("localhost","root","");
mysql_select_db("nexg");


	$to = "info@nexg.in";

	$subject = "Enquiry from Training Pages";

	
	$name=$_POST['name'];
	
	$email_field= $_POST['email'];

	$telephone = $_POST['telephone'];

	$country = $_POST['country'];

	$training = $_POST['training'];

	$message = $_POST['message'];
$collage = $_POST['collage'];
$duration = $_POST['duration'];

	$txtUrl = $_POST['txtUrl'];
	$path=$_SERVER['REQUEST_URI'];


$qry=mysql_query("INSERT INTO web_query (name,email,contact,training_name,country,query,url,collage,duration,date) VALUES ('$name','$email_field','$telephone','$training','$country','$message','$txtUrl','$collage','$duration',now());");
	
	if($qry){
	
	echo "<script type='text/javascript'>alert('Your Query Sent Successfully');</script>";
	}
else{
	echo "eroor in data data insertion".mysql_error();
	}
	

	$body = "From: $name_field\n\n E-Mail: $email_field\n\n Telephone: $telephone\n\n Country: $country\n\n Training_Code: $training\n\n Collage: $collage\n\n Duration: $duration\n\n Message: $message\n\n Course URL: $txtUrl\n";

		

	mail($to, $subject, $body);

	

} else {

	echo "Please Fill Again";

}

?>



<script>

var options={ "publisher": "154058a8-0ac0-42f6-ab4c-7b48fd16bf8f", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}};

var st_hover_widget = new sharethis.widgets.hoverbuttons(options);

</script>

    

</body>



</html>
