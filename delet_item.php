<?php

require 'connec.php';
$id = $_GET['i_id'];
$sql = "DELETE FROM  items WHERE i_id='$id'";
if (mysqli_query($connec,$sql)){
    header('Location :show_items.php');
}else{
    echo "error";
}
