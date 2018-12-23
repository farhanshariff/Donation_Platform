<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donate";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_GET['link']!= null)
$cat=$_GET['link'];

$sql = "SELECT * FROM food where f_id='$cat'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$name=$row["name"]; $address=$row["address"]; $date=$row["date"];
		$email=$row["email"]; $p_dec=$row["p_dec"]; $p_img=$row["p_img"];
	}
} else {
    echo "0 results";
}
session_start();
$user=$_SESSION['email'];
$sql2="select u_id from users where email='$user'";
    $result2=mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
		$uid=$row["u_id"];
	}
}


$sql1="UPDATE food SET status=0,uc='$uid' WHERE f_id='$cat'";
$result1 = mysqli_query($conn, $sql1);

mysqli_close($conn);
?>
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
    <div class="register-photo">
        <div class="form-container">
            <form method="post">
                <h2 class="text-center">DONATIONS</h2>NAME<input class="form-control" type="text" name="name" value="<?php echo"$name"; ?>" readonly>ADDRESS<textarea class="form-control" name="address" readonly><?php echo"$address"; ?></textarea>EMAIL<input class="form-control" type="text" name="email" value="<?php echo"$email"; ?>" readonly>
                DATE<input class="form-control" type="text" name="date" value="<?php echo"$date"; ?>" readonly>DESCRIPTION<textarea class="form-control" name="description" readonly><?php echo"$p_dec"; ?></textarea></form>
					<div style=""><img style="text-align:center;" src="../donate_images/<?php echo"$p_img"; ?>" height="450px" width="387px">
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>