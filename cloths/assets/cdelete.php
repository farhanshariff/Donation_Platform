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
$pg=$_GET['set'];
$sql = "DELETE FROM cloth where c_id='$cat'";

if(mysqli_query($conn, $sql))
{
$message="deleted succesfully";
if($pg==1)
echo "<SCRIPT type='text/javascript'> //not showing me this
        window.location.replace(\"http:a_table_donations_clothes.php\");
    </SCRIPT>";
	else
echo "<SCRIPT type='text/javascript'> //not showing me this
        window.location.replace(\"http:a_table_donations_clothes1.php\");
    </SCRIPT>";
		
}
else
{
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
