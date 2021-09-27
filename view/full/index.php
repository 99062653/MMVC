<?php 
	if($data['connection']){
		require('pages/home.php');
	}else{
		echo '<h1>DB CONNECTION FAILED!</h1>';
	}