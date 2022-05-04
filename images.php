<?php 

	header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
	header("Access-Control-Allow-Origin: *");


	$connect = mysqli_connect('localhost','tittoh','test1234','learn_database');

	$results = $connect->query("SELECT * FROM pictures ORDER BY id");

	$list = array();
	if ($results) {
		while ($row = mysqli_fetch_assoc($results)) {
			$list[] = $row;
		}
		echo json_encode($list);
	}

?>