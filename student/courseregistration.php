<?
session_start();

$servername = "localhost";
$username = "zachd29";
$password = "carmella1";
$dbname = "jaxcode54";

?>
<!DOCTYPE html>
<html>
<head>

  

<title>Law School Registraion Page</title>
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

   <div class="container" style="background-color:white;opacity:.97;">
  <div class="row">
  <div class="col-md-12">
  

 <br><br>

 <div><br>
  
  <h3 align="center" style="border:3px lightgray solid;background-color:#f1f1f1;padding:10px 10px 10px 10px;"> (2) Choose Your Course</h3>
</div><br>

<form method="POST" action="process2.php"  enctype="multipart/form-data">

<?

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM courses WHERE status='1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	

        if (mysqli_query($conn, $sql)) {
        $sql2 ="SELECT * FROM myclasses WHERE courseid='{$row['courseid']}' AND studentid='{$_SESSION['studentid']}'";
        $result2 = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($result2) > 0) {
        // output data of each row
        while($row2 = mysqli_fetch_assoc($result2)) {
        
        }
        } else {
          
        ?>
       <div class="form-check">
      <label class="form-check-label">
    <input type="checkbox" style="height: 18px;width: 18px;background-color: #eee;border-radius: 50%" name="courseid[]" class="form-check-input" value="<?=$row["courseid"]?>">
          <h5 span style="color:black;"><?=$row["coursename"]?></span></h5>
      <strong>Description</strong>:
  <a href="#demo<?=$row["courseid"]?>" data-toggle="collapse" style="color:#000000;" <i class="fas fa-chevron-down" style="color:gray;"></i></a><div id="demo<?=$row["courseid"]?>" class="collapse"><?=$row["description"]?></div><br><strong>Days/Time</strong>:<?=$row["daytime"]?><br><strong>Price</strong>:<?=$row["cost"]?><br><strong>Credits</strong>:<?=$row["credits"]?><br><strong>Instructor</strong>:<?=$row["instructorname"]?><br><br>
          </label>
          </div>
        <hr>
    <?
} // while
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
    	


 

        <?
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

<div class= "text-center">
      <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">

    
<button class="btn btn-primary btn-block" style= "border:1.5px black solid;padding:10px 10px 10px 10px;" type="submit" name="submit" value="submit">Register For Classes</button></div>
<div class="col-lg-4">
  </div>
</div>

</form>

</div>
</div>
</div>




</body>
</html>