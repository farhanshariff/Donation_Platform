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

$sql = "SELECT * FROM blog where status=1";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$b_id=$row["b_id"]; $name=$row["name"]; $title=$row["title"];
  echo "<a href='display_b.php?link=$b_id' target=blank>$name $title</a></br>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>
