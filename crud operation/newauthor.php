<?php
 include 'connect.php';
 if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];

  $sql="insert into `crud` (name,email) values('$name','$email')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Data inserted successfully";
    header('location:manageauthor.php');
  }else{
    die(mysqli_error($con));
  }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/1.1.0/font-awesome-animation.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Admin page</title>
</head>
<style>
 #showcase{
    background: url('img/bg-img/bg7.jpg')no-repeat center center/cover;
    height: 80vh;
 }
 #showcase .container{
    background: #fff;
    padding: 3rem 1rem;
 }
</style>
<body>
  <section id="navbar">
    <div class="container">
      <div class="navbar-container">
        <img src="./img/my image/Group 9.png" alt="">
        <div class="nav-icon">
          <a href="https://web.facebook.com/"><i class="fa-brands fa-facebook fa-3x" style="color: #0e0aff;"></i></a>
          <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-3x" style="color: #df2020;"></i></a>
          <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter fa-3x" style="color: #00aaff;"></i></a>
         <a href="https://www.tiktok.com/login"><i class="fa-brands fa-tiktok fa-3x" style="color: #1c2a3b;"></i></a>
         <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp fa-3x" style="color: #00ff40;"></i></a>
        </div>
      </div>
    </div>
  </section>
  <section id="semi-nav">
    <div class="contain">
      <div class="semi-nav-container">
    <h2>Admin Dashboard</h2>
        <div class="seminav-link">
          <ul>
            <a href="mananagerecipe.html"><li>Manage Recipes</li></a>
            <a href="#"><li>Manage Author</li></a>
            <a href="#"><li>Manage Category</li></a>
            <a href="#"><li>Contact An author</li></a>
            <a href="#"><li>Contact All Authors</li></a>
          </ul>
        </div>
      </div>
    </div>
  </section>
<section id="showcase">
<div class="container">
<form method="POST">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email">
  </div>
  
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>
</div>
</section>
</body>
</html>