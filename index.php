<?php

$uri = explode("/", trim($_SERVER["REQUEST_URI"], "/"));
$uri = end($uri);
try {
	$date = new DateTime($uri);
} catch(Exception $e) {
	echo json_encode(["unix" => null, "natural" => null]);
	die();
}
echo json_encode(["unix" => $date->getTimestamp(), "natural" => $date->format("F d, Y")]);