<?php

session_start();
 
// Setting internal encoding for string functions
mb_internal_encoding("UTF-8");

// Callback for autoloading controllers and models
function autoloadFunction($class)
{
	// Ends with the string "Controller" ?
    if (preg_match('/Controller$/', $class))	
        require("controllers/" . $class . ".php");
    else
        require("models/" . $class . ".php");
}

// Registers the callback
spl_autoload_register("autoloadFunction");
