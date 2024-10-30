<?php



$data = ["Ardi", "Budi", "Coryl", "Dandy", "Eka", "Fadhil"];
$tambahData = strtolower(readline("Apakah mau menambah nama? ya/tidak: "));

if($tambahData == "ya"){
    $namaBaru = strtolower(readline("Masukan nama baru: "));

    $hasilTambah = tambahData($data, $namaBaru);
}

function tambahData(&$data, $namaBaru){
    $namaBaru = strtolower($namaBaru);
    if (!in_array($namaBaru, $data)) { 
        $data[] = $namaBaru;
        return "Nama $namaBaru berhasil ditambahkan.";
    } else {
        return "Buah $namaBaru sudah ada dalam daftar.";
    }
}


$keyword = strtolower(readline("Masukan nama yang ingin dicari: "));
$ketemu = false;

foreach ($data as $value) {
    if (strtolower($value) === strtolower($keyword)) {
        $ketemu = true;
        break;
    }
}

if ($ketemu) {
    echo "Ketemu <br>";
} else {
    echo "Tidak Ketemu <br>";
}

print_r($data)
?>









