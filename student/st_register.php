<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require('student_register.php');
if ($_POST['submit'] == 'Register')
{ 

//Collect POST values 

$Student_id = $_POST['student_id']; 
$Fname = $_POST['fname']; 
$Lname = $_POST['lname'];
$Mob_no = $_POST['Mob_No'];
$Year_of_study = $_POST['Year_of_study'];
$Dept = $_POST['dept'];
$Pwd = $_POST['password'];


if ($_POST['submit'] == 'Register'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!$Student_id)
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = mysql_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('iiitdmj_hostels'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
$query = "INSERT INTO student (Student_id,Fname,Lname,Mob_No,Dept,Year_of_study,Pwd) VALUES ('$Student_id','$Fname','$Lname','$Mob_no','$Dept','$Year_of_study','$Pwd')"; 
//Execute query 
$results = mysql_query($query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else {
	//include('student_register.php');
echo '<center>Data inserted successfully!</center>'; 
}
} 
} 
 


}
?>
