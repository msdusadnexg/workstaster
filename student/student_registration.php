<?php
include('../header.php');
session_start();
?>
<head>
	

<script>
	
	$(document).ready(function() {
    $("#day").find("option").eq(0).remove();
});
</script>
<script type="text/javascript" src="../js/validation.js"></script>

<script>
	
	function useridcheck(first){
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("userids").innerHTML=res;
            }
          }
        xmlhttp.open("GET","../classes/idcheck.php?first="+first,true);
        xmlhttp.send();
        }
        </script>
	</head>
<div class="row bgColorOne" style="background-color:#6B8E23;height:auto;" >
				<h1 align="center">Work Taster Student Registration</h1>

<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>

				
				<div class="form-group" style="width:60%;margin-left:20%;">
                
                <form role="form" method="post" action="../classes/registration.php" name="registration_form"  onsubmit="return registration_valid();">
                <div class="col-sm-9" style="position:absolute;">
					<input class="form-control " style="width:25%;" type="text" name="fname" id="fname" onkeydown = "return isNumeric(event.keyCode,this.id);" required placeholder="First Name">
				<b><p id="fnames"></p></b>
									</div>
					 <div class="col-sm-9" style="margin-left:40%;position:relative;">
					<input type="text" name="lname" style="width:50%;" id="lname" class="form-control" placeholder="Last Name" onkeydown = "return isNumeric(event.keyCode,this.id);"required>
						 <b><p id="lnames"></p></b>
									</div>
					<div class="col-sm-9" >
                <br> <input class="form-control " type="text" name="email" id="email" placeholder="Email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" required>
						<?php

if(isset($_SESSION['email_error'])){
	if($_SESSION['email_error']!=''){
	?>
				<div class="alert alert-warning">
  <strong><?php echo $_SESSION['email_error'];?></strong> </div>	
<?php
		$_SESSION['email_error']='';
	}
}
?>			
						</div>
							
					<div class="btn-group btn-group-dropdown" style="margin-left:2%;width:110%;">
		 				<br> <p class="lead" style="display:inline;">Date of Birth</p><br>
<select id="day" name="day" class="btn btn-primary dropdown-toggle" onmousedown="javascript:
          document.getElementById('day').removeChild(fday);"
   required>
<option value="" id="fday" selected>Day</option>
<option value="" style="display:none;"></option>
<option value="1" >1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select> 
				
    <select id="month" name="month" class="btn btn-primary dropdown-toggle" onmousedown="javascript:fmonth=document.getElementById('fmonth');
           (undefined != fmonth) ?
           document.getElementById('month').removeChild(fmonth) :
           true;" required>
<option id="fmonth" value="">Month</option>
<option value="" style="display:none;"></option>
<option >January</option>
<option >February</option>
<option >March</option>
<option >April</option>
<option >May</option>
<option >June</option>
<option >July</option>
<option >August</option>
<option >September</option>
<option >October</option>
<option >November</option>
<option >December</option>
</select>
							
               
<select id="year" name="year" class="btn btn-primary dropdown-toggle" onmousedown="javascript:fyear=document.getElementById('fyear');
           (undefined != fyear) ?
           document.getElementById('year').removeChild(fyear) :
           true;" required>
<option id="fyear" value="">Year</option>
	<option value="" style="display:none;"></option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
    <option value="1908">1908</option>
    <option value="1907">1907</option>
    <option value="1906">1906</option>
    <option value="1905">1905</option>
    <option value="1904">1904</option>
    <option value="1903">1903</option>
    <option value="1902">1902</option>
    <option value="1901">1901</option>
    <option value="1900">1900</option>
    
    
</select>    
                   
          </div>          
               
					<div class="btn-group btn-group-dropdown" style="margin-left:2%;width:110%;">  
						<br><p class="lead" style="display:inline" >Gender</p><br>
                                    <select  name="gender" id="gender" class="btn btn-primary dropdown-toggle" onmousedown="javascript:fgender=document.getElementById('fgender');
           (undefined != fgender) ?
           document.getElementById('gender').removeChild(fgender) :
           true;" required>
										<option id="fgender" value="">Please Select</option>
										<option value="" onchange="display:none;"></option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
						</div>
                               
              <div class="col-sm-9" ><br><input class="form-control" type="text" name="userid" id="userid" placeholder="Create UserId" onkeydown = "return isNumeric(event.keyCode,this.id);" onchange="useridcheck(this.value)" required >
              	<b><p id="userids"></p></b>
				  
              <br>
              <?php

if(isset($_SESSION['userid_error'])){
	if($_SESSION['userid_error']!=''){
	?>
				<div class="alert alert-warning">
  <strong><?php echo $_SESSION['userid_error'];?></strong> </div>	
<?php
		$_SESSION['userid_error']='';
	}
}
?>			  
            </div>
               <div class="col-sm-9" >  <br><p class="lead" style="display:inline"> Choose a password between 8 and 20 characters long </p> <input pattern=".{8,20}" class="form-control" type="password" name="password" id="password" maxlength="20" min="8" placeholder="Password" required onkeydown="return isNumeric(event.keyCode,this.id);"title="Minimum 8 and Maximum 20 Chracters Required" > 
				   <b><p id="passwords"></p></b>
				   </div>
                <div class="col-sm-9" > <br><p class="lead" style="display:inline">  Type your password again </p><input pattern=".{8,20}"  class="form-control" type="password" name="re_password" id="re_password" maxlength="20" min="8" placeholder=" Re-Enter Password" required title="Minimum 8 and Maximum 20 Chracters Required" onkeydown = "return isNumeric(event.keyCode,this.id);">
                	<b><p id="re_passwords"></p></b>
					<div class="alert alert-warning" id="std_passmtch_error" style="display:none;">
  <strong>Re-Enter Password Not Match</strong> </div>	
					
                </div>
              <div class="col-sm-9" > 
					<label class="checkbox">
  <input type="checkbox"  data-toggle="checkbox"   name="trm_cond" id="trm_cond" onchange="student_terms()">
 I have read and agree to Work Taster's Terms & Conditions 
</label>
	<p id="checkboxerror" style="display:none;color:white;">Accept Worktaster term and condition checkbox</p>
</div>
             <!-- <div class="col-sm-9" >  <br> <input data-toggle="checkbox" type="checkbox" name="trm_cond" id="trm_cond" value="unselected">  I have read and agree to Work Taster's Terms & Conditions </div> -->
                  <div class="col-sm-9" >  <br> <label class="checkbox"><input data-toggle="checkbox"  type="checkbox" name="second_trm_cond" id="second_trm_cond" value="unselected">  Yes, send me regular updates about Work Taster</label></div>
                   
                  
                    <div class="col-sm-9" > <br><input class="btn btn-block btn-primary btn-embossed" type="submit" name="student" id="submit" value="Register"><br><br></div>
                </form>
                  
                  </div>  
        </div>

<?php
include('../footer.php');
?>
