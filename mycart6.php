<?php
include("header5.html");

//connection
$connection = mysqli_connect("localhost","root","","intern_review_system");

//check connection 
if(!$connection){
	die("connection failed..!" . mysqli_error($connection));
}

$sql = " SELECT * FROM all_product " ;

$result = mysqli_query($connection,$sql) ;

if(!$result){
	die("query failed...!" . mysqli_error($connection));
}



while($row = mysqli_fetch_assoc($result)) {
echo "<div style='width:240px; height:240px; float:left; border:1px solid black;margin:2px'>" ;
   
echo "<img style='width:180px; height:160px' src='product_image/". $row['productImage'] . " '>" ;
      
echo "<p> <a href='product_review7.php?pid=".$row['p_id']."'> Product Name: " .$row['productName']. " </a></p>" ;

echo "</div>" ;
 
}

















?>