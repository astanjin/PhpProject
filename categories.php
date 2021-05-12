<?php
 require 'connec.php';
 session_start();
 if(!$_SESSION['u_name']){
     header('Location: index.php');
 }

?>

<?php include 'process_cat.php' ;

$sql = "SELECT * FROM  categories" ;


$result = mysqli_query($connec,$sql);
$categories = mysqli_fetch_all($result ,MYSQLI_ASSOC);

?>

<?php
 $sq = "SELECT COUNT(C_id) as totol FROM items i inner join categories c where i.c_id = c_id";
 $result = mysqli_query($connec,$sq);
$number = mysqli_fetch_all($result ,MYSQLI_ASSOC);
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

    <title>Categories</title>
  </head>
  <body>
    <!-- nav -->
   <?php  require 'nav.php' ;?>
    <!-- nav -->
    <!--main-->
    <div class = "container-fluid">
    <div class="row">
       <h3>Categories</h3>
        <table class="table table-borderless small">
           <tr>
            <td><a href="add_new_category.php"  class="btn btn-sm btn-primary">Add new category</a></td>
          </tr>
      </table> 
    </div>
    <div class="row">
    <table class="table table-striped">
  <thead>
    <tr>
     <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Number of items</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($categories as $category) : ?>
      <tr  class="table-success">
      <td ><?php echo $category['c_id']; ?></td>
      <th scope="row"><?php echo $category['c_name']; ?></th>
      <td ><?php echo $category['c_description']; ?></td>
      <td >*</td>
      <td><a href="modify_category.php?c_id=<?php echo $category['c_id'];?>"  class="btn btn-sm  btn-dark">Modify</a></td>
    
     </tr>
    <?php endforeach; ?> 
  </tbody>
  
</table>
    
</div>
</div>
    

    


     <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>