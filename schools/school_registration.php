<?php
include('../header.php');
session_start();
?>

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

<!--script  For bootstrap  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<div class="container" style="width:50%;align:center;border:2px solid black;">
	<h2>Work Taster School Application</h2>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>

	<form action="../classes/registration.php" method="post" enctype="multipart/form-data" name="school_reg_form" id="school_reg_form" onsubmit="return school_registration_validitaion();">
		<table class="table table-bordered">
			<tr>
				<h4>School Details</h4>
			</tr>
			<tr>
				<td>
					<input class="form-control input-lg" type="text" name="school_name" id="school_name" placeholder="School Name" onkeydown = "return isNumeric(event.keyCode,this.id);" required>
					<b><p id="school_names"></p></b>
				</td>
			</tr>

			<tr>

				<td>
					<input class="form-control input-lg" type="text" name="address" id="address" style="height:120;width:99%;" rows="8" cols="30" placeholder="Address" onkeydown = "return isNumeric(event.keyCode,this.id);" required>
					
					<b><p id="addresss"></p></b>
				</td>
			</tr>

			<tr>

				<td>
					<input class="form-control input-lg" type="text" name="city" id="city" placeholder="City" onkeydown = "return isNumeric(event.keyCode,this.id);" required>
					
					<b><p id="citys"></p></b>
				</td>
			</tr>

			<tr>

				<td>
					<input class="form-control input-lg" type="text" name="region" id="region" placeholder="Region" onkeydown = "return isNumeric(event.keyCode,this.id);" required>
					
					<b><p id="regions"></p></b>
				</td>
			</tr>

			<tr>

				<td>
					<input class="form-control input-lg" type="text" name="postal_code" id="postal_code" onkeydown = "return isNumeric(event.keyCode,this.id);" placeholder="Postal Code" required>
					
					<b><p id="postal_codes"></p></b>
				</td>
			</tr>
		</table>
		<h4>Contact Details</h4>
		<table class="table table-bordered">

			<tr>
				<td>
					<select name="sir_title" id="sir_title" class="btn btn-primary dropdown-toggle" onmousedown="javascript:pleaseselect=document.getElementById('pleaseselect');
           (undefined != pleaseselect) ?
           document.getElementById('sir_title').removeChild(pleaseselect) :
           true;" required>
						<option value="" id="pleaseselect">Please Select</option>
						<option>Mrs</option>
						<option>Mr</option>
						<option>Miss</option>
						<option>Ms</option>
					</select>
				</td>
				<td>
					<input class="form-control input-lg" type="text" name="f_name" id="f_name" placeholder="First Name" onkeydown = "return isNumeric(event.keyCode,this.id);" required>
					<b><p id="f_names"></p></b>
				</td>
				<td>
					<input class="form-control input-lg" type="text" name="l_name" id="l_name" placeholder="Last Name" onkeydown = "return isNumeric(event.keyCode,this.id);"  required>
					<b><p id="l_names"></p></b>
				</td>
			</tr>
		</table>
		<table class="table table-bordered">
			<tr>

				<td>
					<input class="form-control input-lg" type="text" name="title" id="title" placeholder="Title" onkeydown = "return isNumeric(event.keyCode,this.id);" required>
					<b><p id="titles"></p></b>
				</td>
			</tr>
			<tr>

				<td>
					<input class="form-control input-lg" type="text" name="email" id="email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" placeholder=" Email" required>
					
					<?php

if(isset($_SESSION['sch_email_error'])){
	if($_SESSION['sch_email_error']!=''){
	?>
				<div class="alert alert-warning">
  <strong><?php echo $_SESSION['sch_email_error'];?></strong> </div>	
<?php
		$_SESSION['sch_email_error']='';
	}
}
?>		
				</td>
			</tr>


			<tr>
				<td>
					<select name="sms_link_country" id="sms_link_country" tabindex="0">
						<option value="AF">Afghanistan (+93)</option>
						<option value="AL">Albania (+355)</option>
						<option value="DZ">Algeria (+213)</option>
						<option value="AS">American Samoa (+1)</option>
						<option value="AD">Andorra (+376)</option>
						<option value="AO">Angola (+244)</option>
						<option value="AI">Anguilla (+1)</option>
						<option value="AG">Antigua (+1)</option>
						<option value="AR">Argentina (+54)</option>
						<option value="AM">Armenia (+374)</option>
						<option value="AW">Aruba (+297)</option>
						<option value="AU">Australia (+61)</option>
						<option value="AT">Austria (+43)</option>
						<option value="AZ">Azerbaijan (+994)</option>
						<option value="BH">Bahrain (+973)</option>
						<option value="BD">Bangladesh (+880)</option>
						<option value="BB">Barbados (+1)</option>
						<option value="BY">Belarus (+375)</option>
						<option value="BE">Belgium (+32)</option>
						<option value="BZ">Belize (+501)</option>
						<option value="BJ">Benin (+229)</option>
						<option value="BM">Bermuda (+1)</option>
						<option value="BT">Bhutan (+975)</option>
						<option value="BO">Bolivia (+591)</option>
						<option value="BQ">Bonaire, Sint Eustatius and Saba (+599)</option>
						<option value="BA">Bosnia and Herzegovina (+387)</option>
						<option value="BW">Botswana (+267)</option>
						<option value="BR">Brazil (+55)</option>
						<option value="IO">British Indian Ocean Territory (+246)</option>
						<option value="VG">British Virgin Islands (+1)</option>
						<option value="BN">Brunei (+673)</option>
						<option value="BG">Bulgaria (+359)</option>
						<option value="BF">Burkina Faso (+226)</option>
						<option value="BI">Burundi (+257)</option>
						<option value="KH">Cambodia (+855)</option>
						<option value="CM">Cameroon (+237)</option>
						<option value="CA">Canada (+1)</option>
						<option value="CV">Cape Verde (+238)</option>
						<option value="KY">Cayman Islands (+1)</option>
						<option value="CF">Central African Republic (+236)</option>
						<option value="TD">Chad (+235)</option>
						<option value="CL">Chile (+56)</option>
						<option value="CN">China (+86)</option>
						<option value="CO">Colombia (+57)</option>
						<option value="KM">Comoros (+269)</option>
						<option value="CK">Cook Islands (+682)</option>
						<option value="CR">Costa Rica (+506)</option>
						<option value="CI">Côte d'Ivoire (+225)</option>
						<option value="HR">Croatia (+385)</option>
						<option value="CU">Cuba (+53)</option>
						<option value="CW">Curaçao (+599)</option>
						<option value="CY">Cyprus (+357)</option>
						<option value="CZ">Czech Republic (+420)</option>
						<option value="CD">Democratic Republic of the Congo (+243)</option>
						<option value="DK">Denmark (+45)</option>
						<option value="DJ">Djibouti (+253)</option>
						<option value="DM">Dominica (+1)</option>
						<option value="DO">Dominican Republic (+1)</option>
						<option value="EC">Ecuador (+593)</option>
						<option value="EG">Egypt (+20)</option>
						<option value="SV">El Salvador (+503)</option>
						<option value="GQ">Equatorial Guinea (+240)</option>
						<option value="ER">Eritrea (+291)</option>
						<option value="EE">Estonia (+372)</option>
						<option value="ET">Ethiopia (+251)</option>
						<option value="FK">Falkland Islands (+500)</option>
						<option value="FO">Faroe Islands (+298)</option>
						<option value="FM">Federated States of Micronesia (+691)</option>
						<option value="FJ">Fiji (+679)</option>
						<option value="FI">Finland (+358)</option>
						<option value="FR">France (+33)</option>
						<option value="GF">French Guiana (+594)</option>
						<option value="PF">French Polynesia (+689)</option>
						<option value="GA">Gabon (+241)</option>
						<option value="GE">Georgia (+995)</option>
						<option value="DE">Germany (+49)</option>
						<option value="GH">Ghana (+233)</option>
						<option value="GI">Gibraltar (+350)</option>
						<option value="GR">Greece (+30)</option>
						<option value="GL">Greenland (+299)</option>
						<option value="GD">Grenada (+1)</option>
						<option value="GP">Guadeloupe (+590)</option>
						<option value="GU">Guam (+1)</option>
						<option value="GT">Guatemala (+502)</option>
						<option value="GG">Guernsey (+44)</option>
						<option value="GN">Guinea (+224)</option>
						<option value="GW">Guinea-Bissau (+245)</option>
						<option value="GY">Guyana (+592)</option>
						<option value="HT">Haiti (+509)</option>
						<option value="HN">Honduras (+504)</option>
						<option value="HK">Hong Kong (+852)</option>
						<option value="HU">Hungary (+36)</option>
						<option value="IS">Iceland (+354)</option>
						<option value="IN" >India (+91)</option>
						<option value="ID">Indonesia (+62)</option>
						<option value="IR">Iran (+98)</option>
						<option value="IQ">Iraq (+964)</option>
						<option value="IE">Ireland (+353)</option>
						<option value="IM">Isle of Man (+44)</option>
						<option value="IL">Israel (+972)</option>
						<option value="IT">Italy (+39)</option>
						<option value="JM">Jamaica (+1)</option>
						<option value="JP">Japan (+81)</option>
						<option value="JE">Jersey (+44)</option>
						<option value="JO">Jordan (+962)</option>
						<option value="KZ">Kazakhstan (+7)</option>
						<option value="KE">Kenya (+254)</option>
						<option value="KI">Kiribati (+686)</option>
						<option value="XK">Kosovo (+381)</option>
						<option value="KW">Kuwait (+965)</option>
						<option value="KG">Kyrgyzstan (+996)</option>
						<option value="LA">Laos (+856)</option>
						<option value="LV">Latvia (+371)</option>
						<option value="LB">Lebanon (+961)</option>
						<option value="LS">Lesotho (+266)</option>
						<option value="LR">Liberia (+231)</option>
						<option value="LY">Libya (+218)</option>
						<option value="LI">Liechtenstein (+423)</option>
						<option value="LT">Lithuania (+370)</option>
						<option value="LU">Luxembourg (+352)</option>
						<option value="MO">Macau (+853)</option>
						<option value="MK">Macedonia (+389)</option>
						<option value="MG">Madagascar (+261)</option>
						<option value="MW">Malawi (+265)</option>
						<option value="MY">Malaysia (+60)</option>
						<option value="MV">Maldives (+960)</option>
						<option value="ML">Mali (+223)</option>
						<option value="MT">Malta (+356)</option>
						<option value="MH">Marshall Islands (+692)</option>
						<option value="MQ">Martinique (+596)</option>
						<option value="MR">Mauritania (+222)</option>
						<option value="MU">Mauritius (+230)</option>
						<option value="YT">Mayotte (+262)</option>
						<option value="MX">Mexico (+52)</option>
						<option value="MD">Moldova (+373)</option>
						<option value="MC">Monaco (+377)</option>
						<option value="MN">Mongolia (+976)</option>
						<option value="ME">Montenegro (+382)</option>
						<option value="MS">Montserrat (+1)</option>
						<option value="MA">Morocco (+212)</option>
						<option value="MZ">Mozambique (+258)</option>
						<option value="MM">Myanmar (Burma) (+95)</option>
						<option value="NA">Namibia (+264)</option>
						<option value="NR">Nauru (+674)</option>
						<option value="NP">Nepal (+977)</option>
						<option value="NL">Netherlands (+31)</option>
						<option value="NC">New Caledonia (+687)</option>
						<option value="NZ">New Zealand (+64)</option>
						<option value="NI">Nicaragua (+505)</option>
						<option value="NE">Niger (+227)</option>
						<option value="NG">Nigeria (+234)</option>
						<option value="NU">Niue (+683)</option>
						<option value="NF">Norfolk Island (+672)</option>
						<option value="KP">North Korea (+850)</option>
						<option value="MP">Northern Mariana Islands (+1)</option>
						<option value="NO">Norway (+47)</option>
						<option value="OM">Oman (+968)</option>
						<option value="PK">Pakistan (+92)</option>
						<option value="PW">Palau (+680)</option>
						<option value="PS">Palestine (+970)</option>
						<option value="PA">Panama (+507)</option>
						<option value="PG">Papua New Guinea (+675)</option>
						<option value="PY">Paraguay (+595)</option>
						<option value="PE">Peru (+51)</option>
						<option value="PH">Philippines (+63)</option>
						<option value="PL">Poland (+48)</option>
						<option value="PT">Portugal (+351)</option>
						<option value="PR">Puerto Rico (+1)</option>
						<option value="QA">Qatar (+974)</option>
						<option value="CG">Republic of the Congo (+242)</option>
						<option value="RE">Réunion (+262)</option>
						<option value="RO">Romania (+40)</option>
						<option value="RU">Russia (+7)</option>
						<option value="RW">Rwanda (+250)</option>
						<option value="BL">Saint Barthélemy (+590)</option>
						<option value="SH">Saint Helena (+290)</option>
						<option value="KN">Saint Kitts and Nevis (+1)</option>
						<option value="MF">Saint Martin (+590)</option>
						<option value="PM">Saint Pierre and Miquelon (+508)</option>
						<option value="VC">Saint Vincent and the Grenadines (+1)</option>
						<option value="WS">Samoa (+685)</option>
						<option value="SM">San Marino (+378)</option>
						<option value="ST">São Tomé and Príncipe (+239)</option>
						<option value="SA">Saudi Arabia (+966)</option>
						<option value="SN">Senegal (+221)</option>
						<option value="RS">Serbia (+381)</option>
						<option value="SC">Seychelles (+248)</option>
						<option value="SL">Sierra Leone (+232)</option>
						<option value="SG">Singapore (+65)</option>
						<option value="SX">Sint Maarten (+599)</option>
						<option value="SK">Slovakia (+421)</option>
						<option value="SI">Slovenia (+386)</option>
						<option value="SB">Solomon Islands (+677)</option>
						<option value="SO">Somalia (+252)</option>
						<option value="ZA">South Africa (+27)</option>
						<option value="KR">South Korea (+82)</option>
						<option value="SS">South Sudan (+211)</option>
						<option value="ES">Spain (+34)</option>
						<option value="LK">Sri Lanka (+94)</option>
						<option value="LC">St. Lucia (+1)</option>
						<option value="SD">Sudan (+249)</option>
						<option value="SR">Suriname (+597)</option>
						<option value="SZ">Swaziland (+268)</option>
						<option value="SE">Sweden (+46)</option>
						<option value="CH">Switzerland (+41)</option>
						<option value="SY">Syria (+963)</option>
						<option value="TW">Taiwan (+886)</option>
						<option value="TJ">Tajikistan (+992)</option>
						<option value="TZ">Tanzania (+255)</option>
						<option value="TH">Thailand (+66)</option>
						<option value="BS">The Bahamas (+1)</option>
						<option value="GM">The Gambia (+220)</option>
						<option value="TL">Timor-Leste (+670)</option>
						<option value="TG">Togo (+228)</option>
						<option value="TK">Tokelau (+690)</option>
						<option value="TO">Tonga (+676)</option>
						<option value="TT">Trinidad and Tobago (+1)</option>
						<option value="TN">Tunisia (+216)</option>
						<option value="TR">Turkey (+90)</option>
						<option value="TM">Turkmenistan (+993)</option>
						<option value="TC">Turks and Caicos Islands (+1)</option>
						<option value="TV">Tuvalu (+688)</option>
						<option value="UG">Uganda (+256)</option>
						<option value="UA">Ukraine (+380)</option>
						<option value="AE">United Arab Emirates (+971)</option>
						<option value="GB" selected="1">United Kingdom (+44)</option>
						<option value="US">United States (+1)</option>
						<option value="UY">Uruguay (+598)</option>
						<option value="VI">US Virgin Islands (+1)</option>
						<option value="UZ">Uzbekistan (+998)</option>
						<option value="VU">Vanuatu (+678)</option>
						<option value="VA">Vatican City (+39)</option>
						<option value="VE">Venezuela (+58)</option>
						<option value="VN">Vietnam (+84)</option>
						<option value="WF">Wallis and Futuna (+681)</option>
						<option value="EH">Western Sahara (+212)</option>
						<option value="YE">Yemen (+967)</option>
						<option value="ZM">Zambia (+260)</option>
						<option value="ZW">Zimbabwe (+263)</option>
					</select></td><td>
					<input type="text" class="form-control input-lg" id="telephone" name="telephone" placeholder="Telephone" maxlength="15" onkeypress="return isNumberKey(event)" required>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control input-lg" type="text" name="userid" id="userid" placeholder="Create UserId" onkeydown = "return isNumeric(event.keyCode,this.id);" onchange="useridcheck(this.value)" required>
					
					<b><p id="userids"></p></b>
					<?php

if(isset($_SESSION['sch_userid_error'])){
	if($_SESSION['sch_userid_error']!=''){
	?>
				<div class="alert alert-warning">
  <strong><?php echo $_SESSION['sch_userid_error'];?></strong> </div>	
<?php
		$_SESSION['sch_userid_error']='';
	}
}
?>		
				</td>
			</tr>
			<tr>
				<td>
					<h4> Choose a password between 8 and 20 characters long </h4>

					<input pattern=".{8,20}" class="form-control input-lg" type="password" name="password" id="password" placeholder="Password" onkeydown = "return isNumeric(event.keyCode,this.id);" maxlength="20" minlength="8" required title="Minimum 8 and Maximum 20 Chracters Required">
					
			<b><p id="passwords"></p></b>
				</td>
			</tr>
			<tr>
				<td>
					<h4>  Type your password again </h4>

					<input pattern=".{8,20}" maxlength="20" minlength="8" class="form-control input-lg" type="password" name="rep_password" id="rep_password" placeholder="Password" onkeydown = "return isNumeric(event.keyCode,this.id);" required title="Minimum 8 and Maximum 20 Chracters Required">
			<b><p id="rep_passwords"></p></b>		
					<div class="alert alert-warning" id="school_passmtch_error" style="display:none;">
  <strong>Re-Enter Password Not Match</strong> </div>	
				</td>
			</tr>

			<tr>
				<td>
					<label class="checkbox">
						<input data-toggle="checkbox" type="checkbox" name="checkbox" id="schoolcheckterm" > I have read and agree to Work Taster's Terms & Conditions
					</label>
					<p id="schoolcheckboxerror" style="display:none;color:black;">Accept Worktaster term and condition checkbox</p>
				</td>
			</tr>
			<tr>
				<td>
					<input class="btn btn-block btn-primary btn-embossed" type="submit" name="school" value="Register" />
				</td>
			</tr>
		</table>
	</form>
</div>
<?php
include('../footer.php');
?>