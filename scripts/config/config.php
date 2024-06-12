<?php
//==================DB Connection Parameters=============================================================

    $server = 'bitter-violet.dirty-brick-production.svc.pipeops.internal';
	$username = 'pipeops_user';
	$password = '3933457f208a36f8ddaf683c5';
	$database = 'pipeops';

	$link = mysqli_connect($server, $username, $password, $database);
	
	$LivePaymentApi = 'FLWPUBK-672fe31514b1203bbc69a3f8b2df2fe0-X';
	$TestPaymentApi = 'FLWPUBK_TEST-39273a4cb9c3b96a4307ffea31898b95-X';

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$connection = new PDO( 'mysql:host=bitter-violet.dirty-brick-production.svc.pipeops.internal;dbname=pipeops', $username, $password );
	


?>
