<?php
error_reporting(E_ALL ^ E_DEPRECATED); 
if ($_POST['submit'] == 'Change')
{ 
//Collect POST values 

$s_id = $_POST['student_id']; 
$OPwd = $_POST['opass'];
$NPwd = $_POST['npass'];
if ($_POST['submit'] == 'Change'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!$s_id)
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
//$query = "INSERT INTO student (Student_id,Fname,Lname,Mob_No,Dept,Year_of_study,Pwd) VALUES ('$Student_id','$Fname','$Lname','$Mob_no','$Dept','$Year_of_study','$Pwd')"; 
$query = "UPDATE student SET Pwd = '$NPwd' Where student_id='$s_id' AND Pwd = '$OPwd'"; 
//Execute query
$results = mysql_query($query); 
if($results == 1){
//require('student.php');
echo '<center>Password Updated Succesfully</center>';
}
} 
} 
}
?>
