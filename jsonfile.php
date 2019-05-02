<?php
header('Content-Type: application/json');

$data = file_get_contents("poll_result.txt");
$array=explode("||",$data);
$send=[
	'yes' => $array[0],
	'no' => $array[1],
];
echo json_encode($send);
//echo json_encode($data);
?>