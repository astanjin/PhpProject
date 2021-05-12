


<?php
include 'process_form.php';
if (isset($_POST['search'])){
  $searchqu = $_POST['toSearch'];
  $query = "SELECT * FROM  items  WHERE i_title LIKE '%$searchqu%' or i_description LIKE'%$searchqu%' ";
  $searchR = filter($query);

}else{
  $query = "SELECT * FROM items";
  $searchR = filter($query);
}
 function filter($query){
  $connec = mysqli_connect ('localhost:3307','root','','demo');
  $fR = mysqli_query($connec,$query);
  return $fR;
 }
?>
<?php include 'process_form.php' ;

$sql = "SELECT * FROM  items" ;

$result = mysqli_query($connec,$sql);
$items = mysqli_fetch_all($result ,MYSQLI_ASSOC);

?>
<?php include 'process_cat.php' ;
//$id = $_GET['c_id'];



$sql = "SELECT * FROM  categories " ;

$result = mysqli_query($connec,$sql);
$categories = mysqli_fetch_all($result ,MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  <title>search</title>
</head>
<body>
  
<?php  require 'nav_v.php' ;?>


            
           
        <!-- nav -->
 <!--main-->
 <div class="container-fluid">
      <div class="row mt-3">
          <div class="col-lg-3 col-md-3">
              <div class="list-group small">
              <div class="list-group-item active">Categories</div>
                  <?php foreach($categories as $category) : ?>
                  <a href="category_mug.php?c_id=<?php echo $category['c_id']; ?>" class="list-group-item" data-toggle="modal" > <?php echo $category['c_name']; ?></a>
                  <?php endforeach; ?>
              </div>
          </div>
     
     <div class="col-lg-9 col-md-9">
     <h3>Items</h3>
                <table class="table table-borderless small">
                    <tr>
                     <td><form  action ="search_v.php" method = "post" class="d-flex" >
                        <div class="input-group">
                        <input type="text" name="toSearch" class="form-control form-control-sm" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <input type = "submit" name ="search" value = "Search" >
                       </div>
                      </form>
                    </td>
                     
                 
                    </tr>
                    </table> 
     <div class="list-group">
     <?php while ($row = mysqli_fetch_array($searchR)) :?>
                  <a href="#" class="list-group-item">
                     <div class="row">
                         <div class="col-lg-3 col-md-3">
                             <img  src ="images/<?php echo $row['i_image'] ;?>" width ="100"  height = "150 " alt="" class="img-thumbnail rounded">
                         </div>
                         <div class="col-lg-9 col-md-9">
                             <h3> <?php echo $row['i_title'] ;?></h3>
                             <h4> <?php echo $row['i_category']; ?></h4>
                             <p> <?php echo $row['i_description']; ?> </p>
                             <h5> price: $<?php echo $row['i_price'] ; ?></h5>
                        </div>
                     </div> 
                  </a>
                 
                  <?php endwhile;?>
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