<?php

// Input untuk menambah buah baru
$tambahBuahBaru = strtolower(readline("Apakah Anda ingin menambah buah baru? (ya/tidak): "));

if ($tambahBuahBaru === 'ya') {
    $namaBuahBaru = strtolower(readline("Masukkan nama buah baru: "));
    $hargaBuahBaru = intval(readline("Masukkan harga buah baru: "));
    
    $hasilTambah = tambahBuah($daftarHarga, $namaBuahBaru, $hargaBuahBaru);
    echo $hasilTambah . "\n";
}


// Fungsi untuk menambah buah ke dalam daftar harga
function tambahBuah(&$daftarHarga, $namaBuah, $harga) {
    $namaBuah = strtolower($namaBuah);
    if (!isset($daftarHarga[$namaBuah])) {
        $daftarHarga[$namaBuah] = $harga;
        return "Buah $namaBuah berhasil ditambahkan dengan harga Rp$harga.";
    } else {
        return "Buah $namaBuah sudah ada dalam daftar.";
    }
}

// Daftar harga buah
$daftarHarga = [
    'apel' => 10000,
    'pisang' => 5000,
    'mangga' => 15000
];

// Input dari pengguna
$input = strtolower(readline("Masukan nama buah: "));

// Fungsi untuk mencari buah dalam daftar harga
function buah($input, $daftarHarga) {
    foreach($daftarHarga as $buah => $harga) {
        if($input == $buah) {
            return "Nama Buah: ".$buah."\n";
        }
    }
    return false;
}

// Mencari buah yang dimasukkan
$buahditemukan = buah($input, $daftarHarga);

// Mengecek apakah buah ditemukan
if($buahditemukan !== false) {
    echo $buahditemukan;
    $harga = $daftarHarga[$input];
    $jumlah = readline('Input Jumlah: ');
    echo $harga." per item \n";
    $total = $harga * $jumlah;
    echo "Harga Total: Rp$total \n";
} else {
    echo "Buah tidak ditemukan.\n";
}

print_r($daftarHarga)
?>
