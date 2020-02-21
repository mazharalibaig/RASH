
<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
} 
else{ 
header('location:student-login-form.php'); 
exit(); 
} 
?>

<html lang="en">
<head>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 10px;
 // text-align: center;
  font-size: 20px;
  color: white;
  width: 100%;
  height: 20%;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 75%; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

nav li {
  font-size: 30px;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  height: 75%;
  background-color: #f1f1f1;
 // height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
 
  padding: 10px;
  text-align: center;
  color: white;
  width: 100%;
  height: 5%;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

</style>
</head>
<body>

<header>
  <img src="logo2.jpg" width="80" height="80">
  <h2> PDPM IIITDMJ Hostel Management System</h2>
</header>

<section>
  <nav>
    <ul>
     
     <!-- <li><a href="show_pro.php"> <img src="student.svg" width ="30" height="30"> My Profile</a></li>
      <br> -->
      <li><a href="change_password.php"> <img src="password.svg" width ="30" height="30"> Change Password</a></li>
      <br>
      <li><a href="book_room.php"> <img src="room.svg" width ="30" height="30"> Book Room</a></li>
      <br>
	  <li><a href="change_room.php"> <img src="room.svg" width ="30" height="30"> Change Room</a></li>
      <br>
    </ul>
  </nav>
  
  <article>
    
  </article>
</section>

<footer>
  <p>©Ribhu Ratnam & Mazhar Ali Baig</p>
</footer>

</body>
</html>

