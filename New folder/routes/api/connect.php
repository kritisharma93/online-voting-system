 
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "voting";

$connect = mysqli_connect($host, $username, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
    
    mysqli_close($connect);
}
?>