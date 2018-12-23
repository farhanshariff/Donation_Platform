<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mentor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
$usn = $_POST['usn'];
$msg_student = $_POST['msg_student'];



$sql = "INSERT INTO contact (usn,msg_student)
VALUES ('$usn','$msg_student')";


if (mysqli_query($conn, $sql)) {
    $message = 'Submitted sucessfully.';

    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"http:home.html\");
    </SCRIPT>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
