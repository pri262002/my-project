<?php
include 'connect.php';
$sno=$_GET['updateid'];
$sql="select * from `users` where sno=$sno";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$gender=$row['gender'];
$language=$row['language'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $language=implode(',',$_POST["language"]);
    
    $sql="update `users` set sno=$sno,name='$name',email='$email',password='$password',gender='$gender',language='$language'where sno=$sno";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "updated";
    }
    else{
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <title>crudoperation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method= "POST">
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplete= "off"value=<?php echo $name; ?>>
</div>
<div class="form-group">
    <label>email</label>
    <input type="text" class="form-control"  placeholder="Enter your email"name="email" autocomplete= "off"value=<?php echo $email; ?>>
</div>
<div class="form-group">
    <label>password</label>
    <input type="text" class="form-control"  placeholder="Enter your city"name="password" autocomplete= "off"value=<?php echo $password; ?>>
</div>
<div class="mb-3">
                <label>Gender: </label><br>
                <input type="radio"name="gender" value="Male"/>Male
                <input type="radio"name="gender" value="Female" />Female
            </div>

            <div class="form-group">
            <label>language: </label><br>
            <input type="checkbox"name="language[]" value="Hindi"/>Hindi
            <input type="checkbox"name="language[]" value="English"/>English
            <input type="checkbox"name="language[]" value="Bengali"/>Bengali

    
  <button type="submit" class="btn btn-primary"name='submit'>update</button>
</form>
    </div>
  </body>
</html>