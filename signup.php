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

$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$description=$_POST["description"];
$date= date("l jS \of F Y h:i:s A");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO admissions (`name`, `email`, `mobile`, `message`, `date`)
VALUES ('$name','$email','$mobile','$description','$date')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Thanks for signing up! We will contact you in next 24 hours. Meanwhile kindly download the brochure from below link.</h2>";
    echo "<br/><br/>";
    echo "<h3><a href='http://www.git.edu/wp-content/uploads/2019/02/KLS-GIT-Profile.pdf'>College Profile</a></h3>";
    echo "<h3><a href='http://www.git.edu/wp-content/uploads/2020/03/GIT-Brochure-2020-21.pdf'>Institute Brochure</a></h3>";
    echo "<h3><a href='http://www.git.edu/wp-content/uploads/2017/10/News-Letter-Final-Version.pdf'>News Letter</a></h3>";
    echo "<h3><a href='http://www.git.edu/wp-content/uploads/2017/08/BE-Rule-Book.pdf'>B.E. Rule Book</a>";
    echo "<br/><br/>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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