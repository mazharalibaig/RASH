<?php 
//session_start(); 
//session_unset(); 
//session_destroy();
require('menu.php'); 
?>

<html lang="en"> 
<head> 
<title>Student Register</title> 
<style>
header {
  background-color: #666;
  padding: 10px;
 // text-align: center;
  font-size: 20px;
  color: white;
  width: 100%;
  height: 20%;
}

article {
  float: left;
  padding: 20px;
  width: 100%;
  height: 80%;
  background-color: #f1f1f1;
 
}



</style>
</head> 
<body> 

<header>
  <img src="logo2.jpg" width="80" height="80">
  <h2> PDPM IIITDMJ Hostel Management System</h2>
</header>

<article>
<h3 align="center"> - Enter your Details </h3> 
<form name="myloginForm" method="post" action="changedpass.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Roll No.</b></td> 
<td><input name="student_id" type="text" id="student_id" /></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>Old Password</b></td> 
<td><input name="oldpass" type="password" id="opass" /></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>New Password</b></td> 
<td><input name="newpass" type="password" id ="npass" /></td> 
</tr> 
<tr> 
<td colspan="2" align="center"> 
<input type="submit" name="submit" value="Change" /></td> 
</tr> 
</table> 
</article>

</body> 
</html>
