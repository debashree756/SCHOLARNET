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

    <style>


/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}



</style>

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
              <a class="nav-link text-uppercase text-expanded" href="store.html">Logout</a>
            </li>
                      </ul>
        </div>
      </div>
    </nav>

   
    

  				
  					<section class="page-section cta">
      
      	
       
        

          <div class="col-xl-9 mx-auto">
          	
          	
          	 <div class="container">
          	<div class="row">
          	 <div class="cta-inner text-center rounded">
          	 	
			<div class="column">
            <center>
              

              	
		system generated details:

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "INS";
      
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
      if($conn->connect_error)
      {
        die("Connection Failed: ".$conn->connect_error);
      }
      $name = $_POST["name"];
      $sql="SELECT name,dob,type,adharnumber,ssc,hsc,currenteduandyear,marksheetnumber,familyincome,incomecertificatenumber,approvalstatus FROM system_details where name = '$name'";
      
      $result = $conn->query($sql);
      
      //$stuec = $_POST["course"];
      
      //$result = $stmt->execute();
      
      if($result->num_rows > 0)
      {
      	while($row = $result->fetch_assoc())
      	{
        echo "<table border ='2'><tr><th>Name</th><td>".$row["name"]."</td></tr><tr><th>Date Of Birth</th><td>".$row["dob"]."</td></tr><tr><th>Type of scholarship applied for</th><td>".$row["type"]."</td></tr><tr><th>Aadhar card number</th><td>".$row["adharnumber"]."</td></tr><tr><th>Current education and year</th><td>".$row["currenteduandyear"]."</td></tr><tr><th>Marksheet number</th><td>".$row["marksheetnumber"]."</td></tr><tr><th>SSC Marks</th><td>".$row["ssc"]."</td></tr><tr><th>HSC Marks</th><td>".$row["hsc"]."</td></tr><tr><th>FamilyIncome</th><td>".$row["familyincome"]."</td></tr><tr><th>Income certificate number</th><td>".$row["incomecertificatenumber"]."</td></tr>";


        
        
       }
        echo "</table></center>";
      }
      else
      {
        echo "0 number of Result found";
      }

      
      $result->close();
    
      $conn->close();
    ?>



</div>
           
  <div class="column">

                user entered details:

                <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "INS";
      
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
      if($conn->connect_error)
      {
        die("Connection Failed: ".$conn->connect_error);
      }
      $name = $_POST["name"];
      $sql="SELECT name,dob,type,adharnumber,ssc,hsc,currenteduandyear,marksheetnumber,familyincome,incomecertificatenumber,approvalstatus FROM student_details where name = '$name'";
      
      $result = $conn->query($sql);
      
      //$stuec = $_POST["course"];
      
      //$result = $stmt->execute();
      if($result->num_rows > 0)
      {
      	while($row = $result->fetch_assoc())
      	{
        echo "<table border ='2'><tr><th>Name</th><td>".$row["name"]."</td></tr><tr><th>Date Of Birth</th><td>".$row["dob"]."</td></tr><tr><th>Type of scholarship applied for</th><td>".$row["type"]."</td></tr><tr><th>Aadhar card number</th><td>".$row["adharnumber"]."</td></tr><tr><th>Current education and year</th><td>".$row["currenteduandyear"]."</td></tr><tr><th>Marksheet number</th><td>".$row["marksheetnumber"]."</td></tr><tr><th>SSC marks</th><td>".$row["ssc"]."</td></tr><tr><th>HSC marks</th><td>".$row["hsc"]."</td></tr><tr><th>FamilyIncome</th><td>".$row["familyincome"]."</td></tr><tr><th>Income certificate number</th><td>".$row["incomecertificatenumber"]."</td></tr>";


        
        
       }
        echo "</table></center>";
      }
      else
      {
        echo "0 number of Result found";
      }


      
      $result->close();
    
      $conn->close();
    ?>
</div>

</center>


</div>
</div>
</div>
</div>

</section>


<section class="page-section cta">
      <div class="container">
        <div class="cta-inner text-center rounded">
        <div class="row">
          <div class="col-xl-9 mx-auto">

            <center>
              



   


                <form action ="final.php" method="POST">
                  <label>VERIFIED ? :  </label>
  
    <input type="text" name="v" placeholder="yes/no" required autofocus size="10">
        <br>

               <label>APPROVED ? :  </label>
  
    <input type="text" name="a" placeholder="yes/no" required autofocus size="10">
        <br>

             <label>NAME  :  </label>
  
    <input type="text" name="name" size="30" required autofocus size="10">
        <br>
           
        <br><br>
        <input type="submit" name="submit" value="submit">

        <br>
        <a href ="verify_pri.html">go back </a>
      
      
    

</form>
</center> 
            
    
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



	
	
		
	