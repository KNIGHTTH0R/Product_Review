<?php

session_start();
$connection = mysqli_connect("localhost","root","","intern_review_system");

//check connection 
	if(!$connection){
		die("connection failed..!" . mysqli_error($connection));
	}
$personName = $_SESSION['username'];
$public_review = $_POST['user_review'];
$product_details_id = $_POST['product_id'];	
$sql_in = "INSERT INTO review VALUES('','$product_details_id','$personName','$public_review',now())" ;
$result_in = mysqli_query($connection,$sql_in);
if(!$result_in){
        die("error 123.,,,". mysqli_error($connection)) ;
    } 


$sql = "SELECT * FROM all_product a, review c WHERE a.p_id = c.product_id ";
$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result) > 0){

$row = mysqli_fetch_assoc($result);

	echo "<div style='width:300px; height:300px; margin:20px; border:1px solid black'>";
	echo "<img style='width:150px; height:160px;' src='product_image/".$row['productImage']."'>";
	echo "<p> <b>Product Name:</b>  ". $row['productName']. " </p>";
	echo "<p> <b>Product describition:</b>  ". $row['productDescribtion']. " </p>";
	echo "<p> <b>Product cost: </b> ". $row['productCost']. " </p>";
	echo "</div>";
	
	echo "<div style='border:1px solid black; width:200px height:200px'>";
	while($row = mysqli_fetch_assoc($result)){
	echo "<p><b>". $row['username']. "</b> review is:--> " . $row['product_review']." </p>";
		}
	echo"</div>";

}
?>