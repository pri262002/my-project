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

    
  </head>
  <body>
  <?php
  include ("connect.php");
@$email =$_POST['email'];
@$pwd =$_POST['password'];
@$gender =$_POST['gender'];
@$language=$_POST['language'];



if(isset($_POST['btn']) && $email && $pwd){
$swl="SELECT * FROM `users` WHERE Email='$email' AND password='$pwd'";
$r=mysqli_query($con,$swl);
$num=mysqli_num_rows($r);
if($num==1){
  $login=true;
   // header("location:view.php?email=". $email);
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['email']=$email;
    header("location:view.php?Email=". $email);
}
else{
    echo '
  <div>Wrong password  </div>
</div>';
}
}
elseif(isset($_POST['btn']) && !$email && !$pwd){
    echo '
  <div>
fill the all field  </div>
</div>';
}
    ?>
    <div class="container">
        <h1 class="text-center">Log in</h1>
        <form method="post">
            <div class="mb-3">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" name="btn" class="btn btn-primary">login</button>
</form>
</div>
  </body>
</html>
</body>
</html>
