<?php

$namaBuah = strtolower(readline("Masukan nama buah: "));

function tambahBuah(&$daftarHarga, $namaBuah, $harga) {
    $namaBuah = strtolower($namaBuah);
    if (!isset($daftarHarga[$namaBuah])) {
        $daftarHarga[$namaBuah] = $harga;
        return "Buah $namaBuah berhasil ditambahkan dengan harga Rp$harga.";
    } else {
        return "Buah $namaBuah sudah ada dalam daftar.";
    }
}

// Contoh penggunaan:
// $hasil = tambahBuah($daftarHarga, 'Jeruk', 12000);
// echo $hasil;

// Daftar harga buah
$daftarHarga = [
    'apel' => 10000,
    'pisang' => 5000,
    'mangga' => 15000
];
$input = strtolower(readline("Masukan nama buah: "));

function buah($input, $daftarHarga){
    foreach($daftarHarga as $buah => $harga){
    if($input == $buah){
        return "Nama Buah: ".$buah."\n";
        }
    }
    return false;
}

$buahditemukan = buah($input, $daftarHarga);
echo $buahditemukan;

if($buahditemukan == true){
    $harga = $daftarHarga[$input];
    $jumlah = readline('Input Jumlah: ');
    echo $harga." per item \n";
    $total = $harga * $jumlah;
    echo "Harga Total: $total \n";
} else {
    echo "Buah tidak di temukan";
}

?>

