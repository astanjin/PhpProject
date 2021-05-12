


<?php include 'process_form.php' ;?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add new items</title>
  </head>
  <body>

  <?php  require 'nav.php' ;?>
 <!--main-->

   <div class="container-fluid">
     <div class ="row">
         <div class = "col-4 offset-md-4 form-div">  
       <form  action ="add_new_item.php" method = "post" enctype = "multipart/form-data">
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
      <option value ="cats">Cats</option>
      <option value ="dogs">Dogs</option>
      <option value ="birds">Birds</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
    <input type="text" class="form-control"  name = "i_price" required id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <img src = "images/placeholder.jpg" onclick = "triggerClick()"  id= "itemDisplay" width="100"/>
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
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src= "scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
   
  </body>
</html>