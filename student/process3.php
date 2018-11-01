<!DOCTYPE html>
<html>
<head>
<title>Process Page</title>
<link rel="stylesheet" href="mystyles.css">
<meta name="description" content="This is a registration form for 
guests">
<meta name="keywords" content="RSVP, Register, Event">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script 
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" 
href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" 
crossorigin="anonymous">

</head>





<?

$servername = "localhost";
$username = "zachd29";
$password = "carmella1";
$dbname = "jaxcode54";




if(isset($_POST["submit"])) {


         // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
         // Check connection
         if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
         }

         // check for duplicates
$sql = "SELECT email  FROM users WHERE email = '{$_POST['email']}'";
         $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {

      while($row = mysqli_fetch_assoc($result)) {
         echo '<body style="background-image: url(emoji.jpg);">
<div class="container" style="background-color:white;opacity:.75;padding-top:300px;padding-bottom:300px;">
         <div class="row">
         <div class="col-lg-2">
         </div>
         <div class= "text-center col-lg-8"><h1>You are already resgistered! Check your email for login instructions.</h1> 


             
         </div>
         <div class="col-lg-2">
         </div>
         </div>
         </div>';
      
      }
      } else {

include 'imageupload.php';

         // Sanitize incoming $_POST variables
         $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
         $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
         $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
         $phonenumber = filter_var($_POST['phonenumber'], 
FILTER_SANITIZE_STRING);
         $address1 = filter_var($_POST['address1'], FILTER_SANITIZE_STRING);
         $address2 = filter_var($_POST['address2'], FILTER_SANITIZE_STRING);
         $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
         $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
         $postalcode = filter_var($_POST['postalcode'], 
FILTER_SANITIZE_STRING);
         $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
         $avatar = filter_var($_POST['avatar'], FILTER_SANITIZE_STRING);

         $newpassword = rand();
         $encryptedpassword = md5($newpassword);


         // Insert new student



$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, 
address1, address2, city, state, postalcode, gender, avatar, password)
   

VALUES('{$firstname}','{$lastname}','{$email}','{$phonenumber}','{$address1}','{$address2}','{$city}','{$state}','{$postalcode}','{$_POST['gender']}','{$target_file}','{$encryptedpassword}')";


         if (mysqli_query($conn, $sql)) {
         $last_id = mysqli_insert_id($conn);

 $to = "$email";
         $subject = "You have registred";
         $message = " <html>
<head>
 <title>HTML email</title>
 </head>
 <body>
 <p>Login to your account at: <a href='http://jaxcode54.zachd29.webfactional.com/college/student'>LawSchool</a></p>
 <p>Your username is your email address and your password is $newpassword
 <p>Click here to sign up for classes: <a href= 'http://jaxcode54.zachd29.webfactional.com/college/student/courseregistration.php'>Here</a> to register for classes</p>
 
 </body>
 </html>";

         $headers = "From: webmaster@example.com";
         $headers = "MIME-Version: 1.0" . "\r\n";
         $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
         mail($to,$subject,$message,$headers);






         echo '<body style="background-image: url(emoji.jpg);">
<div class="container" style="background-color:white;opacity:.75;padding-top:300px;padding-bottom:300px;">
         <div class="row">
         <div class="col-lg-2">
         </div>
         <div class= "text-center col-lg-8"><h1>Thank You For Registering!</h1> <h3 style="color:black;"> Check email for login and course registration instructions </h3>


             
         </div>
         <div class="col-lg-2">
         </div>
         </div>
         </div>';
         
         } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         
         }



         

   

         mysqli_close($conn);
}

        
       
        
} 


?>

<?
echo '</div>
<div>
<div>';
?>
</body>
</html>