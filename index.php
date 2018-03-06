<?php
mb_internal_encoding("UTF-8")
function autoloadFunction($class)
{
        // Ends with a string "Controller"?
    if (preg_match('/Controller$/', $class))
        require("controllers/" . $class . ".php");
    else
        require("models/" . $class . ".php");
}
