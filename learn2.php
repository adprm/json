<?php

$data = file_get_contents('test.json');

// array associatif
// mengambil data json menjadi objek array -> ($data, true);
$student = json_decode($data, true);
var_dump($student);

echo $student[1]["dosen"]["dosen2"];
echo $student[0]['nama'];

?>