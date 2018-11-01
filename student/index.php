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

  

<title>Law School Registration Page</title>

<link rel="stylesheet" href="mystyles.css">
<meta name="description" content="This is a registration form for guests">
<meta name="keywords" content="RSVP, Register, Event">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){

   $(#loginerror).effect( "shake", {times:4}, 1000 );

});
});
</script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
/* Add styles to the form container */


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}

</style>
</head>

<body style="background-color:black;">




  <div class="container" style="padding:20px 20px;">
  <div class="row">
    
  <div class="col-lg-6" style="background-color:white;">

  <br><br>

<div class="text-center">
  <h1>Welcome To Law School</h1><br></div><hr>




  <form action="login.php" method="post">
    <h1>Login:</h1><hr>

   <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

   <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button><br><br>
  </form>
  <?
  if (isset ($_SESSION["failedlogin"])) {
    echo $_SESSION["failedlogin"];
  }
  $_SESSION['failedlogin'] = '';

  ?>
  <div class="text-center">
  <a href= "http://jaxcode54.zachd29.webfactional.com/college/student/registration.php">Click here to register</a>
</div><br>
</div>
<div class="col-lg-6" style="background-image: url(campus.jpg);background-repeat: no-repeat;background-attachment:fixed;background-size:100% 100%">

  </div>


</div>
</div>
</div>

</body>
</html>