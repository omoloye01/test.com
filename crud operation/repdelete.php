<?php
include 'connect.php';
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `tb_rep` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Delete suceesfully";
        header('location:managerep.php');
    }else{
        die(mysqli_error($con));
    }
 }
?>