<?php
include 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curdoperation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="containe">
        <button class="bts btn-primary my-5"><a href="users.php"
        class="text-light">ADD USER</button>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">gender</th>
      <th scope="col">language</th>

      

      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `users`";
    $result=mysqli_query($con,$sql);
    if($result){
     while($row=mysqli_fetch_assoc($result)){
        $sno=$row['sno'];
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $gender=$row["gender"];
        $language=$row["language"];
        
  
        echo '<th scope="row">'.$sno.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$gender.'</td>
        <td>'.$language.'</td>
        <td><button class="bts btn-primary"><a href="update.php?updateid='.$sno.'"class="text-light">update</a></button>
        <button class="bts btn-danger"><a href="delete.php?deleteid='.$sno.'"class="text-light">delete</a></button>
        </td>
      </tr>
      <tr>';
     }
    }
    ?>
    
  </tbody>
</table>
        
    </div>
</body>
</html>