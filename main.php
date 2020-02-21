<?php 
session_start(); 
session_unset(); 
session_destroy(); 
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
//  background-image: url("images/logo1.jpg");
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
  <img src="images/logo2.jpg" width="80" height="80">
  <h2> PDPM IIITDMJ Hostel Management System</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="student/student_register.php"> <img src="images/student.svg" width ="30" height="30"> Student Register</a></li>
      <br>
      <li><a href="student/student-login-form.php"> <img src="images/student.svg" width ="30" height="30"> Student Login</a></li>
      <br>
      <li><a href="caretaker/caretaker_login.php"> <img src="images/caretaker.svg" width ="30" height="30"> Caretaker Login</a></li>
      <br>
      <li><a href="warden/login-form-warden.php"> <img src="images/warden.svg" width ="30" height="30">Warden Login</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>IIITDMJ Hostel's </h1>
    <p> IIITDMJ has 3 hostels. <p>
    <ul>
    <li>Hall 1</li>
    <li>Hall 3</li>
    <li>Hall 4</li>
    </ul>
    
    <p> All the hostels have a warden each. <p>
    <p> Each warden appoints one caretaker to their hostel. <p>
  </article>
</section>

<footer>
  <p>©Ribhu Ratnam & Mazhar Ali Baig</p>
</footer>

</body>
</html>

