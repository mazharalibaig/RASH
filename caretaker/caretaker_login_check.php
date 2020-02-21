<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
if ($_POST['submit'] == 'Login'){  
//Collect POST values 
$username = $_POST['care_id']; 
$Pwd = $_POST['password']; 
if($username && $Pwd){ 
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
$qry="SELECT * FROM caretaker WHERE Username = '$username' AND Pwd = '$Pwd'";



  $result=mysql_query($qry);
  
if(mysql_num_rows($result)==1){ 
$count = 1;
}
else{ 
//Login failed 
include('caretaker_login.php'); 
echo '<center>Incorrect Username or Password 111!!!<center>'; 
exit(); 
} 
 
if( $count == 1){ 
//Login successful set session variables and redirect to main page. 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $username; 
header('location: caretaker.php'); 
} 
else{ 
//Login failed 
include('caretaker_login.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
} 
else{ 
include('caretaker_login.php'); 
echo '<center>Username or Password missing!!</center>'; 
exit(); 
} 
} 
else{ 
header("location: caretaker_login.php"); 
exit(); 
}
?>
