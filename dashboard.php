<?php
 require 'connec.php';
 session_start();
 if(!$_SESSION['u_name']){
     header('Location: index.php');
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_v.css">
    <title>Welcome</title>
  </head>
  <body>
    <!-- nav -->
   <?php  require 'nav.php' ;?>
    <!-- nav -->

    <!-- body content -->
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10" id ="img">
                 <h3 > <small> <?php echo $_SESSION['u_name']; ?> ,as an admin you can change everything from the navbar. </h3>
                <img src="images/austin-distel-goFBjlQiZFU-unsplash.jpg" class="img-fluid rounded mb-3" alt="Something">
             </div>
            </div>
      </div>
   
   
    <!-- footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy text-center">
                        <p><small>Copyright &copy; 2020. All Rights Reserved</small></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
    

    


     <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>