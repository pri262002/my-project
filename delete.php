<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $sno=$_GET['deleteid'];
    $sql="delete from `users` where sno=$sno";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted";
        header('location:view.php');
    }else{
        die(mysqli_error($con));
    }
}

?>