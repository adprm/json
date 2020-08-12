<?php

$mahasiswa = [
    [
        "nama" => "Aditiya Permana",
        "npm" => "12345678",
        "email" => "aditiyaprmn00@gmail.com"
    ],
    [
        "nama" => "Maulana",
        "npm" => "876543321",
        "email" => "maulana@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;

?>