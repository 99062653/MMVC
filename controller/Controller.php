<?php
require(ROOT . "model/Model.php");


function index()
{
	$connection = checkConnection();
    render('full/index', ['connection' => $connection]);
}

function paarden() 
{
    $connection = checkConnection();
    render('full/paardenoverzicht', ['connection' => $connection]);
}