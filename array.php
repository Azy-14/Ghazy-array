<?php 

$data_siswa = [
    1=>[
    "nama" => "fatur",
    "nis" => "00123",
    "usia" => "16",
    "hobi" => "tidur"
    ],
    2=>[
    "nama" => "Ghazy",
    "nis" => "00124",
    "usia" => "17",
    "hobi" => "Gaming"
    ],
    3=>[
    "nama" => "Dhanu",
    "nis" => "00125",
    "usia" => "16",
    "hobi" => "Main Basket",
    ]
];


echo "Data siswa:" , "<br/>";
$nomor = 1;
foreach($data_siswa as $data){
echo "Data siswa ke $nomor<br/>";
    foreach($data as $siswa => $value){
    echo "$siswa : $value <br/>";
    }
    echo "<hr>";
    $nomor++;
}
?>