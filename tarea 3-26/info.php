<?php

if ( isset($_POST) ) {
	$info = array(
		"data" => array(
			"edad" => 2020-$_POST['edad']
			)
		
	);
	echo json_encode($info);
}

?>