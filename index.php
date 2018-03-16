<?php
session_start();
if(!isset($_SESSION['Auth'])){
    $_SESSION['Auth'] = false;
}
// Setting internal encoding for string functions
mb_internal_encoding("UTF-8");
function autoloadFunction($class)
{
	// Start with the string "Controller" ?
    if (preg_match('/^Controleur/', $class))	
        require("controllers/" . $class . ".php");
    else
        require("model/" . $class . ".php");
}

// Registers the callback
spl_autoload_register("autoloadFunction");

// Connects to the database Db::connect("localhost", "root", "", "blogtest");

// Creating the router and processing parameters from the user's URL
require 'controllers/controleurRouteur.php';
$routeur = new ControleurRouteur();
$routeur->routerRequete();
