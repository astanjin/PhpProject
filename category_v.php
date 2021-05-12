
 
<?php
require 'connec.php';
include 'process_form.php' ;
 $id = $_GET['c_id'];
$sql = "SELECT * FROM  items where c_id= '$id' " ;

$result = mysqli_query($connec,$sql);
$items = mysqli_fetch_all($result ,MYSQLI_ASSOC); 

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

    <title>Welcome</title>
  </head>
  <body>
    <!-- nav -->
   <?php require 'nav_v.php' ?>
    <!-- nav -->
 <!--main-->
 <div class="container-fluid">
      <div class="row mt-3">
          <div class="col-lg-3 col-md-3">
              <div class="list-group small">
              <div class="list-group-item active">Categories</div>
                  <?php foreach($categories as $category) : ?>
                  <a href="category_v.php?c_id=<?php echo $category['c_id']; ?>" class="list-group-item" data-toggle="modal" > <?php echo $category['c_name']; ?></a>
                  <?php endforeach; ?>
              </div>
          </div>
     
     <div class="col-lg-9 col-md-9">
     <h3>Items</h3>
                
     <div class="list-group">
     <?php foreach($items as$item) : ?>
                  <a href="#" class="list-group-item">
                     <div class="row">
                         <div class="col-lg-3 col-md-3">
                             <img  src ="images/<?php echo $item['i_image'] ;?>" width ="100"  height = "150 " alt="" class="img-thumbnail rounded">
                         </div>
                         <div class="col-lg-9 col-md-9">
                             <h3> <?php echo $item['i_title']; ?></h3>
                             <p> <?php echo $item['i_description']; ?> </p>
                             <h5> price: $<?php echo $item['i_price'] ; ?></h5>
                             
                         </div>
                     </div> 
                  </a>
                 
     <?php endforeach; ?>
     </div>
      </div>
      </div>
      </div>
     
    


     <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>