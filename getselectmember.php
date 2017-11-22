<?php
	require_once 'db_config.php';
	$id=$_POST['mid'];
	$sql = "SELECT * FROM member WHERE id = $id";
	
	$query = $conn -> query($sql);
	$result = $query -> fetch_assoc();
	
	echo json_encode($result);
	
	$coon -> close();
?>