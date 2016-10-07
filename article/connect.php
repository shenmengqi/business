<?php 
require_once('config.php');
if(!($con=mysqli_connect(HOST,USERNAME,PASSWORD))){
    echo mysqli_error();
}
if(!mysqli_select_db($con,"t1")){
    echo mysqli_error();
}
?>