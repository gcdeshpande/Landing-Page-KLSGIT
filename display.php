<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>KLS Gogte Institute of Technology</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome Icons -->
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- Font Awesome Icons -->
<link href="css/flaticon-gymnast.css" rel="stylesheet">
    
<!-- Menu Corner Morph -->
<link rel="stylesheet" type="text/css" href="css/cornermorph.css" />

<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">

<!-- Custom Style Sheet -->
<link href="css/style.css" rel="stylesheet">
<!--<link rel="shortcut icon" href="img/favicon.png">-->
</head>
<body>
    
<section id="video">
  <div class="container reveal-bottom-fade">
    
<?php
$servername = "localhost";
$username = "gitedu_admission";
$password = "B_29bombergcd";
$dbname = "gitedu_ugadmissions";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM admissions";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<h4>";
    echo "<table border='1'>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td style='padding:10pt;'> " . $row["name"]. " </td><td style='padding:10pt;'> " . $row["email"]. "</td><td style='padding:10pt;'> " . $row["mobile"]. "</td><td style='padding:10pt;'>". $row["message"]. "</td><td style='padding:10pt;'>". $row["date"]. "</td></tr>";
    }
    echo"</table>";
    echo "</h4>";
} else {
    echo "0 results";
}




mysqli_close($conn);
?>

<div class="center-line"></div>
     <div class="row">
      
    </div>
  </div>
</section>

<!-- =========================
     SECTION8 - FOOTER  
============================== -->
<footer>
  <div class="container reveal-bottom-fade">
    <div class="col-md-12">
      <ul class="footer-social-icon">
        <li><a class="red" href="https://www.facebook.com/KLSGITBelagavi"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a class="blue" href="https://twitter.com/klsgitbelagavi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a class="purple" href="http://www.git.edu"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
        
      </ul>
      <p>© Copyright 2020 KLS Gogte Institute of Technology, Belagavi</p>
    </div>
  </div>
</footer>

<!-- =========================
     SCRIPTS   
============================== --> 
<!-- Jquery --> 
<script src="js/jquery.min.js"></script> 

<!-- Jquery Easing --> 
<script src="js/jquery.easing.min.js"></script> 

<!-- Bootstrap --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- Retina Ready --> 
<script src="js/retina.min.js"></script> 

<!-- Validate JS --> 
<script src="js/jquery.validate.min.js"></script> 

<!-- Ajax Form JS --> 
<script src="js/jquery.form.js"></script> 

<!-- Scroll Reveal --> 
<script src="js/scrollreveal.min.js"></script> 

<!-- Owl Carousel js --> 
<script src="js/owl.carousel.js"></script> 

<!-- Menu Corner Morph --> 
<script src="js/classie.js"></script> 
<script src="js/cornermorph.js"></script> 

<!-- Custom --> 
<script src="js/custom.js"></script>
</body>
</html>