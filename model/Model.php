<?php
	function checkConnection(){
	    try{ 
    		$conn = openDatabaseConnection(); 
	       	$stmt = $conn->prepare("SHOW TABLES");
       		$stmt->execute();
       		$stmt->fetchAll();
       		
	    }catch(Exception $e){
			return false;
	    }

	    return true;
	}

	function getPaarden(){
    	$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("SELECT * FROM paarden");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	}