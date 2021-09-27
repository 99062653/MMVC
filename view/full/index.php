<?php 
	if($data['connection']){
		echo('<h1>WELKOM</h1>');
		echo('<a href="paardenoverzicht.php" target="_blank">PAARDEN</a> <a href="klantenoverzicht.php" target="_blank">KLANTEN</a>');

	}else {
	echo('ERROR LOADING FILE');
}
