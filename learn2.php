<?php

$data = file_get_contents('test.json');
$student = json_decode($data);

echo $data;

?>