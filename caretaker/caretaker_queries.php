<?php
error_reporting(E_ALL ^ E_DEPRECATED); 
if ($_POST['submit'] == 'FIND')
{ 
//Collect POST values 
$student = $_POST['student_id'];
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

$qry = "SELECT Student_id,Fname,Lname,Mob_no,Dept,Year_of_study,Hostel_id,Room_id FROM student WHERE Student_id = '$student'";
 $result=mysql_query($qry);
 //echo 'kuch toh';
 echo "<center><h1>Details of student:</h1>"; 
echo "<table border='1' cellpadding = '10'> 
<tr><th>roll no</th> 
<th>fname</th> 
<th>Lname</th> 
<th>mobile no.</th>
<th>dept</th>
<th>year of study</th>
<th> hostel id</th>
<th> room id</th>
</tr>"; 

while($row = mysql_fetch_array($result)) 
 
{ 
echo "<tr><td>".$row['Student_id']."</td> 
<td>" . $row['Fname']."</td> 
<td>" . $row['Lname'] . "</td>
<td>" . $row['Mob_no'] . "</td>
<td>" . $row['Dept'] . "</td>
<td>" . $row['Year_of_study'] . "</td>
<td>" . $row['Hostel_id'] . "</td>
<td>" . $row['Room_id'] . "</td> 
</tr>"; 
echo "<br/>"; 
} 

}
else if($_POST['submit'] == 'Display')
{

	echo $num;	
$qry = "SELECT Student_id,Fname,Lname,Mob_no,Dept,Year_of_study,Hostel_id,Room_id FROM student WHERE Hostel_id = '$num'";
 $result=mysql_query($qry);

echo "<center><h1>Details of student:</h1>"; 
echo "<table border='1' cellpadding = '10'> 
<tr><th>roll no</th> 
<th>fname</th> 
<th>Lname</th> 
<th>mobile no.</th>
<th>dept</th>
<th>year of study</th>
<th> hostel id</th>
<th> room id</th>
</tr>";
	while($row = mysql_fetch_array($result)) 
{ 
echo "<tr><td>" . $row['Student_id'] . "</td> 
<td>" . $row['Fname']."</td> 
<td>" . $row['Lname'] . "</td>
<td>" . $row['Mob_no'] . "</td>
<td>" . $row['Dept'] . "</td>
<td>" . $row['Year_of_study'] . "</td>
<td>" . $row['Hostel_id'] . "</td>
<td>" . $row['Room_id'] . "</td> 
</tr>"; 
echo "<br/>"; 
} 	
}
if($_POST['submit'] == 'Find')
{ 
	echo 'NO';
}


?>
