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

<body style="background-image: url(emoji.jpg);">
<div class="container" style="background-color:white;opacity:.75;padding-top:300px;padding-bottom:300px;">
         <div class="row">
         <div class="col-lg-2">
         </div>
         <div class= "text-center col-lg-8"><h1>Thank You For Registering!</h1> <h3 style="color:black;"> Check email for login and course registration instructions </h3>


             
         </div>
         <div class="col-lg-2">
         </div>
         </div>
         </div>



<?
$servername = "localhost";
$username = "zachd29";
$password = "carmella1";
$dbname = "jaxcode54";


if(isset($_POST["submit"])) {

if(!empty($_POST["courseid"])) {

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
      
      }
      } else {

         // Image upload script
         $randomnumber = rand();
         $target_dir = "uploads/";
         $target_file = $target_dir. $randomnumber . 
basename($_FILES["fileToUpload"]["name"]);
         $uploadOk = 1;
         $imageFileType = 
strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         // Check if image file is a actual image or fake image
         if(isset($_POST["submit"])) {
         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
         if($check !== false) {
         //echo "File is an image - " . $check["mime"] . ".";
         $uploadOk = 1;
         } else {
         echo "File is not an image.";
         $uploadOk = 0;
         }
         }
         // Check file size
         if ($_FILES["fileToUpload"]["size"] > 500000) {
         echo "Sorry, your file is too large.";
         $uploadOk = 0;
         }
         // Allow certain file formats
         if($imageFileType != "jpg" && $imageFileType != "png" && 
$imageFileType != "jpeg"
         && $imageFileType != "gif" ) {
         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
         $uploadOk = 0;
         }
         // Check if $uploadOk is set to 0 by an error
         if ($uploadOk == 0) {
         echo "Sorry, your file was not uploaded.";
         // if everything is ok, try to upload file
         } else {
         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], 
$target_file)) {
         //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

         } else {
         echo "Sorry, there was an error uploading your file.";
         exit;
         }
         }
         // end of upload script

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

         // Insert new student
         $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, 
address1, address2, city, state, postalcode, gender, avatar)
         
VALUES('{$firstname}','{$lastname}','{$email}','{$phonenumber}','{$address1}','{$address2}','{$city}','{$state}','{$postalcode}','{$_POST['gender']}','{$target_file}')";


         if (mysqli_query($conn, $sql)) {
         $last_id = mysqli_insert_id($conn);
         
         } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }


         foreach($_POST["courseid"] as $courseid) {
         $sql ="INSERT INTO myclasses (studentid, courseid) VALUES 
('{$last_id}','{$courseid}')";
         if (mysqli_query($conn, $sql)) {
                // echo "New record created successfully";
         } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }


         

         foreach($_POST["courseid"] as $courseid) {
         $sql = "SELECT coursename FROM courses WHERE courseid='$courseid' ";
         $result = mysqli_query($conn, $sql);
         
         if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
        
         }
         } else {
         echo "0 results";
         }
         }
         }

         mysqli_close($conn);
}
}
        
         // Send email to admin
         $to = "zachd29@hotmail.com";
         $subject = "You have registred";
         $txt = "Hello World";
         $headers = "From: webmaster@example.com";

         mail($to,$subject,$txt,$headers);

} else {
echo 'Please Select at least one course';
}


?>

<?
echo '</div>
<div>
<div>';
?>
</body>
</html>