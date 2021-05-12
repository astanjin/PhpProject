<?php

$msg ="";
$css_class ="";
$connec = mysqli_connect ('localhost:3307','root','','demo');

if (isset($_POST['save_item'])){
    echo "<pre>",print_r($_FILES['i_image']['name']),"</pre>";

    $imageName = time().'_'.$_FILES['i_image']['name'];
    $price = $_POST['i_price'];
    $category =$_POST['i_category'];
    $description =$_POST['i_description'];
    $title = $_POST['i_title'];
    $c_id = $_POST['c_id'];

    $target = 'images/'.$imageName;

   if( move_uploaded_file($_FILES['i_image']['tmp_name'],$target)){
    $sql1 = "INSERT INTO items (i_title,i_description,i_category,i_price,i_image,c_id) VALUES
     ('$title','$description','$category','$price','$imageName',$c_id)";

     if (mysqli_query($connec,$sql1)){
        
       $msg = "Image uploaded and database works!";
       $css_class ="alert-success"; 
     }else{
        $msg = "Database doesnot work!";
        $css_class = "alert-danger";
     }
       
   }else{
       $msg = "Faialed to upload!";
       $css_class = "alert-danger";
   }
}