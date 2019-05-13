<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">An Online Scholarship Management Portal</span>
      <span class="site-heading-lower">Scholarnet</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
            </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.html">Signup</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.html">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <section class="page-section cta">
      <div class="container">
        <div class="cta-inner text-center rounded">
        <div class="row">
          <div class="col-xl-9 mx-auto">

            <center>
              <h4 class="section-heading mb-5">
                



<?php
require_once("connection.php");

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];



  




 $sql="SELECT username FROM users where username = '$username'";
      
      $result = $conn->query($sql);
      
      
      if($result->num_rows > 0)
      {
        echo "Username already exists.";
		echo "<br><a href='products.html'>try again? </a>";

	  }
	  
	  
	  else
	  {
	  $query = "INSERT into users (name,username,password,role) values('$name','$username','$password','$role')";
mysqli_query($conn,$query);

	  




echo "<body bgcolor='Peru'";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo"<center> <h3>Welcome </h3> <h2>".$name."</h2></center>";
echo "<br>";
echo " <center><a href='store.html'><h4>proceed to login</h4></a> OR</center> ";
echo " <center><a href='index.html'><h4>Go back</h4></a></center>";

echo "</body>";

	  }
?>

  </h4>


</center> 
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2019</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--jquery -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!--Bootstrap -->
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->



  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>