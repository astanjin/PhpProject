<?php 
require 'connec.php';
include 'process_cat.php' ;
//$id = $_GET['c_id'];



$sql = "SELECT * FROM  categories " ;

$result = mysqli_query($connec,$sql);
$categories = mysqli_fetch_all($result ,MYSQLI_ASSOC);

?>



<nav class="navbar navbar-expand-lg navbar-light bg-light my_nav fixed-top">
        <div class="container">
          <a class="navbar-brand" href="dashboard.php">Welcome</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="items_v.php">Items</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach($categories as $category) : ?>
                  <li><a class="dropdown-item" href="category_v.php?c_id=<?php echo $category['c_id']; ?>"><?php echo $category['c_name']; ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </li>
              
                  
                  
              
            </ul>
            <form  action ="" method = "post" class="d-flex">
                <div class="input-group">
                <a href="search_v.php" class="ml-3 btn btn-sm btn-success">Search</a> 
                </div>
            </form>
            <a href="index.php" class="ml-3 btn btn-sm btn-warning">Log in</a>
          </div>
        </div>
    </nav>

