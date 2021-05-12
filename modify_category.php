
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

    <title>Modify</title>
  </head>
  <body>
    <!-- nav -->
   <?php  require 'nav.php' ;?>

    <!-- nav -->
    <?php include 'process_cat.php' ;?>
    <!--main-->
    <div class="container-fluid">
     <div class ="row">
         <div class = "col-4 offset-md-4 form-div">  
       <form  action ="" method = "post" >
         <?php
             $id = $_GET['c_id'];
             $sql = "SELECT * FROM categories WHERE c_id = '$id'";
             $result = mysqli_query($connec,$sql);
             
             if(mysqli_num_rows($result) >0){
               while($category =mysqli_fetch_assoc($result)){ ?>
      <h3 class ="text-center">Modify category</h3>

       
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" name = "c_name"  value = "<?php echo $category['c_name']; ?>"required id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name = "c_description" required id="exampleFormControlTextarea1" rows="3">
    <?php echo $category['c_description']; ?>    
    </textarea>
  </div>
 
  <div>
     <button type ="submit" name ="update_category" class="btn btn-primary btn-block"> Update category</button>
  </div>

   <?php }
  }else{
     echo " 0 result";
    }
  ?>
  
</form>

   </div>
</div>
</div>

<?php

if (isset($_POST['update_category'])){
 
  $description =$_POST['c_description'];
  $title = $_POST['c_name'];




  $sql = "UPDATE categories SET  c_description = '$description', c_name = '$title' WHERE c_id = '$id'";
  if (mysqli_query($connec,$sql)){
        
    echo "database works!";
    
  }else{
     echo"error";
  }
    

}
?>

    

    


     <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src= "scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>