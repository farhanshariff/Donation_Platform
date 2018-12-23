<?php

$er=" ";
if(isset($_POST['in']))
{
	$email=$_POST["email"];
$pswd=$_POST["password"];

if($email=="admin@ybd.com"&&$pswd=="admin")
{
	header('Location: new/admin_home.html');
}
else
{   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donate";


$email1=$_POST["email"];
$pswd1=$_POST["password"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql="select * from users where email='$email1' AND password='$pswd1'";
 
 $reuslt = mysqli_query($conn,$sql);

$num =mysqli_fetch_array($reuslt);

if($num>0)
{    session_start();
	 $_SESSION['email'] = $email;
	 header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin_home.html");
	}
	else
	{   
		$er="Invalid Username or password";
	}
	   
       }
}

echo <<<LOGIN
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yellow Bit Donors</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/AXY-Contact-Us.css">
    <link rel="stylesheet" href="assets/css/AXY-Contact-Us1.css">
    <link rel="stylesheet" href="assets/css/Blog---Recent-Posts.css">
    <link rel="stylesheet" href="assets/css/Blog---Recent-Posts1.css">
    <link rel="stylesheet" href="assets/css/Button-Outlines---Pretty.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="login-dark" style="background-image:url(&quot;assets/img/146812.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
        <h1 style="font-family:Montserrat, sans-serif;color:#ffa500;">yellow &nbsp;bit donors</h1>
        <form method="post" action="login.php" style="background-color:rgba(255,165,0,0.2);">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="color:#ffa500;"></i></div>
	
			<p style="color: red">$er</p>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" style="background-color:rgba(0,0,0,0.68);font-family:Montserrat, sans-serif;"></div>

			<div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" style="background-color:rgba(0,0,0,0.63);font-family:Montserrat, sans-serif;"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="in" style="background-color:#ffa500;font-family:Montserrat, sans-serif;">Log In</button></div><a href="#" class="forgot" style="font-family:Montserrat, sans-serif;">Forgot your email or password?</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
	<script>
  function preventBack() {
    window.history.forward();
  }
  setTimeout("preventBack()", 0);
  
  window.onunload = function() {
  window.alert("need to logout");
   
  };
</script>
</body>
</html>
LOGIN;
?>