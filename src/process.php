<?php
$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "INS";
$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);
  
  $username = $_POST['username'];


  if (isset($_POST['register'])) {
  	$username = $_POST['username'];
  	

  	$sql_u = "SELECT * FROM users WHERE username='$username'";
  	
  	$res_u = mysqli_query($conn, $sql_u);
  

  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	
  	}
          
         
           exit();
  	
  }
?>