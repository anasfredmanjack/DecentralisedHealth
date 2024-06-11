<?php
//==================DB Connection Parameters=============================================================

    $server = 'db.yottabit.consulting';
	$username = 'likyta_admin';
	$password = '7vP4f#D#xsbeDR37';
	$database = 'likyta_db';

	$link = mysqli_connect($server, $username, $password, $database);
	
	$LivePaymentApi = 'FLWPUBK-672fe31514b1203bbc69a3f8b2df2fe0-X';
	$TestPaymentApi = 'FLWPUBK_TEST-39273a4cb9c3b96a4307ffea31898b95-X';

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$connection = new PDO( 'mysql:host=db.yottabit.consulting;dbname=likyta_db', $username, $password );
	


?>
