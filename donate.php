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
				$fileDestination = 'donate_images/'.$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
				

$name = $_POST['name'];
$address = $_POST['address'];
$date = $_POST['date'];
$email = $_POST['email'];
$p_dec = $_POST['p_dec'];
$type= $_POST['type'];
$picn=$fileNameNew;

if($type=="food")
{
	$sql="INSERT INTO food (name,address,date,email,p_dec,p_img)
VALUES ('$name','$address','$date','$email','$p_dec','$picn')";
}
if($type=="clothes")
{
	$sql="INSERT INTO cloth (name,address,date,email,p_dec,p_img)
VALUES ('$name','$address','$date','$email','$p_dec','$picn')";
}
if($type=="furniture")
{
	$sql="INSERT INTO furniture (name,address,date,email,p_dec,p_img)
VALUES ('$name','$address','$date','$email','$p_dec','$picn')";
}
if($type=="home_appliances")
{
	$sql="INSERT INTO homeappliance (name,address,date,email,p_dec,p_img)
VALUES ('$name','$address','$date','$email','$p_dec','$picn')";
}
if($type=="e-gadgets")
{
	$sql="INSERT INTO egadgets (name,address,date,email,p_dec,p_img)
VALUES ('$name','$address','$date','$email','$p_dec','$picn')";
}


//$sql = "INSERT INTO donate (name,address,date,email,type,p_dec,p_img)
//VALUES ('$name','$address','$date','$email','$type','$p_dec','$picn')";


if (mysqli_query($conn, $sql)) {
    $message = 'Submitted sucessfully.';

    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"http:donate.html\");
    </SCRIPT>";


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); 

?>
