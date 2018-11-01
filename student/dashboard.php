<?
session_start();
include 'sentry.php';

$servername = "localhost";
$username = "zachd29";
$password = "carmella1";
$dbname = "jaxcode54";

?>




<!DOCTYPE html>
<html>
<head>

<title>Dashboard Page</title>


<link rel="stylesheet" href="mystyles.css">
<meta name="description" content="This is a registration form for guests">
<meta name="keywords" content="RSVP, Register, Event">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body style="background-color:black;">

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
  	  <li class="nav-item">
      <a class="nav-link" href="http://jaxcode54.zachd29.webfactional.com/college/student/dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="http://jaxcode54.zachd29.webfactional.com/college/student/billing.php">Billing</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="http://jaxcode54.zachd29.webfactional.com/college/student/logout.php">Logout</a>
      </li>
        
  </ul>
</nav>
  <br><br>

Welcome, <?=$_SESSION['firstname']?>

<div class="container" style="background-color:white;opacity:.97;">
  <div class="row">
  <div class="col-md-12">
    <br>
    <br>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 align="center" style="border:3px lightgray solid;background-color:#f1f1f1;padding:10px 10px 10px 10px;">Dashboard  </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br><br>
            <div class="container">
            	<div class="row">
            		<div class="col-lg-6">
            <table style="width:100%"class="table table-striped">
    <th class="text-center">Student Info</th>
    <tr>
    <td>Name: <?=$_SESSION["firstname"]?> <?=$_SESSION["lastname"]?> </td>
    </tr>
    <tr>
    <td>Email: <?=$_SESSION["email"]?></td>
    </tr>
    <tr>
    <td>Phone Number: <?=$_SESSION["phonenumber"]?></td></td>
    </tr>
    <tr>
    <td>Address 1: <?=$_SESSION["address1"]?></td></td>
    </tr>
    <tr>
    <td>Address 2: <?=$_SESSION["address2"]?></td></td>
    </tr>
    <tr>
    <td>City: <?=$_SESSION["city"]?></td></td>
    </tr>
    <tr>
    <td>State: <?=$_SESSION["state"]?></td></td>
    </tr>
    <tr>
    <td>Postal Code: <?=$_SESSION["postalcode"]?></td></td>
    </tr>
    <tr>
    <td>Gender: <?=$_SESSION["gender"]?></td></td>
    </tr>
    <tr>
    <td>Avatar: <img src="<?=$_SESSION["avatar"]?>"></td></td>
    </tr>
    
</table>
</div>
    <div class="col-lg-6">
    	<table style="width:100%"class="table table-striped">
    		<th class="text-center">Course Info</th>
    		<?
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  courseid FROM myclasses WHERE studentid = '{$_SESSION["studentid"]}' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        
        ?>
        <tr>
        	<td>
                <?
        $sql2 = "SELECT coursename FROM courses WHERE courseid='{$row['courseid']}'";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['coursename'];
    }
} else {
    echo "0 results";
}

?>
        	</td>
        </tr>	

        <?

    }
} else {
    echo '<tr><td><a class="nav-link" href="http://jaxcode54.zachd29.webfactional.com/college/student/courseregistration.php">Course Registration</a></td></tr>
';
}

mysqli_close($conn);

?>

    		 
    

</table>
</div>
</div>
</div>

</div>
</div>
</div>




</body>
</html>