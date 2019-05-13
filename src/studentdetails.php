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
              <a class="nav-link text-uppercase text-expanded" href="store.html">Logout</a>
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
                <span class="section-heading-lower">Submitted Details</span>
                <span class="section-heading-upper">Are as follows:</span>
                <?php



require_once("connection.php");



$name = $_POST['name'];
$dob = $_POST['dob'];
$type = $_POST['type'];
$adharnumber = $_POST['aadhar'];
$ssc = $_POST['ssc_per'];
$hsc = $_POST['hsc_per'];
$currenteduandyear = $_POST['edu'];
$marksheetnumber =$_POST['mno'];
$familyincome = $_POST['income'];
$incomecertificatenumber = $_POST['incno'];
$approvalstatus = $_POST['no'];



$query = "INSERT into student_details(name, dob, type, adharnumber, ssc, hsc, currenteduandyear,marksheetnumber,familyincome,incomecertificatenumber,approvalstatus) VALUES ('$name','$dob','$type','$adharnumber','$ssc','$hsc','$currenteduandyear','$marksheetnumber','$familyincome','$incomecertificatenumber','$approvalstatus')";


mysqli_query($conn,$query);

$query = "INSERT into system_details(name, dob, type, adharnumber, ssc, hsc, currenteduandyear,marksheetnumber,familyincome,incomecertificatenumber,approvalstatus) VALUES ('$name','$dob','$type','$adharnumber','$ssc','$hsc','$currenteduandyear','$marksheetnumber','$familyincome','$incomecertificatenumber','$approvalstatus')";

		
mysqli_query($conn,$query);



echo "<body bgcolor='Peru'";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




echo"<center> <h5>NAME: </h5> ".$name."</center>";
echo"<center> <h5>DATE OF BIRTH: </h5> ".$dob."</center>";
echo"<center> <h5>TYPE OF SCHOLARSHIP APPLIED FOR: </h5> ".$type."</center>";
echo"<center> <h5>AADHARCARD NUMBER: </h5> ".$adharnumber."</center>";
echo"<center> <h5>SSC PERCENTAGE: </h5> ".$ssc."</center>";
echo"<center> <h5>HSC PERCENTAGE: </h5> ".$hsc."</center>";
echo"<center> <h5>CURRENT EDUCATION and YEAR: </h5> ".$currenteduandyear."</center>";
echo"<center> <h5>MARKSHEETNUMBER: </h5> ".$marksheetnumber."</center>";
echo"<center> <h5>FAMILY ANNUAL INCOME: </h5> ".$familyincome."</center>";
echo"<center> <h5>INCOME CERTIFICATE NUMBER: </h5> ".$incomecertificatenumber."</center>";

echo " <center><h4><br><br>Cool!! Details have been sent to sponsors!!<br> Wait Till the sponsor's approval !!!</h4> </center> ";
echo " <center><a href='index2.html'><h5>view your application status</h5></a></center>";
echo "OR";
echo " <center><a href='index.html'><h6><br>Go back</h6></a></center>";


echo "</body>";


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



