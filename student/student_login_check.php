<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
if ($_POST['submit'] == 'Login'){  
//Collect POST values 
$student = $_POST['student_id']; 
$password = $_POST['password']; 
if($student && $password){ 
//Connect to mysql server 
$link = mysql_connect('localhost','root',''); 
//Check link to the mysql server 
if(!$link) { 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('iiitdmj_hostels'); 
if(!$db) { 
die("Unable to select database"); 
} 
//Create query (if you have a Logins table the you can select login id and password from there)
 $qry="SELECT * FROM student WHERE Student_id = '$student' AND Pwd = '$password'";
 
//echo $student.$password;
//Execute query 
//echo 'asdfghjdfghj';
  $result=mysql_query($qry);
	
//echo $result;
//Check whether the query was successful or not 
//mysql_num_rows($result) == 1 
if(mysql_num_rows($result)==1){ 
$count = 1;
}
else{ 
//Login failed 
include('student-login-form.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
//if query was successful it should fetch 1 matching record from the table. 
if( $count == 1){ 
//Login successful set session variables and redirect to main page. 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $student_id; 
header('location:student.php'); 
} 
else{ 
//Login failed 
include('student-login-form.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
} 
else{ 
include('student-login-form.php'); 
echo '<center>Username or Password missing!!</center>'; 
exit(); 
} 
} 
else{ 
header("location: student-login-form.php"); 
exit(); 
}
?>
