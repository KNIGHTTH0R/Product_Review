<?php

session_start();
$connection = mysqli_connect("localhost","root","","intern_review_system");

//check connection 
	if(!$connection){
		die("connection failed..!" . mysqli_error($connection));
	}

//connection
if(isset($_SESSION['username'])){

$product_details_id = $_POST['product_details'];

$sql = "SELECT * FROM all_product WHERE p_id = '$product_details_id' ";

$result = mysqli_query($connection,$sql);

if(!$result){
	die("Select query failed...! " . mysqli_error($connection));
}

while($row = mysqli_fetch_assoc($result)){
// display div 	
	echo "<div style='width:300px; height:300px; margin:20px; border:1px solid black'>";
	echo "<img style='width:150px; height:160px;' src='product_image/".$row['productImage']."'>";
	echo "<p> <b>Product Name:</b>  ". $row['productName']. " </p>";
	echo "<p> <b>Product describition:</b>  ". $row['productDescribtion']. " </p>";
	echo "<p> <b>Product cost: </b> ". $row['productCost']. " </p>";
	echo "</div>";

//echo $personName;
echo "<form method='post' action='insert_review11.php'>";
echo "<input type='hidden' name='product_id' value='".$row['p_id']."'>";
echo "<textarea name='user_review' row='10' col='10'> </textarea> <br>";
echo "<input type='submit' value='submit review'>";
echo "</form>";
}



}
else {
	header("location:userLogin_page9.php");
}








?>