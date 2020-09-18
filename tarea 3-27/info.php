<?php

if ( isset($_POST) ) {
	$info = array(
		"data" => array(
			'primer_numero' => $_POST['primer_numero'],
			'segundoa_numero' => $_POST['segundo_numero'],
			"resultado" => $_POST['primer_numero']+$_POST['segundo_numero']
			)
		
	);
	echo json_encode($info);
}

?>