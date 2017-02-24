<?php
include("header5.html");

//connection
$connection = mysqli_connect("localhost","root","","intern_review_system");

//check connection 
if(!$connection){
	die("connection failed..!" . mysqli_error($connection));
}

//fetching data from via url 
$product_id = $_GET['pid'];


$sql = "SELECT * FROM all_product WHERE p_id = '$product_id' ";

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

// button div
	// session_start();
	echo "<div style='width:100px; height:100px; margin-left:20px'>";
    echo "<form action='add_review_check8.php' method='post'>";
    echo "<input type='hidden'  name='product_details' value='".$product_id."'  >" ;
    echo "<button> Add review </button>" ;
    echo "</form>";
    echo "</div>" ;









}


















?>