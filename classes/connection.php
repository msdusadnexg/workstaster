<?php
session_start();
class createConnection //create a class for make connection
{
       /*    
   var $host="workstarter.db.5227204.hostedresource.com";
    var $username="workstarter";    // specify the sever details for mysql
    var $password="Welcome123#";
    var $database="workstarter";
    var $myconn;
 */
    var $host="localhost";
    var $username="root";    // specify the sever details for mysql
    var $password="";
    var $database="workstarter";
    var $myconn;


    function connectToDatabase() // create a function for connect database
    {

        $conn= mysql_connect($this->host,$this->username,$this->password);

        if(!$conn)// testing the connection
        {
            die ("Cannot connect to the database");
        }

        else
        {

            $this->myconn = $conn;

           // echo "Connection established";

        }

        return $this->myconn;

    }

    function selectDatabase() // selecting the database.
    {
        mysql_select_db($this->database);  //use php inbuild functions for select database

        if(mysql_error()) // if error occured display the error message
        {

            echo "Cannot find the database ".$this->database;

        }
        // echo "Database selected..";       
    }

    function closeConnection() // close the connection
    {
        mysql_close($this->myconn);

        echo "Connection closed";
    }
    
   

}

 $connec= new createConnection();  
        $connec->connectToDatabase();//for database connectivity
         $connec->selectDatabase(); // foe db selection
?>
