<?php
$cards = array(
	'https://dl.dropboxusercontent.com/u/227546/club86/js2/images/r_plus.png',
	'https://dl.dropboxusercontent.com/u/227546/club86/js2/images/r.png',
	'https://dl.dropboxusercontent.com/u/227546/club86/js2/images/n_plus.png',
	'https://dl.dropboxusercontent.com/u/227546/club86/js2/images/n.png',
);

$index = rand(0, 3);
$ret = array(
	'image' => $cards[$index]
);
header('Content-Type: application/json');
echo json_encode($ret);