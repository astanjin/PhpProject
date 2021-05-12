<?php
 
 //session_start();
 if(!$_SESSION['u_name']){
     header('Location: index.php');
 }

?>



<nav class="navbar navbar-expand-lg navbar-light bg-light my_nav fixed-top">
        <div class="container">
          <a class="navbar-brand" href="dashboard.php">Welcome <small> <?php echo $_SESSION['u_name']; ?></small></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="show_items.php">Items</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="categories.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="category_mug.php">Mugs</a></li>
                  <li><a class="dropdown-item" href="#">Teapots</a></li>
                  <li><a class="dropdown-item" href="#">Cups</a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="categories.php">List of categories</a></li>
                </ul>
              </li>
              
            </ul>
            <form  action ="" method = "post" class="d-flex">
                <div class="input-group">
                    <input type="text" name="valueToSearch" class="form-control form-control-sm" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-success" name = "search" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <a href="logout.php" class="ml-3 btn btn-sm btn-warning">Log Out</a>
          </div>
        </div>
    </nav>

