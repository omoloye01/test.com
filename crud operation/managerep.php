<?php
 include 'connect.php';

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
.btn-danger{
  background: #f00;
  border: none;
  padding: .5rem 2rem;
  margin:0 .5rem;
  color: #fff;
  border-radius: 2px;
 }
 h1{
    color: #333;
    text-align: center;
 }
 #showcase{
    background: url('img/bg-img/bg7.jpg')no-repeat center center/cover;
    height: 100vh;
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
          <a href="managerep.php"><li>Manage Recipes</li></a>
            <a href="manageauthor.php"><li>Manage Author</li></a>
            <a href="managecat.php"><li>Manage Category</li></a>
            <a href="#"><li>Contact An author</li></a>
            <a href="#"><li>Contact All Authors</li></a>
          </ul>
        </div>
      </div>
    </div>
  </section>
<section id="showcase">
<div class="container my-5">
    <h1>Manage Recipes</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Opration</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `tb_rep`";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        echo'<tr>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>
        <a href="repupdate.php?updateid='.$id.'"><button class="btn btn-success">Edit</button> </a>
        <a href="repdelete.php?deleteid='.$id.'"><button class=" btn-danger">Delete</button> </a>
     </td>
      </tr>';
       }
    }
    
    ?>
     
    
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
   
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      
    </tr> -->
  </tbody>
</table>
<a href="#"> <button class="btn btn-success my-5">Add Recipes</button></a>
<a href="newrep.php"> <button class="btn btn-success my-5">Add Recipes</button></a>
</div>
</section>
</body>
</html>