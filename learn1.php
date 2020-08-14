<?php

// $mahasiswa = [
//     [
//         "nama" => "Aditiya Permana",
//         "npm" => "12345678",
//         "email" => "aditiyaprmn00@gmail.com"
//     ],
//     [
//         "nama" => "Maulana",
//         "npm" => "876543321",
//         "email" => "maulana@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=crud-ci3', 'root');

$db = $dbh->prepare('SELECT * FROM student');
// run query
$db->execute();

$student = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>