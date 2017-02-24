<?php

if(isset($_POST['login'])){
	$person_name = $_POST['username'];
	$person_password = $_POST['password'];
	echo $person_name ;
	//connection
	$connection = mysqli_connect("localhost","root","","intern_review_system");

//check connection 
	if(!$connection){
		die("connection failed..!" . mysqli_error($connection));
	}

	$sql = "SELECT * FROM register_user WHERE username = '$person_name' AND password ='$person_password'";
	$result = mysqli_query($connection,$sql);

	if(!$result){
		die("Select query failed...!!" . mysqli_error($connection));
	}

	session_start();

	if(mysqli_num_rows($result) > 0){
		//imp line below
		$_SESSION['username'] = $person_name;
		header("location:mycart6.php");
	}else {
		header("location:userLogin_page9.php");
	}
}
?>