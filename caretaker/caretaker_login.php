
<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?>

<html> 
<head> 
<title>Login Page</title>

<style>
header {
  background-color: #666;
  padding: 10px;
 
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
<h3 align="center"> - Enter your login Details - </h3> 
<form name="myloginForm" method="post" action="caretaker_login_check.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>User Name </b></td> 
<td><input name="care_id" type="text" id="care_id" /></td> 
</tr> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Password</b></td> 
<td><input name="password" type="password"/></td> 
</tr> 
<tr> 
<td colspan="2" align="center"> 
<input type="submit" name="submit" value="Login" /></td> 
</tr> 
</table> 
</article>
</body> 
</html>
