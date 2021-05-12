<?php

$msg ="";
$css_class ="";
$connec = mysqli_connect ('localhost:3307','root','','demo');

if (isset($_POST['save_cat'])){
    
    $c_description =$_POST['c_description'];
    $c_name = $_POST['c_name'];

    $sql1 = "INSERT INTO categories (c_name,c_description) VALUES
     ('$c_name','$c_description')";

     if (mysqli_query($connec,$sql1)){
        
       $msg = "Category added and database works!";
       $css_class ="alert-success"; 
     }else{
        $msg = "Database doesnot work!";
        $css_class = "alert-danger";
     }
       
   
}