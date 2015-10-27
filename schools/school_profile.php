
<?php include('../classes/school_reg_fetched.php');
?>
<a href="manage_students.php">Manage Students</a><br>
<a href="add_student.php">Add Student</a><br>
<a href="manage_employers.php">Manage Employers</a><br>
<a href="add_employer.php">Add Employer</a><br>
<a href="view_vacancies.php">View Vacancies</a><br>
<a href="view_all_applications.php">Manage Applications</a><br>
<a href="pending_references.php">Manage References</a><br>
<a href="add_users.php">Add Users</a><br>
<a href="../classes/logout.php">Logout</a><br>

<form action="../classes/school_profile_db.php" method="post" enctype="multipart/form-data">
<table border="2px solid black">
    
     <tr>
                        <td >
                            <h3>School Profile</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>School Name </td><td>
                            <INPUT TYPE="text" NAME="school_name" value="<?php echo $school_name ;?>">
                        </td>
                        </tr>
                        <tr>
                        <td>School Address </td><td>
                        
                            <input type="text" ROWS="8" COLS="25" name="school_address" value="<?php echo $school_address;?>" style="height:110px;width:90%;"> 
                        </td>
                    </tr>
                        <tr>
                          <td>School City</td><td>
                                    <input type="text" name="school_city" value="<?php echo $school_city;?>"> </td>
                            </tr>
                            <tr>
                        <td>School Postal Code </td><td>
                            <input type="text" name="school_postal_code" value="<?php echo $school_postal_code;?>"> </td>
                    </tr>
                        <tr><td>Logo<br><br><img height="140" width="300" src="logo/<?php echo $school_logo;?>"></td>
                            
                        </tr>
                        <tr><td>School Logo <input type="file" name="school_logo" id="school_logo" value="<?php echo $school_logo;?>"></td></tr>
                    <tr>
                        <td>School Website </td><td>
                            <input type="text" name="school_website"  value="<?php echo $school_website;?>">
                        </td>
                    </tr>
                        
                          <tr>
                        <td>School Main Telephone </td>
                              
                           <td> <input type="text" name="school_telephone"  value="<?php echo $school_telephone;?>"> </td></tr>
    <tr><td><input  type="submit" name="school_profile" value="Update Details"  style="margin-left:200px;"/></td></tr>
    </table>
</form>