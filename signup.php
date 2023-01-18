<?php
$showalert=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
include 'connect.php';
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$gender=$_POST["gender"];
$language=implode(',',$_POST["language"]);


if($password==$cpassword){
   $sql="INSERT INTO users (`name`, `email`, `password`,`gender`,`language`) VALUES ('$name', '$email', '$password','$gender','$language')";
    $result=mysqli_query($con,$sql);
    if($result){
        $showalert= true;
    }
}
else{
    $showerror="password do not match";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
    if($showalert){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>successfull</strong> signup completed , now you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($showerror){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>error</strong>'.$showerror.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
    <div class="container">
        <h1 class="text-center">Signup Form</h1>
        <form method="post">
            <div class="mb-3">
                <label for="name">name</label>
                <input type="name" class="form-control" id="name" name="name"aria-describedby="emailHelp">
        
              </div>
            <div class="mb-3">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cPassword">Confirm Password</label>
                <input type="cpassword" class="form-control" id="cpassword" name="cpassword">
            </div>
            <div class="mb-3">
                <label>Gender: </label><br>
                <input type="radio"name="gender" value="Male"/>Male
                <input type="radio"name="gender" value="Female"/>Female

            </div>
            <div class="form-group">
            <label>language: </label><br>
            <input type="checkbox"name="language[]" value="Hindi"/>Hindi
            <input type="checkbox"name="language[]" value="English"/>English
            <input type="checkbox"name="language[]" value="Eengali"/>Bengali
</div>
            
            <button type="submit" class="btn btn-primary">Signup</button>
</form>
    </div>

    
  </body>
</html>
</body>
</html>