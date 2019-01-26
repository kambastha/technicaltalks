<?php
$servername = "meetupdockercompose_database_1";
$username = "root";
$password = "root";
$dbname = "student";
$port = 3306;

echo "<h1>********Database details********</h1><br>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT stud_id, firstname, lastname FROM studentinfo";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	
        echo "\n<br><h5> stud_id: " . $row["stud_id"]. " Name: " . $row["firstname"]. " " . $row["lastname"];
	echo "\n";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
