<?php require 'connec.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
  </head>
  <body>
  <div class="container_fluid">
       <div class ="row">
       <div class = "col-4 offset-md-4 form-div"> 
        <form action ="" method="post">
        <h3 class ="text-center">Register</h3>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputName4">Name</label>
                <input type="text" class="form-control"  name ="u_name" required id="inputName4">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control"  name ="u_email" required id="inpuEmail4">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control"  name ="u_pass" required id="inputPassword4">
              </div>
            </div>
            <input type="submit" class="btn btn-success btn-sm"  name ="u_reg" value ="Register"  >
            <a href ="index.php"  class="btn btn-info btn-sm">Login</a>
          </form>
       </div>
       </div>
  </div>
  <!--Register-->
  <?php
    if (isset($_POST['u_reg'])){
        $u_name = $_POST['u_name'];
        $u_email = $_POST['u_email'];
        $u_pass = md5($_POST['u_pass']);
    
    $sql = "INSERT INTO users(u_name,u_email,u_pass) VALUES ('$u_name','$u_email','$u_pass')";
    if(mysqli_query($connec,$sql)){
      echo "<script>alert('Registered successfully!');</script>";
    }else{
      echo "Error :" .$sql."<br>". mysqli_error($connec);
    }
  }

  ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>