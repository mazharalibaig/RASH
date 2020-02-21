<?php
error_reporting(E_ALL ^ E_DEPRECATED); 
if ($_POST['submit'] == 'Register')
{ 
//Collect POST values 

$s_id = $_POST['student_id']; 
$hall = $_POST['hall'];
$room = $_POST['room'];
$Pwd = $_POST['password'];

if ($_POST['submit'] == 'Register'){
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
$query = "Select Allocated from room where hostel_id = '$hall' And room_id = '$room'"; 
//Execute query 
$c=0;
$results = mysql_query($query); 
while ($row = mysql_fetch_assoc($results))
{ 
if($row['Allocated']==0)
{
	//echo $hall.$s_id.$Pwd.$room;
	$query2 = "Update student,room Set student.hostel_id = '$hall', student.room_id = '$room',room.Allocated = 1 where student.Student_id='$s_id' AND room.room_id='$room' AND room.hostel_id='$hall'";
	$results = mysql_query($query2);
}
else{
	//echo 'Room not available!';
	$c = 1;
	require('book_room.php');
	echo '<center>Sorry, Room not available!<center>'; 
	//exit(); 
}
//$query3 = " Update room,student Set room.Allocated = 1 where student.Student_id='$s_id'";
//$results = mysql_query($query3);

//Check if query executes successfully 
if($results == FALSE) {
echo mysql_error() . '<br>';
}
else
{
if($c==0){
	require('student.php');
	echo '<center>New room has been alloted!</center>'; 
}
}
//echo 'Room occupied already!'; 
} 
} 
}
}

?>
