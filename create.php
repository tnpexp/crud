<?php
	//echo $_POST['id']."<br>";
	//echo $_POST['fname']."<br>";
	//echo $_POST['lname']."<br>";
	//echo $POST['contact']."<br>";
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$contact = $_POST['contact'];
	
	$sql = " INSERT INTO members(id,fname,lname,contact) VALUES($id,'$fname','$lname','$contact')";
	//echo $sql;
	require_once 'db_config.php';
	$result = $conn->query($sql);
	if($result==TRUE){
		header("Location: http://localhost/crudexample");
	}else{
		die('Cannot Insert Into Database');
	}		
	$conn->close();
	
?>