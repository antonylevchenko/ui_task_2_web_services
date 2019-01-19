<?php 
	
$request = strtolower($_SERVER["REQUEST_URI"]);

if ($request) {
    echo "Request has been recieved!";
}