<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
echo 'jaiho';
 
 /*Connect to mysql server*/ 
$link = mysql_connect('localhost', 'root', '');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error());
} 

/*Select database*/ 
$db = mysql_select_db('iiitdmj_hostels'); 
if(!$db)
{
 die("Unable to select database"); 
}

$student = $_SESSION['USER_ID'];
echo $student;
 /*Create query*/ 
$qry = 'SELECT Student_id FROM student'; 

/*Execute query*/ 
$result = mysql_query($qry);
echo '<center><h1>The Customer Details are - </h1></center>';

 /*Draw the table for Players*/ 
echo '<center><table border="1"> 

<th> customer_name </th> ';
/*Show the rows in the fetched result set one by one*/ 
while($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 
<td>'.$row['Student_id'].'</td>
 
</tr>'; 
}

echo '</table></center>';
} 
else{ 
header('location:student-login-form.php'); 
exit(); 
} 
?>	
