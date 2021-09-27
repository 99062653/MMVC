<?php 
	if($data['connection']){
		echo('<h1>WELKOM</h1>');
		echo('<a href="pages/paardenoverzicht.php" target="_blank">PAARDEN</a> <a href="pages/klantenoverzicht.php" target="_blank">KLANTEN</a>');
	}else{
		echo '<h1>DB CONNECTION FAILED!</h1>';
	}