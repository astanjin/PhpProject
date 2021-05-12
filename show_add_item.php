<?php include 'process_form.php' ;

$sql = "SELECT * FROM  items" ;

$result = mysqli_query($connec,$sql);
$items = mysqli_fetch_all($result ,MYSQLI_ASSOC);

?>
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
     <!-- nav -->
     
    <!-- nav -->

    <!--main-->
    <div class="container-fluid">
      <div class="row mt-3">
          <div class="col-lg-3 col-md-3">
              <div class="list-group small">
                  <div class="list-group-item active">Categories</div>
                  <a href="#" class="list-group-item" data-toggle="modal" >Category1</a>
                  <a href="#" class="list-group-item">Category2</a>
              </div>
          </div>
     
     <div class="col-lg-9 col-md-9">
     <h3>Items</h3>
                <table class="table table-borderless small">
                    <tr>
                     <td><a href="add_new_item.php" id="add" class="btn btn-sm btn-primary">Add new item</a></td>
                     
                 
                    </tr>
                    </table> 
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
                             <table class="table table-borderless small">
                                <tr>
                                 <td><a href="modify_item.php"  class="btn btn-sm btn-warning">Modify</a></td>
                                 <td><a href="#" class="btn btn-sm btn-danger" >Delete</a></td>
                             
                                </tr>
                                </table>
                         </div>
                     </div> 
                  </a>
                 
     <?php endforeach; ?>
     </div>
      </div>
      </div>
      </div>
     
   

   
   
  </body>
</html>

$valueToSearch = $_POST['valueToSearch'];

$sql = "SELECT * FROM  items  WHERE CONCAT ('i_title','i_description','i_category','i_price','i_image')like '%".$valueToSearch."%'" ;

$result = mysqli_query($connec,$sql);
$items = mysqli_fetch_all($result ,MYSQLI_ASSOC);



<?php

$output ="";
  if (isset($_POST['search'])){
    $searchqu = $_POST['search'];
    $searchqu = preg_replace("#[^0-9a-z]#i","",$searchqu);
    $query= mysqli_query($connec,"SELECT * FORM items WHERE i_title LIKE '%$searchqu%' or i_description LIKE '%$searchqu%'") or die("couldnot"); 
  $count = Mysqli_num_rows($query);
  if($count == 0){
    echo "there was no search";
  }else{
    
   while ($items = mysqli_fetch_all($query ,MYSQLI_ASSOC)){
     $tit = $item['i_title'];
     $des = $item['i_description'];
     $output .= '<div>'.$tit.'' . $des .'</div>'; 
   }
  }
  }
?>


<div class = "container-fluid">
    
    <table>
    <tr>
    <th>ti</th>
    <th>des</th>
    <th>cat</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($searchR)) :?>
   <tr>
 
   <td> <?php echo $row['i_title'] ;?></td>
   <td> <?php echo $row['i_description'] ;?></td>
   <td> <?php echo $row['i_category'] ;?></td>
   </tr>
   <?php endwhile;?>
    
    
 
    </table>
     
    </div>