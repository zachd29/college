<? session_start();



$servername = "localhost";
$username = "zachd29";
$password = "carmella1";
$dbname = "jaxcode54";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE email ='{$_POST['email']}'";
$result = mysqli_query($conn, $sql);

$submittedpassword = md5($_POST['psw']);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	if ($submittedpassword == $row['password']) {
         $_SESSION["firstname"] = $row['firstname'];
        $_SESSION["lastname"] = $row['lastname'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["phonenumber"] = $row['phonenumber'];
        $_SESSION["address1"] = $row['address1'];
        $_SESSION["address2"] = $row['address2'];
        $_SESSION["city"] = $row['city'];
        $_SESSION["state"] = $row['state'];
        $_SESSION["postalcode"] = $row['postalcode'];
        $_SESSION["gender"] = $row['gender'];
        $_SESSION["avatar"] = $row['avatar'];
        $_SESSION["studentid"] = $row['userid']; 
        header("Location: dashboard.php"); 
} else {
     $_SESSION["failedlogin"] =
      '<div id="loginerror" class="text-center" style="color: red; padding-bottom: 10px;">password and email do not match</div>';
     header("Location: index.php");
}
}
}

mysqli_close($conn);
?>


