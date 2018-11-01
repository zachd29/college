<?
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

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
  body {
  color: black;
    }
  </style>

</head>
<body style="background-image: url(lawschool.jpg);background-repeat: repeat;background-attachment:fixed;">
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
   
    <li class="nav-item">
      <a class="nav-link" href="#">Registration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Course Registration</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Billing</a>
    </li>
        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>
  <br><br>
  
  <div class="container" style="background-color:white;opacity:.97;">
  <div class="row">
  <div class="col-md-12">
  

 <br><br>


<div class="text-center"><h1>Law School Class Registration</h1><br></div>
<div>
  
  <h3 align="center" style="border:3px lightgray solid;background-color:#f1f1f1;padding:10px 10px 10px 10px;"> (1) Enter Information</h3>
  
</div>
<br>



<form method="POST" action="process2.php"  enctype="multipart/form-data">
<div class="row">
    <div class="col">
      <input type="text" name="firstname" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" name="lastname" class="form-control" placeholder="Last name">
    </div>
      <div class="col">
      <input type="text" name="email" class="form-control" placeholder="Email"></div>
    </div>
    <br><br>
    <div class="row">
    <div class="col">
      <input type="text" name="phonenumber" class="form-control" placeholder="Phone Number">
    </div>
    <div class="col">
      <input type="text" name="address1" class="form-control" placeholder=" Address 1">
    </div>
      <div class="col">
      <input type="text" name="address2" class="form-control" placeholder=" Address 2"></div>
    </div>
    <br><br>
    <div class="row">
    <div class="col">
      <input type="text" name="city" class="form-control" placeholder="City">
    </div>
    <div class="col">
      <input type="text" name="postalcode" class="form-control" placeholder="Postal Code">
    </div>
      <div class="col">
      <select class="custom-select" name="state" >
       <option selected>Choose a State</option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
</select></div>
    </div>
    <br><br>
    <div class="row">
    <div class="col">
      <input type="radio" style="height: 25px;width: 25px;background-color: #eee;border-radius: 50%:" name="gender" value="male"> Male<br>
  <input type="radio" style="height: 25px;width: 25px;background-color: #eee;border-radius: 50%:" name="gender" value="female"> Female<br>
    </div>
    <div class="col">
     Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
</div>
</div>

<div><br>
  
  <h3 align="center" style="border:3px lightgray solid;background-color:#f1f1f1;padding:10px 10px 10px 10px;"> (2) Choose Your Course</h3>
</div><br>

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
    	?>
        
    	<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" style="height: 18px;width: 18px;background-color: #eee;border-radius: 50%: name="courseid[]" class="form-check-input" value="<?=$row["courseid"]?>">


 
    	<h5 span style="color:black;"><?=$row["coursename"]?></span></h5>
      <strong>Description</strong>:
  <a href="#demo<?=$row["courseid"]?>" data-toggle="collapse" style="color:#000000;" <i class="fas fa-chevron-down" style="color:gray;"></i></a><div id="demo<?=$row["courseid"]?>" class="collapse"><?=$row["description"]?></div><br><strong>Days/Time</strong>:<?=$row["daytime"]?><br><strong>Price</strong>:<?=$row["cost"]?><br><strong>Credits</strong>:<?=$row["credits"]?><br><strong>Instructor</strong>:<?=$row["instructorname"]?><br><br>
          </label>
          </div>
        <hr>
        <?
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<br>
<hr>
<div class="text-center" id="usrform">
  <div class="row">
    <div class="col-lg-4">
    </div>
    <div class="col-lg-4">
   <br><textarea rows="4" cols="50" name="comment" form="usrform"style="border:1.5px solid black;padding:5px 5px 5px 5px;">
Special Needs and Requests.......</textarea>
</div>
<div class="col-lg-4">
  </div>
</div>
</div>
<br>
<div class="text-center">
  <div class="row">
    <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
      <input type="radio"style="position: absolute;top: 0;left: 0;height: 25px;width: 25px;background-color: #eee;border-radius: 50%:">I Agree To The Terms And Conditions!
      </div>
      <div class="col-lg-4">
      </div>
      </div>
      </div><br>
      

      <div class= "text-center">
      <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">

    
<button class="btn btn-primary btn-block" style= "border:1.5px black solid;padding:10px 10px 10px 10px;" type="submit" name="submit" value="submit">Register</button></div>
<div class="col-lg-4">
  </div>
</div>
</hr>
</form>

  
</div><!--/column-->
</div><!--/row-->
</div><!--/container-->






</body>
</html>
