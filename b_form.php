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
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'blog_images/'.$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);

$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['date'];

$picn=$fileNameNew;

$sql = " call insertblog('".$title."','".$content."','".$picn."','".$name."','".$date."','".$email."');";






if (mysqli_query($conn, $sql)) {
    $message = 'Submitted sucessfully.';
	


    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"http:blog.html\",'_blank');
    </SCRIPT>";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);
?>
