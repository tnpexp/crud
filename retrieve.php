<?php
	require_once 'db_config.php';
	
	$sql = "SELECT * FROM members";
	$result = $conn->query($sql);
	//var_dumb($result);
	$output = [];
	while($row = mysql_fetch_assoc($result)){
		//var_dump($row);
		//echo $row['id'] . " : " . $row['fname'] . " : " .$row['lname'] . " : " . $row['contact'] . "<br>";
		$output['data'][]=array($row['id'],$row['fname'],$row['lname'],$row['contact']);
	}
	//echo "<br>";
	//var_dumb($data);
	//echo json_encode($output);
	$conn->close();
?>