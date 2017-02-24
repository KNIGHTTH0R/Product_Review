<?php

if(isset($_POST['submit'])){

//fecting data from addproduct3.html page

$product_name = $_POST['prod_name'];
$product_type = $_POST['prod_type'];
$brand_type = $_POST['brand_name'];
$product_image = $_FILES['prod_image']['name'];
$product_desc = $_POST['prod_desc'];
$product_cost = $_POST['prod_cost'];
//$image = $_FILES['filename']['name']

//connection
$connection = mysqli_connect("localhost","root","","intern_review_system");

//check connection 
if(!$connection){
	die("connection failed..!" . mysqli_error($connection));
}

// sql insert query
$sql = "INSERT INTO all_product VALUES ";
$sql .= "('','$product_name','$product_type','$brand_type','$product_image','$product_desc','$product_cost')";

$result = mysqli_query($connection,$sql);

if(!$result){
	die("Insert query failed....!" . mysqli_error($connection));
}

//move_uploaded_file(filename, destination)

move_uploaded_file($_FILES['prod_image']['tmp_name'], "product_image/".$_FILES['prod_image']['name']);

//move_upladed_files($_FILES['filename']['tmp_name'], (destination)"foldername/".$FILES['filename']['name']);
header("location:addproduct3.html");


}

?>