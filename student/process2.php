<?
session_start();
include 'sentry.php';

$servername = "localhost";
$username = "zachd29";
$password = "carmella1";
$dbname = "jaxcode54";

foreach ($_POST['courseid'] as $courseid) {
 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "INSERT INTO myclasses (courseid, studentid)
VALUES ('{$courseid}', '{$_SESSION['studentid']}')";

if (mysqli_query($conn, $sql)) {
   header("Location: dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}






?>