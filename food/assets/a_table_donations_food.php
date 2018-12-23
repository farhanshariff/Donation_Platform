<?php

    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 5; URL=$url1");
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

$sql = "SELECT * FROM food where status=1 ORDER BY date DESC";
$result = mysqli_query($conn, $sql);
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
    <link rel="stylesheet" href="assets/css/ensign-form.css">
    <link rel="stylesheet" href="assets/css/ensign-form1.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/SlideshowCarousel-fade-with-animated-captions-and-touch-swipe.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-one-B4.css">
    <link rel="stylesheet" href="assets/css/Team-one-B41.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
    <link rel="stylesheet" href="assets/css/Team.css">
    <link rel="stylesheet" href="assets/css/Team1.css">
</head>

<body style="background-color:#515151;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color:#515151;color:#919aa1;">
       <div class="container-fluid"><a class="navbar-brand" href="../admin_home.html" data-bs-hover-animate="pulse" style="font-family:Aldrich, sans-serif;color:#ffa500;">YELLOW BIT DONORS</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav" style="font-family:Montserrat, sans-serif;">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="../blog/a_table_blogs.php" data-bs-hover-animate="pulse" style="font-family:Montserrat, sans-serif;color:#ffa500;">BLOGS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../contact/a_table_contact.php" data-bs-hover-animate="pulse" style="color:#ffa500;">MESSAGES</a></li>
                    
					<li class="nav-item" role="presentation"><a class="nav-link" href="../sub_donations_page.html" data-bs-hover-animate="pulse" style="color:#ffa500;">donations</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <h1 style="font-family:Montserrat, sans-serif;color:#ffa500;">FOOD DONATION</h1>
	<h5 style="font-family:Montserrat, sans-serif;color:#ffa500;">NEW DONATIONS</h5>
    <div id="div1"><button class="btn btn-primary" type="button" data-bs-hover-animate="pulse" style="font-family:Montserrat, sans-serif;" onclick="location.href='http:a_table_donations_food1.php'">VIEW OLD DONATIONS</button></div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr style="background-color:#ffa500;">
                    <th style="color:rgb(0,0,0);">NAME</th>
                    <th style="color:rgb(0,0,0);">ADDRESS</th>
                    <th style="color:rgb(0,0,0);">DATE</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
			if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$f_id=$row["f_id"]; $name=$row["name"]; $address=$row["address"];$date=$row["date"];
     echo "<tr style='font-family:Montserrat, sans-serif;'>";
    echo "<td>" . $name ."</td>";
    echo "<td>" . $address . "</td>";
    echo "<td>" . $date . "</td>";
	echo "<td><button class='btn btn-primary' type='button' data-bs-hover-animate='pulse' onclick=\"window.open('http:fdonation_view.php?link=$f_id','_blank')\">view</button></td>";
    echo " <td><button class='btn btn-primary' type='button' data-bs-hover-animate='pulse' onclick=\"location.href='http:fdelete.php?link=$f_id&set=1'\">delete</button></td>";
	echo "</tr>";
    }
} else {
    echo "No New Donations";
}
                
                    
                   
                ?>
            </tbody>
        </table>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/SlideshowCarousel-fade-with-animated-captions-and-touch-swipe.js"></script>
    <script src="assets/js/SlideshowCarousel-fade-with-animated-captions-and-touch-swipe1.js"></script>
</body>

</html>