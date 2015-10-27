<form action="../classes/school_profile_db.php" id="add_student" method="post" enctype="multipart/form-data">
	
	<script>
	function restform(){
	document.getElementById("add_student").reset();
		return false;
	}
	
</script>
	<a href="school_profile.php">Home</a><br>
<a href="../classes/logout.php">Logout</a><br>
<table border="2px solid black">
    
     <tr>
                        <td >
                            <h3>Add Student</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>First Name </td><td>
                            <INPUT TYPE="text" NAME="first_name" placeholder="First Name" required>
                        </td>
                        </tr>
     <tr>
                        <td>Last Name </td><td>
                            <INPUT TYPE="text" NAME="last_name" placeholder="Last Name" required>
                        </td>
                        </tr>
    
     <tr>
                        <td>Current Form </td><td>
                            <INPUT TYPE="text" NAME="current_form" placeholder="Current Form" required>
                        </td>
                        </tr>
    <tr><td>Gender</td><td>
        <select name="gender" required>
            <option>Please Select</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        
    </td></tr>
    
      <tr>
                        <td>Email </td><td>
                            <INPUT TYPE="email" NAME="email" placeholder="Email" required>
                        </td>
                        </tr>
    
    
     <tr><td><input  type="submit" name="add_student" value="Add Student & Send Invitation"  style="margin-left:200px;"/>&nbsp;<input type="submit" value="Cancel" onclick="return restform();"></td></tr>
    </table>
</form>