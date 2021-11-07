<?php

$showErr ="false";
$showAlert ="false";

//connecting to a database
 
$server ="localhost";
$username ="root";
$password ="";
$database ="user";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
     echo "Sorry! we failed to connect";
}



$showAlert = false;
$showErr = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"]; 
  
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);
  
    if ($result){
        $showAlert = true;
     
            } 
            else{
                $showErr = "true";
            }
        }
        
   
    
?>


















<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <?php  require'partial/navbar.php';  ?>


<?php

   if ($showAlert){
    echo '<div class="alert alert-success" role="alert">
     Your account has created succesfully!
     </div>';
   }
   if ($showErr) {
    echo '<div class="alert alert-danger" role="alert">
     Invalid Credentials!
     </div>';
   }

?>



  <div class="container">

 <h1 class="text-center">Signup to Our Website</h1>

 <form action="signup.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control" id="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password.</div>

  </div>
 
  <button type="submit" class="btn btn-primary">Signup</button>
</form>


  </div>








    
  </head>
  <body>
    










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>