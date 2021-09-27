<?php
require(ROOT . "model/Model.php");


function index()
{
	$connection = checkConnection();
    render('full/index', ['connection' => $connection]);
}