<?php

//Superglobals are variables that are accessible from any script or file.
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

//die(); kills everything after it.
die();

require "views/index.view.php";