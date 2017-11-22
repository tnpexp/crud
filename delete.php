<?php

	require_once 'db_config.php';
	$id= $_POST['mid'];
	$sql = "DELETE FROM members WHERE id = $id";
	
	$result = $conn->query($sql);
	$conn->close();





?>