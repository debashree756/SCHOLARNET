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

    

    <section class="page-section cta">
      <div class="container">
        <div class="cta-inner text-center rounded">
        <div class="row">
          <div class="col-xl-9 mx-auto">

            <center>
              <h5 class="section-heading mb-5">
                


<?php
require_once("connection.php");
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * from users where username='$username' AND password='$password';";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)<1){


    echo "Improper Username Password combination";
    echo "<br><br><a href='store.html'>go back login again?</a>";
}
else if(mysqli_num_rows($result)>1){
    echo "Error in database";
}
else{
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $role=$row['role'];


echo "<br>";



    echo "<body bgcolor ='Peru'><center><h1> Login successful !!! </h1></center>";
    echo "<center>Hii ".$name."<br> </center>";
    echo "<center> You have opted for the role of a ".$role,"<br></center>";
    
    if($role=='student'){
echo " <center><a href='index1.html'><h5>Go to application form?</h5></a>"; 


echo "<br><center> OR </center> <br>";
echo " <center><a href='index2.html'><h5>view your application status?</h5></a></center>";

echo "<br><center> OR </center> <br>";
echo " <center><a href='store.html'><h5>Go back?</h5></a></center>";

}
else{
echo " <center><a href='studentRegisterDetails.html'><h5>view students details</h5></a>"; 
}





   

     echo "</center>"; 
           echo " </div>";
          echo "</div>";
          echo"        </div>";
      echo"</div>";
    echo"</section>";

  
echo "</body>";
}
?>

 </h5>


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



