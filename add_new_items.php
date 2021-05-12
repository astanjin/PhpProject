<?php
 require 'connec.php';
 session_start();
 if(!$_SESSION['u_name']){
     header('Location: index.php');
 }

?>
<?php include 'process_form.php' ;?>
<?php include 'process_cat.php' ;
//$id = $_GET['c_id'];



$sql = "SELECT * FROM  categories " ;

$result = mysqli_query($connec,$sql);
$categories = mysqli_fetch_all($result ,MYSQLI_ASSOC);

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
    

    <title>Add</title>
  </head>
  <body>
    <!-- nav -->
   <?php  require 'nav.php' ;?>
    <!-- nav -->
    
 <!--main-->

   <div class="container-fluid">
     <div class ="row">
         <div class = "col-4 offset-md-4 form-div">  
       <form  action ="add_new_items.php" method = "post" enctype = "multipart/form-data">
       <h3 class ="text-center">Create New Item</h3>

       <?php if (!empty ($msg)):?>
        <div class="alert <?php echo $css_class; ?>">
          <?php echo $msg; ?> 
        </div>
       <?php endif; ?>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" name = "i_title" required id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name = "i_description" required id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">category</label>
    <select class="form-control" name ="i_category" id="exampleFormControlSelect1">
    <?php foreach($categories as $category) : ?>
      <option value =" <?php echo $category['c_name']; ?>"> <?php echo $category['c_name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
    <input type="text" class="form-control"  name = "i_price" required id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Category ID</label>
    <input type="text" class="form-control"  name = "c_id" required id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <img src = "images/placeholder.jpg" onclick = "triggerClick()"  id= "itemDisplay" width="150"/>
    <label for="i_image">Image</label>
    <input type="file"  name = "i_image" onchange ="displayImage(this)"  id="i_image" style ="display:none;" >
  </div>
  <div>
     <button type ="submit" name ="save_item" class="btn btn-primary btn-block"> Save item </button>
  </div>
  
</form>

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
    <script src= "scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>