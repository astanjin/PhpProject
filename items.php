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

    <title>Dashboard Items</title>
  </head>
  <body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light my_nav fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">My Blog</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dash_items.html">Items</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Category one</a></li>
                  <li><a class="dropdown-item" href="#">Category two</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              
            </ul>
            <form class="d-flex">
                <div class="input-group">
                    <input type="search" class="form-control form-control-sm" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-success" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <a href="#" class="ml-3 btn btn-sm btn-warning">Log Out</a>
          </div>
        </div>
    </nav>
    <!-- nav -->
   
    <!--dashbord-->
   
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
                    <a href="#" class="list-group-item">
                       <div class="row">
                           <div class="col-lg-3 col-md-3">
                               <img src="https://source.unsplash.com/random/600x600" alt="" class="img-fluid rounded">
                           </div>
                           <div class="col-lg-9 col-md-9">
                               <h3>Item Title</h3>
                               

                               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ratione laboriosam quibusdam libero esse, cumque aperiam temporibus nesciunt maxime facere illum id quos eos aliquid dolorem qui ad deserunt natus.</p>
                               <h5>Price:</h5>
                               <table class="table table-borderless small">
                                <tr>
                                 <td><a href="#"  class="btn btn-sm btn-warning">Modify</a></td>
                                 <td><a href="#" class="btn btn-sm btn-danger" onclick="confirm('Are you sure you want to delete \' ....\'?');">Delete</a></td>
                             
                                </tr>
                                </table>

                           </div>
                       </div> 
                    </a>
                    
                        <a href="#" class="list-group-item">
                           <div class="row">
                               <div class="col-lg-3 col-md-3">
                                   <img src="https://source.unsplash.com/random/600x600" alt="" class="img-fluid rounded">
                               </div>
                               <div class="col-lg-9 col-md-9">
                                   <h3>Item Title</h3>
                                   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ratione laboriosam quibusdam libero esse, cumque aperiam temporibus nesciunt maxime facere illum id quos eos aliquid dolorem qui ad deserunt natus.</p>
                                   <h5>Price:</h5>
                                   <table class="table table-borderless small">
                                    <tr>
                                     <td><a href="#"  class="btn btn-sm btn-warning">Modify</a></td>
                                     <td><a href="#" class="btn btn-sm btn-danger" onclick="confirm('Are you sure you want to delete \' ....\'?');">Delete</a></td>
                                 
                                    </tr>
                                </table>

                                </div>
                           </div> 
                        </a>
                        
                            <a href="#" class="list-group-item">
                               <div class="row">
                                   <div class="col-lg-3 col-md-3">
                                       <img src="https://source.unsplash.com/random/600x600" alt="" class="img-fluid rounded">
                                   </div>
                                   <div class="col-lg-9 col-md-9">
                                       <h3>Item Title</h3>
                                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ratione laboriosam quibusdam libero esse, cumque aperiam temporibus nesciunt maxime facere illum id quos eos aliquid dolorem qui ad deserunt natus.</p>
                                       <h5>Price:</h5>
                                       <table class="table table-borderless small">
                                           <tr>
                                            <td><a href="#"  class="btn btn-sm btn-warning">Modify</a></td>
                                            <td><a href="#" class="btn btn-sm btn-danger" onclick="confirm('Are you sure you want to delete \' ....\'?');">Delete</a></td>
                                        
                                           </tr>
                                       </table>

                                   </div>
                               </div> 
                            </a>
                </div> 
            </div> 
        </div> 
    </div>   
      <!-- dashboard contents -->
  
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="items.html" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="item1.html">1</a></li>
          <li class="page-item"><a class="page-link" href="item2.html">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="item3.html" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
     <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>