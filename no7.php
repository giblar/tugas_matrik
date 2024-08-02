<?php
// input giblar tampan anak baik
$jumlahSiswa = (int)readline("Masukkan jumlah siswa: ");

// dimpan juara nya
$juaraKelas = [];

// Loopingssssssssssss
for ($i = 0; $i < $jumlahSiswa; $i++) {
    $nama = readline("Masukkan Nama Siswa: ");

    $nilaiMTK = (int)readline("Masukkan Nilai MTK: ");
    $nilaiINDO = (int)readline("Masukkan Nilai INDO: ");
    $nilaiINGG = (int)readline("Masukkan Nilai INGG: ");
    $nilaiDPK = (int)readline("Masukkan Nilai DPK: ");
    $nilaiAgama = (int)readline("Masukkan Nilai Agama: ");

    $kehadiran = (int)readline("Masukkan Kehadiran (dalam persen): ");

    // rata rata
    $totalNilai = $nilaiMTK + $nilaiINDO + $nilaiINGG + $nilaiDPK + $nilaiAgama;
    $rataRataNilai = $totalNilai / 5;

    // jfdkjsfkj
    if ($rataRataNilai >= 475 && $kehadiran === 100) {
        $juaraKelas[] = $nama;
    }
}


if (!empty($juaraKelas)) {
    echo "Juara Kelas:\n";
    foreach ($juaraKelas as $juara) {
        echo $juara . "\n";
    }
} else {
    echo "Tidak ada siswa yang memenuhi syarat.\n";
}
?>
