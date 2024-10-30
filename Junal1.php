<?php

// Tampilkan menu
echo "Pilih operasi:<br>";
echo "1. Hitung rata-rata<br>";
echo "2. Hitung penjumlahan<br>";
echo "3. Hitung keduanya<br>";

$angka1 = 10;
$angka2 = 20;

$jumlah = $angka1 + $angka2;
$rataRata = $jumlah/2;

?>


<?php

$pilihan = 3   ;

// Tampilkan hasil
if($angka1 >= 0 && $angka2 >=0 && $angka1 < 10 && $angka2 <10) {
    if($pilihan == 1){
        echo "Rata-rata: " . $rataRata."<br>";
    }elseif ($pilihan == 2) {
        echo "Penjumlahan: " . $jumlah. "<br>";
    }elseif ($pilihan == 3){
        echo "Rata-rata: " . $rataRata . "<br>";
        echo "Penjumlahan: " . $jumlah . "<br>";
    }else{
        echo "Keluar";
    }      
}else{
    echo "Angka tidak valid";
}

?>

.grid-container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Positioning Example</title>
  <style>
    .red-box {
      width: 100px;
      height: 100px;
      background-color: red;
      position: relative;
      top: 0;
      left: 0;
    }
    .blue-box {
      width: 100px;
      height: 100px;
      background-color: blue;
      position: absolute;
      bottom: 0;
      right: 0;
    }
  </style>
</head>
<body>
  <div class="red-box"></div>
  <div class="blue-box"></div>
</body>
</html>
