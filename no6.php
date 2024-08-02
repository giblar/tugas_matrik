<?php

$nilai_tertinggi = 0;
$jumlah_nilai = 0;


for ($i = 0; $i < 10; $i++) {
    $nilai = (int)readline("Masukkan nilai ujian siswa ke-" . ($i + 1) . ": ");

   
    if ($nilai > $nilai_tertinggi) {
        $nilai_tertinggi = $nilai;
        $jumlah_nilai = 1; 
    } elseif ($nilai == $nilai_tertinggi) {
        $jumlah_nilai++; 
    }
}


echo "Nilai tertinggi adalah: $nilai_tertinggi\n";
echo "julah nilai tertinggi ada : $jumlah_nilai\n";
?>
